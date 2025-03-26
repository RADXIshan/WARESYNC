<?php
    $dbc = mysqli_connect('localhost', 'root', '', 'warehouse_db');
    if (!$dbc) {
        die("Database connection failed: " . mysqli_connect_error());
    }
?>
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
                <li><a href="../Clothes And Accessories/clothes.php">Clothes And Accessories</a></li>
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
                <?php
                    $categories = ['Vegetables', 'Fruits', 'Dry Fruits', 'Proteins', 'Carbohydrates', 'Fats', 'Oils'];
                    foreach ($categories as $category) {
                        $query = "SELECT * FROM groceries WHERE type = '$category';";
                        $result = mysqli_query($dbc, $query);
                        
                        if ($row = mysqli_fetch_array($result)) {
                            echo "<div class='card'>
                                    <img src='./images/".strtolower(str_replace(' ', '', $category)).".jpeg' alt='$category' class='card-image'>
                                    <div class='card-content'>
                                        <h2>$category</h2>
                                        <div class='card-details'>
                                            <span class='location'>{$row['location']}</span>
                                            <span class='rating'>⭐ ".round($row['rating'], 1)."</span>
                                            <span class='stock'>{$row['stock']} left</span>
                                        </div>
                                    </div>
                                </div>";
                        } else {
                            echo "<div class='card'>
                                    <img src='./images/".strtolower(str_replace(' ', '', $category)).".jpeg' alt='$category' class='card-image'>
                                    <div class='card-content'>
                                        <h2>$category</h2>
                                        <div class='card-details'>
                                            <span class='location'>N/A</span>
                                            <span class='rating'>⭐ N/A</span>
                                            <span class='stock'>Out of stock</span>
                                        </div>
                                    </div>
                                </div>";
                        }
                    }
                ?>
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
        </div>
    </footer>

    <script src="./groceries.js"></script>
</body>
</html>
