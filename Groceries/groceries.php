<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Groceries</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shippori+Antique+B1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./groceries.css" />
</head>
<body>
    <div id="preload-screen" class="preload-screen">
        <div class="preload-text">Groceries</div>
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
                <li class="current-page"><a href="../Groceries/groceries.php">Groceries</a></li>
                <li><a href="../Toiletries/toiletries.php">Toiletries</a></li>
                <li><a href="../Books/books.php">Books</a></li>
                <li><a href="../Sports Gear/sports.php">Sports Gear</a></li>
                <li><a href="../Miscellaneous/miscellaneous.php">Miscellaneous</a></li>
            </ul>
        </nav>
        <main class="content">
            <h1>Collection</h1>
            <div class="card-container">
                <div class="card">
                    <img src="./images/vegetables.jpeg" alt="vegetables" class="card-image">
                    <div class="card-content">
                        <h2>Vegetables</h2>
                        <div class="card-details">
                            <span class="location">Tokyo, Japan</span>
                            <span class="rating">⭐ 4.7</span>
                            <span class="stock">2314 left</span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/fruits.jpeg" alt="fruits" class="card-image">
                    <div class="card-content">
                        <h2>Fruits</h2>
                        <div class="card-details">
                            <span class="location">Barcelona, Spain</span>
                            <span class="rating">⭐ 4.8</span>
                            <span class="stock">1163 left</span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/dryfruits.jpeg" alt="dryfruits" class="card-image">
                    <div class="card-content">
                        <h2>Dry Fruits</h2>
                        <div class="card-details">
                            <span class="location">London, UK</span>
                            <span class="rating">⭐ 4.7</span>
                            <span class="stock">820 left</span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/proteins.jpeg" alt="proteins" class="card-image">
                    <div class="card-content">
                        <h2>Proteins</h2>
                        <div class="card-details">
                            <span class="location">Istanbul, Turkey</span>
                            <span class="rating">⭐ 4.9</span>
                            <span class="stock">699 left</span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/carbs.jpeg" alt="carbs" class="card-image">
                    <div class="card-content">
                        <h2>Carbohydrates</h2>
                        <div class="card-details">
                            <span class="location">Seattle, USA</span>
                            <span class="rating">⭐ 4.6</span>
                            <span class="stock">987 left</span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/fats.jpeg" alt="fats" class="card-image">
                    <div class="card-content">
                        <h2>Fats</h2>
                        <div class="card-details">
                            <span class="location">Mexico City, Mexico</span>
                            <span class="rating">⭐ 4.5</span>
                            <span class="stock">1552 left</span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/oils.jpeg" alt="oils" class="card-image">
                    <div class="card-content">
                        <h2>Oils</h2>
                        <div class="card-details">
                            <span class="location">Melbourne, Australia</span>
                            <span class="rating">⭐ 4.6</span>
                            <span class="stock">757 left</span>
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

    <script src="./groceries.js"></script>
</body>
</html>