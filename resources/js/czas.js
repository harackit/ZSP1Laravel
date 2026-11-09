function ileDoDaty(rok, miesiac, dzien) {

    return Math.round((new Date(rok, miesiac, dzien) - new Date().setHours(0, 0)) / 86400000);

}

function dzienRoku() {

    const dzis = new Date();

    const data = dzis.toLocaleDateString("pl-PL", { timezone: "Europe/Warsaw", weekday: "long", day: "numeric", month: "long", year: "numeric" });
    const dzienRoku = -ileDoDaty(dzis.getFullYear(), 0, 0);
    //   ^
    //   |
    //   MUSI BYC MINUS BO INACZEJ POKAZE DZIEN ROKU NA MINUSIE

    document.getElementById("dzien").textContent = data[0].toUpperCase() + data.slice(1);
    document.getElementById("dzienRoku").textContent = "Dzień roku: " + dzienRoku;

}
function odliczanieDo() {
    const datyJson = '/storage/datySwiat.json';
    fetch(datyJson)
        .then(response => {
            if (!response.ok) {
                throw new Error(`Problem z odczytaniem ${datyJson}`);
            }
            return response.json();
        })
        .then(data => {
            const dzis = new Date();

            const dzien_nauczyciela = new Date(Date.parse(data.dzien_nauczyciela));
            const przerwa_swiateczna = new Date(Date.parse(data.przerwa_swiateczna));
            const ferie = new Date(Date.parse(data.ferie));
            const wielkanoc = new Date(Date.parse(data.wielkanoc));
            const koniec_maturzysci = new Date(Date.parse(data.koniec_maturzysci));
            const koniec_roku_szkolnego = new Date(Date.parse(data.koniec_roku_szkolnego));

            const html_span = document.getElementById('doSwieta');

            if (dzis <= dzien_nauczyciela) {
                html_span.textContent = 
                    "Do przerwy świątecznej: " +
                    ileDoDaty(dzien_nauczyciela.getFullYear(), dzien_nauczyciela.getMonth(), dzien_nauczyciela.getDate())
                    + " dni";
            } else if (dzis <= przerwa_swiateczna) {
                html_span.textContent = 
                    "Do przerwy świątecznej: " +
                    ileDoDaty(dzien_nauczyciela.getFullYear(), przerwa_swiateczna.getMonth(), przerwa_swiateczna.getDate())
                    + " dni";
            } else if (dzis <= ferie) {
                html_span.textContent = 
                    "Do przerwy świątecznej: " +
                    ileDoDaty(ferie.getFullYear(), ferie.getMonth(), ferie.getDate())
                    + " dni";
            } else if (dzis <= wielkanoc) {
                html_span.textContent = 
                    "Do przerwy świątecznej: " +
                    ileDoDaty(wielkanoc.getFullYear(), wielkanoc.getMonth(), wielkanoc.getDate())
                    + " dni";
            } else if (dzis <= koniec_maturzysci) {
                html_span.textContent = 
                    "Do przerwy świątecznej: " +
                    ileDoDaty(koniec_maturzysci.getFullYear(), koniec_maturzysci.getMonth(), koniec_maturzysci.getDate())
                    + " dni";
            } else if (dzis <= koniec_roku_szkolnego) {
                html_span.textContent = 
                    "Do przerwy świątecznej: " +
                    ileDoDaty(koniec_roku_szkolnego.getFullYear(), koniec_roku_szkolnego.getMonth(), koniec_roku_szkolnego.getDate())
                    + " dni";
            } else {
                console.log(`${dzis} nie jest mniejsze od żadnego z dni`);
            }

        })
        .catch(error => {
            console.error("Błąd z odczytywaniem dat: ", error);
        })
}

function GodzinaMinuty() {
    const czas = new Date().toLocaleTimeString("pl-PL", { timezone: "Europe/Warsaw", hour: "2-digit", minute: "2-digit" });

    let czasSpan = document.getElementById("czas");
    czasSpan.innerHTML = czas;
}

dzienRoku();
setInterval(dzienRoku, 3600000); // co godzine

odliczanieDo()
setInterval(odliczanieDo, 3600000);

GodzinaMinuty();
setInterval(GodzinaMinuty, 500); // co 0,5s




