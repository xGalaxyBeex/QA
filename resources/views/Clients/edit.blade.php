@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Редактирование </h3>
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

                        <form action="{{ route('clients.update', $client->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="full_name">Имя</label>
                                <input type="text" name="full_name" id="full_name" class="form-control" value="{{ $client->full_name }}" required>
                            </div>

                            <div class="form-group">
                                <label for="phone_number">Цена за квадратный метр</label>
                                <input type="number" name="phone_number" id="phone_number" class="form-control" value="{{ old('phone_number', $client->phone_number) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Электронная почта</label>
                                <input type="taxt" name="email" id="email" class="form-control" value="{{ old('email', $client->email) }}" required>
                            </div>


                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Обновить</button>
                                <a href="{{ route('clients.index') }}" class="btn btn-secondary">Отмена</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
