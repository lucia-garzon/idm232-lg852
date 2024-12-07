<?php
    
    include './includes/db_connect.php';
    
    
    if ($connection->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Check if search form is submitted
    if (isset($_POST['usersearch'])) {
        $searchTerm = $_POST['usersearch']; // Get the search term

        // Prevent SQL injection
        $searchTerm = $connection->real_escape_string($searchTerm);
    
        // SQL query to search the recipes_data table
        $sql = "SELECT * FROM recipes_data WHERE recipe_name LIKE '%$searchTerm%' OR title LIKE '%$searchTerm%' OR cuisine LIKE '%$searchTerm%'";
        $result = $connection->query($sql);
    } else {
        // Default query if no search term is entered
        $sql = "SELECT * FROM recipes_data";
        $result = $connection->query($sql);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipes</title>
    <link rel="icon" type="image/svg" href="images/hand-logo.svg">
    <link rel="stylesheet" href="css/screen.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
</head>
<body>
    <header>
    <nav class="nav">
        <i class="uil uil-bars navOpenBtn"></i>
            <a href="index.php"><img class="logo" alt="logo" src="images/logo-recipe.svg"></a>

            <ul class="nav-links">
                <i class="uil uil-times navCloseBtn"></i>
                <li><a class="nav-item" href="index.php">Home</a></li>
                <li><a class="nav-item" href="recipes.php">Recipes</a></li>
                <li><a class="nav-item" href="help.php">Help</a></li>
            </ul>
        
            <!-- <i class="uil uil-search search-icon" id="searchIcon"></i>
            <div class="search-box">
                <i class="uil uil-search search-icon"></i>
                <input type="text" placeholder="Search for recipes" />
            </div> -->
            <!-- <form class="searchform searchform-nav" action="search.php" method="post">
                <input id="search" type="text" name="usersearch" placeholder="Search for recipes">
                <button>Search</button>
            </form> -->
            <!-- <div class="search-container">
                <i class="uil uil-search search-icon" id="searchIcon"></i>
                <form class="searchform searchform-nav" id="searchForm" action="search.php" method="post">
                    <input id="search" type="text" name="usersearch" placeholder="Search for recipes">
                    <button>Search</button>
                </form>
            </div> -->

        </nav>
    </header>
    <main class="recipe-container">
        <section class="heading">
            <h1>Recipes</h1>
            <p>Savor Every Bite, One Meal at a Time</p>
        </section>
        <section class="search-filter">
        </section>
        <section class="search-filter">
            <!-- <div class="search-bar">
                <input type="text" placeholder="Search for recipes" />
                <button class="search-icon"><img src="images/search-icon.svg" alt="Search Icon"></button>
            </div> -->
            <form class="searchform search-bar" action="search.php" method="post">
                <input id="search" type="text" name="usersearch" placeholder="Search for recipes">
                <button>Search</button>
            </form>
            <button class="filter-btn">Filter ▼</button>
            <a href="help.php" class="help-link">
                <i class="help-icon uil uil-question-circle" aria-label="Help"></i>
            </a>
        </section>
    
        <section class="recipe-grid">
            <?php
            if ($result->num_rows > 0) {
                // Display the recipes
                while($row = $result->fetch_assoc()) {
                    // Get the full path to the hero image from the database
                    $heroImage = $row['main_image'];

                    echo "<article class='recipe-card'>
                            <a class='recipe-details-link' href='recipe-details.php?id=" . $row['id'] . "'>
                                <figure class='recipe-image'>
                                <img src='" . $heroImage . "' alt='Recipe Image' loading='lazy'>
                                </figure>
                                <div class='recipe-info'>
                                    <h3 class='recipe-card-title'>" . htmlspecialchars($row['title']) . "</h3>
                                    <p class='recipe-card-subtitle'>" . htmlspecialchars($row['subtitle']) . "</p>
                                    <div class='recipe-time'>
                                        <i class='uil uil-clock'></i>
                                        <p>" . htmlspecialchars($row['cook_time']) . "</p>
                                    </div>
                                </div>
                            </a>
                        </article>";
                }
            } else {
                echo "<p>No recipes found matching your search.</p>";
            }

            // Close the database connection
            $connection->close();
            ?>

    </main>
    <footer>
        <div class="footer-content">
        <div class="footer-info">
            <div class="footer-logo"> 
                <img class="footer-img" src="images/hand-logo.svg" alt="Hand with heart above">
            </div>
            <h3 class="footer-header">The secret ingredient? Love!</h3>
            <p class="footer-text">Providing delicious meals for all families. This is filler text about the website and our mission.</p>
        </div>
        <div class="socials">
            <h3 class="footer-header">Follow along</h3>
            <ul>
                <li>
                    <img src="images/facebook.svg" class="socials-logo" alt="Facebook logo">
                    <a href="https://www.facebook.com/" target="_blank" class="link">
                        Facebook
                    </a>
                </li>
                <li>
                    <img src="images/instagram.svg" class="socials-logo" alt="Instagram logo">
                    <a href="https://www.instagram.com/" target="_blank" class="link">
                        Instagram
                    </a>
                </li>
                <li>
                    <img src="images/pinterest.svg" class="socials-logo" alt="Instagram logo">
                    <a href="https://www.pinterest.com/" target="_blank" class="link">
                        Pinterest
                    </a>
                </li>
                <li>
                    <img src="images/tiktok.svg" class="socials-logo" alt="Instagram logo">
                    <a href="https://www.tiktok.com/" target="_blank" class="link">
                        TikTok
                    </a>
                </li>
                <li>
                    <img src="images/youtube.svg" class="socials-logo" alt="Instagram logo">
                    <a href="https://www.youtube.com/" target="_blank" class="link">
                        Youtube
                    </a>
                </li>
                <li> 
                    <img src="images/x.svg" class="socials-logo" alt="Instagram logo">
                    <a href="https://www.x.com/" target="_blank" class="link">
                        X
                    </a>
                </li>
            </ul>
        </div>
        </div>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>
