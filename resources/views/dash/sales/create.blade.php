@extends('dash._theme')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Cadastrar</strong> Nova Venda
        </div>
        <div class="card-body card-block">
            <form class="form-horizontal" id="meuform" action="{{ route('sale.store') }}" method="post">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3"><label for="select" class=" form-control-label">Cliente</label></div>
                    <div class="col-12 col-md-9">
                        <select name="clients_id" id="select" class="form-control" required>
                            <option value="">Por favor selecione</option>
                            @foreach ($clients as $client)                            
                                <option value="{{ $client->id }}">{{ $client->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="name" class=" form-control-label">Preço</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="number" name="price" placeholder="Valor da venda" class="form-control" step="0.01" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="name" class=" form-control-label">Data da Venda</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="date" name="sale_date" placeholder="Data da venda..." class="form-control" required>
                    </div>
                </div>

            
            </form>
        </div>
        <div class="card-footer">
            <button type="submit" form="meuform" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Salvar
            </button>
            <button type="reset" form="meuform" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Resetar
            </button>
        </div>
    </div>
@endsection
