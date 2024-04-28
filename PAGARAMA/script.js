
class MyHeader extends HTMLElement {
    connectedCallback() {
        this.innerHTML = `
        <header style="position: fixed; top: 0; margin: auto; padding: 10px 20px; width: 100%; z-index: 1000; background-color: white; box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);">
        <nav class="navbar" style="display: flex; justify-content: space-between; align-items: center; margin-right: 5%; height: 50%;">
                <div class="logo" style="margin-left: 5%;">
                    <img src="logo.svg" alt="Logo" style="height: 60px;">
                </div>
                <ul class="menu" style="display: flex; gap: 40px; list-style-type: none;">
                    <li><a href="index.html" style="text-decoration: none; color: red; position: relative; font-weight: 600">Beranda</a></li>
                        <li><a href="#" style="text-decoration: none; color: red; position: relative; font-weight: 600;">Objek Wisata</a></li>
                        <li><a href="#" style="text-decoration: none; color: red; position: relative; font-weight: 600;">Peta</a></li>
                        <li><a href="#" style="text-decoration: none; color: red; position: relative; font-weight: 600;">Tentang Kami</a></li>
                    </ul>
                </nav>
            </header>
        `
    }
}

customElements.define('my-header', MyHeader)

// Map

// let products = null;
//         // get datas from file json
//         fetch('data.json')
//             .then(response => response.json())
//             .then(data => {
//                 products = data;
//                 showMap();
//         })

//         function showMap(){
//             // remove datas default from HTML
//                 // let detail = document.querySelector('.container');
//                 let productId =  new URLSearchParams(window.location.search).get('id');
//                 let thisProduct = products.filter(value => value.id == productId)[0];

//                 var map = L.map('map').setView([thisProduct.lat, thisProduct.long], 17);
//                 L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
//                 maxZoom: 19,
//                 attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
//                 }).addTo(map);

//                 var marker = L.marker([thisProduct.lat, thisProduct.long]).addTo(map);

//                 // detail.querySelector('.image img').src = thisProduct.image;
//                 // detail.querySelector('.name').innerText = thisProduct.name;
//                 // detail.querySelector('.description').innerText = thisProduct.description;
//         }
                
// var map = L.map('map').setView([-4.037473,103.194982], 17);

// L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
//     maxZoom: 19,
//     attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
// }).addTo(map);

// var marker = L.marker([-4.037473,103.194982]).addTo(map);