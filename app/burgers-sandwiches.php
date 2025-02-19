<!doctype html>
<html lang="en">
    <head>
        <title>Menu - Burgers & Sandwiches | Papa Gino's</title>
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
                            <a href="burgers-sandwiches.php" class="btn --white active">Burgers & Sandwiches</a>
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
                            <li><a href="#cold-sandwiches" class="dropdown-item">Cold Sandwiches</a></li>
                            <li><a href="#hot-sandwiches" class="dropdown-item">Hot Sandwiches</a></li>
                            <li><a href="#burgers-dogs" class="dropdown-item">Burgers and Dogs</a></li>
                        </ul>
                    </div>
                    <h2>Burgers & Sandwiches</h2>
                </div>
                <div class="row g-0">
                    <div class="col-lg-2">
                        <div class="menu-items__subcategories list-group" id="subcategories">
                            <a href="#cold-sandwiches" class="list-group-item list-group-item-action">Cold Sandwiches</a>
                            <a href="#hot-sandwiches" class="list-group-item list-group-item-action">Hot Sandwiches</a>
                            <a href="#burgers-dogs" class="list-group-item list-group-item-action">Burgers and Dogs</a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="menu-items__section" id="cold-sandwiches">
                            <div class="menu-items__section__heading">
                                <h3>Cold Sandwiches</h3>
                                <div class="menu-items__section__heading__details">
                                    <span>Large sub</span>
                                    <span>Fresh-baked pocket</span>
                                </div>
                            </div>
                            <div class="menu-items__section__container --three-up --top-img">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>BLT with Cheese</h4>
                                            <p>Bacon, Shredded Lettuce, Tomato and Mayonnaise with American Cheese.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Italian</h4>
                                            <p>The perfect blend of Italian Cold Cuts – Genoa Salami, Capicola, Mortadella and Aged Provolone Cheese, Shredded Lettuce, Tomato, Pickles and Onion, all seasoned with Salt, Pepper, Oregano and just enough Oil and Vinegar.</p>
                                            <span>Cals: 790/850</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Tuna</h4>
                                            <p>Tuna mixed fresh daily with Mayonnaise. Served with Shredded Lettuce and Tomato.</p>
                                            <span>Cals: 820/880</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Turkey Breast</h4>
                                            <p>Moist, flavorful, All-White Turkey Breast generously sliced. Your choice of fresh toppings can be added.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Turkey Club</h4>
                                            <p>Our All-White Turkey Breast, topped with Crisp Bacon, Shredded Lettuce, Tomato & Mayonnaise.</p>
                                            <span>Cals: 740/800</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Chicken Caesar Pocket</h4>
                                            <p>Chicken mixed with Ken’s Caesar Dressing, combined with a generous portion of Romaine, Shredded Parmesan Cheese & Croutons. Served in a House-Made Pocket.</p>
                                            <span>Cals: 1020</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Lobster Roll</h4>
                                            <p>A New England classic. Our 100% Real Lobster lightly tossed with Mayonnaise on a bed of Crisp Lettuce. Served on a Grilled Hot Dog Roll.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Twin Lobster Offer</h4>
                                            <p>Two of our Classic New England Lobster Rolls at a discounted price!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="menu-items__section__img --top">
                                    <picture>
                                        <source media="(max-width: 767px)" srcset="img/menu-cold-sub-mobile.png">
                                        <img src="img/menu-cold-sub.png" alt="" />
                                    </picture>
                                </div>
                            </div>
                        </div>
                        <div class="menu-items__section" id="hot-sandwiches">
                            <div class="menu-items__section__heading">
                                <h3>Hot Sandwiches</h3>
                                <div class="menu-items__section__heading__details">
                                    <span>Large sub</span>
                                    <span>Fresh-baked pocket</span>
                                </div>
                            </div>
                            <div class="menu-items__section__container --three-up --bottom-img">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Steak & Cheese</h4>
                                            <p>Tender, juicy strips of Steak topped with American cheese.</p>
                                            <span>Cals: 740/870</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Super Steak</h4>
                                            <p>Steak with Sautéed Mushrooms, Onions, Green Peppers and American Cheese.</p>
                                            <span>Cals: 800/910</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Chicken Parmigiana</h4>
                                            <p>Crispy, lightly spiced Chicken Tenders covered with Aged Provolone Cheese, topped with our Traditional Marinara Sauce.</p>
                                            <span>Cals: 800/910</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Meatball Parmigiana</h4>
                                            <p>Our Authentic Meatball recipe in our Traditional Marinara Sauce, covered in Provolone Cheese.</p>
                                            <span>Cals: 1140/1200</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Hot Veggie Pocket</h4>
                                            <p>Made with fresh Sauteed Mushrooms, Green Peppers, Onions, Aged Provolone and American Cheese.</p>
                                            <span>Cals: 510</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Crispy Chicken</h4>
                                            <p>Crispy, lightly spiced Chicken Tenders on a bed of Shredded Lettuce with Mayonnaise and Tomato.</p>
                                            <span>Cals: 1050/1100</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Buffalo Chicken</h4>
                                            <p>Crispy, lightly spiced Chicken Tenders tossed in Buffalo Sauce, topped with Blue Cheese Dressing on a bed of Shredded Lettuce with Tomato</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="menu-items__section__img --bottom">
                                    <picture>
                                        <source media="(max-width: 767px)" srcset="img/menu-hot-sub-mobile.png">
                                        <img src="img/menu-hot-sub.png" alt="" />
                                    </picture>
                                </div>
                            </div>
                        </div>
                        <div class="menu-items__section" id="burgers-dogs">
                            <div class="menu-items__section__heading">
                                <h3>Burgers & Dogs</h3>
                                <div class="menu-items__section__heading__details">
                                    <span>1/3 lb single</span>
                                    <span>2/3 lb double</span>
                                </div>
                            </div>
                            <div class="menu-items__section__container --three-up">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Mushroom Cheddar Burger & Fries</h4>
                                            <p>Topped with Vermont Cheddar Cheese, Grilled Mushrooms & Mayonnaise. Served on a Sesame Seed Bun.</p>
                                            <span>Cals: 1340/1710</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Hamburger with Fries</h4>
                                            <p>Served on a Grilled Sesame Seed Bun.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Cheeseburger with Fries</h4>
                                            <p>Topped with American Cheese. Served on a Grilled Sesame Seed Bun.</p>
                                            <span>Cals: 1120/1410</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Papa Classic with Fries</h4>
                                            <p>Topped with American Cheese, Special Sauce & Shredded Lettuce. Served on a Grilled Sesame Seed Bun.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Bacon Cheddar with Fries</h4>
                                            <p>Topped with Vermont Cheddar Cheese, Bacon, Shredded Lettuce, Tomato & Mayonnaise. Served on a Grilled Sesame Seed Bun.</p>
                                            <span>Cals: 1340/1710</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Hot Dog</h4>
                                            <p>Served on a Grilled Hot Dog Roll.</p>
                                            <span>Cals: 400</span>
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