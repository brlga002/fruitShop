@extends('dash._theme')

@section('content')

    <div class="card">
        <div class="card-header">
            <strong class="card-title">Vendas</strong>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Dt. Venda</th>                        
                        <th scope="col">Nome</th>
                        <th scope="col">Preço</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sales as $sale)
                        <tr>
                            <td>{{ $sale->id }}</td>
                            <td>{{ date("d/m/Y", strtotime($sale->sale_date)) }}</td>                            
                            <td>{{ $sale->name }}</td>                            
                            <td>R$ {{ number_format($sale->price, 2, ',', '.')	 }}</td>                            
                            <td>
                                <a class="btn btn-primary btn-sm"
                                    href="{{ route('sale.show', ['sale' => $sale->id]) }}">
                                    <span class="ti-user"></span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
