<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    @vite('resources/css/dashboard.css')
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600&display=swap" rel="stylesheet">
    <!-- favicon -->
    <link rel="icon" type="image/png" href="/img/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/img/favicon/favicon.svg" />
    <link rel="shortcut icon" href="/img/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="Zespół Szkół Ponadpodstawowych nr 1 w Kępnie" />
    <link rel="manifest" href="/img/favicon/site.webmanifest" />
    <title>Zespół Szkół Ponadpodstawowych nr 1 w Kępnie</title>
</head>

<body class="d-flex flex-column">
    @php /* naglowek */ @endphp
    <header class="naglowek px-3 px-lg-5 py-2 py-lg-3">
        <div class="row g-2 align-items-center">
            <div class="col-xl-1 col-lg-2 col-md-2 col-3 d-flex align-items-center">
                <img src="{{ asset('img/logo3.png') }}" class="img-logo img-fluid" alt="Logo szkoły">
            </div>
            <div class="col-xl-7 col-lg-10 col-9 d-flex align-items-center">
                <span class="fw-bold fs-2 nazwa-szkoly">Zespół Szkół Ponadpodstawowych nr 1 w Kępnie</span>
            </div>
            <div class="col-xl-2 col-lg-6 col-6 d-flex align-items-center">
                <img id="pogoda-ikona" class="img-fluid" alt="Piktogram pogody">
                <span id="pogoda">Ładowanie pogody...</span>
            </div>
            <div class="col-xl-2 col-lg-6 col-6 d-flex align-items-center">
                <span id="czas" class="fs-1"></span>
            </div>
        </div>
    </header>

    <main class="kontener-glowny container-fluid flex-grow-1 d-flex flex-column py-2 px-2 px-lg-4">

        <div class="row g-1 gorny-row">
            @php /* kalendarz iframe */ @endphp
            <div class="col-lg-4 col-12 kalendarz-kol">
                <div class="panel">
                    <iframe src="{{ asset('kalendarz-iframe.html') }}" title="Kalendarz"></iframe>
                </div>
            </div>

            @php /* informacja i tabelka wydarzenia */ @endphp
            <div class="col-lg-4 col-12">
                <div class="panel">
                    <div class="panel-sekcja informacje">
                        <div class="informacje-wrapper">
                            <div class="wazne-informacje bg-danger mb-2 py-1 text-center text-white fw-bold fs-2">WAŻNA INFORMACJA</div>
                            <div class="text-center text-primary fs-4 fw-bold px-2">MATURY!!!!</div>
                        </div>
                    </div>
                    <div class="panel-sekcja wydarzenia">
                        <table class="mx-auto">
                            <tr>
                                <th colspan="2" class="fs-4">📅 Dzisiejsze wydarzenia</th>
                            </tr>
                            <tr>
                                <td>12:30</td>
                                <td>konkurs</td>
                            </tr>
                            <tr>
                                <td>14:15</td>
                                <td>zajęcia dodatkowe</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            @php /* qr/cytat i zastepstwa */ @endphp
            <div class="col-lg-4 col-12">
                <div class="panel">
                    <div class="panel-sekcja qr-cytat">
                        <img src="{{ asset('img/qr.png') }}" alt="Kod QR do strony szkoły">
                        <span id="cytat"></span>
                    </div>
                    <div class="panel-sekcja zastepstwa">
                        @if($zastepstwo->isNotEmpty())
                            @foreach($zastepstwo as $zast)
                                <a href="{{ Storage::disk('public')->url($zast->url_zdjecia) }}" class="zastepstwaGLightbox">
                                    <img src="{{ Storage::disk('public')->url($zast->url_zdjecia) }}" alt="Zastępstwo">
                                </a>
                            @endforeach
                        @else
                            <span class="fw-bold fs-5">Brak zastępstw na dziś</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-1 dolny-row">
            @php /* galeria zdjec */ @endphp
            <div class="col-lg-8 col-12 galeria-wydarzenia">
                <div class="panel">
                    <section id="galeria-zdjec" class="splide" aria-label="Galeria zdjęć">
                        <div class="splide__track">
                            <ul class="splide__list">
                                @foreach ($wydarzenia as $wydarzenie)
                                    <li class="splide__slide">
                                        <a href="{{ Storage::disk('public')->url($wydarzenie->url_zdjecia) }}" class="wydarzeniaGSplide">
                                            <img src="{{ Storage::disk('public')->url($wydarzenie->url_zdjecia) }}"
                                                alt="{{ $wydarzenie->opis_wydarzenia }}">
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </section>
                </div>
            </div>

            <!-- 7. plany lekcji -->
            <div class="col-lg-4 col-12 div-plan-lekcji">
                <div class="panel">
                    <section id="planyLekcji" class="splide" aria-label="Plany lekcji">
                        <div class="splide__track">
                            <ul class="splide__list">
                                @foreach ($planyLekcji as $planLekcji)
                                    <li class="splide__slide">
                                        <a href="{{ Storage::disk('public')->url($planLekcji->url_zdjecia) }}" class="planyLekcjiGSplide">
                                            <img src="{{ Storage::disk('public')->url($planLekcji->url_zdjecia) }}"
                                                class="img-plan-lekcji"
                                                alt="{{ $planLekcji->klasa }}">
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
    <footer class="stopka px-2 py-2">© {{ date('Y') }} Wszelkie prawa zastrzeżone.</footer>
    @vite('resources/js/dashboard.js')
<!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
