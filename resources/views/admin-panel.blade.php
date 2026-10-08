<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css bootstrapa-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600&display=swap" rel="stylesheet">
    <title>Zalogowano</title>
</head>
<body>
    <form method="POST" action="{{ route('wyloguj') }}" class="m-0">
        @csrf
        <button type="submit" class="btn btn-primary">Wyloguj</button>
    </form>

    <span>Zalogowano jako {{ Auth::user()->name }}</span>
</body>
</html>