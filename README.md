<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## co zrobic by dzialalo
<ol>
    <li>skopiuj .env.example i nazwij kopie .env, w .env tam gdzie jest DB_PASSWORD i inne tego typu rzeczy to ustaw tak jak masz w bazie danych, baza danych jaka podaz musi na serwerze istniec</li>
    <br/>
    <li>musisz miec zainstalowanego php konsolowego (chyba powinien byc razem z xamppem), zeby sprawdzic czy jest w konsoli wpisz "php -v" i powinno napisac wersje</li>
    <br/>
    <li>musisz miec zainstalowanego composer, nodejs i npm, jak zainstalujesz te rzeczy na system to w konsoli wejdz w folder z tym projektem (ZSP1Laravel/) i wpisz komendy "composer install" i "npm install", zeby zainstalowalo potrzebne rzeczy 
    <p style="color: red;">UWAGA: Jesli po uzyciu npm install pojawi sie blad w stylu - "2 critical vulnerabilities, shell-quote" to usun z folderu pliki package-lock.json i node_modules oraz w pliku package.json na sam koniec dodaj</p><pre> 
    "overrides": {
        "shell-quote": "^1.12.0"
    }</pre>(ale powinno juz to chyba tam byc wiec blad nie wystapi)<p style="color: red;">i sproboj ponownie "npm install"</p>"</li>
    <br/>
    <li>jak masz serwer bazy, i na nim baze o nazwie taka jaka podales w .env to w folderze z projektem, w konsoli wpisz "php artisan migrate", to doda tabele jakie laravel potrzebuje do tej bazy danych z .env</li>
</ol>
