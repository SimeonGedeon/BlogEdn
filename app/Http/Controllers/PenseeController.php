<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePenseeRequest;
use App\Models\Pensee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PenseeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Pensee::where('est_publie', true)
            ->latest()
            ->with('user');

        // Ajout de la recherche si le paramètre existe
        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where(function ($q) use ($searchTerm) {
                $q->where('titre', 'LIKE', "%{$searchTerm}%")
                    ->orWhere('contenu', 'LIKE', "%{$searchTerm}%")
                    ->orWhere('verset', 'LIKE', "%{$searchTerm}%")
                    ->orWhereHas('user', function ($userQuery) use ($searchTerm) {
                        $userQuery->where('name', 'LIKE', "%{$searchTerm}%");
                    });
            });
        }

        $pensees = $query->paginate(4);

        return view('pensees.index', compact('pensees'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePenseeRequest $request)
    {
        $validated = $request->validated();

        $validated['user_id'] = Auth::id();
        $validated['est_publie'] = $request->has('est_publie');

        // Gérer l'image si présente
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('pensees', 'public');
        }

        // Assurer le booléen
        $validated['est_publie'] = $request->has('est_publie');

        Pensee::create($validated);

        return redirect()->route('index')->with('success', 'Pensée enregistrée avec succès !');
    }


    /**
     * Display the specified resource.
     */
    public function show(Pensee $pensee)
    {
        abort_unless($pensee->est_publie, 403);

        return view('pensees.show', compact('pensee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pensee $pensee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pensee $pensee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pensee $pensee)
    {
        //
    }
}
