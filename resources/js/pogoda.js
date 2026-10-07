
function pogoda() {
    const openMeteoUrl = "https://api.open-meteo.com/v1/forecast?latitude=51.2784&longitude=17.9891&current=temperature_2m,is_day,rain,surface_pressure,cloud_cover&timezone=Europe%2FBerlin";
    fetch(openMeteoUrl)
        .then(response => {
            if(!response.ok) {
                throw new Error(`Brak polączenia z OpenMeteo`);
            }
            return response.json();
        })
        .then(data => {
            document.getElementById("pogoda").innerHTML = Math.round(data.current.temperature_2m) + " °C"
            document.getElementById("pogoda").classList.add("fs-1");

            var cloudCover = data.current.cloud_cover;
            if(data.current.is_day) {
                switch(true) {
                    case (cloudCover <= 25):
                        document.getElementById("pogoda-ikona").src = "img/pogoda/sunny.png";
                        break;
                    case (cloudCover < 50):
                        document.getElementById("pogoda-ikona").src = "img/pogoda/sunnyperiods.png";
                        break;
                    case (cloudCover < 75):
                        document.getElementById("pogoda-ikona").src = "img/pogoda/sunnyintervals.png";
                        break;
                    case (cloudCover <= 100):
                        document.getElementById("pogoda-ikona").src = "img/pogoda/cloudy.png";
                        break;
                    default:
                        document.getElementById("pogoda-ikona").src = "";
                        break;
                }
            }
            else {
                switch(true) {
                case (cloudCover <= 25):
                    document.getElementById("pogoda-ikona").src = "img/pogoda/nightSunny.png";
                    break;
                case (cloudCover < 50):
                    document.getElementById("pogoda-ikona").src = "img/pogoda/nightSunnyPeriods.png";
                    break;
                case (cloudCover < 75):
                    document.getElementById("pogoda-ikona").src = "img/pogoda/nightSunnyIntervals.png";
                    break;
                case (cloudCover <= 100):
                    document.getElementById("pogoda-ikona").src = "img/pogoda/nightCloudy.png";
                    break;
                default:
                    document.getElementById("pogoda-ikona").src = "";
                    break;
            }
            }
        })
        .catch(error => {
            console.error("Błąd OpenMeteo: ", error);
        })
}

pogoda()
setInterval(pogoda, 15000); //odswiezanie co 15min
