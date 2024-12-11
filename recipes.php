<?php
include './includes/db_connect.php';

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Initialize variables for search and filters
$searchTerm = "";
$cuisineFilter = "";
$message = "";

// Check if search form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $searchTerm = isset($_POST['usersearch']) ? $_POST['usersearch'] : "";
    $cuisineFilter = isset($_POST['cuisine_filter']) ? $_POST['cuisine_filter'] : "";

    // Check if search term is empty
    if (empty($searchTerm)) {
        $message = "Please enter a search term.";
    } else {
        // SQL query to search and filter the recipes_data table
        $sql = "SELECT * FROM recipes_data WHERE 1=1";

        if (!empty($searchTerm)) {
            $sql .= " AND (recipe_name LIKE '%$searchTerm%' OR title LIKE '%$searchTerm%' OR cuisine LIKE '%$searchTerm%')";
        }

        if (!empty($cuisineFilter)) {
            $sql .= " AND cuisine = '$cuisineFilter'";
        }

        $result = $connection->query($sql);

        // Check if any results were returned
        if ($result->num_rows === 0) {
            $message = "No recipes found matching your search or filter criteria.";
        }
    }
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
                <li><i class="uil uil-times navCloseBtn"></i></li>
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
            <form class="searchform search-bar" action="search.php" method="post">
                <input id="search" type="text" name="usersearch" placeholder="Search for recipes" value="<?php echo htmlspecialchars($searchTerm); ?>">
                <select name="cuisine_filter" class="filter-dropdown">
                    <option value="">All Cuisines</option>
                    <option value="Mexican-American" <?php if ($cuisineFilter === 'Mexican-American') echo 'selected'; ?>>Mexican-American</option>
                    <option value="American" <?php if ($cuisineFilter === 'American') echo 'selected'; ?>>American</option>
                    <option value="Italian" <?php if ($cuisineFilter === 'Italian') echo 'selected'; ?>>Italian</option>
                    <option value="Chinese-American" <?php if ($cuisineFilter === 'Chinese-American') echo 'selected'; ?>>Chinese-American</option>
                    <option value="Middle Eastern" <?php if ($cuisineFilter === 'Middle Eastern') echo 'selected'; ?>>Middle Eastern</option>
                    <option value="French" <?php if ($cuisineFilter === 'French') echo 'selected'; ?>>French</option>
                    <option value="Mediterranean" <?php if ($cuisineFilter === 'Mediterranean') echo 'selected'; ?>>Mediterranean</option>
                    <option value="Indian" <?php if ($cuisineFilter === 'Indian') echo 'selected'; ?>>Indian</option>
                    <option value="East Asian" <?php if ($cuisineFilter === 'East Asian') echo 'East Asian'; ?>>East Asian</option>
                    <option value="Korean" <?php if ($cuisineFilter === 'Korean') echo 'selected'; ?>>Korean</option>
                    <option value="Southeast Asian" <?php if ($cuisineFilter === 'Southeast Asian') echo 'selected'; ?>>Southeast Asian</option>
                    <option value="Japanese" <?php if ($cuisineFilter === 'Japanese') echo 'selected'; ?>>Japanese</option>
                </select>
                <button type="submit">Search</button>
                
            </form>
            <a href="help.php" class="help-link">
                <i class="help-icon uil uil-question-circle" aria-label="Help"></i>
                </a>
        </section>
    
    
        <section class="recipe-grid">
        <!-- Repeat this block for each recipe card -->
            <!-- <article class="recipe-card">
                <a class="recipe-details-link" href="recipe-details.php">
                    <figure class="recipe-image">
                        <img src="images/placeholder.svg" alt="Recipe Image" loading="lazy">
                    </figure>
                    <div class="recipe-info">
                        <h3 class="recipe-card-title">Title</h3>
                        <p class="recipe-card-subtitle">Subtitle</p>
                        <div class="recipe-time">
                            <i class="uil uil-clock"></i> 
                            <p>X MIN</p>
                        </div>
                    </div>
                </a>
            </article> -->

        <!-- Recipe 1 -->
        <article class="recipe-card">
                <a class="recipe-details-link" href="recipe-details.php?id=1"> <!-- Link to recipe 1 -->
                    <figure class="recipe-image">
                        <img src="images/1-anchoorangechicken/1-anchoorangechicken-hero.webp" alt="Recipe 1 Image" loading="lazy">
                    </figure>
                    <div class="recipe-info">
                        <h3 class="recipe-card-title">Ando-Orange Chicken</h3>
                        <p class="recipe-card-subtitle">with Kale Rice & Roasted Carrots</p>
                        <div class="recipe-time">
                            <i class="uil uil-clock"></i> 
                            <p>30 MIN</p>
                        </div>
                    </div>
                </a>
        </article>

            <!-- Recipe 2 -->
            <article class="recipe-card">
                <a class="recipe-details-link" href="recipe-details.php?id=2"> <!-- Link to recipe 2 -->
                    <figure class="recipe-image">
                        <img src="images/2-beefmedallions/2-beefmedallions-hero.webp" alt="Recipe 2 Image" loading="lazy">
                    </figure>
                    <div class="recipe-info">
                        <h3 class="recipe-card-title">Beef Medallions & Mushroom Sauce</h3>
                        <p class="recipe-card-subtitle">with Mashed Potatoes</p>
                        <div class="recipe-time">
                            <i class="uil uil-clock"></i> 
                            <p>45 MIN</p>
                        </div>
                    </div>
                </a>
            </article>

            <!-- Recipe 3 -->
            <article class="recipe-card">
                <a class="recipe-details-link" href="recipe-details.php?id=3"> <!-- Link to recipe 3 -->
                    <figure class="recipe-image">
                        <img src="images/3-broccolibasilpesto/3-broccolibasilpesto-hero.webp" alt="Recipe 3 Image" loading="lazy">
                    </figure>
                    <div class="recipe-info">
                        <h3 class="recipe-card-title">Broccoli & Basil Pesto Sandwiches</h3>
                        <p class="recipe-card-subtitle">with Romaine & Citrus Salad</p>
                        <div class="recipe-time">
                            <i class="uil uil-clock"></i> 
                            <p>20 MIN</p>
                        </div>
                    </div>
                </a>
            </article>

            <!-- Recipe 4 -->
            <article class="recipe-card">
                <a class="recipe-details-link" href="recipe-details.php?id=4"> <!-- Link to recipe 4 -->
                    <figure class="recipe-image">
                        <img src="images/4-broccolicalzones/4-broccolicalzones-hero.webp" alt="Recipe 4 Image" loading="lazy">
                    </figure>
                    <div class="recipe-info">
                        <h3 class="recipe-card-title">Broccoli & Mozzarella Calzones</h3>
                        <p class="recipe-card-subtitle">with Caesar Salad</p>
                        <div class="recipe-time">
                            <i class="uil uil-clock"></i> 
                            <p>60 MIN</p>
                        </div>
                    </div>
                </a>
            </article>

            <!-- Recipe 5 -->
            <article class="recipe-card">
                <a class="recipe-details-link" href="recipe-details.php?id=5"> <!-- Link to recipe 5 -->
                    <figure class="recipe-image">
                        <img src="images/5-bucatinialfredo/5-bucatinialfredo-hero.webp" alt="Recipe 5 Image" loading="lazy">
                    </figure>
                    <div class="recipe-info">
                        <h3 class="recipe-card-title">Bucatini Alfredo</h3>
                        <p class="recipe-card-subtitle">with Broccoli</p>
                        <div class="recipe-time">
                            <i class="uil uil-clock"></i> 
                            <p>25 MIN</p>
                        </div>
                    </div>
                </a>
            </article>

            <!-- Recipe 6 -->
            <article class="recipe-card">
                <a class="recipe-details-link" href="recipe-details.php?id=6"> <!-- Link to recipe 6 -->
                    <figure class="recipe-image">
                        <img src="images/6-bucatinitomato/6-bucatinitomato-hero.webp" alt="Recipe 6 Image" loading="lazy">
                    </figure>
                    <div class="recipe-info">
                        <h3 class="recipe-card-title">Bucatini & Tomato Sauce</h3>
                        <p class="recipe-card-subtitle">with Roasted Broccoli</p>
                        <div class="recipe-time">
                            <i class="uil uil-clock"></i> 
                            <p>35 MIN</p>
                        </div>
                    </div>
                </a>
            </article>

            <!-- Recipe 7 -->
            <article class="recipe-card">
                <a class="recipe-details-link" href="recipe-details.php?id=7"> <!-- Link to recipe 7 -->
                    <figure class="recipe-image">
                        <img src="images/7-cheesyenchiladas/7-cheesyenchiladas-hero.webp" alt="Recipe 7 Image" loading="lazy">
                    </figure>
                    <div class="recipe-info">
                        <h3 class="recipe-card-title">Cheesy Enchiladas Rojas</h3>
                        <p class="recipe-card-subtitle">with Mushrooms & Kale</p>
                        <div class="recipe-time">
                            <i class="uil uil-clock"></i> 
                            <p>50 MIN</p>
                        </div>
                    </div>
                </a>
            </article>

            <!-- Recipe 8 -->
            <article class="recipe-card">
                <a class="recipe-details-link" href="recipe-details.php?id=8"> <!-- Link to recipe 8 -->
                    <figure class="recipe-image">
                        <img src="images/8-crispyfishsandwiches/8-crispyfishsandwiches-hero.webp" alt="Recipe 8 Image" loading="lazy">
                    </figure>
                    <div class="recipe-info">
                        <h3 class="recipe-card-title">Crispy Fish Sandwiches</h3>
                        <p class="recipe-card-subtitle">with Tartar Sauce & Roasted Sweet Potato Wedges</p>
                        <div class="recipe-time">
                            <i class="uil uil-clock"></i> 
                            <p>15 MIN</p>
                        </div>
                    </div>
                </a>
            </article>
        
        </section>

    </main>
    <footer>
        <div class="footer-content">
        <div class="footer-info">
            <div class="footer-logo"> 
                <img class="footer-img" src="images/hand-logo.svg" alt="Hand with heart above">
            </div>
            <h3 class="footer-header">The secret ingredient? Love!</h3>
            <p class="footer-text">Providing delicious meals for all families. We're here to help you make every meal a special occasion.</p>
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
                    <img src="images/pinterest.svg" class="socials-logo" alt="Pinterest logo">
                    <a href="https://www.pinterest.com/" target="_blank" class="link">
                        Pinterest
                    </a>
                </li>
                <li>
                    <img src="images/tiktok.svg" class="socials-logo" alt="TikTok logo">
                    <a href="https://www.tiktok.com/" target="_blank" class="link">
                        TikTok
                    </a>
                </li>
                <li>
                    <img src="images/youtube.svg" class="socials-logo" alt="Youtube logo">
                    <a href="https://www.youtube.com/" target="_blank" class="link">
                        Youtube
                    </a>
                </li>
                <li> 
                    <img src="images/x.svg" class="socials-logo" alt="X logo">
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