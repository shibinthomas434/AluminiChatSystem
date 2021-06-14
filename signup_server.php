<?php

session_start();

//initialiing variables

$token_number="";
$name="";
$email="";
$passout="";
$number="";

$errors=array();

//connection to database

$db = mysqli_connect('localhost', 'root','','users') or die("Could not connect to database");

//User registration

$token_number=mysqli_real_escape_string($db, $_POST['token_number']);
$name=mysqli_real_escape_string($db, $_POST['name']);
$email=mysqli_real_escape_string($db, $_POST['email']);
$password1=mysqli_real_escape_string($db, $_POST['password1']);
$password2=mysqli_real_escape_string($db, $_POST['password2']);

//form validation

if($password1 != $password2){
    array_push($errors, 'Password do not match');
};

//checking database for existing users

$user_check_query = "select * from users where username='$token_number' limit 1";
$results = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);

if($user){
    if($user['token_number']=== $token_number){array_push($errors, "Token number already exists");}
}

//Registering the user data if no error

if(count($errors) == 0){
    $password = md5($password1);  //md5 is used to encrypt the password
    $query = "insert into users(token_number, name, email, passout, phone, password) values('$token_number','$name','$email', '$passout', '$phone','$password')";

    mysqli_query($db,$query);
    $_SESSION['token_number'] = $token_number;
    $_SESSION['success'] = "You are now logged in";

    header('location : Home.php');
}




?>