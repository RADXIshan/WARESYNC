<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Toiletries</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shippori+Antique+B1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./toiletries.css" />
</head>
<body>
    <div id="preload-screen" class="preload-screen">
        <div class="preload-text">Toiletries</div>
    </div>

    <div class="container">
        <nav class="sidebar">
            <ul>
                <li><a href="../Home Page/home.php">Home</a></li>
                <li><a href="../Clothes And Accessories/clothes.php">
                    Clothes And Accessories
                </a> </li>           
                <li><a href="../Furnitures And Home Decor/furnitures.php">Furnitures And Home Decor</a></li>
                <li><a href="../Electronics/electronics.php">Electronics</a></li>
                <li><a href="../Health And Grooming/health.php">Health And Grooming</a></li>
                <li><a href="../Groceries/groceries.php">Groceries</a></li>
                <li class="current-page"><a href="../Toiletries/toiletries.php">Toiletries</a></li>
                <li><a href="../Books/books.php">Books</a></li>
                <li><a href="../Sports Gear/sports.php">Sports Gear</a></li>
                <li><a href="../Miscellaneous/miscellaneous.php">Miscellaneous</a></li>
            </ul>
        </nav>
        <main class="content">
            <h1>Collection</h1>
            <div class="card-container">
                <div class="card">
                    <img src="./images/soaps.jpeg" alt="soaps" class="card-image">
                    <div class="card-content">
                        <h2>Soaps</h2>
                        <div class="card-details">
                            <span class="location">Paris, France</span>
                            <span class="rating">⭐ 4.9</span>
                            <span class="stock">1430 left</span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/shampoo.jpeg" alt="shampoo" class="card-image">
                    <div class="card-content">
                        <h2>Shampoo</h2>
                        <div class="card-details">
                            <span class="location">Seoul, South Korea</span>
                            <span class="rating">⭐ 4.8</span>
                            <span class="stock">753 left</span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/bodywash.jpeg" alt="bodywash" class="card-image">
                    <div class="card-content">
                        <h2>Body Wash</h2>
                        <div class="card-details">
                            <span class="location">London, UK</span>
                            <span class="rating">⭐ 4.9</span>
                            <span class="stock">3152 left</span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/toiletpaper.jpeg" alt="toiletpaper" class="card-image">
                    <div class="card-content">
                        <h2>Toilet Paper</h2>
                        <div class="card-details">
                            <span class="location">Guangzhou, China</span>
                            <span class="rating">⭐ 4.6</span>
                            <span class="stock">193 left</span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/moisturizers.jpeg" alt="moisturizers" class="card-image">
                    <div class="card-content">
                        <h2>Moisturizers</h2>
                        <div class="card-details">
                            <span class="location">New York City, USA</span>
                            <span class="rating">⭐ 4.7</span>
                            <span class="stock">867 left</span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/detergents.jpeg" alt="detergents" class="card-image">
                    <div class="card-content">
                        <h2>Detergents</h2>
                        <div class="card-details">
                            <span class="location">London, UK</span>
                            <span class="rating">⭐ 4.6</span>
                            <span class="stock">2345 left</span>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <footer class="footer">

        <div class="footerTxt">
            <p class="footerTxt">&copy; WARESYNC, Inc</p>
        </div>
      
        <div class="footerLogo">
            <img class="waresync" src="./images/waresync.png" />
        </div>

        <div class="logos">
            <img class="logo" src="./images/gmail.png" alt="Email">
            <img class="logo" src="./images/instagram.png" alt="Instagram">
            <img class="logo" src="./images/whatsapp.png" alt="WhatsApp">
            <img class="logo" src="./images/phone.png" alt="Phone">
        <div>
    </footer>

    <script src="./toiletries.js"></script>
</body>
</html>