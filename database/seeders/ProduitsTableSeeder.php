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
        $produit->nom = "Viande de boeuf";
        $produit->prix_ht = "2500";
        $produit->description = "Mâle châtré de l'espèce bovine.Viande de cet animal pour la sauce et bien d'autres meuts";
        $produit->photo_principale = "Boeuf.JPG";
        $produit->category_id = 1;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Viande d'agouti";
        $produit->prix_ht = "7500";
        $produit->description = "Animale de brousse dont la viande à un gout délicieux";
        $produit->photo_principale = "Agouti.JPG";
        $produit->category_id = 1;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Viande de Biche/cerf";
        $produit->prix_ht = "3000";
        $produit->description = "Un animal de brousse, une bonne viande de ça peut préparer n'import quel meut";
        $produit->photo_principale = "Biche.jpg";
        $produit->category_id = 1;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Viande de chèvre";
        $produit->prix_ht = "3500";
        $produit->description = "Un animal de domestique, qui a une très bonne viande";
        $produit->photo_principale = "Chèvre.jpg";
        $produit->category_id = 1;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Viande de cobay";
        $produit->prix_ht = "6500";
        $produit->description = "Un animal de brousse avec une bonne viande pour préparer n'importe quel meut";
        $produit->photo_principale = "Cobay.jpg";
        $produit->category_id = 1;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "La viande de mouton";
        $produit->prix_ht = "3000";
        $produit->description = "Un animal de domestique reconnu par tout le monde pour son usage lors de Tabaski";
        $produit->photo_principale = "Mouton.jpg";
        $produit->category_id = 1;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Viande de lapin";
        $produit->prix_ht = "4000";
        $produit->description = "Un animal de brousse reconnu pour le gout délicieux de ça viande";
        $produit->photo_principale = "lapin.jpg";
        $produit->category_id = 1;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Viande de Porc";
        $produit->prix_ht = "2500";
        $produit->description = "Un animal de domestique tres reconnu pour le gout de ça viande trop graissée";
        $produit->photo_principale = "porc.jpg";
        $produit->category_id = 1;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Viande de pintade";
        $produit->prix_ht = "3000";
        $produit->description = "Oiseau galliforme originaire d'Afrique, de la famille des phasianidés. Avec ça viande, préparer tout ce que vous voulez.";
        $produit->photo_principale = "pintade.jpg";
        $produit->category_id = 1;
        $produit->save();

    }
}