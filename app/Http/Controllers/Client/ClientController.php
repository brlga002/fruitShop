<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{

    public function index()
    {
        $client = Client::all();
        return view('dash.clients.index',[
            'clients' => $client
        ]);
    }

    public function create()
    {
        return view('dash.clients.create');
    }

    public function store(Request $request)
    {      
        if(!$request->name || !$request->cpf){            
            return redirect()
            ->back()
            ->with('error', 'Preencha o nome e CPF');            
        }

        $client = new Client();
        $client->name = $request->name;
        $client->cpf = $request->cpf;
        $client->save();

        return redirect()
            ->route('client.index')
            ->with('message', 'Salvo com sucesso!'); ;
    }

    public function show(Client $client)
    {
        $sales = $client->sales()->get();

        $salesContent = $client->salesContent();
        
        return view('dash.clients.show',[
            'client' => $client,
            'sales' => $sales,
            'salesContent' => $client->salesContent(),
        ]);
    }

    public function edit(Client $client)
    {
        return view('dash.clients.edit',[
            'client' => $client
        ]);
    }

    public function update(Request $request, Client $client)
    {
        if(!$request->name || !$request->cpf){            
            return redirect()
            ->back()
            ->with('error', 'Preencha o nome e CPF');            
        }
        
        $client->name = $request->name;
        $client->cpf = $request->cpf;
        $client->save();
        
        return redirect()
            ->route('client.index')
            ->with('message', 'Atualizado com sucesso!');            
    }

    public function destroy(Client $client)
    {
        $sales = $client->sales()->first();
        if($sales){            
            return redirect()
            ->back()
            ->with('error', 'O cliente tem vendas registradas');            
        }

        $client->delete();
        
        return redirect()->route('client.index')
            ->with('message', 'Deletado com sucesso!');
    }
}
