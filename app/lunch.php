<!doctype html>
<html lang="en">
    <head>
        <title>Menu - Lunch Specials | Papa Gino's</title>
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
                            <a href="baskets-sides.php" class="btn --white">Baskets & Sides</a>
                        </div>
                        <div class="slide">
                            <a href="drinks-desserts.php" class="btn --white">Drinks & Desserts</a>
                        </div>
                        <div class="slide">
                            <a href="lunch.php" class="btn --white active">Lunch Specials</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="menu-items">
                <div class="menu-items__heading">
                    <a href="downloads/PG_Nutritional_Info.pdf" target="_blank" class="menu-items__heading__nutrition">+ Nutrition & Allergen Guide</a>
                    <h2>Lunch Specials</h2>
                </div>
                <div class="row g-0">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-10">
                        <div class="menu-items__section" id="lunch">
                            <div class="menu-items__section__heading">
                                <h3>Lunch Specials</h3>
                                <div class="menu-items__section__heading__details">
                                    <span>Available until 5:00 PM</span>
                                </div>
                            </div>
                            <div class="menu-items__section__container --three-up --top-img --bottom-img">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>2 Slices of Cheese Pizza & Bottled Soda</h4>
                                            <p>Two slices of our Traditional Thin Crust Cheese Pizza and a Bottled Soda or Aquafina.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>2 Slices of Pepperoni Pizza & Bottled Soda</h4>
                                            <p>Two slices of our Traditional Thin Crust Pepperoni Pizza and a Bottled Soda or Aquafina.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Chicken Caesar Pocket w/ Bottled Soda</h4>
                                            <p>Romaine, shaved Parmesan Cheese, Croutons and Grilled Chicken in our House-Made Pocket. Served with a Bottled Soda or Aquafina.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Italian Sub w/ Bottled Soda & Chips</h4>
                                            <p>The perfect blend of Italian Cold Cuts – Genoa Salami, Capicola, Mortadella and Aged Provolone Cheese, Shredded Lettuce, Tomato, Pickles and Onion, with Salt, Pepper, Oregano and Oil & Vinegar. Served with a Bottled Soda or Aquafina and a small bag of Chips.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Tuna Sub w/ Bottled Soda & Chips</h4>
                                            <p>Tuna mixed fresh daily with Mayonnaise. Served with a Bottled Soda or Aquafina and a small bag of Chips.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Turkey Sub w/ Bottled Soda & Chips</h4>
                                            <p>Moist, flavorful, All-White Turkey breast generously sliced. Your choice of fresh toppings can be added. Served with a Bottled Soda or Aquafina and a small bag of Chips.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Meatball Parmigiana Sub w/ Bottled Soda & Chips</h4>
                                            <p>Our Authentic Meatball recipe in our traditional Marinara Sauce, covered in Provolone Cheese. Served with a Bottled Soda or Aquafina and a small bag of Chips.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="menu-items__section__img --top">
                                    <picture>
                                        <source media="(max-width: 767px)" srcset="img/menu-lunch-pizza-mobile.png">
                                        <img src="img/menu-lunch-pizza.png" alt="" />
                                    </picture>
                                </div>
                                <div class="menu-items__section__img --bottom">
                                    <picture>
                                        <source media="(max-width: 767px)" srcset="img/menu-lunch-sub-mobile.png">
                                        <img src="img/menu-lunch-sub.png" alt="" />
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