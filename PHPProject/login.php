<?php

require("./includes/header.inc.php");

redirectIfLoggedIn();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  $email = $_POST["email"];
  $password = $_POST["password"];

  $query = mysqli_query($conn,"SELECT * FROM user WHERE email='$email' AND password='$password'");

  if(mysqli_num_rows($query) == 1)
  {
    $row = mysqli_fetch_assoc($query);

    $_SESSION["id"] = $row["id"];
    $_SESSION["email"] = $email;
    header("location: index.php");
  }
}
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
    padding: 10vh 30px;
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
  text-align: center;
}



</style>
<div class="container">
 <h1><span style="color: white; margin:0 10px 0 10px" > Log Back In</span></h1>   
<section class="card">
    <h1> <span style=" margin-bottom:30px" >Welcome Back</span></h1>
    <form method="post" action="<?= $_SERVER["PHP_SELF"] ?>" class="registration-form">
     <input type="email" placeholder="Email" name="email" required>
     <input type="password" placeholder="Password" name="password" required>
     <input type="submit" value="Submit">
    </form>
</section>
</div>



</body>


<?php
    require("./includes/footer.inc.php");
?>