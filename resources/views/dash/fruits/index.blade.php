@extends('dash._theme')

@section('content')

    <div class="card">
        <div class="card-header">
            <strong class="card-title">Frutas</strong>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>                        
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fruits as $fruit)
                        <tr>
                            <td>{{ $fruit->id }}</td>
                            <td>{{ $fruit->name }}</td>                            
                            <td>
                                <a class="btn btn-primary btn-sm"
                                    href="{{ route('fruit.show', ['fruit' => $fruit->id]) }}">
                                    <span class="ti-user"></span>
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-secondary btn-sm"
                                    href="{{ route('fruit.edit', ['fruit' => $fruit->id]) }}">
                                    <span class="fa fa-edit">
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('fruit.destroy', ['fruit' => $fruit->id]) }}" method="post">
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
