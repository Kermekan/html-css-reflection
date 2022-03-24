// let mapOptions = {
//     center: [
//         // Cambridge
//         [52.2345, 0.15322], 
//         // Wymondham
//         [52.57605185982239, 1.136554305116921], 
//         // Great Yarmouth
//         [52.555910391543556, 1.7130585664892353]
//     ],
//     zoom: 13
// }


let mapOptions = [
    // Cambridge
    {
        center: [52.23528443855227, 0.15394936923839994],
        zoom: 17
    },
    // Wymondham
    {
        center: [52.57605185982239, 1.136554305116921],
        zoom: 17
    },
    // Great Yarmouth
    {
        center: [52.555910391543556, 1.7130585664892353],
        zoom: 17
    }
]

// Map 1
let map1 = new L.map('map1', mapOptions[0]);
let layer1 = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
map1.addLayer(layer1);

let marker1 = new L.Marker(mapOptions[0].center);
marker1.addTo(map1);

// Map 2
let map2 = new L.map('map2', mapOptions[1]);
let layer2 = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
map2.addLayer(layer2);

let marker2 = new L.Marker(mapOptions[1].center);
marker2.addTo(map2);

// Map 1
let map3 = new L.map('map3', mapOptions[2]);
let layer3 = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
map3.addLayer(layer3);

let marker3 = new L.Marker(mapOptions[2].center);
marker3.addTo(map3);