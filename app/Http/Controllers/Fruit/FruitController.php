<?php

namespace App\Http\Controllers\Fruit;

use App\Http\Controllers\Controller;
use App\Fruit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class FruitController extends Controller
{

    public function index()
    {
        $fruit = Fruit::all();
        return view('dash.fruits.index',[
            'fruits' => $fruit
        ]);
    }

    public function create()
    {
        return view('dash.fruits.create');
    }

    public function store(Request $request)
    {      
        if(!$request->name){            
            return redirect()
            ->back()
            ->with('error', 'Preencha o nome da fruta');            
        }

        $client = new Fruit();
        $client->name = $request->name;
        $client->save();

        return redirect()
            ->route('fruit.index')
            ->with('message', 'Salvo com sucesso!'); ;
    }

    public function show(Fruit $fruit)
    {
        return view('dash.fruits.show',[
            'fruit' => $fruit,

        ]);
    }

    public function edit(Fruit $fruit)
    {
        return view('dash.fruits.edit',[
            'fruit' => $fruit
        ]);
    }

    public function update(Request $request, Fruit $client)
    {
        if(!$request->name){            
            return redirect()
            ->back()
            ->with('error', 'Preencha o nome da fruta');            
        }
        
        $client->name = $request->name;        
        $client->save();
        
        return redirect()
            ->route('fruit.index')
            ->with('message', 'Atualizado com sucesso!');            
    }

    public function destroy(Fruit $fruit)
    {
        $sales = $fruit->salesContent()->first();
        if($sales){            
            return redirect()
            ->back()
            ->with('error', 'A fruta tem vendas registradas');            
        }

        $fruit->delete();
        
        return redirect()->route('fruit.index')
            ->with('message', 'Deletada com sucesso!');
    }
}
