<!DOCTYPE html>
<html lang="en">
<head>
    <title>Palette Paradise - Shop</title>
    <?php include('./partials/header.php') ?>
    <style>  
        .fa {  
            margin: 0 4px;  
            font-size: 22px;  
            color: #47384a;
        }  
    </style>
</head>

<body>

    <header class="header" id="shop-nav">
        <a href="home.php"><img src="img/logo.png" class="logo" alt="logo" /></a>
        <ul id="navbar">
            <li><a href="home.php" class="material-symbols-rounded">home</a></li>
            <li><a href="shop.php" class="material-symbols-rounded" id="active">store</a></li>
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
    <section id="page-header">
        <h4>"Art is not what you see, but what you make others see." <br> - Edgar Degas</h4>
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
                    <span>blick studio</span>
                    <h5>Oil Color Starter Set</h5>
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
                    <span>blick studio</span>
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
                    <span>blick studio</span>
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

    <section id="pagnav" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
    </section>

    <footer class="section-p1">
        <?php include('./partials/footer.php') ?>
        <div class="citations">
            <cite> Image by <a href="https://www.freepik.com/author/freepik">Freepik</a> (link does not work but I need to cite it)</cite>
        </div>
    </footer>    

    <script src="script.js"></script>
</body>
</html>
