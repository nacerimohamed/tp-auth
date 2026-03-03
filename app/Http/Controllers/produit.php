<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class produit extends Controller
{
    // afficher les produits
    public function index()
    {
        $produits = DB::table('produits')->get();
        return view('produit', compact('produits'));
    }

    // afficher formulaire
    public function create()
    {
        return view('create');
    }

    // enregistrer produit
    public function store(Request $request)
    {
        DB::table('produits')->insert([
            'nom_p' => $request->nom_p,
            'prix' => $request->prix,
            'quantite' => $request->quantite,
            'description' => $request->description,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('/produits');
    }
    public function show($id)
{
    //
}

}
