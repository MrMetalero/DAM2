

//Para usar los tooltips y los popovers he visto que hace falta inicializarlos
//Así que aquí lo hacemos
document.addEventListener('DOMContentLoaded', function () {
    // Inicializar los tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function (tooltipTrigger) {
      return new bootstrap.Tooltip(tooltipTrigger);
    });

    // Inicializar los popovers
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
    popoverTriggerList.map(function (popoverTrigger) {
      return new bootstrap.Popover(popoverTrigger);
    });






    
});


const cardAll = document.querySelectorAll(".card")

document.addEventListener("DOMContentLoaded", () => {

    fadeIn(cardAll);
});

function fadeIn(elementos, delay = 300) {
 
    elementos.forEach((elemento, index) => {
        setTimeout(() => {
            elemento.style.opacity = "0.9";
            
            elemento.style.transform = "translateY(0)";



          // Selecciona todos los h3 y p dentro del árbol del elemento (incluso si hay un div intermedio)
          const headersAndParagraphs = elemento.querySelectorAll('div h3, div p, div a');

          // Aplica la opacidad a 1 para cada h3 y p encontrado
          headersAndParagraphs.forEach((innerElement) => {
              innerElement.style.opacity = "1";
          });


        }, index * delay)
    });
}









//MI STEAM API KEY : 7CA27BA0444D3DE930BC7C2619FB466D
// MI STEAM ID:  76561198096215470
// Wait for the DOM to fully load before executing
// Your Steam API key and Steam ID
// The CORS Anywhere Proxy URL
const proxyUrl = 'https://cors-anywhere.herokuapp.com/';

// Steam API URL (replace YOUR_STEAM_API_KEY with your actual key)
const apiKey = '7CA27BA0444D3DE930BC7C2619FB466D';  // Your API Key
const steamId = '76561198096215470';  // Your Steam ID
const steamApiUrl = `https://api.steampowered.com/ISteamUserStats/GetPlayerAchievements/v1/?key=${apiKey}&steamid=${steamId}`;

// Fetching the data via the CORS proxy
async function fetchAchievements() {
    try {
        // Making the fetch request
        const response = await fetch(proxyUrl + steamApiUrl, {
            method: 'GET',
            headers: {
                'Origin': 'http://127.0.0.1:5501',  // Make sure this matches your local or live URL
            },
        });

        // Check if the response is ok
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }

        // Parse the response JSON
        const data = await response.json();
        console.log(data);  // Handle the achievements data here

    } catch (error) {
        console.error('There was a problem with the fetch operation:', error);
    }
}

// Call the function to fetch achievements
fetchAchievements();
