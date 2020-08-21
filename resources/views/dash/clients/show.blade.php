@extends('dash._theme')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Cliente</strong>
        </div>
        <div class="card-body">
            
            <strong>Nome: </strong><p class="card-text">{{ $client->name }}.</p>
            <strong>CPF: </strong><p class="card-text">{{ $client->cpf }}.</p>
        </div>
    </div>
</div>

@foreach ($sales as $key => $sale)

<div class="col-md-6">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Compra</strong>
        </div>
        <div class="card-body">            
            <strong>#ID: </strong><p class="card-text">{{ $sale->id }}</p>   
            <strong>Frutas: </strong>                   
            @foreach ($salesContent as $content)
                @if($sale->id == $content->sales_id)
                <p class="card-text">{{ $content->amount }} {{ $content->name }}</p>
                @endif
            @endforeach
            <strong>Preço: </strong><p class="card-text">R$ {{ number_format($sale->price, 2, ',', '.')	 }}</p>
            <strong>Data: </strong><p class="card-text">{{ date("d/m/Y", strtotime($sale->sale_date)) }}</p>
        </div>
    </div>
</div>
@endforeach




@endsection