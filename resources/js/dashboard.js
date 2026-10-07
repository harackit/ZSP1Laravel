// https://gist.github.com/farhad-taran/f487a07c16fd53ee08a12a90cdaea082
function runAtSpecificTimeOfDay(hour, minutes, func)
{
  const twentyFourHours = 86400000;
  const now = new Date();
  let eta_ms = new Date(now.getFullYear(), now.getMonth(), now.getDate(), hour, minutes, 0, 0).getTime() - now;
  if (eta_ms < 0)
  {
    eta_ms += twentyFourHours;
  }
  setTimeout(function() {
    //run once
    func();
    // run every 24 hours from now on
    setInterval(func(), twentyFourHours);
  }, eta_ms);
}

function dzienTygodnia(){
    const data = new Date().toLocaleDateString("pl-PL", {timezone: "Europe/Warsaw"});
    const dzienTygodnia = new Date().getDay(data);
    
    let dzienSpan = document.getElementById("dzien");
    switch (dzienTygodnia) {
        case 0:
            dzienSpan.innerHTML = "Niedziela";
            break;
        case 1:
            dzienSpan.innerHTML = "Poniedziałek";
            break;
        case 2:
            dzienSpan.innerHTML = "Wtorek";
            break;
        case 3:
            dzienSpan.innerHTML = "Środa";
            break;
        case 4:
            dzienSpan.innerHTML = "Czwartek";
            break;
        case 5:
            dzienSpan.innerHTML = "Piątek";
            break;
        case 6:
            dzienSpan.innerHTML = "Sobota";
            break;
        default:
            dzienSpan.innerHTML = "Błąd!";
            break;
    }
}

function pelnaData(){
    const pelnaData = new Date().toLocaleDateString("pl-PL", {timezone: "Europe/Warsaw"});
    
    let dataSpan = document.getElementById("data");
    dataSpan.innerHTML = pelnaData;
}

function GodzinaMinuty() {
    const czas = new Date().toLocaleTimeString("pl-PL", {timezone: "Europe/Warsaw", hour: "2-digit", minute: "2-digit"});

    let czasSpan = document.getElementById("czas");
    czasSpan.innerHTML = czas;
}

GodzinaMinuty();
setInterval(GodzinaMinuty, 100);

runAtSpecificTimeOfDay(0, 0, dzienTygodnia());
runAtSpecificTimeOfDay(0, 0, pelnaData());




