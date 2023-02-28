@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Записаться</h3>
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

                        <form action="{{ route('clients.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="full_name">Имя</label>
                                <input type="text" name="full_name" id="full_name" class="form-control" value="{{ old('full_name') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="phone_number">Номер телефона</label>
                                <input type="number" name="phone_number" id="phone_number" class="form-control" value="{{ old('phone_number') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Электронная почта</label>
                                <input type="text" name=email id="email" class="form-control" value="{{ old('email') }}" required>
                            </div>



                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Создать</button>
                                <a href="{{ route('clients.index') }}" class="btn btn-secondary">Отмена</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
