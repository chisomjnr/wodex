<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: account.php");
    exit();
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tag
  -->
  <title>Woodex - Get Quality Furniture</title>
  <meta name="title" content="Woodex - Get Quality Furniture">
  <meta name="description" content="This is an eCommerce html template made by codewithsadee">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Mr+De+Haviland&family=Roboto:wght@400;500;700&display=swap"
    rel="stylesheet">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-product-1.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-product-2.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-product-3.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-product-4.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-product-5.jpg">

</head>
<style>
    /* Import Google font - Poppins */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
</style>
<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <div class="input-wrapper">
        <input type="search" name="search" placeholder="Search Anything..." class="input-field">

        <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
      </div>

      <a href="#" class="logo">Woodex</a>

      <div class="header-action">

        <button class="header-action-btn" aria-label="user">
          <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
        </button>

        <!-- <button class="header-action-btn" aria-label="favorite list">
          <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>

          <span class="btn-badge">0</span>
        </button> -->

        <button class="header-action-btn cart" aria-label="cart">
          <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>

          <span class="btn-badge">0</span>
        </button>

        <button class="header-action-btn" aria-label="open menu" data-nav-toggler>
          <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
        </button>

      </div>

    </div>
  </header>






<style>
/* Cart Menu */
.cart-menu {
  position: fixed;
  top: 0;
  right: -100%;
  width: 450px;
  height: 100%;
  background-color: #fff;
  box-shadow: -2px 0 8px rgba(0, 0, 0, 0.2);
  padding: 20px;
  transition: right 0.4s ease-in-out;
  z-index: 1001;
  overflow-y: auto;
}

.cart-menu.active {
  right: 0;
}

/* Overlay */
.cart-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.55);
  opacity: 0;
  visibility: hidden;
  transition: opacity 0.3s ease;
  z-index: 1000;
}

.cart-overlay.active {
  opacity: 1;
  visibility: visible;
}

/* Close Button */
.close-btn {
  background: transparent;
  border: none;
  font-size: 46px;
  font-weight: bold;
  color: #333;
  position: absolute;
  top: 12px;
  right: 15px;
  cursor: pointer;
}

/* Cart Items */
.cart-menu h2 {
  font-size: 22px;
  margin-bottom: 20px;
}

.cart-items {
  display: flex;
  flex-direction: column;
  gap: 20px;
}

/* Make cart-menu scrollable and footer sticky */
.cart-menu {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.cart-items {
  flex-grow: 1;
  overflow-y: auto;
  padding-bottom: 20px;
}

.checkout-footer {
  padding-top: 15px;
  border-top: 1px solid #ddd;
  text-align: center;
}

.checkout-btn {
  display: inline-block;
  background-color: #713cac;
  color: #fff;
  width: 100%;
  padding: 12px 20px;
  border-radius: 10px;
  font-size: 16px;
  text-decoration: none;
  transition: background-color 0.3s ease;
}

.checkout-btn:hover {
  background-color: #555;
}


.cart-item {
  display: flex;
  align-items: center;
  gap: 15px;
  padding-bottom: 15px;
  border-bottom: 1px solid #ddd;
}

.cart-item img {
  width: 60px;
  height: 60px;
  object-fit: cover;
  border-radius: 8px;
}

.item-details {
  flex-grow: 1;
}

.item-details h4 {
  margin: 0;
  font-size: 16px;
}

.item-details p {
  margin: 5px 0;
  font-weight: bold;
}

.qty-controls {
  display: flex;
  align-items: center;
  gap: 10px;
}

.qty-btn {
  width: 28px;
  height: 28px;
  font-size: 18px;
  font-weight: bold;
  background-color: #eee;
  border: none;
  border-radius: 6px;
  cursor: pointer;
}


</style>



<!-- Slide-in Cart Menu -->
<!-- Overlay -->
<div class="cart-overlay" id="cartOverlay"></div>

<!-- Slide-in Cart Menu -->
<div class="cart-menu" id="cartMenu">
  <button class="close-btn" id="closeCartBtn">&times;</button>
  <h2>Your Cart</h2>
  <div class="cart-items">
    <!-- Product 1 -->
    <div class="cart-item">
      <img src="assets/images/product-6.jpg" alt="Product 1">
      <div class="item-details">
        <h4>Helen Chair</h4>
        <p>₦5,000</p>
        <div class="qty-controls">
          <button class="qty-btn">−</button>
          <span>1</span>
          <button class="qty-btn">+</button>
        </div>
      </div>
    </div>
    <!-- Product 2 -->
    <div class="cart-item">
      <img src="assets/images/product-3.jpg" alt="Product 2">
      <div class="item-details">
        <h4>PGreen Snake Vase</h4>
        <p>₦7,500</p>
        <div class="qty-controls">
          <button class="qty-btn">−</button>
          <span>1</span>
          <button class="qty-btn">+</button>
        </div>
      </div>
    </div>
    <!-- Product 3 -->
    <div class="cart-item">
      <img src="assets/images/product-11.jpg" alt="Product 3">
      <div class="item-details">
        <h4>Oakwood Bowl</h4>
        <p>₦3,200</p>
        <div class="qty-controls">
          <button class="qty-btn">−</button>
          <span>1</span>
          <button class="qty-btn">+</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Checkout Button -->
<div class="checkout-footer">
  <a href="checkout.html" class="checkout-btn">Proceed to Checkout</a>
</div>

</div>

<script>
  const cartBtn = document.querySelector('.cart');
  const cartMenu = document.getElementById('cartMenu');
  const cartOverlay = document.getElementById('cartOverlay');
  const closeCartBtn = document.getElementById('closeCartBtn');

  // Open cart
  cartBtn.addEventListener('click', () => {
    cartMenu.classList.add('active');
    cartOverlay.classList.add('active');
  });

  // Close cart
  function closeCart() {
    cartMenu.classList.remove('active');
    cartOverlay.classList.remove('active');
  }

  closeCartBtn.addEventListener('click', closeCart);
  cartOverlay.addEventListener('click', closeCart);
</script>














  <!-- 
    - #SIDEBAR
  -->

  <div class="sidebar" data-navbar>

    <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
      <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
    </button>
    <br>

    <h2 style="line-height: 1.2;">Welcome, <?php echo htmlspecialchars($_SESSION['name']); ?>!</h2>

    <div class="wrapper">

      <ul class="sidebar-list">

        <li>
          <p class="sidebar-list-title">Language</p>
        </li>

        <li>
          <a href="#" class="sidebar-link">English</a>
        </li>

        <li>
          <a href="#" class="sidebar-link">French</a>
        </li>

        <li>
          <a href="#" class="sidebar-link">Arabric</a>
        </li>

      </ul>

      <ul class="sidebar-list">

        <li>
          <p class="sidebar-list-title">Currency</p>
        </li>

        <li>
          <a href="#" class="sidebar-link">USD - US Dollar</a>
        </li>

        <li>
          <a href="#" class="sidebar-link">Euro</a>
        </li>

        <li>
          <a href="#" class="sidebar-link">Pound</a>
        </li>

      </ul>

    </div>

    <nav class="navbar">
      <ul class="navbar-list">

        <li class="navbar-item">
          <a href="#home" class="navbar-link" data-nav-link>Home</a>
        </li>

        <li class="navbar-item">
          <a href="#about" class="navbar-link" data-nav-link>About</a>
        </li>

        <li class="navbar-item">
          <a href="#product" class="navbar-link" data-nav-link>Product</a>
        </li>

        <li class="navbar-item">
          <a href="#blog" class="navbar-link" data-nav-link>Blogs</a>
        </li>

              <li class="navbar-item">
          <a href="logout.php" class="navbar-link" data-nav-link>Logout</a>
        </li>

      </ul>
    </nav>

    <ul class="contact-list">

      <li>
        <p class="contact-list-title">Contact Us</p>
      </li>

      <li class="contact-item">
        <address class="address">
          69 Halsey St, Ny 10002, New York, United States
        </address>
      </li>

      <li class="contact-item">
        <a href="mailto:support.center@woodex.co" class="contact-link">support.center@woodex.co</a>
      </li>

      <li class="contact-item">
        <a href="tel:00001235567890" class="contact-link">(0000) 1235 567890</a>
      </li>

    </ul>

    <div class="social-wrapper">

      <p class="social-list-title">Follow US On Socials</p>

      <ul class="social-list">

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-facebook"></ion-icon>
          </a>
        </li>

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-twitter"></ion-icon>
          </a>
        </li>

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-tumblr"></ion-icon>
          </a>
        </li>

      </ul>

    </div>

  </div>

  <div class="overlay" data-overlay data-nav-toggler></div>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero" id="home" aria-label="home">
        <div class="container">

          <ul class="hero-list">

            <li>
              <div class="hero-card">

                <figure class="card-banner img-holder" style="--width: 285; --height: 396;">
                  <img src="./assets/images/hero-product-1.jpg" width="285" height="396" alt="Art Deco Home"
                    class="img-cover">
                </figure>

                <div class="card-content">
                  <h3>
                    <a href="#" class="card-title">Art Deco Home</a>
                  </h3>

                  <p class="card-text">Decoration</p>
                </div>

              </div>
            </li>

            <li class="colspan-2">
              <div class="hero-card">

                <figure class="card-banner img-holder" style="--width: 568; --height: 389;">
                  <img src="./assets/images/hero-product-2.jpg" width="568" height="389" alt="Helen Chair"
                    class="img-cover">
                </figure>

                <div class="card-content">
                  <h3>
                    <a href="#" class="card-title">Helen Chair</a>
                  </h3>

                  <p class="card-text">Decoration</p>
                </div>

              </div>
            </li>

            <li>
              <div class="hero-card">

                <figure class="card-banner img-holder" style="--width: 285; --height: 396;">
                  <img src="./assets/images/hero-product-3.jpg" width="285" height="396" alt="Vase Of Flowers"
                    class="img-cover">
                </figure>

                <div class="card-content">
                  <h3>
                    <a href="#" class="card-title">Vase Of Flowers</a>
                  </h3>

                  <p class="card-text">Decoration</p>
                </div>

              </div>
            </li>

            <li class="colspan-2">
              <div class="hero-card">

                <figure class="card-banner img-holder" style="--width: 580; --height: 213;">
                  <img src="./assets/images/hero-product-4.jpg" width="580" height="213" alt="Wood Eggs"
                    class="img-cover">
                </figure>

                <div class="card-content">
                  <h3>
                    <a href="#" class="card-title">Wood Eggs</a>
                  </h3>

                  <p class="card-text">Decoration</p>
                </div>

              </div>
            </li>

            <li class="colspan-2">
              <div class="hero-card">

                <figure class="card-banner img-holder" style="--width: 580; --height: 213;">
                  <img src="./assets/images/hero-product-5.jpg" width="580" height="213" alt="Table Wood Pine"
                    class="img-cover">
                </figure>

                <div class="card-content">
                  <h3>
                    <a href="#" class="card-title">Table Wood Pine</a>
                  </h3>

                  <p class="card-text">Furniture</p>
                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about" id="about" aria-label="about">
        <div class="container">

          <h2 class="section-title">Woodex Store</h2>

          <p class="section-text">
            When you start with a portrait and search for a pure form, a clear volume, through successive eliminations,
            you arrive
            inevitably at the egg. Likewise, starting with the egg and following the same process in reverse, one
            finishes with the
            portrait.
          </p>

          <div class="about-card">
            <figure class="card-banner img-holder" style="--width: 1170; --height: 450;">
              <img src="./assets/images/about-banner.jpg" width="1170" height="450" loading="lazy" alt="Woodex promo"
                class="img-cover">
            </figure>

            <button class="play-btn" aria-label="play video">
              <ion-icon name="play-circle-outline" aria-hidden="true"></ion-icon>
            </button>
          </div>

        </div>
      </section>





      <!-- 
        - #PRODUCTS
      -->

      <section class="section product" id="product" aria-label="product">
        <div class="container">

          <div class="title-wrapper">
            <h2 class="h2 section-title">Popular Products</h2>

            <ul class="filter-btn-list">

              <li class="filter-btn-item">
                <button class="filter-btn active" data-filter-btn="all">All Products</button>
              </li>

              <li class="filter-btn-item">
                <button class="filter-btn" data-filter-btn="accessory">Accessory</button>
              </li>

              <li class="filter-btn-item">
                <button class="filter-btn" data-filter-btn="decoration">Decoration</button>
              </li>

              <li class="filter-btn-item">
                <button class="filter-btn" data-filter-btn="furniture">Furniture</button>
              </li>

            </ul>
          </div>

          <ul class="grid-list product-list" data-filter="all">

            <li class="decoration">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-1.jpg" width="300" height="300" loading="lazy"
                    alt="Animi Dolor Pariatur" class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                        <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  </ul>

                  <ul class="badge-list">

                    <li>
                      <div class="badge orange">Sale</div>
                    </li>

                    <li>
                      <div class="badge cyan">-10%</div>
                    </li>

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Animi Dolor Pariatur</a>
                  </h3>

                  <div class="card-price">
                    <del class="del">N19.00</del>

                    <data class="price" value="10">N10.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="accessory">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-2.jpg" width="300" height="300" loading="lazy" alt="Art Deco Home"
                    class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                        <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  </ul>

                  <div class="card-badge">Out of Stock</div>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Art Deco Home</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="30">N30.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="decoration">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-3.jpg" width="300" height="300" loading="lazy"
                    alt="Artificial potted plant" class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                        <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Artificial potted plant</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="40">N40.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="accessory">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-4.jpg" width="300" height="300" loading="lazy" alt="Dark Green Jug"
                    class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                        <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Dark Green Jug</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="17.10">N17.10</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="accessory">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-5.jpg" width="300" height="300" loading="lazy"
                    alt="Drinking Glasses" class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                        <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Drinking Glasses</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="21">N21.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="furniture">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-6.jpg" width="300" height="300" loading="lazy" alt="Helen Chair"
                    class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                        <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Helen Chair</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="69.50">N69.50</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="accessory">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-7.jpg" width="300" height="300" loading="lazy"
                    alt="High Quality Glass Bottle" class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                        <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">High Quality Glass Bottle</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="30.10">N30.10</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="accessory">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-8.jpg" width="300" height="300" loading="lazy"
                    alt="Living Room & Bedroom Lights" class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                        <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Living Room & Bedroom Lights</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="45">N45.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="furniture">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-9.jpg" width="300" height="300" loading="lazy" alt="Nancy Chair"
                    class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                        <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Nancy Chair</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="90">N90.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="furniture">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-10.jpg" width="300" height="300" loading="lazy" alt="Simple Chair"
                    class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                        <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Simple Chair</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="40">N40.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="decoration">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-11.jpg" width="300" height="300" loading="lazy" alt="Smooth Disk"
                    class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                        <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Smooth Disk</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="46">N46.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="furniture">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-12.jpg" width="300" height="300" loading="lazy" alt="Table Black"
                    class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                        <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Table Black</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="67">N67.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="furniture">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-13.jpg" width="300" height="300" loading="lazy"
                    alt="Table Wood Pine" class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                        <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Table Wood Pine</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="50">N50.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="accessory">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-14.jpg" width="300" height="300" loading="lazy"
                    alt="Teapot with black tea" class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                        <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Teapot with black tea</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="25">N25.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="decoration">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-15.jpg" width="300" height="300" loading="lazy"
                    alt="Unique Decoration" class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                        <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Unique Decoration</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="15">N15.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="decoration">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-16.jpg" width="300" height="300" loading="lazy"
                    alt="Vase Of Flowers" class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                        <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Vase Of Flowers</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="77">N77.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="decoration">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-17.jpg" width="300" height="300" loading="lazy" alt="Wood Eggs"
                    class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                        <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Wood Eggs</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="19">N19.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="decoration">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-18.jpg" width="300" height="300" loading="lazy" alt="Wooden Box"
                    class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                        <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Wooden Box</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="27">N27.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="accessory">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-19.jpg" width="300" height="300" loading="lazy" alt="Wooden Cups"
                    class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                        <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Wooden Cups</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="29">N29.00</data>
                  </div>
                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #BLOG
      -->

      <section class="section blog" id="blog" aria-label="blog">
        <div class="container">

          <div class="title-wrapper">
            <h2 class="h2 section-title">Explore our blog</h2>

            <a href="#" class="btn-link">
              <span class="span">View All</span>

              <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
            </a>
          </div>

          <ul class="grid-list">

            <li>
              <div class="blog-card">

                <div class="card-banner img-holder" style="--width: 374; --height: 243;">
                  <img src="./assets/images/blog-1.jpg" width="374" height="243" loading="lazy"
                    alt="Unique products that will impress your home in 2022." class="img-cover">

                  <a href="#" class="card-btn">
                    <span class="span">Read more</span>

                    <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                  </a>
                </div>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Unique products that will impress your home in 2022.</a>
                  </h3>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <time class="card-meta-text" datetime="2022-09-27">November 27, 2022</time>
                    </li>

                    <li class="card-meta-item">
                      <a href="#" class="card-meta-text">Admin</a>
                    </li>

                    <li class="card-meta-item">
                      in <a href="#" class="card-meta-text">deco</a>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <div class="card-banner img-holder" style="--width: 374; --height: 243;">
                  <img src="./assets/images/blog-2.jpg" width="374" height="243" loading="lazy"
                    alt="Navy Blue & White Striped Area Rugs" class="img-cover">

                  <a href="#" class="card-btn">
                    <span class="span">Read more</span>

                    <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                  </a>
                </div>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Navy Blue & White Striped Area Rugs</a>
                  </h3>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <time class="card-meta-text" datetime="2022-09-25">November 25, 2022</time>
                    </li>

                    <li class="card-meta-item">
                      <a href="#" class="card-meta-text">Admin</a>
                    </li>

                    <li class="card-meta-item">
                      in <a href="#" class="card-meta-text">deco</a>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <div class="card-banner img-holder" style="--width: 374; --height: 243;">
                  <img src="./assets/images/blog-3.jpg" width="374" height="243" loading="lazy"
                    alt="Woodex White Coated Staircase Floating" class="img-cover">

                  <a href="#" class="card-btn">
                    <span class="span">Read more</span>

                    <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                  </a>
                </div>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Woodex White Coated Staircase Floating</a>
                  </h3>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <time class="card-meta-text" datetime="2022-09-18">November 18, 2022</time>
                    </li>

                    <li class="card-meta-item">
                      <a href="#" class="card-meta-text">Admin</a>
                    </li>

                    <li class="card-meta-item">
                      in <a href="#" class="card-meta-text">deco</a>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #NEWSLETTER
      -->

      <section class="section newsletter" aria-label="newsletter">
        <div class="container">

          <div class="newsletter-card">

            <div class="card-content">
              <h2 class="h2 section-title">Our Newsletter</h2>

              <p class="section-text">
                Subscribe our newsletter and get discount 50% off
              </p>
            </div>

            <form action="" class="card-form">
              <input type="email" name="email_address" placeholder="Your email address" required class="email-field">

              <button type="submit" class="newsletter-btn" aria-label="subscribe">
                <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
              </button>
            </form>

          </div>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">
    <div class="container">

      <div class="footer-top section">

        <div class="footer-brand">

          <a href="#" class="logo">Woodex</a>

          <ul>

            <li class="footer-list-item">
              <ion-icon name="location-sharp" aria-hidden="true"></ion-icon>

              <address class="address">
                Lagos, Nigeria.
              </address>
            </li>

            <li class="footer-list-item">
              <ion-icon name="call-sharp" aria-hidden="true"></ion-icon>

              <a href="tel:+1234567890" class="footer-link">+234 815 979 8054</a>
            </li>

            <li>
              <ul class="social-list">

                <li>
                  <a href="#" class="social-link">
                    <ion-icon name="logo-facebook"></ion-icon>
                  </a>
                </li>

                <li>
                  <a href="#" class="social-link">
                    <ion-icon name="logo-twitter"></ion-icon>
                  </a>
                </li>

                <li>
                  <a href="#" class="social-link">
                    <ion-icon name="logo-tumblr"></ion-icon>
                  </a>
                </li>

              </ul>
            </li>

          </ul>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Help & Information</p>
          </li>

          <li>
            <a href="#" class="footer-link">Help & Contact Us</a>
          </li>

          <li>
            <a href="#" class="footer-link">Returns & Refunds</a>
          </li>

          <li>
            <a href="#" class="footer-link">Online Stores</a>
          </li>

          <li>
            <a href="#" class="footer-link">Terms & Conditions</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">About Us</p>
          </li>

          <li>
            <a href="#" class="footer-link">About Us</a>
          </li>

          <li>
            <a href="#" class="footer-link">What We Do</a>
          </li>

          <li>
            <a href="#" class="footer-link">FAQ Page</a>
          </li>

          <li>
            <a href="#" class="footer-link">Contact Us</a>
          </li>

        </ul>

        <div class="footer-list">

          <p class="footer-list-title">Newsletter</p>

          <form action="" class="footer-form">
            <input type="email" name="email_address" placeholder="Your email address" required class="email-field">

            <button type="submit" class="footer-form-btn">
              <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
            </button>
          </form>

          <div class="wrapper">

            <a href="#" class="footer-link">Term & Condition</a>
            <a href="#" class="footer-link">Policy</a>
            <a href="#" class="footer-link">Map</a>

          </div>

        </div>

      </div>

      <div class="footer-bottom">

        <p class="copyright">
          &copy; 2025 All Rights Reserved by <a href="#" class="copyright-link">Annabelle</a>.
        </p>

      </div>

    </div>
  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="arrow-up" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>