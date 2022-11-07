<?php

namespace App\Http\Controllers\Shop;
use App\Models\Produit;
use App\Http\Controllers\Controller;
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
}