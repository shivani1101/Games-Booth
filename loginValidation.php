<!--https://www.youtube.com/watch?v=NXAHkqiIepc&ab_channel=EasyTutorials-->
<!--The youtube video above helped to create a functional login/register page for this project.-->
<?php
//Starts the session.
session_start();

// Create a connection variable that connects to the database
$conn = mysqli_connect("localhost", "jmiraflo", "miartuc3", "jmiraflo");

// If there was no connection made, display the error.
if (!$conn) {
	   die("Connection failed: ". mysqli_connect_error());
}

// The following variables carry the value of the information that was sent by the user within the login form.
$user = $_POST['username'];
$pass = $_POST['password'];

// Selects all the information from the usertable table where the username and password matches with the ones the user has inputted in the login form.
$sql = "SELECT * FROM usertable WHERE username = '$user' && password = '$pass'";
// Queries the line above and returns it to the result variable.
$result = $conn->query($sql);
// Takes the number of rows of the output in the result variable.
$num = $result->num_rows;

// If this username and password exists within the database, redirect the user to their user profile.
if ($num == 1){
   // Creates a username session of that user.
   $_SESSION['username'] = $user;
   // Redirects the user to the user profile page.
   header('location:userProfile.php');
}
else{
   // If the username and password doesn't exist within the database, keep the user at the login page.
   header('location:login.php');
}

?>
