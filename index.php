<?php
// Include the database connection
include './includes/db_connect.php';

// Query to fetch the first row
$sql = "SELECT * FROM recipes_data LIMIT 1";
$result = $connection->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" type="image/svg" href="images/hand-logo.svg">
    <link rel="stylesheet" href="css/screen.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
</head>
<body>
    <!-- <header>
        <a href="index.html"><img class="logo" alt="logo" src="images/logo-recipe.svg"></a>
        <nav class="nav">
            <ul class="nav-links">
            <li><a href="index.html">Home</a></li>
            <li><a href="recipes.html">Recipes</a></li>
            </ul>
        <div class="search-icon">
            <img src="images/search-icon.svg" alt="Search Icon">
        </div>
        </nav>
        
    </header> -->
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
    
    
    <main class="wrapper">
        
        <section class="hero-section">
            <h2 class="hero-title">Meals for Every Kitchen</h2>
            <div class="hero-grid">
                <div class="hero-item">
                    <a class="recipe-details-link" href="recipe-details.php?id=28">
                    <img class="index-image" src="images/28-shiitakeburgers/28-shiitakeburgers-hero.webp" alt="Recipe Image" loading="lazy">
                    <div class="hero-info">
                        <h3>Shiitake & Hoisin Beef Burgers</h3>
                        <p>with Miso Mayonnaise &amp; Roasted Sweet Potatoes</p>
                    </div>
                    </a>
                </div>

            
                <div class="hero-item">
                    <a class="recipe-details-link" href="recipe-details.php?id=29">
                    <img class="index-image" src="images/29-shrimp/29-shrimp-hero.webp" alt="Recipe Image" loading="lazy">
                    <div class="hero-info">
                        <h3>Shrimp Fra Diavolo</h3>
                        <p>with Lumaca Rigata Pasta</p>
                    </div>
                    </a>
                </div>

                <div class="hero-item wide">
                    <a class="recipe-details-link" href="recipe-details.php?id=14">
                    <img class="index-image" src="images/14-parmesanchicken/14-parmesanchicken-extra.webp" alt="Recipe Image" loading="lazy">
                    <div class="hero-info">
                        <h3>Parmesan-Crusted Chicken</h3>
                        <p>with Mashed Sweet Potatoes & Roasted Broccoli</p>
                    </div>
                    </a>
                </div>


                
            </div>
            <a class="hero-btn" href="recipes.php">More Recent Recipes</a>
        </section>
        <!-- <section class="hero">
            <div class="hero-content">
                <img class="hero-image" src="images/index-tacos.jpg" alt="Picture of tacos">
                <h1 class="overlay-text">Hearty meals for every kitchen</h1>
            </div>
        </section> -->
        <!-- <section class="quick-filters">
            <div class="filters-grid">
                <div class="filter-circle">
                    <img src="images/placeholder-circle.svg"  alt="Chicken">
                    <p>Chicken</p>
                </div>
                <div class="filter-circle">
                    <img src="images/placeholder-circle.svg"   alt="Mexican">
                    <p>Mexican</p>
                </div>
                <div class="filter-circle">
                    <img src="images/placeholder-circle.svg"   alt="Under 30 Min">
                    <p>Under 30 Min</p>
                </div>
                <div class="filter-circle">
                    <img src="images/placeholder-circle.svg"   alt="Vegetarian">
                    <p>Vegetarian</p>
                </div>
                <div class="filter-circle">
                    <img src="images/placeholder-circle.svg" alt="Italian">
                    <p>Italian</p>
                </div>
                
                <div class="filter-circle">
                    <a href="recipes.php" class="all-recipes">
                        <img src="images/placeholder-circle.svg" alt="Arrow">
                    </a>
                    <p>All Recipes</p>
                </div>
            </div>
        </section> -->

        <section class="offerings">
            <h2>Explore our offerings</h2>
            <div class="index-cards">
                <div class="index-card">
                    <a class="recipe-details-link" href="recipe-details.php?id=7">
                    <img class="index-card-image" src="images/7-cheesyenchiladas/7-cheesyenchiladas-hero.webp" alt="Recipe Card 1">
                    <div class="index-card-content">
                        <h3>Cheesy Enchiladas Rojas</h3>
                        <p>with Mushrooms & Kale</p>
                    </a>
                </div>
            </div>

            <div class="index-card">
                    <a class="recipe-details-link" href="recipe-details.php?id=25">
                    <img class="index-card-image" src="images/25-salmonhoney/25-salmonhoney-hero.webp" alt="Recipe Card 2">
                    <div class="index-card-content">
                        <h3>Salmon Honey Glazed Carrots</h3>
                        <p>with Lemon Saffron Yogurt Sauce</p>
                    </a>
                </div>
            
                
            </div>
            <div class="index-card">
                    <a class="recipe-details-link" href="recipe-details.php?id=8">
                    <img class="index-card-image" src="images/8-crispyfishsandwiches/8-crispyfishsandwiches-hero.webp" alt="Recipe Card 3">
                    <div class="index-card-content">
                        <h3>Crispy Fish Sandwiches</h3>
                        <p>with Tartar Sauce & Roasted Sweet Potato Wedges</p>
                    </a>
                </div>
            </div>
            
            <!-- <a class="see-all" href="recipes.php">See All Recipes</a> -->

            
        </section>
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
    </main>
    <script src="js/script.js"></script>
</body>
</html>