<?php

namespace App\Http\Controllers;

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
            ->orderBy('date_publication', 'desc') // plus cohérent que created_at
            ->first();

        // 2. 3 pensées publiées, sauf la dernière pensée du jour
        $pensees = Pensee::where('est_publie', true)
            ->when($pensedujr, function ($query) use ($pensedujr) {
                $query->where('id', '!=', $pensedujr->id);
            })
            ->orderBy('date_publication', 'desc')
            ->paginate(3);

        // 3. Nombre total de pensées publiées
        $count = Pensee::where('est_publie', true)->count();

        // 4. Vérifie s’il y a au moins une pensée en base
        $hasPensees = Pensee::exists();

        return view('home.index', compact('pensees', 'pensedujr', 'hasPensees', 'count'));
    }

    public function about()
    {
        return view('about');
    }

    public function salut()
    {
        return view('evangelisation.index');
    }

    public function enseig()
    {
        return view('enseignement.index');
    }


    public function pensee()
    {
        return view('pensees.index');
    }
}
