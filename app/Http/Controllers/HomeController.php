<?php

namespace App\Http\Controllers;

use App\Models\Entrprises;
use App\Models\offre;
use App\Models\Offres;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    //
    public function home()
    {

        return view('home.home');
    }
    // la page vue entreprise
    public function about()
    {
        $entreprises = Entrprises::all();

        return view('home.about', compact(var_name: 'entreprises'));
    }

    public function offers()
    {
        //SELECT * FROM offre;
        $offres = Offres::all();
        // dd($offres);
        return view('home.offers', compact(var_name: 'offres'));
    }
}
