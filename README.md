<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Pierwsza konfiguracja

<ol>
    <li>Do działania projektu wymagane jest zainstalowanie <b>"composer"</b> oraz <b>"node.js"</b> i <b>"npm"</b>, a także konsolowego PHP (sprawdź czy masz wpisując w konsoli php -v)</li>
    <br>
    <li>Skopiuj .env.example jako .env i zmień konfigurację bazy danych (pola DB_*) na takie, jakie masz na swoim serwerze/komputerze.</li>
    <br>
    <li>W konsoli otwórz folder z projektem i wpisz polecenia <b>npm install</b> oraz <b>composer install</b> , by zainstalować wymagane do działania pakiety.</li>
    <br>
    <li>W konsoli z otwartym folderem projektu, wpisz <b>php artisan migrate --seed</b>, co utworzy strukturę tabel w podanej przez ciebie w .env bazie danych oraz doda jednego użytkownika (test , hasło:qwe123). Następnie wpisz <b>php artisan key:generate</b></li>
    <br>
    <li>W przeglądarce scieżką która będzie widoczna jest <b>ZSP1Laravel/public</b>, lecz pliki z php, css i js znajdują się w <b>ZSP1Laravel/resources</b>. Zdjęcia i plik do &lt;iframe> znajdują się jednak w folderze public/</li>
    <br>
    <li>By włączyć tryb testowy, w konsoli VSC wpisz <b>npm run dev</b></li>
</ol>

## Konfiguracja wersji końcowej na serwerze

<ol>
    <li>Wstępna konfiguracja wygląda dokładnie tak samo, ale composer, npm i node.js powinny już być zainstalowane.</li>
    <br>
    <li>Na serwerze, zamiast "npm run dev", wpisać należy <b>npm run build</b>, to utworzy w folderze <b>public/</b> folder <b>public/build</b> , przez co CSS, JS i inne rzeczy powinny działać.</li>
</ol>