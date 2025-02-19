<!doctype html>
<html lang="en">
    <head>
        <title>Menu - Baskets & Sides | Papa Gino's</title>
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
                            <a href="pasta-salads.php" class="btn --white">Pasta & Salads</a>
                        </div>
                        <div class="slide">
                            <a href="burgers-sandwiches.php" class="btn --white">Burgers & Sandwiches</a>
                        </div>
                        <div class="slide">
                            <a href="shareables.php" class="btn --white">Shareables</a>
                        </div>
                        <div class="slide">
                            <a href="baskets-sides.php" class="btn --white active">Baskets & Sides</a>
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
                            <li><a href="#baskets" class="dropdown-item">Papa Baskets</a></li>
                            <li><a href="#chips" class="dropdown-item">Bag of Chips</a></li>
                            <li><a href="#sides" class="dropdown-item">Sauces & Sides</a></li>
                        </ul>
                    </div>
                    <h2>Baskets & Sides</h2>
                </div>
                <div class="row g-0">
                    <div class="col-lg-2">
                        <div class="menu-items__subcategories list-group" id="subcategories">
                            <a href="#baskets" class="list-group-item list-group-item-action">Papa Baskets</a>
                            <a href="#chips" class="list-group-item list-group-item-action">Bag of Chips</a>
                            <a href="#sides" class="list-group-item list-group-item-action">Sauces & Sides</a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="menu-items__section" id="baskets">
                            <div class="menu-items__section__heading">
                                <h3>Papa Baskets</h3>
                            </div>
                            <div class="menu-items__section__container --three-up --top-img">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Chicken Tenders & Fries Basket</h4>
                                            <p>Four (4) Tenders with choice of Sauce with a serving of Fries.</p>
                                            <span>Cals: 820</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Chicken Wings & Fries Basket</h4>
                                            <p>Eight (8) Wings with choice of Sauce with a serving of Fries.</p>
                                            <span>Cals: 1310</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Hot Dog & Fries Basket</h4>
                                            <p>Our famous Grilled Hot Dog with a serving of Fries! Also available with two Hot Dogs.</p>
                                            <span>Cals: 880</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="menu-items__section__img --top">
                                    <picture>
                                        <source media="(max-width: 767px)" srcset="img/menu-basket-mobile.png">
                                        <img src="img/menu-basket.png" alt="" />
                                    </picture>
                                </div>
                            </div>
                        </div>
                        <div class="menu-items__section" id="chips">
                            <div class="menu-items__section__heading">
                                <h3>Bag of Chips</h3>
                                <div class="menu-items__section__heading__details">
                                    <span>Small</span>
                                    <span>Large</span>
                                </div>
                            </div>
                            <div class="menu-items__section__container --two-up">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="menu-items__section__item">
                                            <h4>Small Chips</h4>
                                            <p>Lots of options available.</p>
                                            <span>Cals: 160-240</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="menu-items__section__item">
                                            <h4>Large Chips</h4>
                                            <p>A large bag of Classic Lays Chips or Nacho Cheese Doritos.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-items__section" id="sides">
                            <div class="menu-items__section__heading">
                                <h3>Sauces & Sides</h3>
                                <div class="menu-items__section__heading__details">
                                    <span>One size</span>
                                </div>
                            </div>
                            <div class="menu-items__section__container --three-up --top-img">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Light Olive Oil Vinaigrette</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Blue Cheese Dressing</h4>
                                            <span>Cals: 460</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Caesar Dressing</h4>
                                            <span>Cals: 440</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Greek Dressing</h4>
                                            <span>Cals: 440</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Honey Mustard Dressing</h4>
                                            <span>Cals: 380</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Italian Romano Dressing</h4>
                                            <span>Cals: 300</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Ranch Dressing</h4>
                                            <span>Cals: 380</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Marinara Sauce</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Thousand Island Dressing</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="menu-items__section__img --top">
                                    <picture>
                                        <source media="(max-width: 767px)" srcset="img/menu-sauce-mobile.png">
                                        <img src="img/menu-sauce.png" alt="" />
                                    </picture>
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