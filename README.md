<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Pierwsza konfiguracja

1. Do działania projektu wymagane jest zainstalowanie **composer** oraz **node.js** i **npm**, a także konsolowego PHP<br/><br/>

2. Skopiuj *.env.example* jako *.env* i zmień konfigurację bazy danych (pola DB_*) na takie, jakie masz na swoim serwerze/komputerze. Zmień także APP_URL na adres ip/domene serwera <br/><br/>

3. W konsoli otwórz folder z projektem i wpisz polecenia `npm install` oraz `composer install` , by zainstalować wymagane do działania pakiety.<br/><br/>

4. W konsoli z otwartym folderem projektu, wpisz `php artisan migrate:fresh --seed`, co utworzy strukturę tabel w podanej przez ciebie w .env bazie danych oraz doda jednego użytkowników <sub>(1. test@localhost.local 2.admin@Localhost.local ; haslo: qwe123)</sub> Następnie wpisz `php artisan key:generate`<br/><br/>

5. W przeglądarce scieżką która będzie widoczna jest <b>ZSP1Laravel/public</b>, lecz pliki z stroną główną, css i js znajdują się w <b>ZSP1Laravel/resources</b>. Zdjęcia znajdują się jednak w folderze public/img<br/><br/>

6. Zdjęcia planów lekcji, wydarzeń i zastępstw, znajdują się w <b>storage/app/public/img/</b>. W storage/app/public/ jest też JSON z datami świąt. Komenda `php artisan Storage:link` sprawia, że <b>storage/app/public</b> zostaje powiązany do <b>public/storage</b>, przez co rzeczy tam mogą być odczytane i używane.<br/><br/>

7. By włączyć tryb testowy, w konsoli z folderem projektu wpisz `npm run dev`

## Konfiguracja wersji końcowej na serwerze

1. Wstępna konfiguracja wygląda dokładnie tak samo.<br/><br/>

2. Na serwerze, zamiast "*npm run dev*", wpisać należy `npm run build`, co utworzy w folderze **public/** folder **public/build** , do którego importowany jest CSS i JS, by działaly z poziomy folderu public/<br/><br/>

## Logowanie i admin panel

Używa Filament. Strona do logowania to <b>{URL}/panel/login</b>
Panel admina to <b>{URL}/panel-admin/</b>, zwykły użytkownik: <b>{URL}/panel/</b>

---

#### Zastrzeżenia

Pliki znajdujące się w .gitignore nie są wysyłane do projektu. Znajdują się tam m&period;in. folder *public/build* oraz *.env*. Jeśli CSS/JS został zmieniony w nowszej wersji to przy pull będzie trzeba ponowanie wpisać `npm run dev`. Tak samo jeśli w nowej wersji zmieniono coś w .env.example, to należy przeprowadzić procedurę z kroku drugiego konfiguracji ponownie.

Podobnie jest z bazą danych, jeśli w nowszej wersji zmodyfikowano jej strukturę lub dodano seedery, factories, etc. trzeba wpisać w konsoli z folderem projektu `php artisan migrate:fresh --seed`, by wprowadziło zmiany do bazy.


#### Przydatne komendy
<table>
<tbody>
    <tr>
        <th>php artisan vendor:publish --tag=filament-config</th>
        <td>?</td>
    </tr>
    <tr>
        <th>php artisan Storage:link</th>
        <td>wlaczenie storage
    </tr>
    <tr>
        <th>php artisan migrate:fresh --seed</th>
        <td>na nowo generuje tabele w bazie i zasiedla je rekordami z seederów. <b>UWAGA:</b> nie należy używać tego na działąjącym na poważnie już systemie, bo usunie dane z bazy.</td>
    </tr>
    <tr>
        <th>php artisan make:filament-resource</th>
        <td>służy do tworzenia storn zarządzenia w panelach filamentu</td>
    </tr>
    <tr>
        <th>npm update</th>
        <td rowspan="2">aktualizuje pakiety zainstalowane composerem (pakiety php) lub zainstalowane npm (pakiety js)</td>
    </tr>
    <tr>
        <th>composer update</th>
    </tr>
</tbody>
</table>
