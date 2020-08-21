@extends('dash._theme')

@section('content')

    <div class="card">
        <div class="card-header">
            <strong class="card-title">Estoque de Frutas Geral</strong>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Dt. validade</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($validAmountGroupByFruit as $stock)
                        <tr>
                            <td>{{ $stock->id }}</td>
                            <td>{{ $stock->name }}</td>                            
                            <td>{{ $stock->amounts }}</td>
                            <td>{{ date("d/m/Y", strtotime($stock->expiration_date)) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <strong class="card-title">Estoque de Frutas por Data de Validade</strong>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Dt. validade</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($validAmount as $stock)
                        <tr>
                            <td>{{ $stock->id }}</td>
                            <td>{{ $stock->name }}</td>                            
                            <td>{{ $stock->amount }}</td>
                            <td>{{ date("d/m/Y", strtotime($stock->expiration_date)) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
