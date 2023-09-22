<!DOCTYPE html>
<html lang="en">
<head>
    <title>Palette Paradise - Home</title>
    <?php include('./partials/header.php') ?>
</head>

<body>

    <header class="header">
        <a href="home.php"><img src="img/logo.png" class="logo" alt="logo" /></a>
        <ul id="navbar">
            <li><a href="home.php" class="material-symbols-rounded" id="active">home</a></li>
            <li><a href="shop.php" class="material-symbols-rounded">store</a></li>
            <li><a href="account.php" class="material-symbols-rounded">account_circle</a></li>
            <li><a href="cart.php" class="material-symbols-rounded">shopping_cart</a></li>
            <li><button id="form_open" class="material-symbols-rounded">login</button></li>
        </ul>
    </header>

    <!-- popup login -->
    <section class="login">
        <?php include('./partials/login.php') ?>
    </section>

    <!-- hero banner -->
    <section id="hero">
        <h4>"Unleash Your Inner Artist, <br /> One Brushstroke at a Time"</h4>
        <p>Professional Art Supplies</p>
        <a href="shop.php"><button>Shop Now</button></a>
    </section>

    <!-- slider -->
    <section id="essentials" class="section-p1">
        <h2>ESSENTIALS</h2>
        <p>Elevate Your Creativity with Premium Art Supplies!</p>
        <div id="slider">
            <input type="radio" name="slider" id="s1" checked />
            <input type="radio" name="slider" id="s2" />
            <input type="radio" name="slider" id="s3" />
            <input type="radio" name="slider" id="s4" />
            <input type="radio" name="slider" id="s5" />
            
            <label for="s1" id="slider1">
                <img src="img/slider/slider 1.jpg" alt="Kalour Professional Sketching Pencils 12pc"/>
            </label>
            <label for="s2" id="slider2">
                <img src="img/slider/slider 2.jpg" alt="ARTLINE Drawing System Set of 4 ( 0.1, 0.3, 05, 0.7 ) 4PSH1"/>
            </label>
            <label for="s3" id="slider3">
                <img src="img/slider/slider 3.jpg" alt="Acrylic Gouache Set Primaries"/>
            </label>
            <label for="s4" id="slider4">
                <img src="img/slider/slider 4.jpg" alt="MEEDEN Canvas Boards"/>
            </label>
            <label for="s5" id="slider5">
                <img src="img/slider/slider 5.jpg" alt="Blick Studio Oil Colors"/>
            </label>            
        </div>
    </section>
    
    <!-- featured products -->
    <section id="product1" class="section-p1">
        <h2>FEATURED PRODUCTS</h2>
        <p>Discover Excellence: Our Featured Products, Your Ultimate Choice!</p>
        <div class="pro-container">
            <div class="pro" id="shrink-border" onclick="window.location.href='sprod.php';">
                <img src="img/products/pencil 1.jpg" alt="Kalour Professional Sketching Pencils 12pc">
                <div class="des">
                    <span>kalour</span>
                    <h5>Professional Sketching Pencils</h5>
                    <div class="star">
                        <i class="material-symbols-rounded">grade</i>
                        <i class="material-symbols-rounded">grade</i>
                        <i class="material-symbols-rounded">grade</i>
                        <i class="material-symbols-rounded">grade</i>
                    </div>
                    <h4>$7</h4>
                </div>
            <a href="#">
                <i class="material-symbols-rounded cart">shopping_cart</i>
                <i class="material-symbols-rounded add">add_circle</i>
            </a>
            </div>
            <div class="pro" id="shrink-border">
                <img src="img/products/pen 2.jpg" alt="ARTLINE Drawing System Set of 4 ( 0.1, 0.3, 05, 0.7 ) 4PSH1">
                <div class="des">
                    <span>artline</span>
                    <h5>Drawing System Set</h5>
                    <div class="star">
                        <i class="material-symbols-rounded">grade</i>
                        <i class="material-symbols-rounded">grade</i>
                        <i class="material-symbols-rounded">grade</i>
                        <i class="material-symbols-rounded">grade</i>
                    </div>
                    <h4>$11</h4>
                </div>
            <a href="#">
                <i class="material-symbols-rounded cart">shopping_cart</i>
                <i class="material-symbols-rounded add">add_circle</i>
            </a>
            </div>
            <div class="pro" id="shrink-border">
                <img src="img/products/acrylic 1a.jpg" alt="Acrylic Gouache Set Primaries">
                <div class="des">
                    <span>liquitex</span>
                    <h5>Acrylic Gouache Set</h5>
                    <div class="star">
                        <i class="material-symbols-rounded">grade</i>
                        <i class="material-symbols-rounded">grade</i>
                        <i class="material-symbols-rounded">grade</i>
                        <i class="material-symbols-rounded">grade</i>
                    </div>
                    <h4>$75</h4>
                </div>
            <a href="#">
                <i class="material-symbols-rounded cart">shopping_cart</i>
                <i class="material-symbols-rounded add">add_circle</i>
            </a>
            </div>
            <div class="pro" id="shrink-border">
                <img src="img/products/oil 1.jpg" alt="Blick Studio Oil Colors">
                <div class="des">
                    <span>blick</span>
                    <h5>Studio Oil Color Starter Set</h5>
                    <div class="star">
                        <i class="material-symbols-rounded">grade</i>
                        <i class="material-symbols-rounded">grade</i>
                        <i class="material-symbols-rounded">grade</i>
                        <i class="material-symbols-rounded">grade</i>
                    </div>
                    <h4>$35</h4>
                </div>
            <a href="#">
                <i class="material-symbols-rounded cart">shopping_cart</i>
                <i class="material-symbols-rounded add">add_circle</i>
            </a>
            </div>
            <div class="pro" id="shrink-border">
                <img src="img/products/palette 1.jpg" alt="Blick Palette Paper">
                <div class="des">
                    <span>blick</span>
                    <h5>Palette Paper</h5>
                    <div class="star">
                        <i class="material-symbols-rounded">grade</i>
                        <i class="material-symbols-rounded">grade</i>
                        <i class="material-symbols-rounded">grade</i>
                        <i class="material-symbols-rounded">grade</i>
                    </div>
                    <h4>$23</h4>
                </div>
            <a href="#">
                <i class="material-symbols-rounded cart">shopping_cart</i>
                <i class="material-symbols-rounded add">add_circle</i>
            </a>
            </div>
            <div class="pro" id="shrink-border">
                <img src="img/products/sketchbook 1.jpg" alt="Canson XL Mix Media Paper">
                <div class="des">
                    <span>canson</span>
                    <h5>XL Mix Media Paper</h5>
                    <div class="star">
                        <i class="material-symbols-rounded">grade</i>
                        <i class="material-symbols-rounded">grade</i>
                        <i class="material-symbols-rounded">grade</i>
                        <i class="material-symbols-rounded">grade</i>
                    </div>
                    <h4>$9</h4>
                </div>
            <a href="#">
                <i class="material-symbols-rounded cart">shopping_cart</i>
                <i class="material-symbols-rounded add">add_circle</i>
            </a>
            </div>
            <div class="pro" id="shrink-border">
                <img src="img/products/brush 1.jpg" alt="Utrecht Natural Chungking Pure Bristle Brush ">
                <div class="des">
                    <span>utrecht</span>
                    <h5>Chungking Pure Bristle Brush</h5>
                    <div class="star">
                        <i class="material-symbols-rounded">grade</i>
                        <i class="material-symbols-rounded">grade</i>
                        <i class="material-symbols-rounded">grade</i>
                        <i class="material-symbols-rounded">grade</i>
                    </div>
                    <h4>$43</h4>
                </div>
            <a href="#">
                <i class="material-symbols-rounded cart">shopping_cart</i>
                <i class="material-symbols-rounded add">add_circle</i>
            </a>
            </div>
            <div class="pro" id="shrink-border">
                <img src="img/products/palette knives 1.jpg" alt="Blick Painting Knife Set">
                <div class="des">
                    <span>blick</span>
                    <h5>Detailed Painting Knife Set</h5>
                    <div class="star">
                        <i class="material-symbols-rounded">grade</i>
                        <i class="material-symbols-rounded">grade</i>
                        <i class="material-symbols-rounded">grade</i>
                        <i class="material-symbols-rounded">grade</i>
                    </div>
                    <h4>$37</h4>
                </div>
            <a href="#">
                <i class="material-symbols-rounded cart">shopping_cart</i>
                <i class="material-symbols-rounded add">add_circle</i>
            </a>
            </div>
            <div class="pro" id="shrink-border">
                <img src="img/products/easel 1.jpg" alt="MEEDEN Forward Tilt Floor Easel">
                <div class="des">
                    <span>meeden</span>
                    <h5>Forward Tilt Floor Easel</h5>
                    <div class="star">
                        <i class="material-symbols-rounded">grade</i>
                        <i class="material-symbols-rounded">grade</i>
                        <i class="material-symbols-rounded">grade</i>
                        <i class="material-symbols-rounded">grade</i>
                    </div>
                    <h4>$99</h4>
                </div>
            <a href="#">
                <i class="material-symbols-rounded cart">shopping_cart</i>
                <i class="material-symbols-rounded add">add_circle</i>
            </a>
            </div>
            <div class="pro" id="shrink-border">
                <img src="img/products/canvas 1.jpg" alt="MEEDEN 15-Pack Canvas Boards for Painting">
                <div class="des">
                    <span>meeden</span>
                    <h5>15-Pack Canvas Boards</h5>
                    <div class="star">
                        <i class="material-symbols-rounded">grade</i>
                        <i class="material-symbols-rounded">grade</i>
                        <i class="material-symbols-rounded">grade</i>
                        <i class="material-symbols-rounded">grade</i>
                    </div>
                    <h4>$19</h4>
                </div>
            <a href="#">
                <i class="material-symbols-rounded cart">shopping_cart</i>
                <i class="material-symbols-rounded add">add_circle</i>
            </a>
            </div>

        </div>
    </section>

    <footer class="section-p1">
        <?php include('./partials/footer.php') ?>
        <div class="citations">
            <cite>Web icon by <a href="https://www.flaticon.com/authors/darius-dan">Flaticon</a></cite>
        </div>
    </footer>    

    <script src="script.js"></script>
</body>
</html>
