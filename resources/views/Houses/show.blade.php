@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Подробности о домах</h3>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="id">ID</label>
                            <input type="text" name="id" id="id" class="form-control" value="{{ $house->id }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="name">Название</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $house->name }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="price_per_sqm">Цена за квадратный метр</label>
                            <input type="text" name="price_per_sqm" id="price_per_sqm" class="form-control" value="{{ $house->price_per_sqm }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="year_built">Год постройки</label>
                            <input type="text" name="year_built" id="year_built" class="form-control" value="{{ $house->year_built }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="floors_count">Колличество квартир</label>
                            <input type="text" name="floors_count" id="floors_count" class="form-control" value="{{ $house->floors_count }}" readonly>
                        </div>

                        <div class="form-group">
                            <a href="{{ route('houses.edit', $house->id) }}" class="btn btn-primary">Редактировать</a>
                            <a href="{{ route('houses.index') }}" class="btn btn-secondary">Назад</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
