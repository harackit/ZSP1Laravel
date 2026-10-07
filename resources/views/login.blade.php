<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css bootstrapa-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600&display=swap" rel="stylesheet">
    <title>Logowanie</title>
</head>
<body>
    <div class="mt-5 text-center">
        <a href="{{ route('dashboard') }}" class="fs-5">Powrót</a>
    </div>
    <div class="row">
        <div class="col-lg-5 col-md-8 col-sm-9 col-10 text-center" style="margin: auto;">
            <form method="" action="" style="margin: auto; border: 2px solid grey; border-radius: 25px;" class="bg-light px-5 py-4">
            @csrf

            <img class="mt-4 mb-4" src="{{ asset('img/logo.png') }}" height="100">
            <h1 class="h3 mb-3 font-weight-normal">Logowanie</h1>

            <label for="uzytkownik" class="sr-only">Użytkownik</label>
            <input type="text" id="uzytkownik" class="form-control" placeholder="Użytkownik" required autofocus>

            <label for="haslo" class="sr-only">Hasło</label>
            <input type="password" id="haslo" placeholder="Hasło" class="form-control">

            <div class="mt-3">
                <button class="btn btn-lg btn-primary btn-block">Zaloguj</button>
            </div>
        </form>
        </div>
    </div>
</body>
</html>