<?php

use Illuminate\Database\Seeder;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Categoria::class, 10)->create()->each(function($categoria) {
            factory(\App\Fornecedor::class, 1)->create()->each(function($fornecedor) {
                $fornecedor->produto()->save(factory(\App\Produto::class)->make());
            });
        });
    }
}
