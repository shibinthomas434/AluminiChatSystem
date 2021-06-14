<?php include('signup_server.php');
?>

<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Login Form | CodingLab </title>--->
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="container">
      <form action="#">
        <div class="title">Login</div>
        <div class="input-box underline">
          <input type="text" name="token_number" placeholder="Enter Your Token number" required>
          <div class="underline"></div>
        </div>
        <div class="input-box">
          <input type="password" name="password" placeholder="Enter Your Password" required>
          <div class="underline"></div>
        </div>
        <div class="input-box button">
          <input type="submit" name="" value="Continue"><a href="sign.php">
        </div>
      </form>
        <div class="option">Not a user ? Sign up</div>
        <div class="facebook i">
          <a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwj71tbpn5XxAhWbIbcAHdyxBqAQFjAAegQICBAD&url=https%3A%2F%2Fwww.facebook.com%2FNTTFTechnicalTraining%2F&usg=AOvVaw3H_8tjm3vLJiZjaXfKM_GF"><i class="fab fa-facebook-f"></i>Follow us on Facebook</a>
        </div>
    </div>
  </body>
</html>
