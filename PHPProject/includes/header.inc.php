<?php
session_start();
require_once("database.inc.php");
require_once("helper.inc.php");

//require_once("auth.inc.php");

//require_once("helpers.inc.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EverCart</title>
	<link rel="stylesheet" href="./Style/main.css" />
  <link rel="stylesheet" href="./Style/header.css" />
  <link rel="stylesheet" href="./Style/index.css" />
  <link rel="stylesheet" href="./Style/product.css" />
  <link rel="stylesheet" href="./Style/catagories.css" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

<!-- Glidejs -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.css" />

</head>
<body>
<header id="header" class="header">
    <!-- Navigation -->
    <div class="navigation">
      <div class="container">
        <nav class="nav__center">
          <div class="nav__header">
            <div class="nav__logo">
              <h1>Ever<span>Cart</span></h1>
            </div>

            <div class="nav__hamburger">
              <span>
                <svg>
                  <use xlink:href="./images/sprite.svg#icon-menu"></use>
                </svg>
              </span>
            </div>
          </div>

          <div class="nav__menu">
            <div class="menu__top">
              <h1 class="nav__category">Ever<span>Cart</span></h1>
              <div class="close__toggle">
                <svg>
                  <use xlink:href="./images/sprite.svg#icon-cross"></use>
                </svg>
              </div>
            </div>
            <ul class="nav__list">
              <li class="nav__item">
                <a href="./index.php" class="nav__link scroll-link">Home</a>
              </li>

              <li class="nav__item">
                <a href="#featured" class="nav__link scroll-link">Featured</a>
              </li>

              <li class="nav__item">
                <a href="./catagories.php" class="nav__link">Categories</a>
              </li>

              <li class="nav__item">
                <a href="#newsletter" class="nav__link">Categories</a>
              </li>
<?php
  if(!isLoggedIn())
  {
    ?>
              <li class="nav__item">
                <a href="./login.php" class="nav__link">Login</a>
              </li>

              <li class="nav__item">
                <a href="./register.php" class="nav__link">Register</a>
              </li>
            <?php
  }
  else
  {
    ?>
    <li class="nav__item">
  </li>
  <?php
  }
?>
            </ul>
            <ul class="nav__icons">
              <a href="#" class="icon__item">
                <svg>
                  <use xlink:href="./images/sprite.svg#icon-search"></use>
                </svg>
              </a>

              <a href="#" class="icon__item">
                <svg>
                  <use xlink:href="./images/sprite.svg#icon-user"></use>
                </svg>
              </a>

              <a href="#" class="icon__item">
                <svg>
                  <use xlink:href="./images/sprite.svg#icon-shopping-basket"></use>
                </svg>
                <span>2</span>
              </a>
            </ul>
          </div>
        </nav>
      </div>
    </div>