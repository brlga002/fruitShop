@extends('dash._theme')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Fruta</strong>
        </div>
        <div class="card-body">
            
            <strong>Nome: </strong><p class="card-text">{{ $fruit->name }}.</p>            
        </div>
    </div>
</div>






@endsection