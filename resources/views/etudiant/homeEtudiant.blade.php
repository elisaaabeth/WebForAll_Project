@extends('baseEtudiant')
@section('title', 'homeEtudiant')
@section('content')

    <link rel="stylesheet" href="{{ asset('assets/cssBrute/cssHome.css') }}">


    <!-- #######################################################################
            ############################## accueil ################################
            ####################################################################### -->
    <section class="accueil">
        <div class="arriere_plan2">

            <section class="hero">
                <h1>Bienvenue sur<br><strong>CESI TA CHANCE</strong></h1>
                <h2>Découvrez nos entreprises</h2>
                <div class="search-box">
                    <input type="text" placeholder="🔍 Recherche ton stage">

                </div>
            </section>
        </div>
    </section>

    <div class="container">
        <h2>Explorer nos entreprises partenaires</h2>
        <span>Découvrez nos entreprises partenaires, n'hésitez surtout pas à postuler chez elle </span>
        <div class="logo">
            <img src="{{ asset('assets/image/Thales.png') }}" alt="Thales">
            <img src="{{ asset('assets/image/Safran.png') }}" alt="Safran">
            <img src="{{ asset('assets/image/Engie.png') }}" alt="Engie">
            <img src="{{ asset('assets/image/Logo_Vinci.svg.png') }}" alt="Vinci">
            <img src="{{ asset('assets/image/edf_logo.png') }}" alt="EDF">
            <img src="{{ asset('assets/image/Total energies.png') }}" alt="Total Energies">
        </div>
    </div>

    <section>
        <div class="container-entreprise">
            <div>
                <img src="{{ asset('assets/image/étudiant 1.png') }}" alt="Étudiant">
                <h2> Qui sommes nous ?</h2>
                <p>Bienvenue au CESI, un groupe d'enseignement supérieur et de formation professionnelle qui accompagne
                    les talents de demain ! Depuis plus de 60 ans, nous formons des ingénieurs, des managers et des experts
                    dans les
                    domaines du numérique, de l'industrie et de la construction.</p>
                <p>À travers nos 25 campus en France, nous proposons des formations innovantes en apprentissage, en
                    alternance et en formation continue, adaptées aux besoins des entreprises. Engagés pour l'excellence et
                    l'inclusion, nous plaçons l'innovation pédagogique et l'expérience apprenante au cœur de notre démarche.
                </p>
                <p>Rejoignez-nous et construisons ensemble l'avenir ! 🚀</p>

            </div>


            <div>
                <img src="{{ asset('assets/image/étudiant 2.png') }}" alt="Étudiant">
                <h2> Les opportunité que nous vous offrons</h2>
                <p>Chez CESI, nous collaborons avec un vaste réseau d'entreprises partenaires
                    qui partagent notre engagement pour l'excellence et l'innovation.</p>
                <p>Grâce à ces partenariats stratégiques avec des grands groupes, des PME et des
                    start-ups, nos étudiants bénéficient d'opportunités uniques en stage, alternance et
                    premier emploi.</p>
                <p>Nos entreprises partenaires évoluent dans des secteurs variés tels que l'industrie,
                    le numérique, la construction, l'énergie et les services.</p>
                <p>En intégrant CESI, vous accédez à un écosystème dynamique qui vous permet de développer
                    vos compétences dans des environnements stimulants et de bâtir votre avenir professionnel
                    aux côtés d'acteurs majeurs du marché.</p>
                <p>🚀 Trouvez votre future entreprise dès aujourd'hui !</p>
            </div>

        </div>
    </section>

@endsection
