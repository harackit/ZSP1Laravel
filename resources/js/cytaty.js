function losowaLiczba(max) {
    return Math.floor(Math.random() * max);
}

function losujCytaj() {
    const cytaty = [
        {autor: "Piotr Szrenawski", cytat: "Dobra szkoła nie produkuje geniuszy, tylko zdrowe społeczeństwo"},
        {autor: "Czesław Banach", cytat: "Życie to nieustanna szkoła lekcji udzielanych i przyjmowanych"},
        {autor: "Jan Amos Komeński", cytat: "Całe życie jest szkołą"},
        {autor: "Claude Bernard", cytat: "Kto nie doznaje tortury niewiedzy, nie odczuje też nigdy radości odkrycia"},
        {autor: "Conrad Hall", cytat: "Zawsze jesteś uczniem, nigdy mistrzem. Musisz ciągle iść do przodu"},
        {autor: "Isaac Newton", cytat: "Co my wiemy, to tylko kropelka. Czego nie wiemy, to cały ocean"},
        {autor: "Malcolm S. Forbes", cytat: "Celem edukacji jest zastąpienie pustego umysłu umysłem otwartym"},
        {autor: "Seneka Młodszy", cytat: "Uczymy się nie dla szkoły, lecz dla życia"},
        {autor: "Stefan Żeromski", cytat: "Nauka jest jak niezmierne morze. Im więcej jej pijesz, tym bardziej jesteś spragniony"},
        {autor: "Platon", cytat: "Wiedza jest drugim słońcem dla ludzi."},
        {autor: "Alexandra K. Trenfor", cytat: "Najlepsi nauczyciele to ci, którzy pokazują ci, gdzie patrzeć, ale nie mówią, co masz zobaczyć"},
        {autor: "Konfucjusz", cytat: "Powiedz mi, a zapomnę. Pokaż mi, a zapamiętam. Pozwól mi zrobić, a zrozumiem"},
        {autor: "Benjamin Franklin", cytat: "Inwestowanie w wiedzę zawsze przynosi największe zyski"},
        {autor: "Thomas Dewar", cytat: "Umysły są jak spadochrony – działają tylko wtedy, gdy są otwarte"},
        {autor: "Daniel J. Boorstin", cytat: "Szkoła uczy cię tego, o czym nawet nie wiedziałeś, że nie wiesz"},
        {autor: "Lew Tołstoj", cytat: "Nauka to pokarm dla rozumu"},
        {autor: "Albert Epstein", cytat: "Jeśli teoria nie zgadza się z praktyką, to źle dla teorii"},
        {autor: "Bill Beattie", cytat: "Celem edukacji powinno być uczenie jak myśleć, a nie co myśleć"},
        {autor: "Louis Pasteur", cytat: "Nauka nie ma żadnej ojczyzny, gdyż wiedza ludzka obejmuje cały świat"},
        {autor: "Vernon Howard", cytat: "Zawsze idź przez życie tak, jakbyś miał coś nowego do nauczenia się, a tak się stanie"},
        {autor: "Konfucjusz", cytat: "Kto nabytą wiedzę pielęgnuje, a nową bez przerwy zdobywa, ten może być nauczycielem innych"},
        {autor: "Mark Twain", cytat: "Zacną rzeczą jest uczyć się, lecz jeszcze zacniejszą – nauczać"},
        {autor: "Matthew Quick", cytat: "Świat byłby lepszym miejscem gdyby medale przyznawano wspaniałym nauczycielom a nie żołnierzom, którzy zabijali wrogów na wojnie"},
        {autor: "Tom J. Connelly", cytat: "Czasami ten kto zadaje pytanie zostaje wyśmiany na  5 minut, ale ten kto w ogóle nie pyta, jest wiecznym głupcem"},
        {autor: "Henry Adams", cytat: "Nauczyciel ociera się o wieczność. Nigdy nie może stwierdzić, gdzie kończy się jego wpływ"},
    ];

    var wylosowany = cytaty[losowaLiczba(cytaty.length)];
    document.getElementById("cytat").innerHTML = "<b><i>" + wylosowany.cytat + "</i></b><br> - " + wylosowany.autor;
}

losujCytaj();
setInterval(losujCytaj, 1800000); //zmienia cytat co 0,5h

