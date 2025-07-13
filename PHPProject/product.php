<?php
require("./includes/header.inc.php");
?>

<style>
    .header {
    min-height: 100vh;
    background: linear-gradient(to top, rgba(17, 117, 231, 0.5), rgba(136, 0, 133, 0.6)) center/cover no-repeat fixed;
    position: relative;
    z-index: 100;
  }
</style>

<div class="container">
<div class ="path">
    <a href="./index.php">Home</a>/<a href="./catagories.php">Products</a>
</div>
    <div class="row">
        <!--Images-->
      <div class="col-2">
        <img src="./images/banner.jpg" id="emphasisPicture">
        <div class="smallImg">
          <div class="col-4">
            <img src="./images/banner.jpg" class="smallpictures active" alt="">
          </div>
          <div class="col-4">
            <img src="./images/banner.jpg" class="smallpictures" alt="">
          </div>
          <div class="col-4">
            <img src="./images/banner.jpg" class="smallpictures" alt="">
          </div>
          <div class="col-4">
            <img src="./images/banner.jpg" class="smallpictures" alt="">
          </div>
        </div>
        <div class="carousel mobile" data-carousel>
          <button class="carousel-button prev" data-carousel-button="prev"> <img
              src="./images/icon-previous.svg"></button>
          <button class="carousel-button next" data-carousel-button="next"> <img src="./images/icon-next.svg"></button>
          <ul data-slides>
            <li class="slide" data-active><img src="./images/banner.jpg"> </li>
            <li class="slide"><img src="./images/banner.jpg"></li>
            <li class="slide"><img src="./images/banner.jpg"></li>
            <li class="slide"><img src="./images/banner.jpg"></li>
          </ul>
        </div>
      </div>
       <!--Description-->
      <div class="col-2">
        <small class="companyName">
          Seller Name
        </small>
        <h2>
          Title
        </h2>
        <p>
          description
        </p>
        <div class="price">
          <span class="productValue">$125.00</span>
        </div>

        <div class="buttonsRow">
          <div class="increment">

            <img src="./images/icon-minus.svg" id="minus">

            <input type="number" name="totalItems" id="totalItems" value="1">

            <img src="./images/icon-plus.svg" id="plus">

          </div>
          <div class="callToAction">
            <button id="btn"><i class="fa-solid fa-cart-shopping"></i> Add to cart</button>
          </div>

        </div>


      </div>
    </div>
  </div>

<div class="wrapper hide" id="wrapper">
    <div class="carouselContainer">
      <div class="carouselrow">
        <img src="./images/icon-close.svg" alt="close" id="carouselClose">
      </div>
      <div class="carousel" data-carousel>
        <button class="carousel-button prev" data-carousel-button="prev"> <img
            src="./images/icon-previous.svg"></button>
        <button class="carousel-button next" data-carousel-button="next"> <img src="./images/icon-next.svg"></button>
        <ul data-slides>
          <li class="slide" data-active><img src="./images/banner.jpg"> </li>
          <li class="slide"><img src="./images/banner.jpg"></li>
          <li class="slide"><img src="./images/banner.jpg"></li>
          <li class="slide"><img src="./images/banner.jpg"></li>
        </ul>
      </div>
      <div class="smallpitures">
        <div class="col-carousel">
          <img src="./images/banner.jpg" class="smallCarouselPicture active">
        </div>
        <div class="col-carousel">
          <img src="./images/banner.jpg" class="smallCarouselPicture">
        </div>
        <div class="col-carousel">
          <img src="./images/banner.jpg" class="smallCarouselPicture">
        </div>
        <div class="col-carousel">
          <img src="./images/banner.jpg" class="smallCarouselPicture">
        </div>
      </div>
    </div>
  </div>



 
<script src="./js/product.js" defer></script> 
<<?php
require("./includes/footer.inc.php");
?>


