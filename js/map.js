    var map = L.map('mapid').setView([48.85341003, 2.3488000], 12);

	L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
	}).addTo(map);

	L.marker([48.85341003, 2.3488000]).addTo(map)
    .bindPopup('Paris', {closeOnClick: false, autoClose: false})
    .openPopup();

    L.marker([48.8353583,2.2409664]).addTo(map)
    .bindPopup('Boulogne-Billancourt', {closeOnClick: false, autoClose: false})
    .openPopup();

    /*L.marker([45.766211, 4.792767]).addTo(map)
    .bindPopup('David Guetta', {closeOnClick: false, autoClose: false})
    .openPopup(); */
    