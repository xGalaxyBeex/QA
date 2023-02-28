@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Запись дома</h3>
                    </div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('houses.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="name">Название</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="price_per_sqm">Цена</label>
                                <input type="number" name="price_per_sqm" id="price_per_sqm" class="form-control" value="{{ old('price_per_sqm') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="year_built">Дата постройки</label>
                                <input type="date" name="year_built" id="year_built" class="form-control" value="{{ old('price') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="price">Колл. квартир</label>
                                <input type="number" name="floors_count" id="price" class="form-control" value="{{ old('price') }}" required>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Готово</button>
                                <a href="{{ route('houses.index') }}" class="btn btn-secondary">Отмена</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
