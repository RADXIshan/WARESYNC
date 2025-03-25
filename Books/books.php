<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Books</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shippori+Antique+B1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./books.css" />
</head>
<body>
    <div id="preload-screen" class="preload-screen">
        <div class="preload-text">Books</div>
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
                <li><a href="../Toiletries/toiletries.php">Toiletries</a></li>
                <li class="current-page"><a href="../Books/books.php">Books</a></li>
                <li><a href="../Sports Gear/sports.php">Sports Gear</a></li>
                <li><a href="../Miscellaneous/miscellaneous.php">Miscellaneous</a></li>
            </ul>
        </nav>
        <main class="content">
            <h1>Collection</h1>
            <div class="card-container">
                <div class="card">
                    <img src="./images/fiction.jpeg" alt="fiction" class="card-image">
                    <div class="card-content">
                        <h2>Fiction</h2>
                        <div class="card-details">
                            <span class="location">Paris, France</span>
                            <span class="rating">⭐ 4.8</span>
                            <span class="stock">690 left</span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/nonfiction.jpeg" alt="nonfiction" class="card-image">
                    <div class="card-content">
                        <h2>Non-Fiction</h2>
                        <div class="card-details">
                            <span class="location">New York, USA</span>
                            <span class="rating">⭐ 4.8</span>
                            <span class="stock">420 left</span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/comics.jpeg" alt="comics" class="card-image">
                    <div class="card-content">
                        <h2>Comics</h2>
                        <div class="card-details">
                            <span class="location">London, UK</span>
                            <span class="rating">⭐ 4.9</span>
                            <span class="stock">1005 left</span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/research.jpeg" alt="research" class="card-image">
                    <div class="card-content">
                        <h2>Research</h2>
                        <div class="card-details">
                            <span class="location">Frankfurt, Germany</span>
                            <span class="rating">⭐ 4.9</span>
                            <span class="stock">703 left</span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/kids.jpeg" alt="kids" class="card-image">
                    <div class="card-content">
                        <h2>Kids</h2>
                        <div class="card-details">
                            <span class="location">Tokyo, Japan</span>
                            <span class="rating">⭐ 4.7</span>
                            <span class="stock">950 left</span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/study.jpeg" alt="study" class="card-image">
                    <div class="card-content">
                        <h2>Study</h2>
                        <div class="card-details">
                            <span class="location">Buenos Aires, Argentina</span>
                            <span class="rating">⭐ 4.8</span>
                            <span class="stock">1222 left</span>
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

    <script src="./books.js"></script>
</body>
</html>