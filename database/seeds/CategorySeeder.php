<?php

use Illuminate\Database\Seeder;
use App\Categories;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Utilização da factory para criar os registros fakes no banco de dados
        factory(Categories::class, 10)->create();
    }
}
