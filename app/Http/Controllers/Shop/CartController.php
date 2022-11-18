<?php

namespace App\Http\Controllers\Shop;
use Cart;
use App\Http\Controllers\Controller;
use App\Models\Produit;
use Illuminate\Http\Request;


class CartController extends Controller
{
    //Ajouter un produit au parnier
    public function add(Request $request){
        $produit = Produit::find($request->id);
        Cart::add(array(
            'id' => $produit->id, // inique row ID
            'name' => $produit->nom,
            'price' => $produit->prix_ht,
            'quantity' => $request->qty,
            'attributes' => array('size'=>$request->size)
        ));

        return redirect(route('cart_index'));
    }

    public function index(){
        $content = Cart::getContent();
        dd($content);
    }
}
