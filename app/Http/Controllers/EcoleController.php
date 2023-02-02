<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ecole;

class EcoleController extends Controller
{

    public function index()
    {
        return view('index')->with("ecoles", Ecole::all());
    }

    public function store(Request $request)
    {

        $ecole = $request->validate([
            "nom" => "required",
            "adresse" => "required",
        ]);


        if (!empty($ecole)) {
            Ecole::create($ecole);
            return back()->with([
                "message" => "Ecole enregistrée"
            ]);
        }

        $message = "Erreur lors de l'enregistrement";
        return back()->compact("message");
    }

    public function update(Request $request, $id)
    {
        $ecole = Ecole::find($id);

        $ecole->adresse = $request->adresse;
        $ecole->nom = $request->nom;

        $ecole->update();

        return back();
    }

    public function destroy($id)
    {
        Ecole::destroy($id);
        return back()->with("message", "Ecole supprimée");
    }
}
