<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    private function isAdmin(Request $request){
        return $request->user && $request->user->isAdmin();
    }

    public function admin(Request $request){
        if($this->isAdmin($request))
        {
            $orders = DB::table('products_in_order')
                ->leftJoin('products', 'products.id', 'products_in_order.product')
                ->leftJoin('orders', 'orders.id', 'products_in_order.order')
                ->leftJoin('order_statuses', 'order_statuses.id', 'orders.status')
                ->leftJoin('users', 'users.id', 'orders.user')
                ->select('orders.id as id', 'order_statuses.name as status', 'order_statuses.title as statusTitle',
                    DB::raw("CONCAT_WS(' ', users.surname, users.name, users.patronymic) as user"),
                    'products_in_order.count as count', 'products.title as product', 'products.price as price',
                    'orders.reject_reason as reason', 'orders.created_at as created_at', 'orders.updated_at as updated_at')
                ->orderByDesc('orders.created_at')
                ->get();
            
            $groupedOrders = [];
            foreach($orders as $order){
                $groupedOrders[$order->id][] = $order;
            }

            $products = DB::table('products')->get();
            $categories = DB::table('categories')->orderBy('title')->get();
            
            return view('admin', [
                'orders' => $groupedOrders,
                'categories' => $categories,
            ]);
        }

        return redirect(route('notFoundPage'));
    }

    public function changeOrderStatus(Request $request){
        if($this->isAdmin($request))
        {
            $orderId = $request->id;
            $orderStatus = $request->status;
            $orderReason = $request->rejectReason;
            
            if($orderStatus == 'rejected'){
                $productsInOrder = DB::table('products_in_order')
                    ->where('order', $orderId)->get();
                
                foreach($productsInOrder as $item){
                    $product = DB::table('products')->where('id', $item->product)
                        ->first();
                    DB::table('products')->where('id', $product->id)
                        ->update([
                            'count' => $product->count + $item->count,
                        ]);
                }
            }

            DB::table('orders')->where('id', $orderId)->update([
                'status' => DB::table('order_statuses')->where('name', $orderStatus)->value('id'),
                'reject_reason' => $orderReason,
            ]);

            return redirect(url()->previous());
        }

        return redirect(route('notFoundPage'));
    }

    public function addCategory(Request $request){
        if($this->isAdmin($request)){
            $data = $request->all();

            if(!DB::table('categories')->where('name', $data['categoryName'])->exists()){
                DB::table('categories')->insert([
                    'name' => $data['categoryName'],
                    'title' => $data['categoryTitle']
                ]);

                return redirect(url()->previous().'#categories')
                    ->with(['msgForCategory' => 'Категория добавлена']);
            }

            return redirect(url()->previous().'#categories')
                    ->with(['msgForCategory' => 'Категория с таким именем уже существует']);
        }
        
        return redirect(route('notFoundPage'));
    }

    public function deleteCategory(Request $request){
        if($this->isAdmin($request)){
            if($request->categoryId){
                DB::table('categories')->where('id', $request->categoryId)->delete();
                return redirect(route('admin').'#orders');
            }
        }
        dd($request);
        return redirect(route('notFoundPage'));
    }
}
