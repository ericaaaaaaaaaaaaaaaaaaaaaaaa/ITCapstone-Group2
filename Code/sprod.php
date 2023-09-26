<!DOCTYPE html>
<html lang="en">
<head>
    <title>Palette Paradise</title>
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
        <a href="index.php"><img src="img/logo.png" class="logo" alt="logo" /></a>
        <ul id="navbar">
            <li><a href="index.php" class="material-symbols-rounded">home</a></li>
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

    <section id="prodetails" class="singleprod">
        <div class="single-pro-image">
            <img src="img/products/pencil 1.jpg" width="100%" id="MainImg" alt="Kalour Professional Sketching Pencils 12pc">
            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="img/products/pencil 1.jpg" width="100%" class="small-img" alt="Kalour Professional Sketching Pencils 12pc">
                </div>
                <div class="small-img-col">
                    <img src="img/products/pencil 3.jpg" width="100%" class="small-img" alt="Kalour Professional Sketching Pencils 12pc">
                </div>
                <div class="small-img-col">
                    <img src="img/products/pencil 2.jpg" width="100%" class="small-img" alt="Kalour Professional Sketching Pencils 12pc">
                </div>
                <div class="small-img-col">
                    <img src="img/products/pencil 4.jpg" width="100%" class="small-img" alt="Kalour Professional Sketching Pencils 12pc">
                </div>

            </div>
        </div>

        <div class="single-pro-details">
            <h6>Home / Materials</h6>
            <h4>Kalour Professional Sketching Pencils 12pc</h4>
            <h2>$7.00</h2>
            <input type="number" value="1">
            <button class="button-48"><span class="text">Add To Cart</span></button>
            <h4>Product Details</h4>
            <span>Premium sharpened graphite pencils for drawing (5H, 4H, 3H, 2H,HB, B, 2B, 3B, 4B, 5B, 6B, 8B).A wide variety of hardness for all your artwork needs.harder degrees for outlining (2B - 5H) and softer degrees for blending and layering (3B - 8B).Drawing Pencils enable creating lines of any thickness and color saturation.</span>
        </div>
    </section>

    <!-- featured products -->
    <section id="product1" class="singleprod">
        <h2>SHOP OUR ESSENTIALS</h2>
        <p>Empowering Artists with the Finest Essentials!</p>
        <div class="pro-container">
            <div class="pro" id="shrink-border">
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
        </div>
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
