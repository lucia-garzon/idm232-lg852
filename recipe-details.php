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
    
<main class="recipe-container">
    <!-- Recipe Title Section -->
    <section class="recipe-header">
        <h1>Recipe Title</h1>
        <p class="subtitle">Subtitle</p>
        <button class="jump-button">Jump to recipe</button>
    </section>

    <!-- Recipe Image Section -->
    <section class="recipe-main-info">
        <div class="main-image">
            <img class="recipe-details-image" src="images/placeholder.svg" alt="Recipe Image">
        </div>
        <div class="recipe-meta">
            <div class="meta-item">
                <svg width="24" height="24" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="10" stroke="black" stroke-width="2" fill="none"/>
                    <line x1="12" y1="7" x2="12" y2="12" stroke="black" stroke-width="2"/>
                    <line x1="12" y1="12" x2="15" y2="15" stroke="black" stroke-width="2"/>
                </svg>
                X MIN
            </div>
            <div class="meta-item">
                <svg width="24" height="24" viewBox="0 0 24 24">
                    <line x1="2" y1="2" x2="22" y2="22" stroke="black" stroke-width="2"/>
                    <line x1="2" y1="22" x2="22" y2="2" stroke="black" stroke-width="2"/>
                </svg>
                X Servings
            </div>
        </div>
    </section>

    <!-- Description Section with Show More/Show Less -->
    <section class="description-section">
        <div class="description">
            <p class="description-content">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus venenatis 
                mauris nec dolor volutpat, nec lobortis nulla pretium. Integer posuere felis 
                id mi vehicula varius. Etiam sagittis ante in mauris euismod, sed facilisis 
                odio pharetra. Morbi vehicula ex a malesuada suscipit. Ut volutpat odio 
                id leo tempus, sed condimentum enim lobortis. Curabitur ac sem urna.
            </p>
        </div>
        <button class="show-more-btn">Show more</button>
    </section>

    <!-- Ingredients Section -->
    <section class="ingredients-section">
        <h2>Ingredients</h2>
        <div class="ingredients-grid">
            <img src="images/placeholder.svg" alt="Ingredients Image" class="ingredients-image">
            <ul class="ingredients-list">
                <li>1 cup of flour</li>
                <li>2 eggs</li>
                <li>1/2 cup of sugar</li>
                <li>1/4 cup of butter</li>
                <li>1 tsp of baking powder</li>
                <li>Pinch of salt</li>
            </ul>
        </div>
    </section>


    <!-- Steps Section -->
<section class="steps-section">
    <h2>Steps</h2>
    <div class="steps-container">
        <div class="step">
            <img src="images/placeholder.svg" alt="Step Image" class="step-image">
            <div class="step-content">
                <div class="step-number">1</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
            </div>
        </div>
        <div class="step">
            <img src="images/placeholder.svg" alt="Step Image" class="step-image">
            <div class="step-content">
                <div class="step-number">2</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
            </div>
        </div>
        <div class="step">
            <img src="images/placeholder.svg" alt="Step Image" class="step-image">
            <div class="step-content">
                <div class="step-number">3</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
            </div>
        </div>
        <div class="step">
            <img src="images/placeholder.svg" alt="Step Image" class="step-image">
            <div class="step-content">
                <div class="step-number">4</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...ipsum dolor sit amet, consectetur adipiscing elitipsum dolor sit amet, consectetur adipiscing elit</p>
            </div>
        </div>
        <div class="step">
            <img src="images/placeholder.svg" alt="Step Image" class="step-image">
            <div class="step-content">
                <div class="step-number">5</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
            </div>
        </div>
        <div class="step">
            <img src="images/placeholder.svg" alt="Step Image" class="step-image">
            <div class="step-content">
                <div class="step-number">6</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
            </div>
        </div>
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