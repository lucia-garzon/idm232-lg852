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
        
            <i class="uil uil-search search-icon" id="searchIcon"></i>
            <div class="search-box">
                <i class="uil uil-search search-icon"></i>
                <input type="text" placeholder="Search for recipes" />
            </div>
        </nav>
    </header>
    
    <h1>Database First Row</h1>
    <table border="1">
        <tr>
            <?php
            // Display table headers dynamically if data exists
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                foreach ($row as $key => $value) {
                    echo "<th>" . htmlspecialchars($key) . "</th>";
                }
            } else {
                echo "<th>No data found</th>";
            }
            ?>
        </tr>
        <tr>
            <?php
            // Display table values dynamically if data exists
            if ($result->num_rows > 0) {
                foreach ($row as $key => $value) {
                    echo "<td>" . htmlspecialchars($value) . "</td>";
                }
            } else {
                echo "<td>No data available</td>";
            }
            ?>
        </tr>
    </table>
    <main class="wrapper">
        
        <section class="hero-section">
            <h2 class="hero-title">Meals for Every Kitchen</h2>
            <div class="hero-grid">
                <div class="hero-item">
                    <img src="images/placeholder.svg" alt="Recipe Image" class="index-image">
                    <div class="hero-info">
                        <h3>Seared Steaks &amp; Garlic Butter</h3>
                        <p>with Oven Fries</p>
                    </div>
                </div>
        
                <div class="hero-item">
                    <img src="images/placeholder.svg" alt="Recipe Image" class="index-image">
                    <div class="hero-info">
                        <h3>Shrimp Fra Diavolo</h3>
                        <p>with Lumaca Rigata Pasta</p>
                    </div>
                </div>
        
                <div class="hero-item wide">
                    <img src="images/placeholder.svg" alt="Recipe Image" class="index-image">
                    <div class="hero-info">
                        <h3>Spicy Chicken Quesadillas</h3>
                        <p>with Beet Orange Salad</p>
                    </div>
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
        <section class="quick-filters">
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
        </section>

        <section class="offerings">
            <h2>Explore our offerings</h2>
            <div class="index-cards">
                <div class="index-card">
                <img class="index-card-image" src="images/Recipe_MexicanSpiced_Barramundi_with_Kale_Sweet_Potato_Avocado_Salad/0108_2PF_Barramundi_98380_SQ_hi_res.jpg" alt="Recipe Card 1">
                <div class="index-card-content">
                    <h3>Mexican Spiced Barramundi</h3>
                    <p>with Kale Sweet Potato Avocado Salad</p>
                </div>
                
            </div>
            <div class="index-card">
                <img class="index-card-image" src="images/Recipe_Salmon_HoneyGlazed_Carrots_with_LemonSaffron_Yogurt_Sauce/1106_2PF_Salmon-Honey-Carrots_94837_SQ_hi_res.jpg" alt="Recipe Card 2">
                <div class="index-card-content">
                    <h3>Salmon Honey Glazed Carrots</h3>
                    <p class="index-subtitle">with Lemon Saffron Yogurt Sauce</p>
                </div>
                
            </div>
            <div class="index-card">
                <img class="index-card-image" src="images/Recipe_Top_Chef_Ginger-Marinated_Grassfed_Steaks_with_Stir-Fried_Vegetables_Jasmine_RiceBlue_A/0108_2PM_Ginger-Steak-Stirfry_98208_201_SQ_hi_res.jpg" alt="Recipe Card 3">
                <div class="index-card-content">
                    <h3>Top Chef Ginger-Marinated Grassfed Steaks</h3>
                    <p>with Stir-Fried Vegetables &amp; Jasmine Rice</p>
                </div>
                
            </div>
            </div>
            <a class="see-all" href="recipes.php">See All Recipes</a>

            
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