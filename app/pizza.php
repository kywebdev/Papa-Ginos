<!doctype html>
<html lang="en">
    <head>
        <title>Menu - Pizza | Papa Gino's</title>
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
                            <a href="pizza.php" class="btn --white active">Pizza</a>
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
                            <li><a href="#classic" class="dropdown-item">Classic</a></li>
                            <li><a href="#premium-specialty" class="dropdown-item">Premium Specialty</a></li>
                            <li><a href="#classic-specialty" class="dropdown-item">Classic Specialty</a></li>
                            <li><a href="#gluten-free" class="dropdown-item">Gluten Free</a></li>
                            <li><a href="#slices" class="dropdown-item">Slices</a></li>
                        </ul>
                    </div>
                    <h2>Pizza</h2>
                </div>
                <div class="row g-0">
                    <div class="col-lg-2">
                        <div class="menu-items__subcategories list-group" id="subcategories">
                            <a href="#classic" class="list-group-item list-group-item-action">Classic</a>
                            <a href="#premium-specialty" class="list-group-item list-group-item-action">Premium Specialty</a>
                            <a href="#classic-specialty" class="list-group-item list-group-item-action">Classic Specialty</a>
                            <a href="#gluten-free" class="list-group-item list-group-item-action">Gluten Free</a>
                            <a href="#slices" class="list-group-item list-group-item-action">Slices</a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="menu-items__section" id="classic">
                            <div class="menu-items__section__heading">
                                <h3>Classic</h3>
                                <div class="menu-items__section__heading__details">
                                    <span>10” small</span>
                                    <span>14” large</span>
                                    <span>16” X-large</span>
                                </div>
                                <p>*Calories listed per slice – Small, Large, X-Large</p>
                            </div>
                            <div class="menu-items__section__container --two-up --middle-img">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="menu-items__section__item">
                                            <h4>Traditional Cheese/ Build Your Own</h4>
                                            <p>A true classic. Our famous Traditional Thin Crust Pizza with Hand-Stretched Dough, Vine-Ripened Tomato Sauce and our Signature 3-Cheese Blend.</p>
                                            <span>Cals: 170/230/300</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="menu-items__section__item">
                                            <h4>Traditional Pepperoni</h4>
                                            <p>Our famous Traditional Thin Crust Cheese Pizza topped with a generous portion of Pepperoni.</p>
                                            <span>Cals: 170/230/300 + 30-70</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="menu-items__section__img --middle">
                                    <picture>
                                        <source media="(max-width: 767px)" srcset="img/menu-pizza-classic-mobile.png">
                                        <img src="img/menu-pizza-classic.png" alt="" />
                                    </picture>
                                </div>
                            </div>
                        </div>
                        <div class="menu-items__section" id="premium-specialty">
                            <div class="menu-items__section__heading">
                                <h3>Premium Specialty</h3>
                                <div class="menu-items__section__heading__details">
                                    <span>10” small</span>
                                    <span>14” large</span>
                                    <span>16” X-large</span>
                                </div>
                            </div>
                            <div class="menu-items__section__container --three-up">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Chicken Bacon Ranch</h4>
                                            <p>Grilled Chicken, Bacon, Ranch Dressing & our Signature 3-Cheese Blend</p>
                                            <span>Cals: 240/320/420</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Buffalo Chicken Mac & Cheese</h4>
                                            <p>Our Mac & Cheese Pizza topped with Spicy Buffalo Chicken</p>
                                            <span>Cals: 250/360/470</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Mac & Cheese</h4>
                                            <p>Macaroni in a Cheese Sauce with American and Asiago Cheeses.</p>
                                            <span>Cals: 210/300/400</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Meat Combo</h4>
                                            <p>Pepperoni, Capicola, Bacon, Italian Sausage, Hamburger, Pizza Sauce & Signature 3-Cheese Blend.</p>
                                            <span>Cals: 240/390/440</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Italian Sausage Ricotta</h4>
                                            <p>Ricotta Cheese, Italian Sausage, Asiago Cheese, Red Pepper Flakes, Pizza Sauce & Signature 3-Cheese Blend.</p>
                                            <span>Cals: 240/380/550</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-items__section" id="classic-specialty">
                            <div class="menu-items__section__heading">
                                <h3>Classic Specialty</h3>
                                <div class="menu-items__section__heading__details">
                                    <span>10” small</span>
                                    <span>14” large</span>
                                    <span>16” X-large</span>
                                </div>
                            </div>
                            <div class="menu-items__section__container --two-up --middle-img">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="menu-items__section__item">
                                            <h4>Crispy Buffalo Chicken</h4>
                                            <p>Crispy Buffalo Chicken, Buffalo Sauce, & Signature 3-Cheese Blend drizzled with your choice of Blue Cheese or Ranch Dressing.</p>
                                            <span>Cals w/ Blue Cheese: 260/370/470</span>
                                            <span>Cals w/ Ranch: 240/340/460</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="menu-items__section__item">
                                            <h4>Boss Barbecue Chicken</h4>
                                            <p>Grilled Chicken, Bacon, Red Onions, Barbecue and Ranch sauces & our Signature 3-Cheese Blend.</p>
                                            <span>Cals: 230/310/440</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="menu-items__section__item">
                                            <h4>Super Veggie</h4>
                                            <p>Broccoli, Mushrooms, Peppers, Onions, Tomatoes, Olives, Pizza Sauce & Signature 3-Cheese Blend.</p>
                                            <span>Cals: 190/250/330</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="menu-items__section__item">
                                            <h4>The Works</h4>
                                            <p>Pepperoni, Italian Sausage, Hamburger, Mushrooms, Onions, Green Peppers, Pizza Sauce & Signature 3-Cheese Blend.</p>
                                            <span>Cals: 220/310/430</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="menu-items__section__img --middle">
                                    <picture>
                                        <source media="(max-width: 767px)" srcset="img/menu-pizza-classic-specialty-mobile.png">
                                        <img src="img/menu-pizza-classic-specialty.png" alt="" />
                                    </picture>
                                </div>
                            </div>
                        </div>
                        <div class="menu-items__section" id="gluten-free">
                            <div class="menu-items__section__heading">
                                <h3>Gluten Free</h3>
                                <div class="menu-items__section__heading__details">
                                    <span>available in 10”</span>
                                </div>
                            </div>
                            <div class="menu-items__section__container --three-up">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>Gluten Free – Build Your Own</h4>
                                            <p>A Gluten Free Crust topped with Vine-Ripened Tomato Sauce and our Signature 3-Cheese Blend.</p>
                                            <span>Cals: 140</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>GF Italian Sausage Ricotta</h4>
                                            <p>Grilled Chicken, sweet and tangy Barbecue Sauce, Bacon, Red Onions, Ranch Dressing, Three Cheeses. Topped with a Barbecue Drizzle.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>GF Meat Combo</h4>
                                            <p>Pepperoni, Italian Sausage, Hamburger, Mushrooms, Onions, Green Peppers, Pizza Sauce & Signature 3-Cheese Blend.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>GF The Works</h4>
                                            <p>Broccoli, Mushrooms, Peppers, Onions, Tomatoes, Olives, Pizza Sauce & Signature 3-Cheese Blend.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-items__section__item">
                                            <h4>GF Super Veggie</h4>
                                            <p>Broccoli, Mushrooms, Peppers, Onions, Tomatoes, Olives, Pizza Sauce & Signature 3-Cheese Blend.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-items__section" id="slices">
                            <div class="menu-items__section__heading">
                                <h3>By The Slice</h3>
                            </div>
                            <div class="menu-items__section__container --two-up --middle-img">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="menu-items__section__item">
                                            <h4>Slice of Cheese</h4>
                                            <p>A slice of Thin Crust Cheese Pizza.</p>
                                            <span>Cals: 170</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="menu-items__section__item">
                                            <h4>Slice of Pepperoni</h4>
                                            <p>A slice of Thin Crust Pepperoni Pizza.</p>
                                            <span>Cals: 170 + 30-70</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="menu-items__section__img --middle">
                                    <picture>
                                        <source media="(max-width: 767px)" srcset="img/menu-pizza-slice-mobile.png">
                                        <img src="img/menu-pizza-slice.png" alt="" />
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