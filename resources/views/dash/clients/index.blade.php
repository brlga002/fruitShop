@extends('dash._theme')

@section('content')

    <div class="card">
        <div class="card-header">
            <strong class="card-title">Lista de Clientes</strong>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">CPF</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                        <tr>
                            <td>{{ $client->id }}</td>
                            <td>{{ $client->name }}</td>
                            <td>{{ $client->cpf }}</td>
                            <td>
                                <a class="btn btn-primary btn-sm"
                                    href="{{ route('client.show', ['client' => $client->id]) }}">
                                    <span class="ti-user"></span>
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-secondary btn-sm"
                                    href="{{ route('client.edit', ['client' => $client->id]) }}">
                                    <span class="fa fa-edit">
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('client.destroy', ['client' => $client->id]) }}" method="post">
                                    @csrf
                                    @method('delete')                                    
                                    <button class="btn btn-danger btn-sm" type="submit">
                                        <span class="ti-trash"></span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
