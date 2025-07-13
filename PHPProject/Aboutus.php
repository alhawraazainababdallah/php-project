
<?php
require_once("./includes/header.inc.php");
?>
<style>

    .num{
        list-style-type: decimal-leading-zero;
    }
    li
    {
        
        margin-bottom: 30px;
    }
    .num p 
    {
        margin: 10px;
    }
    p
    {
        font-size: 18px;
    }
    .header {

        background: linear-gradient(to top, rgba(17, 117, 231, 0.5), rgba(136, 0, 133, 0.6)),
              url("./images/banner2.jpg") center/cover no-repeat fixed;

}
    .special__offer {
    background: linear-gradient(to top,
        rgb(17, 117, 231, 0.5),
        rgba(136, 0, 133, 0.6)),
      url("./images/banner2.jpg") top/cover no-repeat fixed;
  }

</style>

<div class="hero">
      <div class="hero__content container">
        <h1>
          <span>About Ever<span class="color">Cart</span> </span>
        </h1>  
        <h3>EverCart is a global fashion and lifestyle e-retailer committed to making the beauty of fashion accessible to all. 
            We use on-demand manufacturing technology to connect suppliers to our agile supply chain, reducing inventory waste and enabling us to deliver a variety of affordable products to customers around the world. 
            From our global offices, we reach customers in more than 150 countries.</h3>
    </div>
</header>

    <div class="container" style="background-color: white;">
        <div style="margin:10px; ">
            <h1>Our Mission</h1>
            <p>
            EverCart is more than just a shopping app; it's a community of like-minded individuals who appreciate the joy of finding hidden gems, unique items, and the latest fashion trends. Our mission is to connect buyers and sellers in a seamless and enjoyable way, while also bringing you the hottest fashion styles that fit your personality.
            </p>   

            <h1>What Sets Us Apart?</h1>
            <ol>
                
                <li class="num">
                    <h3>Peer-to-Peer Marketplace</h3>
                    <p>
                    Just like OLX, EverCart provides a robust peer-to-peer marketplace where you can buy and sell pre-loved items. Clear out your closet, discover treasures, and connect with fellow shoppers in your local community.
                    </p>
                </li>
                <li class="num">
                    <h3>Trendsetting Fashion</h3>
                    <p>
                    Drawing inspiration from Shein's cutting-edge fashion sense, EverCart brings you the latest styles and trends at your fingertips. Whether you're into casual chic, boho vibes, or sophisticated elegance, our diverse collection caters to every fashion taste.
                    </p>
                </li>
                <li class="num">
                    <h3>Easy and Secure Transactions</h3>
                    <p>
                    We understand the importance of trust when it comes to online shopping. EverCart ensures a secure and seamless transaction experience, giving you peace of mind while you explore and indulge in your favorite finds.
                    </p>
                </li>
            </ol>
            <section class="section special__offer">
                <div class="offer__container">
                <h1>Join the EverCart Community!</h1>
                <p>The sole entity in the country offering a diverse array of products.</p>
                <a href="./register.php">Create Account</a>
                </div>
             </section>
            <h1>How It Works</h1>
            <ol>
                
                <li class="num">
                    <h3>Explore</h3>
                    <p>
                    Browse through a wide array of products, from fashion to electronics, and discover unique items you won't find anywhere else.
                    </p>
                </li>
                <li class="num">
                    <h3>Connect</h3>
                    <p>
                    Engage with sellers and buyers in your local community.
                    </p>
                </li>
                <li class="num">
                    <h3>Sell</h3>
                    <p>
                    List your items effortlessly, reach a broader audience, and turn your pre-loved items into someone else's treasure.
                    </p>
                </li>
            </ol>

        </div>
        <section class="section special__offer">
                <div class="offer__container">
                <h1>Go Back!</h1>
                <a href="./index.php">HomePage</a>
                </div>
             </section>




        <div>



        <div style="margin: 10px;">
        </div>


    </div>


<?php
require_once("./includes/footer.inc.php");
?>
