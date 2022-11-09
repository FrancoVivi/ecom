<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    //Récupérer la categorie parent d'une categorie
    public function parent(){
       return $this->belongsTo(Category::class,'parent_id');
    }
    //Récupérer les categories enfant d'une categorie
    public function childrens(){
       return $this->hasMany(Category::class,'parent_id');
    }

    //Récupérer les produits de la categorie>> OneToMany
    public function produitsParent(){
        return $this->hasMany(Produit::class);
    }

    //Récupérer des produits situés dans  une categorie enfant au travers d'une categorie parent
    public function produitsChild(){
        return $this->hasManyThrough(Produit::class,Category::class, 'parent_id', 'category_id');
    }

    public function produits(){

        $produits=$this->produitsParent()->get()->merge($this->produitsChild()->get());
        return $produits;
    }
}