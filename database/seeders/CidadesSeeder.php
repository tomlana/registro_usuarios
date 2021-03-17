<?php

namespace Database\Seeders;

use App\Models\Cidades;
use Illuminate\Database\Seeder;

class CidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cidades::insert([
            'nome' => "São Paulo",
            'cod_ibge' => "3550308"
        ]);

        Cidades::insert([
            'nome' => "Jundiaí",
            'cod_ibge' => "3525904"
        ]);

        Cidades::insert([
            'nome' => "Juquitiba",
            'cod_ibge' => "3526209"
        ]);

    }
}
