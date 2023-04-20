<?php

use Illuminate\Database\Seeder;
use App\CategoryProducts;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Utilização da factory para criar os registros fakes no banco de dados
        factory(CategoryProducts::class, 10)->create();
    }
}
