<?php

namespace App\Http\Controllers;

use App\Models\Entrprises;
use App\Models\Etudiants;
use App\Models\Offres;
use App\Models\Pilotes;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function etudiantAdmin()
    {
        $etudiants = Etudiants::all();
        return view('admin.etudiantAdmin', compact(var_name: 'etudiants'));
    }
    public function homeAdmin()
    {
        return view('admin.homeAdmin');
    }
    public function offreAdmin()
    {
        $offres = Offres::all();
        return view('admin.offreAdmin', compact(var_name: 'offres'));
    }
    public function piloteAdmin()
    {
        $pilotes = Pilotes::all();
        return view('admin.piloteAdmin', compact(var_name: 'pilotes'));
    }
    public function entrepriseAdmin()
    {
        $entreprises = Entrprises::all();
        return view('admin.entrepriseAdmin', compact(var_name: 'entreprises'));
    }
}
