@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="float-start">Дома</h3>
                        <a href="{{ route('houses.create') }}" class="btn btn-primary float-end">Создание домов</a>
                    </div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Название</th>
                                <th>Цена (кв/м)</th>
                                <th>Год постройки</th>
                                <th>Колличество квартир</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($houses as $house)
                                <tr>
                                    <td>{{ $house->id }}</td>
                                    <td>{{ $house->name }}</td>
                                    <td>{{ $house->price_per_sqm }}</td>
                                    <td>{{ $house->year_built }}</td>
                                    <td>{{ $house->floors_count }}</td>
                                    <td>
                                        <a href="{{ route('houses.show', $house->id) }}" class="btn btn-info">Показать</a>
                                        <a href="{{ route('houses.edit', $house->id) }}" class="btn btn-primary">Настроить</a>
                                        <form action="{{ route('houses.destroy', $house->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Вы уверены что хотите удалить этот дом?')">Удалить</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <div class="mt-3">
                            {{ $houses->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
