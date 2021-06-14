<?php include('signup_server.php')  ?>
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="login.php" method="post">
        <div class="user-details">
        <div class="input-box">
            <span class="details" for="token_number">Token Number</span>
            <input type="text" name="token_number" placeholder="Enter your token number" required>
          </div>
          <div class="input-box">
            <span class="details" for="name">Full Name</span>
            <input type="text" name="name" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details" for="email">Email</span>
            <input type="text" name="email" placeholder="Enter your email" required>
          </div>
           <div class="input-box">
            <span class="details" for="passout">Year Of Passout</span>
            <input type="text" name="passout" placeholder="Enter your passout year" required>
          </div>
          <div class="input-box">
            <span class="details" for="phone">Phone Number</span>
            <input type="text" name="phone" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details" for="password1">Password</span>
            <input type="password" name="password1" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details" for="password2">Confirm Password</span>
            <input type="password" name="password2" placeholder="Confirm your password" required>
          </div>
        </div>

        <div class="gender-details" for="gender">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender" name="dot-1" value="male">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender" name="dot-2" value="female">Female</span>
          </label>
      
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
