@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Запись Квартиры</h3>
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

                        <form action="{{ route('apartments.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="name">Колл. комнат</label>
                                <input type="number" name="rooms" id="rooms" class="form-control" value="{{ old('rooms') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="square_meters">Квадратных метров</label>
                                <input type="number" name="square_meters" id="square_meters" class="form-control" value="{{ old('square_meters') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="floor">Номер квартиры</label>
                                <input type="number" name="floor" id="floor" class="form-control" value="{{ old('floor') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="house_id">Номер дома</label>
                                <input type="number" name="house_id" id="house_id" class="form-control" value="{{ old('house_id') }}" required>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Готово</button>
                                <a href="{{ route('apartments.index') }}" class="btn btn-secondary">Отмена</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
