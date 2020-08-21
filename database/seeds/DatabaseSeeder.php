<?php

use Illuminate\Database\Seeder;
use App\Client;
use App\Fruit;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {        
        DB::table('clients')->delete();
        DB::table('fruits')->delete();

        Client::create([
            'name'=>'gabriel fernandes lima',
            'cpf'=>'123.130.832.21',            
        ]);

        Client::create([
            'name'=>'miguel stolze lima',
            'cpf'=>'321.130.832.21',            
        ]);

        Fruit::create([
            'name'=>'Laranja',                      
        ]);

        Fruit::create([
            'name'=>'Maçã',                      
        ]);
    }    
}