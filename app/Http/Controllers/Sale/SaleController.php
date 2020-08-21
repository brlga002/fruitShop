<?php

namespace App\Http\Controllers\Sale;

use App\Http\Controllers\Controller;
use App\Sales;
use App\Client;
use Illuminate\Http\Request;

class SaleController extends Controller
{

    public function index()
    {
        $sale = new Sales();
        return view('dash.sales.index',[
            'sales' => $sale->allSales()
        ]);
    }

    public function create()
    {
        $client = Client::all();
        return view('dash.sales.create',[
            'clients' => $client           
        ]);
    }

    public function store(Request $request)
    {      
        if(!$request->price || !$request->sale_date || !$request->clients_id){            
            return redirect()
            ->back()
            ->with('error', 'Preencha todos os campos');            
        }

        $sale = new Sales();
        $sale->price = $request->price;
        $sale->sale_date  = $request->sale_date;
        $sale->clients_id = $request->clients_id;
        $sale->save();

        return redirect()
            ->route('sale.index')
            ->with('message', 'Salvo com sucesso!'); ;
    }

    public function show(Sales $sale)
    {
        $sales = $sale->sales()->get();

        $salesContent = $sale->salesContent();
        
        return view('dash.clients.show',[
            'client' => $sale,
            'sales' => $sales,
            'salesContent' => $sale->salesContent(),
        ]);
    }

    public function edit(Sales $sale)
    {
        return redirect()->route('sale.index')
            ->with('error', 'Não pode ser editado');
    }

    public function update(Request $request, Sales $sale)
    {
        if(!$request->name || !$request->cpf){            
            return redirect()
            ->back()
            ->with('error', 'Preencha o nome e CPF');            
        }
        
        $sale->name = $request->name;
        $sale->cpf = $request->cpf;
        $sale->save();
        
        return redirect()
            ->route('sale.index')
            ->with('message', 'Atualizado com sucesso!');            
    }

    public function destroy(Sales $sale)
    {
        return redirect()->route('sale.index')
            ->with('error', 'Não pode ser deletado');
    }
}
