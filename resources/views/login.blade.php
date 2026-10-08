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
    <div class="row">
        <div class="col-lg-5 col-md-8 col-sm-9 col-10 text-center" style="margin: auto;">
            <div class="mt-5 text-center">
                <a href="{{ route('dashboard') }}" class="fs-5">Powrót</a>
            </div>

            <form method="POST" action="{{ route('login') }}" class="bg-light px-5 py-4" style="margin: auto; border: 2px solid grey; border-radius: 25px;">
                @csrf

                <img class="mt-4 mb-4" src="{{ asset('img/logo.png') }}" height="100">
                <h1 class="h3 mb-3 font-weight-normal">Logowanie</h1>

                <label for="uzytkownik" class="sr-only">Użytkownik</label>
                <input 
                    type="text" id="uzytkownik" 
                    class="form-control" placeholder="Użytkownik" 
                    name="name" value="{{ old('name') }}"
                    required autofocus>

                <label for="haslo" class="sr-only">Hasło</label>
                <input type="password" id="haslo" placeholder="Hasło" class="form-control" name="password" required>

                <div class="mt-3">
                    <button type="submit" class="btn btn-lg btn-primary btn-block">Zaloguj</button>
                </div>

                @if ($errors->any())
                    <ul class="px-5 py-1 my-2 d-inline-block text-align-left" style="background-color: #FAE4E6; border-radius: 25px;">
                        @foreach ($errors->all() as $error)
                            <li class="my-2 text-danger">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
            </form>
            <span class="text-secondary">© 2026 Wszelkie prawa zastrzeżone.</span>
        </div>
    </div>
</body>
</html>