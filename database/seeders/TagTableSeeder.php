<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tag = new \App\Models\Tag();
        $tag->nom = "#Abattre";
        $tag->save();

        $tag = new \App\Models\Tag();
        $tag->nom = "#Non abattre";
        $tag->save();

        $tag = new \App\Models\Tag();
        $tag->nom = "#En gros";
        $tag->save();

        $tag = new \App\Models\Tag();
        $tag->nom = "#En detail";
        $tag->save();
    }
}