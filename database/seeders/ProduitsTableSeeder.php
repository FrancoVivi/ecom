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
        $produit->nom = "Cassoulet";
        $produit->prix_ht = "5000";
        $produit->description = "Plat du sud-ouest composé de haricots blancs et de viande d'oie ou de canard, cuit et servi dans une terrine en grès.";
        $produit->photo_principale = "Cassoulé.JPG";
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Gari";
        $produit->prix_ht = "1500";
        $produit->description = "Le gari, qui est une pâte de manioc fermenté, est consommé quotidiennement par près de 200 millions de personnes en Afrique de l’Ouest. C’est l’un des plats de base en Afrique de l’Ouest, Ghana, Côte d’Ivoire, Nigéria, Togo.... Il est servi en restauration de rue, et bien sûr préparé dans les maisons.";
        $produit->photo_principale = "garri.jpg";
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Harricot";
        $produit->prix_ht = "1000";
        $produit->description = "Plante de la famille des légumineuses.
        Fruit de cette plante, consommé soit en gousses, soit en grains.";
        $produit->photo_principale = "Harricot.jpg";
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Igname";
        $produit->prix_ht = "3000";
        $produit->description = "Plante grimpante des régions tropicales donnant des tubercules comestibles.";
        $produit->photo_principale = "Ignam.jpg";
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Maïs";
        $produit->prix_ht = "1500";
        $produit->description = "Grande céréale (graminée) d'origine américaine, à la forte tige portant un épi femelle formé de grains placés en rangs très serrés.";
        $produit->photo_principale = "Maize.jpg";
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Piment rouge";
        $produit->prix_ht = "1800";
        $produit->description = "Plante potagère de la famille des solanacées.
        Fruit de cette plante utilisé comme légume ou comme épice.
        Ce qui donne du piquant aux choses, aux situations.";
        $produit->photo_principale = "Piment-rouge.jpg";
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Soja";
        $produit->prix_ht = "1700";
        $produit->description = "Plante oléagineuse cultivée pour ses graines riches en protéines.";
        $produit->photo_principale = "Soja.jpg";
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Sorgo";
        $produit->prix_ht = "1500";
        $produit->description = "Le sorgo, aussi orthographié sorgho, est une espèce de plantes monocotylédones de la famille des Poaceae (Graminées), originaire d'Afrique.
        C'est une plante herbacée annuelle, qui peut atteindre 3 mètres de haut. Elle est cultivée soit pour ses graines, le sorgo grain, soit comme fourrage, le sorgho fourrager.";
        $produit->photo_principale = "Sorgo.jpg";
        $produit->save();

    }
}