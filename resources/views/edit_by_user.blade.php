@extends('layouts.app')

@section('content')
<div class="container mt-5">
        <h2 class="mb-4">Редактировать объявление</h2>

        <form action="{{ route('update_by_user', $bulletin->id) }}" method="post">
            @csrf
            @method('patch')
            <!-- Название -->
            <div class="form-group">
                <label for="inputTitle">Название</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Введите название" required value="{{$bulletin->title}}">
            </div>

            <!-- Адрес -->
            <div class="form-group">
                <label for="inputAddress">Адрес</label>
                <input type="text" name="address" class="form-control" id="address" placeholder="Введите адрес" required value="{{$bulletin->address}}">
            </div>

            <!-- Описание -->
            <div class="form-group">
                <label for="inputDescription">Описание</label>
                <textarea class="form-control" name="desc" id="desc" rows="3" placeholder="Введите описание" required>{{$bulletin->desc}}</textarea>
            </div>

            <!-- Цена -->
            <div class="form-group">
                <label for="inputPrice">Цена</label>
                <input type="text" class="form-control" name="price" id="price" placeholder="Введите цену" required value="{{$bulletin->price}}">
            </div>

            <div class="form-group">
                <label for="inputPhone">Номер телефона</label>
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Введите номер телефона" required value="{{$bulletin->phone}}">
            </div>

            <!-- Изображение -->
            <div class="form-group">
                <label for="inputImage">Изображение</label>
                <input type="text" class="form-control" id="image" name="image" placeholder="Введите URL изображения" required value="{{$bulletin->image}}">
            </div>

            <div class="form-group">
                <label for="selectCategory">Категория</label>
                <select class="form-select" id="selectCategory" required name="category_id">

                    <option value="" selected disabled>Выберите категорию</option>
                    @foreach($categories as $category)
                        <option 
                        {{ $category->id === $bulletin->category_id ? ' selected' : ''}}
                        value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Кнопка отправки формы -->
            <button type="submit" class="btn btn-primary">Обновить</button>
        </form>
    </div>
@endsection