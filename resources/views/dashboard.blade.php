<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- w tym js ladowany jest zarowno JS jak i CSS i bootstrap --}}
    @vite('resources/js/dashboard.js')
    {{-- favicony --}}
    <link rel="icon" type="image/png" href="/img/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/img/favicon/favicon.svg" />
    <link rel="shortcut icon" href="/img/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="Zespół Szkół Ponadpodstawowych nr 1 w Kępnie" />
    <link rel="manifest" href="/img/favicon/site.webmanifest" />
    <title>Zespół Szkół Ponadpodstawowych nr 1 w Kępnie</title>
</head>

<body class="d-flex flex-column">
    {{-- naglowek --}}
    <header class="naglowek px-3 px-lg-5 py-2 py-lg-3">
        <div class="row g-2 align-items-center">
            <div class="col-xl-1 col-lg-2 col-md-2 col-3 d-flex align-items-center">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('img/logo3.png') }}" class="img-logo img-fluid" alt="Logo szkoły">
                </a>        
            </div>
            <div class="col-xl-7 col-lg-10 col-9 d-flex align-items-center">
                <span class="fw-bold fs-3 nazwa-szkoly">Zespół Szkół Ponadpodstawowych nr 1 w Kępnie</span>
            </div>
            <div class="col-xl-2 col-lg-6 col-6 d-flex align-items-center">
                <img id="pogoda-ikona" class="img-fluid" loading="lazy" alt="Piktogram pogody">
                <span id="pogoda">Ładowanie pogody...</span>
            </div>
            <div class="col-xl-2 col-lg-6 col-6 d-flex align-items-center">
                <span id="czas" class="fs-1"></span>
            </div>
        </div>
    </header>

    <main class="kontener-glowny container-fluid flex-grow-1 d-flex flex-column py-2 px-2 px-lg-4">
        <div class="row glowny-uklad">
            {{-- wszystko oprocz qr/cytat i zastepstw --}}
            <div class="col-lg-8 col-12 lewy-col">
                <div class="row lewy-gorny-row">
            
                    {{-- plany lekcji i odliczanie dni --}}
                    <div class="col-lg-6 col-12 div-plan-lekcji">
                        <div class="panel">
                            <div class="dni m-2">
                                <h6 id="dzien" class="m-0 fw-bold fs-4"></h6>
                                <span id="dzienRoku"></span><br>
                                <span id="doSwieta"></span>
                            </div>
                            <div class="splide-wrapper">
                                <section id="planyLekcji" class="splide" aria-label="Plany lekcji">
                                    <div class="splide__track">
                                        <ul class="splide__list">
                                            @foreach ($plany_lekcji as $plan)
                                                <li class="splide__slide">
                                                    <a href="{{ Storage::disk('public')->url($plan->url_zdjecia) }}" class="planyLekcjiGSplide">
                                                        <img src="{{ Storage::disk('public')->url($plan->url_zdjecia) }}"
                                                            class="img-plan-lekcji"
                                                            alt="{{ $plan->klasa }}">
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>

                    {{-- informacje i tabelka wydarzenia --}}
                    <div class="col-lg-6 col-12 informacjewydarzenia-col">
                        <div class="panel informacje-row">
                                <div class="informacje-wrapper">
                                    @if($wazne_informacje->isNotEmpty())
                                        <div class="wazne-informacje bg-danger mb-1 py-1 text-center text-white fw-bold fs-3">
                                            WAŻNA INFORMACJA
                                        </div>
                                        @foreach($wazne_informacje as $tekst)
                                            <div class="text-primary text-center fs-5 fw-bold">{!! str($tekst->wazne_informacje)->sanitizeHtml() !!}</div>
                                        @endforeach
                                    @else
                                        <div class="pusty fs-2 fw-bold text-secondary">Żadnych informacji na dziś</div>
                                    @endif
                                </div>
                        </div>
                        <div class="panel zblizajacewydarzenia-row">
                                @if($zblizajace_wydarzenia_tabelka->isNotEmpty())
                                    <table class="mx-auto dzisiejszeWydarzeniaTabelka">
                                        <tr>
                                            <th colspan="2" class="fs-3 text-center">📅 Najbliższe wydarzenia</th>
                                        </tr>
                                    @foreach($zblizajace_wydarzenia_tabelka as $wiersz)
                                        <tr>
                                            <td class="dzien_czas_wydarzenia">
                                                {{ $wiersz->dzien_czas_wydarzenia->translatedFormat('j F') }}
                                                <b>{{ $wiersz->dzien_czas_wydarzenia->format('H:i')}}</b>
                                            </td>
                                            <td>{{ $wiersz->nazwa_wydarzenia }}</td>
                                        </tr>
                                    @endforeach
                                    </table>
                                @else
                                    <div class="pusty fs-1 text-secondary fs-1">Brak wydarzeń na horyzoncie</div>
                                @endif
                        </div>
                    </div>
                </div>

                <div class="row lewy-dolny-row">
                    {{-- galeria zdjec --}}
                    <div class="col-12 galeria-wydarzenia">
                        <div class="panel">
                            <div class="splide-wrapper">
                                <section id="galeria-zdjec" class="splide" aria-label="Galeria zdjęć">
                                    <div class="splide__track">
                                        <ul class="splide__list">
                                            @foreach ($wydarzenia_galeria as $wydarzenie)
                                                @foreach($wydarzenie->zdjecia ?? [] as $zdjecie)
                                                    <li class="splide__slide">
                                                        <a href="{{ Storage::disk('public')->url($zdjecie) }}" class="wydarzeniaGSplide">
                                                            <img src="{{ Storage::disk('public')->url($zdjecie) }}"
                                                                alt="{{ $wydarzenie->opis_wydarzenia }}">
                                                        </a>
                                                    </li>
                                                @endforeach
                                            @endforeach
                                        </ul>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- qr/cytat i zastepstwa --}}
            <div class="col-lg-4 col-12 prawy-col">
                <div class="prawy-gorny-row">
                        <div class="panel qr-cytat">
                            <img src="{{ asset('img/qr.png') }}" alt="Kod QR do strony szkoły">
                            <span id="cytat"></span>
                        </div>
                </div>
                <div class="prawy-dolny-row">
                    <div class="panel zastepstwa">
                        @if($zastepstwo_dzis->isNotEmpty())
                            @foreach($zastepstwo_dzis as $zast)
                                <a href="{{ Storage::disk('public')->url($zast->url_zdjecia) }}" class="zastepstwoDzisGLightbox">
                                    <img src="{{ Storage::disk('public')->url($zast->url_zdjecia) }}" alt="Zastępstwo na dziś">
                                </a>
                            @endforeach
                        @else
                            <div class="pusty text-secondary fs-3 fw-bold">Brak zastępstw na dziś</div>
                        @endif
                        @if($zastepstwo_jutro->isNotEmpty())
                            @foreach($zastepstwo_jutro as $zast)
                                <a href="{{ Storage::disk('public')->url($zast->url_zdjecia) }}" class="zastepstwoJutroGLightbox">
                                    <img src="{{ Storage::disk('public')->url($zast->url_zdjecia) }}" alt="Zastępstwo na jutro">
                                </a>
                            @endforeach
                        @else
                            <div class="pusty text-secondary fs-3 fw-bold">Brak zastępstw na jutro</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="stopka px-2 py-2">© {{ date('Y') }} Wszelkie prawa zastrzeżone.</footer>

    {{-- SKRYPT NA ODSWIEZANIE STRONY GDY DODA LUB ZMIENI SIE COS W BAZIE
    ZA CACHOWANIE WERSJI ODPOWIADA App/Models/ZmianaDanych.php --}}
    <script>
        let aktualnaWersja = null;
        async function sprawdzWersje() {
            try {
                const odpowiedz = await fetch('/wersja', {cache: 'no-store'});
                if(!odpowiedz.ok) {
                    console.error("Błąd - nie znaleziono wersji strony z ", odpowiedz);
                    return;
                }
                
                const dane = await odpowiedz.json();
                const wersja = dane.wersja;

                if(aktualnaWersja !== null && aktualnaWersja !== wersja) {
                    window.location.reload();
                    return;
                }
                aktualnaWersja = wersja;
            } catch(e) {
                // proboje jeszcze raz
            }
        }

        sprawdzWersje();
        setInterval(sprawdzWersje, 15000); // co 15s
    </script>
</body>
</html>
