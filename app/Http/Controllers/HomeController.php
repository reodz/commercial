<?php

namespace App\Http\Controllers;

use App\Models\Coordonnee;
use App\Models\Etat;
use App\Models\Information;
use App\Models\Produit;
use App\Models\Suivi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function user()
    {
        return view('prospect');
    }
    public function users()
    {
        return view('pros.pros');
    }
    public function ajouter(Request $request){
        $request->validate([
            'stade' => 'required',
            'nom' => 'required',
            'entite' => 'required',
            'categorie' => 'required',
            'secteur' => 'required',
            'contact' => 'required',
            'fonction' => 'required',
            'tel' => 'required',
            'coordonne_mail' => 'required',
            'commentaire' => 'required',
            'step_1' => 'nullable',
            'step_2' => 'nullable',
            'step_3' => 'nullable',
            'step_4' => 'nullable',
            'step_5' => 'nullable',
            'product_name' => 'nullable',
            'product_description' => 'nullable',
        ]);
      $etat=Etat::query()->create(
        [
            'stade' => $request->stade,
        ]
        );
        $information=Information::query()->create([
            'nom' => $request->nom,
            'entite' => $request->entite,
            'categorie' => $request->categorie,
            'secteur' => $request->secteur,
        ]);
        $coordonne=Coordonnee::query()->create([
            'contact' => $request->contact,
            'fonction' => $request->fonction,
            'tel' => $request->tel,
            'coordonne_mail' => $request->coordonne_mail,
            'commentaire' => $request->commentaire,
        ]);
        $suivi=Suivi::query()->create([
            'step_1' => $request->step_1,
            'step_2' => $request->step_2,
            'step_3' => $request->step_3,
            'step_4' => $request->step_4,
            'step_5' => $request->step_5,
        ]);
        $product=Produit::query()->create([
            'product_name' => $request->product_name,
            'product_description' => $request->product_description,
        ]);

    }
}
