<?php

namespace App\Http\Controllers;

use App\Models\Entrprises;
use App\Models\Etudiants;
use App\Models\Offres;
use Illuminate\Http\Request;

class PiloteController extends Controller
{
    //
    public function homePilote()
    {

        return view('pilote.homePilote');
    }
    public function etudiantPilote()
    {
        $etudiants = Etudiants::all();

        return view('pilote.etudiantPilote', compact(var_name: 'etudiants'));
    }
    public function entreprisePilote()
    {
        $entreprises = Entrprises::all();

        return view('pilote.entreprisePilote', compact(var_name: 'entreprises'));
    }
    public function creerOffPilote()
    {


        return view('pilote.creerOffPilote',);
    }
    public function creerEtuPilote()
    {

        return view('pilote.creerEtuPilote');
    }
    public function creerEntPilote()
    {

        return view('pilote.creerEntPilote');
    }
    public function offrePilote()
    {
        $offres = Offres::all();
        return view('pilote.offrePilote', compact(var_name: 'offres'));
    }
}
