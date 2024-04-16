document.addEventListener('DOMContentLoaded', () => {
   const apiKey = '387d76b61d0a32290232710e163333af';
   const apiUrl = 'https://api.openweathermap.org/data/2.5/weather';

   const cityInput = document.getElementById('cityInput');
   const searchBtn = document.getElementById('searchBtn');
   const weatherInfo = document.getElementById('weather-info');

searchBtn.addEventListener('click', () => {
   const city = cityInput.value.trim();
   if (city) {
   getWeatherData(city);
}
});

async function getWeatherData(city){
try{
    const response = await fetch(`${apiUrl}?q=${city}&appid=${apiKey}&units=metric`);
    const data = await response.json();
    displayWeather(data);
} 

catch (error) {
    console.error('Error fetching weather data:', error);
}
}

function displayWeather(data){
    document.getElementById('city-country').innerText = `${data.name}, ${data.sys.country}`;
    document.getElementById('temperature').innerText = `Temperature: ${data.main.temp} °C`;
    document.getElementById('weather-description').innerText = `Weather: ${data.weather[0].description}`;
}
});


