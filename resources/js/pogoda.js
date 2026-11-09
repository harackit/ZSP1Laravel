
function pogoda() {
    const openMeteoUrl = "https://api.open-meteo.com/v1/forecast?latitude=51.2784&longitude=17.9891&current=temperature_2m,is_day,rain,surface_pressure,cloud_cover&timezone=Europe%2FBerlin";
    fetch(openMeteoUrl)
        .then(response => {
            if (!response.ok) {
                throw new Error(`Brak polączenia z OpenMeteo`);
            }
            return response.json();
        })
        .then(data => {
            document.getElementById("pogoda").textContent = Math.round(data.current.temperature_2m) + " °C"
            document.getElementById("pogoda").classList.add("fs-1", 'text-nowrap');

            var cloudCover = data.current.cloud_cover;
            if (data.current.is_day) {

                if (cloudCover <= 25) {
                    document.getElementById("pogoda-ikona").src = "img/pogoda/sunny.png";
                } else if (cloudCover < 50) {
                    document.getElementById("pogoda-ikona").src = "img/pogoda/sunnyperiods.png";
                } else if (cloudCover < 75) {
                    document.getElementById("pogoda-ikona").src = "img/pogoda/sunnyintervals.png";
                } else if (cloudCover <= 100) {
                    document.getElementById("pogoda-ikona").src = "img/pogoda/cloudy.png";
                } else {
                    document.getElementById("pogoda-ikona").src = "";
                }
            }
            else {
                if (cloudCover <= 25) {
                    document.getElementById("pogoda-ikona").src = "img/pogoda/nightSunny.png";
                } else if (cloudCover < 50) {
                    document.getElementById("pogoda-ikona").src = "img/pogoda/nightSunnyPeriods.png";
                } else if (cloudCover < 75) {
                    document.getElementById("pogoda-ikona").src = "img/pogoda/nightSunnyIntervals.png";
                } else if (cloudCover <= 100) {
                    document.getElementById("pogoda-ikona").src = "img/pogoda/nightCloudy.png";
                } else {
                    document.getElementById("pogoda-ikona").src = "";
                }
            }
        })
        .catch(error => {
            console.error("Błąd OpenMeteo: ", error);
        })
}

pogoda()
setInterval(pogoda, 15000); //odswiezanie co 15min
