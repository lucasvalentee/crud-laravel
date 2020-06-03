<?php

use Illuminate\Database\Seeder;

class FornecedorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Fornecedor::class, 10)->create()->each(function($fornecedor) {
            $fornecedor->produto()->save(factory(\App\Produto::class)->make());
        });
    }
}
