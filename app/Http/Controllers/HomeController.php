<?php

namespace App\Http\Controllers;

use App\Models\Enseignement;
use App\Models\Pensee;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        Carbon::setLocale('fr');

        // 1. Dernière pensée publiée (mise en avant, pensée du jour)
        $pensedujr = Pensee::where('est_publie', true)
            ->orderBy('created_at', 'desc') // plus cohérent que created_at
            ->first();

        // 2. 3 pensées publiées, sauf la dernière pensée du jour
        $pensees = Pensee::where('est_publie', true)
            ->when($pensedujr, function ($query) use ($pensedujr) {
                $query->where('id', '!=', $pensedujr->id);
            })
            ->orderBy('created_at', 'desc')
            ->paginate(3);

        // 3. Nombre total de pensées publiées
        $count = Pensee::where('est_publie', true)->count();

        // 4. Vérifie s’il y a au moins une pensée en base
        $hasPensees = Pensee::exists();

        $enseignements = Enseignement::all();


        return view('home.index', compact('pensees', 'pensedujr', 'hasPensees', 'count', 'enseignements'));
    }

    public function about()
    {
        return view('home.about');
    }

    public function salut()
    {
        return view('evangelisation.index');
    }

    public function chemin()
    {
        return view('evangelisation.salut');
    }


    public function pensee()
    {
        return view('pensees.index');
    }
}
