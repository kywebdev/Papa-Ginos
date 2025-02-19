<!doctype html>
<html lang="en">
    <head>
        <title>Menu - Pasta & Salads | Papa Gino's</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
        <?php include('includes/styles.php'); ?>
    </head>
    <body class="menu" id="top" data-bs-spy="scroll" data-bs-target="#subcategories" data-bs-offset="259">
        <?php include('includes/browserupgrade.php'); ?>
        <?php include('includes/header.php'); ?>
        <main>
            <section class="hero">
                <div class="hero__img img--1">
                    <picture>
                        <source media="(max-width: 767px)" srcset="img/hero-pizza-slice-mobile.png">
                        <img src="img/hero-pizza-slice.png" alt="" />
                    </picture>
                </div>
                <div class="hero__text">
                    <h1>Papa Gino’s Menu</h1>
                    <p>Official Pizza of Hungry New Englanders!</p>
                    <div class="hero__text__button">
                        <a href="#menupdfs" class="btn --red">Download Menu PDFs</a>
                    </div>
                </div>
                <div class="hero__img img--2">
                    <picture>
                        <source media="(max-width: 767px)" srcset="img/hero-mozz-sticks-mobile.png">
                        <img src="img/hero-mozz-sticks.png" alt="" />
                    </picture>
                </div>
            </section>
            <section class="menu-categories">
                <div class="menu-categories__container">
                    <div class="menu-categories-slider">
                        <div class="slide">
                            <a href="pizza.php" class="btn --white">Pizza</a>
                        </div>
                        <div class="slide">
                            <a href="pasta-salads.php" class="btn --white active">Pasta & Salads</a>
                        </div>
                        <div class="slide">
                            <a href="burgers-sandwiches.php" class="btn --white">Burgers & Sandwiches</a>
                        </div>
                        <div class="slide">
                            <a href="shareables.php" class="btn --white">Shareables</a>
                        </div>
                        <div class="slide">
                            <a href="baskets-sides.php" class="btn --white">Baskets & Sides</a>
                        </div>
                        <div class="slide">
                            <a href="drinks-desserts.php" class="btn --white">Drinks & Desserts</a>
                        </div>
                        <div class="slide">
                            <a href="lunch.php" class="btn --white">Lunch Specials</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="menu-items">
                <div class="menu-items__heading">
                    <a href="downloads/PG_Nutritional_Info.pdf" target="_blank" class="menu-items__heading__nutrition">+ Nutrition & Allergen Guide</a>
                    <div class="dropdown">
                        <button class="dropdown-toggle" type="button" id="filter-dropdown" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">Filter by</button>
                        <ul class="dropdown-menu" aria-labelledby="filter-dropdown">
                            <li><a href="#entree-pastas" class="dropdown-item">Entrée Pastas</a></li>
                            <li><a href="#family-meals" class="dropdown-item">Family Meals</a></li>
                            <li><a href="#entree-salads" class="dropdown-item">Entrée Salads</a></li>
                            <li><a href="#family-salads" class="dropdown-item">Family-Sized Salads</a></li>
                        </ul>
                    </div>
                    <h2>Pasta & Salads</h2>
                </div>
                <div class="row g-0">
                    <div class="col-lg-2">
                        <div class="menu-items__subcategories list-group" id="subcategories">
                            <a href="#entree-pastas" class="list-group-item list-group-item-action">Entrée Pastas</a>
                            <a href="#family-meals" class="list-group-item list-group-item-action">Family Meals</a>
                            <a href="#entree-salads" class="list-group-item list-group-item-action">Entrée Salads</a>
                            <a href="#family-salads" class="list-group-item list-group-item-action">Family-Sized Salads</a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="menu-items__section" id="entree-pastas">
                            <div class="menu-items__section__heading">
                                <h3>Entrée Pastas</h3>
                                <div class="menu-items__section__heading__details">
                                    <span>Served with Cheese Breadsticks</span>
                                </div>
                            </div>
                            <div class="menu-items__section__container --three-up --top-img">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Papa Platter</h4>
                                            <p>Your choice of Spaghetti or Penne, two Jumbo Cheese Ravioli and two Meatballs, topped with our delicious Marinara. Served with a Cheese Breadstick.</p>
                                            <span>Cals: 1140-1260</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Chicken & Broccoli Alfredo</h4>
                                            <p>All White Meat Chicken Breast and Fresh Broccoli tossed with Spaghetti or Penne, in a light and delicious Alfredo Sauce. Served with a Cheese Breadstick.</p>
                                            <span>Cals: 1030-1150</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Chicken Parmigiana</h4>
                                            <p>Golden Brown Chicken Parmigiana with your choice of Spaghetti or Penne Marinara. Served with a Cheese Breadstick.</p>
                                            <span>Cals: 1170-1270</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Pasta with Meatballs</h4>
                                            <p>A generous portion of Spaghetti or Penne and topped with our delicious Marinara and Meatballs. Served with a Cheese Breadstick.</p>
                                            <span>Cals: 990-1110</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Pasta Marinara</h4>
                                            <p>A generous portion of Spaghetti or Penne topped with our delicious Marinara. Served with a Cheese Breadstick.</p>
                                            <span>Cals: 1140-1260</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Cheese Ravioli</h4>
                                            <p>Six Jumbo Cheese Ravioli topped with our delicious Marinara and a Sprinkle of Romano Cheese. Served with a Cheese Breadstick.</p>
                                            <span>Cals: 760</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Mac & Cheese</h4>
                                            <p>Macaroni in a Creamy Cheese Sauce with Asiago Cheese. Served with a Cheese Breadstick.</p>
                                            <span>Cals: 1090</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Buffalo Chicken Mac & Cheese</h4>
                                            <p>Spicy Buffalo Chicken and Macaroni in a Creamy Cheese Sauce with Asiago Cheese. Served with a Cheese Breadstick.</p>
                                            <span>Cals: 1550</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Bacon Mac & Cheese</h4>
                                            <p>Crispy Bacon and Macaroni in a Creamy Cheese Sauce with Asiago Cheese. Served with a Cheese Breadstick.</p>
                                            <span>Cals: 1310</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="menu-items__section__img --top">
                                    <picture>
                                        <source media="(max-width: 767px)" srcset="img/menu-pasta-mobile.png">
                                        <img src="img/menu-pasta.png" alt="" />
                                    </picture>
                                </div>
                            </div>
                        </div>
                        <div class="menu-items__section" id="family-meals">
                            <div class="menu-items__section__heading">
                                <h3>Family Meals With Breadsticks</h3>
                                <div class="menu-items__section__heading__details">
                                    <span>Serves family of 5</span>
                                </div>
                                <p>Each Pasta order served with a full large order of Cheese Breadsticks. Serving tongs, plates, and cutlery are also included.</p>
                            </div>
                            <div class="menu-items__section__container --three-up">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Cheese Ravioli</h4>
                                            <p>Jumbo Cheese Ravioli in our own famous Marinara.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Pasta Marinara</h4>
                                            <p>A generous portion of Spaghetti or Penne prepared to order, smothered in our Marinara.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Pasta with Meatballs</h4>
                                            <p>A generous portion of Spaghetti or Penne prepared to order, smothered in our Marinara and topped with Meatballs.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Chicken & Broccoli Alfredo</h4>
                                            <p>Golden Brown Chicken Parmigiana with your choice of Spaghetti or Penne Marinara.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Chicken Parmigiana</h4>
                                            <p>Golden Brown Chicken Parmigiana with your choice of Spaghetti or Penne Marinara.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Mac & Cheese</h4>
                                            <p>Macaroni in a Creamy Cheese Sauce with Asiago Cheese.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Buffalo Mac & Cheese</h4>
                                            <p>Macaroni in a Creamy Cheese Sauce with Asiago Cheese.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Bacon Mac & Cheese</h4>
                                            <p>Macaroni in a Creamy Cheese Sauce with Asiago Cheese topped with Bacon.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Meatballs</h4>
                                            <p>A delicious addition to our Pasta Marinara, Cheese Ravioli, Chicken Parmigiana, or on their own. Includes 20 Meatballs.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-items__section" id="entree-salads">
                            <div class="menu-items__section__heading">
                                <h3>Entrée Salads</h3>
                            </div>
                            <div class="menu-items__section__container --two-up --middle-img">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="menu-items__section__item">
                                            <h4>Garden Salad</h4>
                                            <p>Customize your Salad! Add Grilled Steak, Grilled Chicken or Plain or Flavored Chicken Tenders on top of Romaine, Cucumbers, Red Onions, Green Peppers, Tomatoes & Croutons. Add your choice of Cheeses as well.</p>
                                            <span>Cals: 420</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="menu-items__section__item">
                                            <h4>Caesar Salad</h4>
                                            <p>Customize your Salad! Add Grilled Steak, Grilled Chicken or Plain or Flavored Chicken Tenders on top of Romaine, shaved Parmesan Cheese & Croutons. Add your choice of Cheeses as well.</p>
                                            <span>Cals: 420</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="menu-items__section__img --middle">
                                    <picture>
                                        <source media="(max-width: 767px)" srcset="img/menu-salad-mobile.png">
                                        <img src="img/menu-salad.png" alt="" />
                                    </picture>
                                </div>
                            </div>
                        </div>
                        <div class="menu-items__section" id="family-salads">
                            <div class="menu-items__section__heading">
                                <h3>Family-Sized Salads</h3>
                                <div class="menu-items__section__heading__details">
                                    <span>Feeds family of 5</span>
                                </div>
                            </div>
                            <div class="menu-items__section__container --two-up">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="menu-items__section__item">
                                            <h4>Garden Salad</h4>
                                            <p>Crisp Romaine Lettuce, Cucumbers, Red Onions, Green Peppers, Tomatoes and Crispy Croutons. Protein & Cheese options available.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="menu-items__section__item">
                                            <h4>Caesar Salad</h4>
                                            <p>Crisp Romaine Lettuce, Shaved Parmesan Cheese & Croutons. Served with Caesar Dressing. Protein & Cheese options available.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="order-now row">
                    <div class="col-12 text-center">
                        <span class="caption">see something that <br />sparks your appetite?</span>
                        <a href="" target="_blank" class="btn --red">Order Now!</a>
                    </div>
                </div>
                <div class="menu-pdfs" id="menupdfs">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-11 offset-lg-1">
                                <div class="menu-pdfs__container">
                                    <div class="menu-pdfs__img">
                                        <img src="img/menu-pdfs-pizza.jpg" alt="" />
                                    </div>
                                    <div class="menu-pdfs__text">
                                        <h2>Menu PDFs</h2>
                                        <div class="menu-pdfs__text__buttons">
                                            <a href="downloads/PG_Menu.pdf" target="_blank" class="btn --red">Papa Gino’s Menu</a>
                                            <a href="downloads/PG_DAngelo_Menu.pdf" target="_blank" class="btn --red">Papa Gino’s & D’Angelo Co-Branded Menu</a>
                                            <a href="" target="_blank" class="btn --red">MA Pike Menu</a>
                                            <a href="" target="_blank" class="btn --red">Papa Gino’s Ludlow</a>
                                            <a href="" target="_blank" class="btn --red">Papa Gino’s Manchester</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="back-to-top">
                    <a href="#top"></a>
                </div>
            </section>
            <section class="mobile-order-btn">
                <a href="" target="_blank">Order Now!</a>
            </section>
        </main>
        <?php include('includes/footer.php'); ?>
        <?php include('includes/scripts.php'); ?>
    </body>
</html>