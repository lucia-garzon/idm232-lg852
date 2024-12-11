<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help</title>
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

    <main class="help-container">
        <section class="help-header">
            <h1>Need Help?</h1>
            <p>If you have questions, you've come to the right place!</p>
        </section>

        <section class="help-topics">
            <article class="help-topic">
                <i class="uil uil-search icon"></i>
                <h3>How to Search for Recipes</h3>
                <p>Use the search bar on the recipes page or click the search icon in the top menu to quickly find recipes by name or ingredients.</p>
            </article>

            <article class="help-topic">
                <i class="uil uil-filter icon"></i>
                <h3>How to Filter Recipes</h3>
                <p>Click the filter button on the recipes page to sort recipes by category, cooking time, or dietary preference.</p>
            </article>

            <article class="help-topic">
                <i class="uil uil-heart icon"></i>
                <h3>Saving Your Favorite Recipes</h3>
                <p>Logged-in users can save recipes to their favorites for easy access later.</p>
            </article>

            <article class="help-topic">
                <i class="uil uil-phone icon"></i>
                <h3>Contact Us</h3>
                <p>Email us for questions.</p>
                <!-- <a href="mailto:support@thesecretingredient.com">support@thesecretingredient.com</a>. -->
            </article>
        </section>

        <section class="help-actions">
            <a href="index.php" class="btn-primary">Back to Home</a>
            <a href="recipes.php" class="btn-secondary">Explore Recipes</a>
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
