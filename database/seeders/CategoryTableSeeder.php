<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $category = new \App\Models\Category();
        $category->nom = "Boucherie";
        $category->is_online = 1;
        $category->save();

        $category = new \App\Models\Category();
        $category->nom = "Poissonnerie";
        $category->is_online = 1;
        $category->save();

        $category = new \App\Models\Category();
        $category->nom = "Produits manufacturés";
        $category->is_online = 1;
        $category->save();

        $category = new \App\Models\Category();
        $category->nom = "Produits vivriers";
        $category->is_online = 1;
        $category->save();

        $category = new \App\Models\Category();
        $category->nom = "Fruits";
        $category->is_online = 1;
        $category->save();

        $category = new \App\Models\Category();
        $category->nom = "Légumes";
        $category->is_online = 1;
        $category->save();

        $category = new \App\Models\Category();
        $category->nom = "Tubercules";
        $category->is_online = 1;
        $category->save();
    }
}