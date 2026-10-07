function losowaLiczba(max) {
    return Math.floor(Math.random() * max);
}

function losujCytaj() {
    const cytaty = [
        {autor: "Piotr Szrenawski", cytat: "Dobra szkoła nie produkuje geniuszy, tylko zdrowe społeczeństwo"},
        {autor : "Czesław Banach", cytat: "Życie to nieustanna szkoła lekcji udzielanych i przyjmowanych"},
        {autor: "Jan Amos Komeński", cytat: "Całe życie jest szkołą"},
        {autor: "Claude Bernard", cytat: "Kto nie doznaje tortury niewiedzy, nie odczuje też nigdy radości odkrycia"},
        {autor: "Conrad Hall", cytat: "Zawsze jesteś uczniem, nigdy mistrzem. Musisz ciągle iść do przodu"}
    ];

    var wylosowany = cytaty[losowaLiczba(cytaty.length)];
    document.getElementById("cytat").innerHTML = wylosowany.cytat + " - " + wylosowany.autor;
}

losujCytaj();
setInterval(losujCytaj(), 30000); //zmienia cytat co 0,5h

