<div class="tab-pane fade" id="categories" role="tabpanel" aria-labelledby="categories-tab">
    <div class="row mb-2">
        <div class="col-md-4 col-lg-3 col-xl-2 offset-md-8 offset-lg-9 offset-xl-10">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#addCategoryModal">
                Добавить категорию
            </button>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addCategoryModal">Добавление категории</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addCategoryForm" action="{{ route('addCategory') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="categoryName" class="form-label">Название категории</label>
                            <input type="text" class="form-control" id="categoryName" name="categoryName">
                        </div>
                        <div class="mb-3">
                            <label for="categoryTitle" class="form-label">Видимое название категории</label>
                            <input type="text" class="form-control" id="categoryTitle" name="categoryTitle">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
                    <a class="btn btn-primary" href="{{ route('addCategory') }}" role="button"
                    onclick="event.preventDefault(); document.getElementById('addCategoryForm').submit();">Сохранить</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-4">
        @foreach ($categories as $category)
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $category->title }}</h5>
                    </div>
                    <a class="btn btn-danger card-footer catalog-card-bottom" href="{{ route('deleteCategory') }}" style="background-color: #dc3545" role="button"
                    onclick="event.preventDefault(); document.getElementById('delete-category-{{ $category->id }}').submit();">Удалить</a>
                </div>
                <form id="delete-category-{{ $category->id }}" action="{{ route('deleteCategory') }}" method="POST" class="d-none">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="categoryId" value="{{ $category->id }}">
                </form>
            </div>
        @endforeach
    </div>
</div>
