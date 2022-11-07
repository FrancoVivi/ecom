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
        //$categories = Category::where('is_online',1)->get();

        return view('Shop.index', compact('produits'));
    }

    public function produit(Request $request){
        //echo 'Page produit';
        //dd($_GET);
        //SELECT * FROM produit WHERE id = ?
        //dd($request->id);
        //$categories = Category::where('is_online',1)->get();
        $produit = Produit::find($request->id);

        return view('Shop.produit',compact('produit'));
    }

    public function viewByCategory(Request $request){
        //Recupérer toutes les catégories >> is_online ==1
        //$categories = Category::where('is_online',1)->get();
        //dd($categories);
        //SELECT * FROM produits = category_id = $request->id
        $produits = Produit::where('category_id', $request->id)->get();

        return view('shop.categorie', compact('produits'));
    }
}