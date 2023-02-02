<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eleve;

class EleveController extends Controller
{
    public function index()
    {
        $eleves =  Eleve::all();
        return view('formulaire', [
            'eleves' => $eleves
        ]);
    }


    public function store(Request $request)
    {



        $eleve = $request->validate([
            "nom" => "required",
            "prenom" => "required",
            "matricule" => "required",
        ]);



    if (!empty($eleve))
    {
        Eleve::create($eleve);
        return back()->with([
            "message" => "Eleve enregistré"
        ]);
    }

    $message = "Erreur lors de l'enregistrement";
    return back()->compact("message");

}
    public function update(Request $request, $id)
    {
        $eleve = Eleve::find($id);

        $eleve->nom = $request->nom;
        $eleve->prenom = $request->prenom;
        $eleve->matricule = $request->matricule;

        $eleve->update();

        return back();
    }

    public function destroy($id)
    {
        Ecole::destroy($id);
        return back()->with("message","Eleve est bien supprimée");
    }
}
