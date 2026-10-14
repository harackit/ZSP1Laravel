<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Pierwsza konfiguracja

1. Do działania projektu wymagane jest zainstalowanie **composer** oraz **node.js** i **npm** <sub><sup>(co czasami jest instalowane razem z nodejs)</sup></sub>, a także konsolowego PHP <sup><sub>(sprawdź czy masz wpisując w konsoli php -v)</sub></sup><br/><br/>

2. Skopiuj *.env.example* jako *.env* i zmień konfigurację bazy danych (pola DB_*) na takie, jakie masz na swoim serwerze/komputerze.<br/><br/>

3. W konsoli otwórz folder z projektem i wpisz polecenia `npm install` oraz `composer install` , by zainstalować wymagane do działania pakiety.<br/><br/>

4. W konsoli z otwartym folderem projektu, wpisz `php artisan migrate --seed`, co utworzy strukturę tabel w podanej przez ciebie w .env bazie danych oraz doda jednego użytkownika <sub><sup>(nazwa: test , hasło:qwe123).</sup></sub> Następnie wpisz `php artisan key:generate`<br/><br/>

5. W przeglądarce scieżką która będzie widoczna jest <b>ZSP1Laravel/public</b>, lecz pliki z php, css i js znajdują się w <b>ZSP1Laravel/resources</b>. Zdjęcia i plik do &lt;iframe> znajdują się jednak w folderze public/<br/><br/>

6. By włączyć tryb testowy, w konsoli z folderem projektu wpisz `npm run dev`

## Konfiguracja wersji końcowej na serwerze

1. Wstępna konfiguracja wygląda dokładnie tak samo, ale composer, npm i node.js powinny już być zainstalowane.<br/><br/>

2. Na serwerze, zamiast "*npm run dev*", wpisać należy `npm run build`, co utworzy w folderze **public/** folder **public/build** , przez co CSS, JS i inne rzeczy powinny działać.<br/><br/>

#### Zastrzeżenia

Pliki znajdujące się w .gitignore nie są wysyłane do projektu. Znajdują się tam m&period;in. folder *public/build* oraz *.env*. Z każdym pull/clone możliwe, że bedzie trzeba je modyfikować lub utworzyć ponownie.
Podobnie może być z bazą danych, jeśli w nowszej wersji zmodyfikowano jej strukturę lub dodano seedery, trzeba wpisać w konsoli z folderem projektu `php artisan migrate:fresh --seed`