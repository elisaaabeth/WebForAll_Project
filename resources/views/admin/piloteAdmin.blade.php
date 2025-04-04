@extends('baseAdmin')


@section('title', 'piloteAdmin')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/cssBrute/cssEntreprise.css') }}">


    <section class="hero">
        <h1>Bienvenue sur<br><strong>CESI TA CHANCE</strong></h1>
        <h2>les pilotes</h2>
        <div class="search-box">
            <input type="text" placeholder="🔍 Rechercher un étudiant">

        </div>
    </section>

    <section class="companies">
        @foreach ($pilotes as $pilote)
            <div class="company-card">
                <div class="company-header">
                    <button>Modifier</button>
                </div>
                <div class="company-body">
                    <h3>{{ $pilote->prenom_pilote }} {{ $pilote->nom_pilote }}</h3>
                    <p> addresse mail: {{ $pilote->mail_pilote }}</p>
                    <p>addresse postale: {{ $pilote->adresse_locale_pilote }} 📍</p>

                </div>
            </div>
        @endforeach
    </section>

@endsection
