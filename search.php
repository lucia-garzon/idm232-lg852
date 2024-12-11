<?php
include './includes/db_connect.php';

if (!isset($connection)) {
    die("Database connection not established.");
}

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Initialize variables for search and filters
$searchTerm = "";
$cuisineFilter = "";

// Check if search form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $searchTerm = isset($_POST['usersearch']) ? $_POST['usersearch'] : "";
    $cuisineFilter = isset($_POST['cuisine_filter']) ? $_POST['cuisine_filter'] : "";
}

// Prepare the SQL query with placeholders
$sql = "SELECT * FROM recipes_data WHERE 1=1";

// Prepare the types for bind_param
$types = '';
$values = [];

// Add conditions to the query if search term is present
if (!empty($searchTerm)) {
    $sql .= " AND (recipe_name LIKE ? OR title LIKE ? OR cuisine LIKE ?)";
    $types .= 'sss'; // Three string parameters
    $values[] = "%" . $searchTerm . "%";
    $values[] = "%" . $searchTerm . "%";
    $values[] = "%" . $searchTerm . "%";
}

// Add cuisine filter to the query if specified
if (!empty($cuisineFilter)) {
    $sql .= " AND cuisine = ?";
    $types .= 's'; // One string parameter
    $values[] = $cuisineFilter;
}



// Prepare the statement
$stmt = $connection->prepare($sql);

// Check $stmt before proceeding
if (!$stmt) {
    die("Statement preparation failed: " . $connection->error);
}

// Bind the parameters based on the types and values. Ensure parameters are added only if $values is non-empty.
if (!empty($types) && !empty($values)) {
    $stmt->bind_param($types, ...$values);
}


// Execute the prepared statement
$stmt->execute();

// Get the result
$result = $stmt->get_result();

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
            <a href="index.php"><img class="logo" alt="Recipe website logo" src="images/logo-recipe.svg"></a>

            <ul class="nav-links">
                <li><i class="uil uil-times navCloseBtn"></i></li>
                <li><a class="nav-item" href="index.php">Home</a></li>
                <li><a class="nav-item" href="recipes.php">Recipes</a></li>
                <li><a class="nav-item" href="help.php">Help</a></li>
            </ul>
        

        </nav>
    </header>
    <main class="recipe-container">
        <section class="heading">
            <h1>Recipes</h1>
            <p>Savor Every Bite, One Meal at a Time</p>
        </section>
    

        <section class="search-filter">
            <form class="searchform search-bar" action="search.php" method="post">
                <input id="search" type="text" name="usersearch" placeholder="Search for recipes" aria-label="Search for recipes" value="<?php echo htmlspecialchars($searchTerm); ?>">
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
                    <option value="East Asian" <?php if ($cuisineFilter === 'East Asian') echo 'selected'; ?>>East Asian</option>
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
        <?php
            if ($result->num_rows > 0) {
                // Display the recipes
                while ($row = $result->fetch_assoc()) {
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
                echo "<p>No recipes found matching your search or filter criteria.</p>";
            }

            // Close the database connection
            $connection->close();

        ?>
            
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
