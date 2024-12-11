<?php
    include './includes/db_connect.php'; // Database connection

    // Check if ID is provided in the URL
    if (isset($_GET['id'])) {
        $recipeId = $_GET['id']; // Get the recipe ID from the URL

        // Prevent SQL injection by sanitizing the input
        $recipeId = $connection->real_escape_string($recipeId);

        // Query the database to fetch recipe details by ID
        $sql = "SELECT * FROM recipes_data WHERE id = $recipeId";
        $result = $connection->query($sql);

        if ($result->num_rows > 0) {
            // Fetch the recipe data
            $recipe = $result->fetch_assoc();
        } else {
            echo "<p>Recipe not found.</p>";
            exit;
        }
    } else {
        echo "<p>No recipe selected.</p>";
        exit;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Details</title>
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
        
            

        </nav>
    </header>
    
<main class="recipe-container">
    <!-- Recipe Title Section -->
    <section class="recipe-header">
        <h1><?php echo htmlspecialchars($recipe['title']); ?></h1>
        <p class="subtitle"><?php echo htmlspecialchars($recipe['subtitle']); ?></p>
        <!-- <button class="jump-button">Jump to recipe</button> -->
    </section>

    <!-- Recipe Image Section -->
    <div class="recipe-main-info">
        <div class="main-image">
            <img class="recipe-details-image" src="<?php echo $recipe['main_image']; ?>" alt="Recipe Image">
        </div>
        <div class="recipe-meta">
            <div class="meta-item">
                <svg width="24" height="24" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="10" stroke="black" stroke-width="2" fill="none"/>
                    <line x1="12" y1="7" x2="12" y2="12" stroke="black" stroke-width="2"/>
                    <line x1="12" y1="12" x2="15" y2="15" stroke="black" stroke-width="2"/>
                </svg>
                <?php echo htmlspecialchars($recipe['cook_time']); ?> 
            </div>
            <div class="meta-item">
                
                <?php echo htmlspecialchars($recipe['servings']); ?> 
            </div>
        </div>
    </div>

    <!-- Description Section with Show More/Show Less -->
    <div class="description-section">
        <div class="description">
            <p class="description-content">
                <?php echo nl2br(htmlspecialchars($recipe['description'])); ?>
            </p>
        </div>
        <!-- <button class="show-more-btn">Show more</button> -->
    </div>

    <!-- Ingredients Section -->
    <section class="ingredients-section">
        <h2>Ingredients</h2>
        <div class="ingredients-grid">
            <?php
            // Check if the ingredients image exists and display it
            if (!empty($recipe['ingredients_image'])) {
                echo '<img src="' . htmlspecialchars($recipe['ingredients_image']) . '" alt="Ingredients Image" class="ingredients-image">';
            } else {
                // If no ingredients image is found, use a placeholder image
                echo '<img src="images/placeholder.svg" alt="Ingredients Image" class="ingredients-image">';
            }
            ?>
            <ul class="ingredients-list">
                <?php
                // Display ingredients from database 
                $ingredients = explode("\n", $recipe['ingredients']); // Split by new line

                foreach ($ingredients as $ingredient) {
                    // Clean up the ingredient string by trimming extra spaces
                    $ingredient = htmlspecialchars(trim($ingredient)); 
                    
                    // Avoid empty items being displayed
                    if (!empty($ingredient)) {
                        echo "<li>" . $ingredient . "</li>";
                    }
                }
                ?>
            </ul>
        </div>
    </section>


    <!-- Steps Section -->
<section class="steps-section">
    <h2>Steps</h2>
    <div class="steps-container">
    <?php
        // Assuming step images are stored in a comma-separated string in the 'steps_images' column
        $stepImages = explode("|", $recipe['step_images']); // Split the step images by "|"

        // Display steps and their corresponding images
        $steps = explode("*", $recipe['steps']); // Assuming steps are stored as comma-separated values
        foreach ($steps as $index => $step) {
            // Get the image for this step (if exists)
            $stepImage = isset($stepImages[$index]) ? $stepImages[$index] : 'images/placeholder.svg'; // Default image if none provided

            echo "<div class='step'>
                    <img src='" . htmlspecialchars($stepImage) . "' alt='Step " . ($index + 1) . " Image' class='step-image'>
                    <div class='step-content'>
                        <div class='step-number'>" . ($index + 1) . "</div>
                        <p>" . htmlspecialchars(trim($step)) . "</p>
                    </div>
                </div>";
        } 
    ?>
    
    </div>
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

