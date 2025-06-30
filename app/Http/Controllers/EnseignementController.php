<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEnseignementRequest;
use App\Models\Categorie;
use App\Models\Enseignement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnseignementController extends Controller
{
    public function create()
    {
        $categories = Categorie::all();
        return view('enseignements.create', compact('categories'));
    }

    public function index()
    {
        $enseignements = Enseignement::where('est_publie', true)
            ->latest()
            ->with('user')
            ->paginate(2); // ou le nombre que tu veux

        return view('enseignements.index', compact('enseignements'));
    }

    public function show()
    {
        return view('enseignement.show');
    }

    public function store(StoreEnseignementRequest $request)
    {
        $data = $request->validated();

        // L'utilisateur connecté devient l'auteur
        $data['user_id'] = Auth::id();

        // Déterminer si l'enseignement est publié ou brouillon
        $data['est_publie'] = $request->est_publie == 1;

        // Upload de l'image s'il y en a une
        if ($request->hasFile('img')) {
            $data['img'] = $request->file('img')->store('enseignements', 'public');
        }

        // Adapter la clé étrangère
        $data['categorie_id'] = $data['categorie'];
        unset($data['categorie']);

        // Création de l'enseignement
        Enseignement::create($data);

        return redirect()->route('enseignements.index')->with('success', 'Enseignement enregistré avec succès.');
    }
}
