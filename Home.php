<?php

if(isset($_GET['logout'])){
  session_destroy();
  unset($_SESSION['token_number']);
  header("location : login.php");

}


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>NTTF</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="home.css">
        <style>body {
          font-family: "Avenir Next";
        }

        li {
          list-style: none;
        }

        .header {
          background-color: #686b6;
          color: #fff;
          height: 90px;
        }

        .header-logo {
          float: left;
          font-size: 36px;
          padding: 20px 40px;
        }

        .header-list li {
          float: left;
          padding: 33px 20px;
        }

        .main {
         
        }

        .copy-container h1 {
          font-size: 90px;
        }

        .copy-container h2 {
          font-size: 40px;
        }

        .copy-container span {
          color: #ff4a4a;
        }

        .contents {
          margin-top: 100px;
        }

        .section-title {
          border-bottom: 2px solid #dee7ec;
          font-size: 28px;
          padding-bottom: 15px;
          margin-bottom: 50px;
        }

        .contents-item {
          float: left;
          margin-right: 40px;
        }

        .contents-item p {
          font-size: 24px;
          margin-top: 30px;
        }

        .contact-form {
          padding-top: 100px;
        }

        /* Add CSS for <input> and <textarea> tags */
        input,textarea{
          width:400px;
          margin-top:10px;
          margin-bottom:30px;
          padding:20px;
          font-size:18px;
            border: 1px solid #dee7ec;

        }

        /* Add CSS for contact-submit */
        .contact-submit{
          background-color:#dee7ec;
          color:#889eab;
        }

        .footer {
          background-color: #2f5167;
          color: #fff;
          height: 120px;
          padding: 40px;
        }

        .footer-logo {
          float: left;
          font-size: 32px;
        }

        .footer-list {
          float: left;
        }

        .footer-list li {
          margin-top: 20%;
          
        }
 </style>
  </head>
  <body>
    <div class="header">
      <div class="header-logo"><b>NTTF</b></div>
      <div class="header-list">
        <label><a href="Feeds.php"><button class="header-button">Feeds</button></a></label>
        <label><a href="Events.php"><button class="header-button">Events</button></a></label>
        <label><a href="Feeds.php"><button class="header-button">Feeds</button></a></label>
        <label><button class="header-button">Events</button></label>

        
        <button><a href="Home.php?logout='1' " button class="header-button">Logout</a></button>
        
      </div>
    </div>

    <div class="main">
      <div class="copy-container">
        <h1>NTTF Alumini Chat System<span>.</span></h1>
        <h2>We would like to invite you to our Alumini chat system where you can interacts with our Alumini. Please Explore!!!</h2>
      </div>
      
      <div class="contents">
        <h3 class="section-title">What is happening in NTTF ?</h3>
        <div class="contents-item">
          <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/html/study/html.svg">
          <p>Placement</p>
        </div>
        <div class="contents-item">
          <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/html/study/php.svg">
          <p>Projects</p>
        </div>
        <div class="contents-item">
          <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/html/study/ruby.svg">
          <p>Internships</p>
        </div>
        <div class="contents-item">
          <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/html/study/swift.svg">
          <p>Training Programs</p>
        </div>
      </div><br>
      <br>
      <div class="contact-form">
        <h3 class="section-title">Contact us</h3>
        <p>Email (Required)</p>
        <!-- Add an <input> tag -->
        <input>
        
        <p>Message (Required)</p>
        <!-- Add a <textarea> tag --> 
        <textarea></textarea>
        
        <p>* Required fields must be filled</p>
        <!-- Add an <input> tag -->
        <input class= "contact-submit" type = "submit" value="Send">
      </div>
    </div>

    
  </body>
</html>
