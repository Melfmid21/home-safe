<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
    <!-- Google icons -->
    <link
      href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
      rel="stylesheet"
    />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/home_style.css" />
    <title>Home Safe</title>
    <link rel="icon" href="/shop_images/logo.png" />
  </head>
  <body>
    <!-- NAVIGATION BAR -->
    <nav
      class="navbar navbar-light navbar-expand-lg justify-content-center py-3 fixed-top"
    >
      <div class="container">
        <img id="imgLogo" src="/shop_images/Logo2.png" alt="shop logo" />
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span id="bar" class="material-icons-outlined"> menu </span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-end"
          id="navbarSupportedContent"
        >
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li>
            <li class="nav-item">
              <span class="material-icons md-light"> perm_identity </span>
              <span class="material-icons md-light"> search </span>
              <span class="material-icons-outlined"> shopping_cart </span>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END OF NAVIGATION BAR -->
    <!-- CATEGORIES -->
    <section id="shop">
      <div class="container">
        <h1>YOUR HOME YOUR FUTURE</h1>
        <h3>Avail our latest Products</h3>
        <h6>Sign in for the best experience.</h6>
        <button
          onclick="location.href = 'signin.php';"
          type="button"
          class="btn btn-outline-light mt-2"
        >
          SIGN IN NOW
        </button>
      </div>
    </section>
    <!-- BRAND IMAGES -->
    <section id="brand" class="container-fluid">
      <div class="row">
        <img
          class="image-fluid justify-content-center col-lg-2 col-md-4 col-6"
          src="~/shop_images/smartphones/brand1.png"
          alt=""
        />
        <img
          class="image-fluid col-lg-2 col-md-4 col-"
          src="/shop_images/smartphones/brand2.png"
          alt=""
        />
        <img
          class="image-fluid col-lg-2 col-md-4 col-"
          src="/shop_images/smartphones/brand3.png"
          alt=""
        />
        <img
          class="image-fluid col-lg-2 col-md-4 col-"
          src="/shop_images/smartphones/brand4.png"
          alt=""
        />
        <img
          class="image-fluid col-lg-2 col-md-4 col-"
          src="/shop_images/smartphones/brand5.png"
          alt=""
        />
        <img
          class="image-fluid col-lg-2 col-md-4 col-"
          src="/shop_images/smartphones/brand6.png"
          alt=""
        />
      </div>
    </section>
    <!-- ITEM IMAGES -->

    <!-- FOOTER -->
    <footer
      id="footer"
      class="mt-5 mb-0 py-5"
      style="background-color: rgb(0, 32, 70)"
    >
      <div class="row container mx-auto pt-5">
        <div class="footer-one col-lg-3 col-md-6 col-12">
          <img src="/shop_images/Logo2.png" alt="" />
          <p id="footer-p">
            There's a basic principle about consumer electronics: it gets more
            powerful all the time and it gets cheaper all the time.
          </p>
        </div>
        <div class="footer-one col-lg-3 col-md-6 col-12">
          <h5>About Melfmid</h5>
          <ul class="list-unstyled">
            <li>
              <a href="#">About Melfmid</a>
            </li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Melfmid Stands Social Impact</a></li>
            <li><a href="#">Affiliates</a></li>
            <li><a href="#">Sitemap</a></li>
            <li><a href="#">Supply Chain Transparency</a></li>
            <li><a href="#">Melfmid Global sites</a></li>
          </ul>
        </div>
        <div class="footer-two col-lg-3 col-md-6 col-12">
          <h5 mb-2>Contact Us</h5>
          <div class="footer2">
            <h6 class="text-uppercase">Address</h6>
            <p id="footer-p">BRGY. LAWIS SANREMIGIO, BOGO CITY, CEBU 6010</p>
          </div>
          <div>
            <h6 class="text-uppercase">PHONE</h6>
            <p id="footer-p">+63 936 372 3649</p>
          </div>
          <div>
            <h6 class="text-uppercase">EMAIL</h6>
            <p id="footer-p">melfmidshop@gmail.com</p>
          </div>
        </div>

        <div class="footer-three col-lg-3 col-md-6 col-12">
          <h5>Payment Methods</h5>
          <div class="container w-100 p-0 m-0">
            <img src="/footer_images/payment.png" style="width: 100%" alt="" />
          </div>
        </div>
      </div>
      <div class="copyright mt-5 mb-0">
        <div>
          <h6>melfmid eCommerce 2022. All Rights Reserved</h6>
        </div>
      </div>
    </footer>
    <!-- END OF FOOTER -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
      integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
