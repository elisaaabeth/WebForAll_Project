<?php

namespace App\Http\Controllers;

use App\Models\Entrprises;
use App\Models\Offres;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function homeEtudiant()
    {
        return view('etudiant.homeEtudiant');
    }
    public function entrepriseEtudiant()
    {
        $entreprises = Entrprises::all();
        return view('etudiant.entrepriseEtudiant', compact(var_name: 'entreprises'));
    }
    public function offreEtudiant()
    {
        $offres = Offres::all();
        return view('etudiant.offreEtudiant', compact(var_name: 'offres'));
    }
}
