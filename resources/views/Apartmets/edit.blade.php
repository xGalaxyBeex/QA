@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Редактирование домов</h3>
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

                        <form action="{{ route('houses.update', $house->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name">Название</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ $house->name }}" required>
                            </div>

                            <div class="form-group">
                                <label for="price_per_sqm">Цена за квадратный метр</label>
                                <input type="number" name="price_per_sqm" id="price_per_sqm" class="form-control" value="{{ old('price_per_sqm', $house->price_per_sqm) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="year_built">Год постройки</label>
                                <input type="date" name="year_built" id="year_built" class="form-control" value="{{ old('year_built', $house->year_built) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="floors_count">Колличество квартир</label>
                                <input type="number" name="floors_count" id="floors_count" class="form-control" value="{{ $house->floors_count }}" required>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Обновить</button>
                                <a href="{{ route('houses.index') }}" class="btn btn-secondary">Отмена</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
