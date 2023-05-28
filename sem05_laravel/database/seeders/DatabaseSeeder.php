<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fornecedor;
use Illuminate\Support\Facades\Log;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
	    $seedRegiao = new RegiaoSeeder();
        $seedRegiao->run();

        (new EstadoSeeder())->run();
        (new PromocaoSeeder())->run();

        //(new PromocaoProdutoSeeder())->run();

        Fornecedor::factory(fake()->randomNumber(2))
                ->hasProdutos(fake()->randomNumber(1))
                ->create();


    }
}
