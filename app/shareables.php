<!doctype html>
<html lang="en">
    <head>
        <title>Menu - Shareables | Papa Gino's</title>
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
                            <a href="shareables.php" class="btn --white active">Shareables</a>
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
                            <li><a href="#appetizers" class="dropdown-item">Appetizers</a></li>
                            <li><a href="#party-size" class="dropdown-item">Party Size</a></li>
                        </ul>
                    </div>
                    <h2>Shareables</h2>
                </div>
                <div class="row g-0">
                    <div class="col-lg-2">
                        <div class="menu-items__subcategories list-group" id="subcategories">
                            <a href="#appetizers" class="list-group-item list-group-item-action">Appetizers</a>
                            <a href="#party-size" class="list-group-item list-group-item-action">Party Size</a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="menu-items__section" id="appetizers">
                            <div class="menu-items__section__heading">
                                <h3>Appetizers</h3>
                            </div>
                            <div class="menu-items__section__container --three-up --top-img">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Cheese Breadsticks</h4>
                                            <p>Warm, soft Breadsticks covered in Cheese, served with Marinara Dipping Sauce (10/20 pcs).</p>
                                            <span>Cals: 1130/2270</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Mozzarella Sticks</h4>
                                            <p>Served with Marinara Dipping Sauce (8).</p>
                                            <span>Cals: 1200</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Chicken Tenders</h4>
                                            <p>Crispy, Breaded and lightly Sauced Chicken Tenders. Available Plain or choose your favorite Sauce (6).</p>
                                            <span>Cals: 650</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Chicken Wings</h4>
                                            <p>Crispy, juicy, Bone-In Chicken Wings. Available Plain or choose your favorite Sauce (10).</p>
                                            <span>Cals: 1080</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>French Fries</h4>
                                            <p>Crispy, crunchy Golden Fries (sm/lg).</p>
                                            <span>Cals: 450/680</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="menu-items__section__img --top">
                                    <picture>
                                        <source media="(max-width: 767px)" srcset="img/menu-appetizer-mobile.png">
                                        <img src="img/menu-appetizer.png" alt="" />
                                    </picture>
                                </div>
                            </div>
                        </div>
                        <div class="menu-items__section" id="party-size">
                            <div class="menu-items__section__heading">
                                <h3>Party Size</h3>
                            </div>
                            <div class="menu-items__section__container --three-up --bottom-img">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Party Wings (36/50 pcs)</h4>
                                            <p>Party-size crispy Bone-In Chicken Wings. Served Plain or tossed in your choice of Sauce. Choose up to 3 flavors. Available in small and large.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Chicken Tenders (24)</h4>
                                            <p>All White Meat Chicken Breast Filets Breaded and lightly Spiced. Available in a variety of flavors.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Sandwich Box</h4>
                                            <p>Our new Sandwich Box includes our most popular sandwiches: Turkey, Tuna and Italian, all individually wrapped and served with Shredded Lettuce and Tomato. Condiments and paper goods are included. (Feeds Group of 10).</p>
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