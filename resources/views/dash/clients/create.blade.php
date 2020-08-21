@extends('dash._theme')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Cadastrar</strong> Novo Cliente
        </div>
        <div class="card-body card-block">
            <form class="form-horizontal" id="meuform" action="{{ route('client.store') }}" method="post">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="name" class=" form-control-label">Nome do cliente</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" name="name" placeholder="Nome completo do cliente..." class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="cpf" class=" form-control-label">CPF do cliente</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" name="cpf" placeholder="CPF do cliente..." class="form-control" min="11"
                            max="14">
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
