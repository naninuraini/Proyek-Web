<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panaraga Wisata</title>
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
    <header>
        <nav class="navbar">
                <div class="logo">
                    <img src="img/logo.svg" alt="Logo" >
                </div>
                <ul class="menu" >
                    <li><a href="index.php">Beranda</a></li>
                        <li><a href="#">Objek Wisata</a></li>
                        <li><a href="tentangKami.html">Tentang Kami</a></li>
                    </ul>
                </nav>
            </header>

   <main>
        <!-- Wisata -->
        <div class="container-filter" style="margin-top: 5%; text-align: center;">
            <div class="title">Eksplorasi Wisata</div>
            <div class="container__title">Categories</div>
            <div id="post-categories" class="filter-container" ></div>
            <div class="container__title">
                Wisata(<span id="post-count"></span>)
            </div>
            <div id="posts-container"></div>
            <p id="no-results"></p>
            </main>
            <div class="listProduct">
    
            </div>
        </div>

    
        </main>
    <script>
        let postsData = "";
        let currentFilters = {
        categories: [],
        };

        const postsContainer = document.querySelector("#posts-container");
        const categoriesContainer = document.querySelector("#post-categories");
        const postCount = document.querySelector("#post-count");
        const noResults = document.querySelector("#no-results");

        fetch(
        "data.json"
        ).then(async (response) => {
        postsData = await response.json();
        postsData.map((post) => createPost(post));
        postCount.innerText = postsData.length;

        categoriesData = [
            ...new Set(
            postsData
                .map((post) => post.categories)
                .reduce((acc, curVal) => acc.concat(curVal), [])
            )
        ];
        categoriesData.map((category) =>
            createFilter("categories", category, categoriesContainer)
        );
        });

        const createPost = (postData) => {
        const { name, id, image, categories, description } = postData;
        const post = document.createElement("div");
        post.className = "post";
        post.innerHTML = `
            <a class="post-preview" href="detail.html?id=${id}">
                <img class="post-image" src="${image}">
            </a>
            <div class="post-content">
                <p class="post-title">${name}</p>
                <div class="post-tags">
                ${categories
                    .map((category) => {
                    return '<span class="post-tag" style="text-align: center;">' + category + "</span>";
                    })
                    .join("")}
                </div>
            </div>
        `;

        postsContainer.append(post);
        };

        const createFilter = (key, param, container) => {
        const filterButton = document.createElement("button");
        filterButton.className = "filter-button";
        filterButton.innerText = param;
        filterButton.setAttribute("data-state", "inactive");
        filterButton.addEventListener("click", (e) =>
            handleButtonClick(e, key, param, container)
        );

        container.append(filterButton);
        };

        const handleButtonClick = (e, key, param, container) => {
        const button = e.target;
        const buttonState = button.getAttribute("data-state");
        if (buttonState == "inactive") {
            button.classList.add("is-active");
            button.setAttribute("data-state", "active");
            currentFilters[key].push(param);
            handleFilterPosts(currentFilters);
        } else {
            button.classList.remove("is-active");
            button.setAttribute("data-state", "inactive");
            currentFilters[key] = currentFilters[key].filter((item) => item !== param);
            handleFilterPosts(currentFilters);
        }
        };

        const handleFilterPosts = (filters) => {
        let filteredPosts = [...postsData];
        let filterKeys = Object.keys(filters);

        filterKeys.forEach((key) => {
            let currentKey = filters[key]
            if (currentKey.length <= 0) {
            return;
            }

            filteredPosts = filteredPosts.filter((post) => {
            let currentValue = post[key]
            return Array.isArray(currentValue)
                ? currentValue.some((val) => currentKey.includes(val))
                : currentKey.includes(currentValue);
            });
        });
        postCount.innerText = filteredPosts.length;

        if (filteredPosts.length == 0) {
            noResults.innerText = "Sorry, we couldn't find any results.";
        } else {
            noResults.innerText = "";
        }

        postsContainer.innerHTML = "";
        filteredPosts.map((post) => createPost(post));
        };
    </script>
    <div class="footer">
        <div class="copyright">
            <p>2024 PAGARAMA, All Rights Reserved.</p>
        </div>
    </div>


<script src="script.js"></script>
</body>
</html>