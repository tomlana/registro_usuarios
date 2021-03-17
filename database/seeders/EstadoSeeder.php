<?php

namespace Database\Seeders;

use App\Models\Estados;
use Illuminate\Database\Seeder;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estados::insert([
            'nome' => "São Paulo",
            'cod_ibge' => "35"
        ]);

        Estados::insert([
            'nome' => "Rio de Janeiro",
            'cod_ibge' => "33"
        ]);

        Estados::insert([
            'nome' => "Paraná",
            'cod_ibge' => "41"
        ]);

    }
}
