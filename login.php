<!--https://www.youtube.com/watch?v=NXAHkqiIepc&ab_channel=EasyTutorials-->
<!--The youtube video above helped to create a functional login/register page for this project.-->
<?php
// Starts the session.
session_start();

// Create a connection variable that connects to the database
$conn = mysqli_connect("localhost", "jmiraflo", "miartuc3", "jmiraflo");

// If there was no connection made, display the error.
if (!$conn) {
	   die("Connection failed: ". mysqli_connect_error());
}
?>

<html>
<head>
<title>Games Booth - Sign in Page</title>
<!--Links the external CSS file for the user profile page.-->
<link href="loginStyle.css" rel="stylesheet">
<!--Links bootstrap-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<meta charset="UTF-8">
</head>

<body>
<!--Creates a div for the login box where it holds the class loginBox to design it.-->
<div class='loginBox'>
   <h1 class='centerText'>Login  Here</h1>
   <!--The form for the login. It is sent to the loginValidation php file where it checks for the users input.-->
   <form action="loginValidation.php" method="post">
   <!--The inputs of the form are username and password where the user is able to type it out and submit.-->
   <p>Username: </p><input class="transparentInput" type="text" name="username" placeholder="Enter Username">
   <br>
   <p>Password: </p><input class="transparentInput" type="password" name="password" placeholder="Enter Password">
   <br>
   <!--The submit button where the form will be processed by the php file "loginValidation.php".-->
   <input class="loginButton" type="submit" value="Login">
   <br>
   <!--A link to the register page where the user is able to create an account.-->
   <a href="http://webdev.scs.ryerson.ca/~jmiraflo/finalproj/register.php">Don't have an account? Sign up here!</a>
   </form>

</div>
</body>

</html>

