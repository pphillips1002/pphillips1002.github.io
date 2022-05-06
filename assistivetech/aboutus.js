document.getElementById("home-id").addEventListener("click", returnHome);

// sends user back to home screen 
function returnHome() {
    window.location.href = "index.html";
}

let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: -34.397, lng: 150.644 },
    zoom: 8,
  });
}

window.initMap = initMap;