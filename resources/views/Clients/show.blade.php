@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Подробности о клиентах</h3>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="id">ID</label>
                            <input type="text" name="id" id="id" class="form-control" value="{{ $client->id }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="full_name">Имя</label>
                            <input type="text" name="full_name" id="full_name" class="form-control" value="{{ $client->full_name }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="phone_number">Номер телефона</label>
                            <input type="text" name="phone_number" id="phone_number" class="form-control" value="{{ $client->phone_number }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="email">Электронная почта</label>
                            <input type="text" name="email" id="email" class="form-control" value="{{ $client->email }}" readonly>
                        </div>


                        <div class="form-group">
                            <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-primary">Редактировать</a>
                            <a href="{{ route('clients.index') }}" class="btn btn-secondary">Назад</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
