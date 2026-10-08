<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/dashboard.css')
    <!-- css bootstrapa-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600&display=swap" rel="stylesheet">
    <!-- favicon -->
    <link rel="icon" type="image/png" href="/img/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/img/favicon/favicon.svg" />
    <link rel="shortcut icon" href="/img/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="MyWebSite" />
    <link rel="manifest" href="/img/favicon/site.webmanifest" />
    <title>Zespół Szkół Ponadpodstawowych nr 1 w Kępnie</title>
</head>

<body class="d-flex flex-column">
    <header class="naglowek px-5 py-4 h-1">
        <div class="row d-flex align-items-center">
            <div class="col-lg-1 col-2 d-flex align-items-center">
                <img src="{{ asset('img/logo3.png') }}" class="img-logo img-fluid">
            </div>
            <div class="col-lg-7 col-10 d-flex align-items-center">
                <span class="fw-bold fs-2 nazwa-szkoly">Zespół Szkół Ponadpodstawowych nr 1 w Kępnie</span>
            </div>
            <div class="col-lg-2 col-6 d-flex align-items-center">
                <img id="pogoda-ikona">
                <span id="pogoda">Ładowanie pogody...</span>
            </div>
            <div class="col-lg-2 col-6 d-flex align-items-center">
                <span id="czas" class="fs-1"></span>
            </div>
        </div>
    </header>

    <main class="kontener-glowny container-fluid flex-grow-1 d-flex flex-column py-2 px-4">

        <div class="row bg-light flex-grow-0" style="height: 62%;">
            <div class="col-lg-4 col-12 kalendarz-kol">         
                    <iframe src="kalendarz-iframe.html" style="width:100%; height:100%; border:0;"></iframe>
            </div>
            <div class="col-lg-4 col-12 h-100">
                <div class="row py-1" style="height: 50%; border-bottom: 1px solid gray;">
                    <div class="informacje-wrapper">
                        <div class="row bg-danger my-2 mx-2 py-1 wazne-informacje">
                            <span class="text-center fw-bold fs-2" style="color:white;">WAŻNA INFORMACJA</span>
                        </div>
                        <div class="row">
                            <span class="text-center text-primary fs-4 fw-bold">TOALETY W BLOKU B I C SĄ NIECZYNNE</span>
                        </div>
                    </div>
                </div>
                <div class="row" style="height: 50%;">
                    konkursy itp
                </div>
            </div>
            <div class="col-lg-4 col-12 d-flex flex-column">
                <div class="nested-row" style="height: 25%; border-bottom: 1px solid black;">
                    <img src="img/qr.png" style="max-height: 100%;">
                    <span id="cytat" style="font-size: 10px;"></span>
                </div>
                <div class="nested-row" style="height: 75%;">
                    ZASTEPSTWA
                </div>
            </div>
        </div>
        <div class="row flex-grow-0" style="height: 38%;">
            <div class="col-md-8 col-12">
                GALERIA, WYDARZENIA - SCROLL
            </div>
            <div class="col-lg-4 col-12">
                <img src="img/VTI.png" class="img-fluid">
            </div>
        </div>
    </main>

    <footer class="stopka px-2 py-2">© 2026 Wszelkie prawa zastrzeżone.</footer>
    @vite('resources/js/dashboard.js')
<!-- skrypty bootstrapa -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>