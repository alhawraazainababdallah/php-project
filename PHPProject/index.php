<?php
require_once("./includes/header.inc.php");
?>


  <!-- Hero -->
  <div class="hero">
      <div class="hero__content container">
        <h1>
          <span>Get <span class="color">50%</span> off your first shopping
            with</span>
          <span>Ever<span class="color">Cart</span>
        </h1>
        <a href="#" class="btn btn-hero">shop now</a>
      </div>

      <a href="#new__arrival" class="goto__next scroll-link">
        <span>
          <svg>
            <use xlink:href="./images/sprite.svg#icon-angle-down"></use>
          </svg>
        </span>
      </a>
    </div>
  </header>

  <!-- Main -->
  <main>
    <!-- New Arrival -->
    <section class="section new__arrival" id="new__arrival">
      <div class="arrivals container">

        <div class="title">
          <h1 class="primary__title">New Arrival</h1>
        </div>

        <div class="arrival__center">
          <div class="product">
            <div class="img__container">
              <img src="./images/pic1.png" alt="" />
            </div>
            <div class="product__bottom">
              <h3>Polar Skate Co Devil T Shirt</h3>
              <a href="#">Add To Cart</a>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Our Daily Pick Banner -->
    <div class="cart__like">
      <div class="image__holder">
        <img src="./images/pic1.png" alt="" />
      </div>
      <div class="cart__details">
                      <h1>Polar Skate Co Devil T Shirt</h1>
                      <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing
                        elit. Doloremque eius, laborum sunt dolorem
                        necessitatibus incidunt aut ducimus, quis, veritatis
                        cum dolore tempora? Corporis, nostrum alias.
                      </p>

                      <div class="btn__group">
                        <button>Add To Cart</button>
                        <button>$75</button>
                      </div>
      </div>
    </div>


    <!-- Special Offer Banner -->
    <section class="section special__offer">
      <div class="offer__container">
        <h1>UNIQUE EXPERIENCE</h1>
        <p>The sole entity in the country offering a diverse array of products.</p>
        <a href="#">SHOP NOW</a>
      </div>
    </section>
    
    <!-- Featured Section -->
    <section class="section featured" id="featured">
      <div class="arrivals container">

        <div class="title">
          <h1 class="primary__title">Featured Section</h1>
        </div>

        <div class="arrival__center">
          <div class="product">
            <div class="img__container">
              <img src="./images/pic1.png" alt="" />
            </div>
            <div class="product__bottom">
              <h3>Polar Skate Co Devil T Shirt</h3>
              <a href="#">Add To Cart</a>
            </div>
          </div>

        </div>
      </div>
    </section>



    <!-- Footer -->
    <?php
    require("./includes/footer.inc.php");
    ?>
    <!-- End Footer -->
  </main>


  <!-- Custom Script -->
  <script src="./js/slider.js"></script>
  <script src="./js/index.js"></script>
</body>

</html>
