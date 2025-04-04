@extends('base')
@section('title', 'about')
@section('content')

    {{-- permet de prendre des donnée depuis la page de base --}}
    <link rel="stylesheet" href="{{ asset('assets/cssBrute/cssEntreprise.css') }}">


    <section class="hero">
        <h1>Bienvenue sur<br><strong>CESI TA CHANCE</strong></h1>
        <h2>Découvrez nos entreprises</h2>
        <div class="search-box">
            <input type="text" placeholder="🔍 Recherche ton stage">
            <select>
                <option>Type d’entreprise</option>
            </select>
            <select>
                <option>Secteur</option>
            </select>
        </div>
    </section>

    <section class="companies">
        @foreach ($entreprises as $entreprise)
            <div class="company-card">
                <div class="company-header">
                    <button>Modifier</button>
                </div>
                <div class="company-body">
                    <h3>{{ $entreprise->nom_entreprise }}</h3>
                    <p>Aéronautique / Spatial</p>
                    <p>Grande entreprise</p>
                    <p>avis : {{ $entreprise->avis_entreprise }} </p>
                    <span class="follow">suivre</span>
                </div>
            </div>
        @endforeach
    </section>


@endsection
