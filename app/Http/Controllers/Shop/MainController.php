<?php

namespace App\Http\Controllers\Shop;
use App\Models\Produit;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){

        //SELECT * FROM produits

        $produits = Produit::all();
        //dd($produits);

        return view('Shop.index', compact('produits') );
    }

    public function produit(Request $request){
        //echo 'Page produit';
        //dd($_GET);
        //SELECT * FROM produit WHERE id = ?
        //dd($request->id);
        $produit = Produit::find($request->id);

        return view('Shop.produit',compact('produit'));
    }

    public function viewByCategory(){
        //Recupérer toutes les catégories >> is_online ==1
        $categories = Category::where('is_online',1)->get();
        //dd($categories);

        return view('shop.categorie', compact('categories'));
    }
}