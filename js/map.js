    var map = L.map('mapid').setView([45.764043, 4.835659], 13);

	L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
	}).addTo(map);

	L.marker([45.764043, 4.835659]).addTo(map)
    .bindPopup('Voici le point gps de Lyon', {closeOnClick: false, autoClose: false})
    .openPopup();

    L.marker([45.739827, 4.770337]).addTo(map)
    .bindPopup('Rihanna', {closeOnClick: false, autoClose: false})
    .openPopup();

    L.marker([45.766211, 4.792767]).addTo(map)
    .bindPopup('David Guetta', {closeOnClick: false, autoClose: false})
    .openPopup();