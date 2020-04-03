<?php

use App\Included;
use Illuminate\Database\Seeder;

class IncludedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Included::create([
            'included' => 'Estrutura de Banho',
        ]);
        Included::create([
            'included' => 'Deslocamento Saindo de Curitiba',
        ]);
        Included::create([
            'included' => 'Alimentação Completa',
        ]);
        Included::create([
            'included' => 'Hospedagem em Barracas',
        ]);
    }
}
