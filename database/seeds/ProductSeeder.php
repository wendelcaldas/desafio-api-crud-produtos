<?php

use Illuminate\Database\Seeder;
use App\Products;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Utilização da factory para criar os registros fakes no banco de dados
        factory(Products::class, 10)->create();
    }
}
