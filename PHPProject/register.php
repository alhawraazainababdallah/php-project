<?php
require("./includes/header.inc.php");

redirectIfLoggedIn();
?>

<style>
.container
{
    display: flex;
    justify-content: center;
    align-items: center;
        }
.card{
    background-color: var(--white);
    padding: 12vh 30px;
    margin-bottom:100px;
    margin-top:100px;
    border-radius: 15px;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    gap: 20px;
    box-shadow: 0px 20px 50px 0px #0000004D;
    position: relative;
}   
.registration-form {
  width: 100%;

  max-width: 400px;
  margin: 0 auto;
}
.registration-form input[type="text"], .registration-form input[type="email"], .registration-form input[type="password"] {
  width: 100%;
  padding: 15px;
  margin-bottom: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;

}

.registration-form input[type="submit"] {
  width: 100%;
  padding: 15px;
  background-color: var(--default-color2);
  color: white;
  border: none;
  border-radius: 2px;
  cursor: pointer;
  margin: 20px 0;
  position: absolute;
  bottom: 0;
  left: 0px;
}



</style>
<div class="container">
 <h1><span style="color: white; margin:0 10px 0 10px" > Create An New Account</span></h1>   
<section class="card">
    <form class="registration-form">
     <input type="text" placeholder="First Name" required>
     <input type="text" placeholder="Last Name" required>
     <input type="email" placeholder="Email" required>
     <input type="password" placeholder="Password" required>
     <div>

     <input type="text" placeholder="CVV" style="width: calc(30% - 15px); display:inline-block;margin-right: 10px" />
      <input type="text" placeholder="Card Number" style="width:70%"/>
      </div>
     <input type="checkbox" required> I agree to the terms and conditions.
     <input type="submit" value="Register">
    </form>
</section>
</div>



</body>


<?php
    require("./includes/footer.inc.php");
?>