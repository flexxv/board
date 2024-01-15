@extends('layouts.app')

@section('content')
<div class="container mt-5">
        <h2 class="mb-4">Добавить объявление</h2>

        <form action="{{ route('store_by_user') }}" method="post">
            @csrf
            <!-- Название -->
            <div class="form-group mb-4">
                <label for="inputTitle">Название</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Введите название" required>
                @error('title')
                <p class="text-danger">Ошибка</p>
                @enderror
            </div>

            <!-- Адрес -->
            <div class="form-group mb-4">
                <label for="inputAddress">Адрес</label>
                <input type="text" name="address" class="form-control" id="address" placeholder="Введите адрес" required>
            </div>

            <!-- Описание -->
            <div class="form-group mb-4">
                <label for="inputDescription">Описание</label>
                <textarea class="form-control" name="desc" id="desc" rows="3" placeholder="Введите описание" required></textarea>
            </div>

            <!-- Цена -->
            <div class="form-group mb-4">
                <label for="inputPrice">Цена</label>
                <input type="text" class="form-control" name="price" id="price" placeholder="Введите цену" required>
            </div>

            <div class="form-group mb-4">
                <label for="inputPhone">Номер телефона</label>
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Введите номер телефона" required>
            </div>

            <!-- Изображение -->
            <div class="form-group mb-4">
                <label for="inputImage">Изображение</label>
                <input type="text" class="form-control" id="image" name="image" placeholder="Введите URL изображения" required>
                
            </div>

            <div class="form-group">
                
                <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{ auth()->user()->id }}" required>
                
            </div>

            <div class="form-group mb-4">
                <label for="selectCategory">Категория</label>
                <select class="form-select" id="selectCategory" required name="category_id">

                    <option value="" selected disabled>Выберите категорию</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Кнопка отправки формы -->
            <button type="submit" class="btn btn-primary">Добавить</button>
        </form>
    </div>
@endsection