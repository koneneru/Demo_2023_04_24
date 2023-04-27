<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
    public function about(){
        $products = DB::table('products')->where('available', true)
            ->orderByDesc('created_at')
            ->select('name', 'title', 'image')
            ->take(5)->get();

        return view('about', [
            'products' => $products,
        ]);
    }

    public function catalog(){
        $categories = DB::table('categories')
            ->orderBy('title')
            ->select('name', 'title')
            ->get();

        $products = DB::table('products')->where('available', true)
            ->orderByDesc('created_at')
            ->select('name', 'title', 'image', 'price')
            ->get();

        return view('catalog', [
            'categories' => $categories,
            'products' => $products
        ]);
    }

    public function product(Request $request, $name){
        $product = DB::table('products')->where('available', true)
            ->where('products.name', $name)
            ->leftJoin('categories', 'products.category', 'categories.id')
            ->select('products.id as id', 'products.name as name', 'products.title as title', 'image',
                'price', 'count', 'country', 'taste', 'compound', 'description', 'categories.title as category')
            ->first();
            
        $inCart = false;
        if($request->user){
            $inCart = DB::table('carts')->where('user', $request->user->id)
                ->where('product', $product->id)->exists();
        }

        return view('product', [
            'product' => $product,
            'inCart' => $inCart,
        ]);
    }

    public function addCart(Request $request){
        if($request->user){
            $remain = DB::table('products')->where('id', $request->product)
                ->value('count');

            if($remain >= $request->count){
                DB::table('products')->where('id', $request->product)
                    ->update([
                        'count' => $remain - $request->count,
                    ]);

                $cart = DB::table('carts')->insert([
                    'user' => $request->user->id,
                    'product' => $request->product,
                    'count' => $request->count
                ]);
                return redirect(url()->previous())
                    ->with(['msgAddCart' => 'В заказе указано количество товара, превышающее допустимое']);
            }
            return redirect(url()->previous());
        }

        return redirect(route('notFoundPage'));
    }
    
    public function cart(Request $request){
        if($request->user){
            $cart = DB::table('carts')->where('user', $request->user->id)
                ->leftJoin('products', 'products.id', 'carts.product')
                ->select('carts.id as id', 'products.title as title', 'products.price as price',
                    'products.image as image', 'products.count as count')
                ->get();

            return view('cart', [
                'cart' => $cart
            ]);
        }

        return redirect(route('notFoundPage'));
    }
    
    public function orders(Request $request){
        if($request->user){
            $orders = DB::table('products_in_order')
                ->leftJoin('products', 'products.id', 'products_in_order.product')
                ->leftJoin('orders', 'orders.id', 'products_in_order.order')
                ->leftJoin('order_statuses', 'order_statuses.id', 'orders.status')
                ->where('orders.user', $request->user->id)
                ->select('orders.id as id', 'order_statuses.name as status', 'order_statuses.title as statusTitle',
                    'products_in_order.count as count', 'products.title as product', 'products.price as price',
                    'orders.reject_reason as reason', 'orders.created_at as created_at', 'orders.updated_at as updated_at')
                ->orderByDesc('orders.created_at')
                ->get();
            
            $groupedOrders = [];
            foreach($orders as $order){
                $groupedOrders[$order->id][] = $order;
            }

            return view('orders', [
                'orders' => $groupedOrders,
            ]);
        }

        return redirect(route('notFoundPage'));
    }
    
    public function addOrder(Request $request){
        if($request->user){
            DB::table('orders')->insert([
                'user' => $request->user->id,
                'status' => DB::table('order_statuses')->where('name', 'new')->value('id'),
            ]);

            $order = DB::table('orders')->where('user', $request->user->id)
                ->orderByDesc('created_at')->first();
            $productsInCart = DB::table('carts')->where('user', $request->user->id)
                ->get();
            
            foreach($productsInCart as $product){
                DB::table('products_in_order')->insert([
                    'order' => $order->id,
                    'product' => $product->product,
                    'count' => $product->count,
                ]);
            }

            DB::table('carts')->where('user', $request->user->id)->delete();

            return redirect(route('orders'));
        }

        return redirect(route('notFoundPage'));
    }
    
    public function deleteOrder(Request $request){
        if($request->user){
            $productsInOrder = DB::table('products_in_order')
                ->where('order', $request->orderId)->get();

            foreach($productsInOrder as $productInOrder){
                DB::table('products')->where('id', $productInOrder->product)->update([
                    'count' => DB::table('products')->where('id', $productInOrder->product)
                        ->value('count') + $productInOrder->count,
                ]);
            }

            DB::table('orders')->where('id', $request->orderId)->delete();
            
            return redirect(route('orders'));
        }

        return redirect(route('notFoundPage'));
    }
    
    public function location(){
        return view('location');
    }
    
    public function notFoundPage(){
        return view('404');
    }
}
