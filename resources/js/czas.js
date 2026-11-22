function ileDoDaty(rok, miesiac, dzien) {

    return Math.round((new Date(rok, miesiac, dzien) - new Date().setHours(0, 0)) / 86400000);

}

function dzienRoku() {

    const dzis = new Date();

    const data = dzis.toLocaleDateString("pl-PL", { timezone: "Europe/Warsaw", weekday: "long", day: "numeric", month: "long", year: "numeric" });
    const dzienRoku = (ileDoDaty(dzis.getFullYear(), 0, 0)) * -1;
    //                                                      ^ mnozy razy -1 bo inaczej dzien bylby liczba ujemna

    document.getElementById("dzien").textContent = data[0].toUpperCase() + data.slice(1);
    document.getElementById("dzienRoku").textContent = "Dzień roku: " + dzienRoku;

}
function odliczanieDo() {
    const datyJson = `${import.meta.env.VITE_APP_URL}/storage/datySwiat.json`;
    fetch(datyJson)
        .then(response => {
            if (!response.ok) {
                throw new Error(`Problem z odczytaniem ${datyJson}`);
            }
            return response.json();
        })
        .then(data => {

            const swieta = [
                { tekst: "Dnia Nauczyciela",        dzien: new Date(data.dzien_nauczyciela) },
                { tekst: "przerwy świątecznej",     dzien: new Date(data.przerwa_swiateczna) },
                { tekst: "ferii",                   dzien: new Date(data.ferie) },
                { tekst: "Wielkanocy",              dzien: new Date(data.wielkanoc) },
                { tekst: "końca roku maturzystów",  dzien: new Date(data.koniec_maturzysci) },
                { tekst: "końca roku szkolnego",    dzien: new Date(data.koniec_roku_szkolnego) },
            ];

            const dzis = new Date();
            const najblizsze = swieta.find( (swieto) => dzis <= swieto.dzien)

            const html_span = document.getElementById('doSwieta');

            if (najblizsze) {
                const dni = ileDoDaty(
                    najblizsze.dzien.getFullYear(), 
                    najblizsze.dzien.getMonth(), 
                    najblizsze.dzien.getDate()
                );

                html_span.textContent = `Do ${najblizsze.tekst}: ${dni} dni`;
            } else {
                html_span.textContent = "Wakacje!!!";
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




