@extends('basePilote')
@section('title', 'etudiantPilote')
@section('content')

    <link rel="stylesheet" href="{{ asset('assets/cssBrute/cssEntreprise.css') }}">


    <section class="hero">
        <h1>Bienvenue sur<br><strong>CESI TA CHANCE</strong></h1>
        <h2>les étudiants</h2>
        <div class="search-box">
            <input type="text" placeholder="🔍 Rechercher un étudiant">

        </div>
    </section>

    <section class="companies">
        @foreach ($etudiants as $etudiant)
            <div class="company-card">
                <div class="company-header">
                    <button>Modifier</button>
                </div>
                <div class="company-body">
                    <h3>{{ $etudiant->prenom_etu }} {{ $etudiant->nom_etu }}</h3>
                    <p> addresse mail: {{ $etudiant->mail_etu }}</p>
                    <p>addresse postale: {{ $etudiant->adresse_locale_etu }} 📍</p>

                </div>
            </div>
        @endforeach
    </section>

@endsection
