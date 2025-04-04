@extends('baseEtudiant')
@section('title', 'offreEtudiant')
@section('content')

    <link rel="stylesheet" href="{{ asset('assets/cssBrute/cssOffers.css') }}">
    <section class="hero">
        <h1>Bienvenue sur<br><strong>CESI TA CHANCE</strong></h1>
        <h2>Explorez nos offres</h2>
        <div class="search-box">
            <input type="text" placeholder="🔍 Recherche ton stage">
            <input type="text" placeholder="📁 type de contrat">
            <input type="text" placeholder="📍 ville, département">
            <div class="filters">
                <i class="fa-solid fa-filter"></i> tous les filtres
            </div>
        </div>
    </section>

    <section class="offers">

        @foreach ($offres as $offre)
            <div class="offer">

                <div class="offer-content">
                    <h3>{{ $offre->nom_offre }} </h3>
                    <p>Stage technicien(ne) informatique</p>
                    <p> {{ $offre->description_Offre }} </p>
                    <p class="meta">📁 Stage de 6 mois &nbsp; 📍 {{ $offre->adresse_offre }} </p>
                </div>
            </div>
        @endforeach

    </section>



@endsection
