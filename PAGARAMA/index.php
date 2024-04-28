<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Nani Nuraini Dan Tim">
    <meta name="description" content="Pagarama">
    <meta name="keywords" content="Pagarama">


    <title>Pagarama</title>

    

     <!-- CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- font google montserat-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- font google jaques-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jacques+Francois+Shadow&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <!-- <my-header></my-header>
    <script src="script.js"></script> -->
    <header>
        <nav class="navbar">
                <div class="logo">
                    <img src="img/logo.svg" alt="Logo" >
                </div>
                <ul class="menu" >
                    <li><a href="index.php">Beranda</a></li>
                        <li><a href="objekWisata.php">Objek Wisata</a></li>
                        <li><a href="tentangKami.html">Tentang Kami</a></li>
                    </ul>
                </nav>
            </header>
    
    <main>
        <div class="section1">
            <img src="img/background.svg" alt="Pagarama" style="width: 100%; height: auto; margin-top: 4%;">
            <h1>Selamat Datang
                Website PAGARAMA 
                Wisata Pagar Alam</h1>
                <!-- Unicons CSS -->
            <div class="search-bar">
                <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
                <div class="input-box">
                    <i class="uil uil-search"></i>
                    <input type="text" placeholder="Search here..." />
                    <button class="button">Search</button>
                </div>
            </div>
        </div>

        <!-- Wisata -->
        <div class="container">
            <div class="title">Eksplorasi Wisata</div>
            <div class="listProduct">
    
            </div>
        </div>

        <script>
            let products = null;
            // get datas from file json
            fetch('data.json')
                .then(response => response.json())
                .then(data => {
                    products = data;
                    addDataToHTML();
            })
    
            function addDataToHTML(){
        // remove datas default from HTML
            let listProductHTML = document.querySelector('.listProduct');
    
            // add new datas
            if(products != null) // if has data
            {
                products.forEach(product => {
                    let newProduct = document.createElement('a');
                    newProduct.href = 'detail.html?id=' + product.id;
                    newProduct.classList.add('item');
                    newProduct.innerHTML = 
                    `<img src="${product.image}" alt="">
                    <h2>${product.name}</h2>
                    <p>${product.description}</p>`;
                    listProductHTML.appendChild(newProduct);
    
                });
            }
        }
    
        </script>
        <!-- <script>
            let data = null;
            // get datas from file json
            fetch('data.json')
                .then(response => response.json())
                .then(data => {
                    data = data;
                    addDataToHTML();
            })
    
            function addDataToHTML(){
            // remove datas default from HTML
            let listdatasHTML = document.querySelector('.listProduct');
    
            // add new datas
            if(data != null) // if has data
            {
                data.forEach(datas => {
                    let newdatas = document.createElement('a');
                    newdatas.href = '/detail.html?id=' + datas.id;
                    newdatas.classList.add('item');
                    newdatas.innerHTML = 
                    `<img src="${datas.image}" alt="">
                    <h2>${datas.name}</h2>`;
                    listdatasHTML.appendChild(newdatas);
    
                });
            }
        }
    
        </script> -->

        <!-- <div className="content-wisata">
            <h1 className="wisata-title">Explore Wisata </h1>
            <KategoriButton setFilter={setFilter} />
            <div className="wisata">
                <div className="list-wisata" >
                    <img className="wisata-pic" src="wisata1.svg" alt="content" />
                    <div className="list-desc">
                        <div className="wisata-name" >
                            <p>Al-furqon</p>
                        </div>
                        <div className="wisata-category" >
                            <span>Masjid</span>
                        </div>
                        <p className="wisata-desc">
                            <TextTruncate
                                line={4}
                                element="p"
                                truncateText="…"
                                text="ini masjid"
                            />
                        </p>
                        <div className="wisata-button__container">
                            <Link to="#">
                                <button className="wisata-button"><span>Lihat Detail</span></button>
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    
    </main>
    <!-- <footer>
        <div class="container">
            <img src="img/Group.png" alt="logo">
        </div>
      </footer> -->
      <div class="footer">
        <div class="copyright">
            <p>2024 PAGARAMA, All Rights Reserved.</p>
        </div>
    </div>


<script src="script.js"></script>
</body>
</html>