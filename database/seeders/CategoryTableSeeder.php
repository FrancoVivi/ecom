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

        /* $category = new \App\Models\Category();
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
        $category->save(); */

        $category = new \App\Models\Category();
        $category->nom = "Volaille";
        $category->is_online = 1;
        $category->parent_id = 1;
        $category->save();

        $category = new \App\Models\Category();
        $category->nom = "Animaux de brousse";
        $category->is_online = 1;
        $category->parent_id = 1;
        $category->save();

        $category = new \App\Models\Category();
        $category->nom = "Poisson";
        $category->is_online = 1;
        $category->parent_id = 2;
        $category->save();

        $category = new \App\Models\Category();
        $category->nom = "Saucisson";
        $category->is_online = 1;
        $category->parent_id = 2;
        $category->save();

        $category = new \App\Models\Category();
        $category->nom = "Autres";
        $category->is_online = 1;
        $category->parent_id = 2;
        $category->save();

        $category = new \App\Models\Category();
        $category->nom = "Céréales";
        $category->is_online = 1;
        $category->parent_id = 4;
        $category->save();

        $category = new \App\Models\Category();
        $category->nom = "Fruit";
        $category->is_online = 1;
        $category->parent_id = 4;
        $category->save();

        $category = new \App\Models\Category();
        $category->nom = "Légumes";
        $category->is_online = 1;
        $category->parent_id = 4;
        $category->save();

        $category = new \App\Models\Category();
        $category->nom = "Tubercules";
        $category->is_online = 1;
        $category->parent_id = 4;
        $category->save();
    }
}