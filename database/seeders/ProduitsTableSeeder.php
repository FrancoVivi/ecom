<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $produit= new \App\Models\Produit();
        $produit->nom = "Arachide";
        $produit->prix_ht = "1500";
        $produit->description = "Légumineuse des pays chauds de la famille des papilionacées, fournissant une huile. Graine de cette plante faitde bonne sauce pour l'igname pilé";
        $produit->photo_principale = "Arachid.JPG";
        $produit->category_id = 4;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Cassoulet";
        $produit->prix_ht = "5000";
        $produit->description = "Plat du sud-ouest composé de haricots blancs et de viande d'oie ou de canard, cuit et servi dans une terrine en grès.";
        $produit->photo_principale = "Cassoulé.JPG";
        $produit->category_id = 4;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Gari";
        $produit->prix_ht = "1500";
        $produit->description = "Qui est une pâte de manioc fermenté, est consommé quotidiennement par près de 200 millions de personnes en Afrique de l’Ouest.";
        $produit->photo_principale = "garri.jpg";
        $produit->category_id = 4;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Harricot";
        $produit->prix_ht = "1000";
        $produit->description = "Plante de la famille des légumineuses. Fruit de cette plante, consommé soit en gousses, soit en grains.";
        $produit->photo_principale = "Harricot.jpg";
        $produit->category_id = 4;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Igname";
        $produit->prix_ht = "3000";
        $produit->description = "Plante grimpante des régions tropicales donnant des tubercules comestibles. C'est avec ça qu'on fait de l'igname pilé.";
        $produit->photo_principale = "Ignam.jpg";
        $produit->category_id = 4;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Maïs";
        $produit->prix_ht = "1500";
        $produit->description = "Grande céréale d'origine américaine, à la forte tige portant un épi femelle formé de grains placés en rangs très serrés.";
        $produit->photo_principale = "Maize.jpg";
        $produit->category_id = 4;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Piment rouge";
        $produit->prix_ht = "1800";
        $produit->description = "Plante potagère de la famille des solanacées. Fruit de cette plante utilisé comme légume ou comme épice. Ce qui donne du piquant aux choses, aux situations.";
        $produit->photo_principale = "Piment-rouge.jpg";
        $produit->category_id = 4;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Soja";
        $produit->prix_ht = "1700";
        $produit->description = "Plante oléagineuse cultivée pour ses graines riches en protéines. ça s'est à faire de l'huile, fromage de soja(en Afrique), buscuit et pleines d'autres choses.";
        $produit->photo_principale = "Soja.jpg";
        $produit->category_id = 4;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Sorgo";
        $produit->prix_ht = "1500";
        $produit->description = "Orthographié sorgho, est une espèce de plantes monocotylédones de la famille des Poaceae (Graminées), originaire d'Afrique.C'est une plante herbacée annuelle.";
        $produit->photo_principale = "Sorgo.jpg";
        $produit->category_id = 4;
        $produit->save();

    }
}