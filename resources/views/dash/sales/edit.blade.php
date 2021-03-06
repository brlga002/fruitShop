@extends('dash._theme')

@section('content')
<div class="card">
    <div class="card-header">
        <strong>Editar</strong> Fruta
    </div>
    <div class="card-body card-block">
        <form class="form-horizontal" id="meuform" action="{{ route('fruit.update', ['fruit' => $fruit->id ])  }}" method="post">
            @csrf
            @method('PUT')
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="name" class=" form-control-label">Nome da Fruta</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="name" value="{{ $fruit->name }}" placeholder="Nome da fruta..." class="form-control">
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

