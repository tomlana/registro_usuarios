<?php

namespace Database\Seeders;

use App\Models\Endereco;
use Illuminate\Database\Seeder;

class EnderecoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Endereco::insert([
            'log' => "Rua",
            'nome_log' => "Direita",
            'numero' => 15,
            'bairro' => "Centro",
            'cep' => "01002-020",
            'id_cidade' => "3550308",
            'id_estado' => "35"
        ]);

        Endereco::insert([
            'log' => "Praça",
            'nome_log' => "da Sé - Lado ímpar",
            'numero' => 0,
            'bairro' => "Centro",
            'cep' => "01001-001",
            'id_cidade' => "3550308",
            'id_estado' => "35"
        ]);

        Endereco::insert([
            'log' => "Praça",
            'nome_log' => "da Sé - Lado par",
            'numero' => 0,
            'bairro' => "Centro",
            'cep' => "01001-000",
            'id_cidade' => "3550308",
            'id_estado' => "35"
        ]);
    }
}
