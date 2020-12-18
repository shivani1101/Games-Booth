<?php
// Starts the session.
session_start();

// Create a connection variable that connects to the database
$conn = mysqli_connect("localhost", "jmiraflo", "miartuc3", "jmiraflo");

// If there was no connection made, display the error.
if (!$conn) {
	   die("Connection failed: ". mysqli_connect_error());
}

// Checks to see if the session of username has been created. If not, the user is directed to the login page.
if(!isset($_SESSION['username'])){
   header('location:login.php');
}

// Giving the username session a variable name.
$user = $_SESSION['username'];

// Selects the following information from the usertable where the username matches the one from the current session.
$sql = "SELECT username, email, birthday, country, province, phonenumber, city FROM usertable WHERE username = '$user'";
// Queries the line above and returns it to the result variable.
$result = $conn->query($sql);
?>

<html>

<head>
<title>Crazy Games - User Profile</title>
<!--Links the external CSS file for the user profile page.-->
<link href="userProfileStyle.css" rel="stylesheet">
<!--Links bootstrap-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<meta charset="UTF-8">
</head>

<body>

<!--This container will also hold the accountBox class to style it.-->
<div class='container accountBox'>

<!--Creates a row for the header and logout button of the page. -->
    <div class="row">
        <div class="col-md-12">
            <h1 class="header">Your Account</h1>
            <!--Creates a link called "Logout" where the user is able to stop its current session and go back to the login screen.-->
            <a href="logout.php" class="logoutButton">Logout</a>
        </div>
    </div>

<!--Creates a row where the profile picture is displayed. This takes up 25% of the whole row.-->
    <div class="row">
        <div class="col-md-3">
            <img class="profilepic" src="profilepic.png">
        </div>

        <!--Creates a row where the information of the user is displayed. This takes up 75% of the whole row.-->
        <div class="col-md-9">
            <h3>Login Info</h3>
            <?php

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    // Outputs the username of the current session.
                    echo 'Username: ' .$_SESSION['username'];

                    echo '<hr>';

                    echo '<h3>Personal Info</h3>';
                    
                    // Gets the date of birth of that current user in the database.
                    echo 'Date of Birth: '. $row["birthday"]. "<br>" . "<br>";

                    // Gets the country of that current user in the database.
                    echo 'Country: '. $row["country"]. "<br>" . "<br>";

                    // Gets the province of that current user in the database.
                    echo 'Province: '. $row["province"]. "<br>" . "<br>";

                    // Gets the city of that current user in the database.
                    echo 'City: '. $row["city"]. "<br>" . "<br>";

                    echo '<hr>';

                    echo '<h3>Contact Information</h3>';

                    // Gets the email of that current user in the database.
                    echo 'Email: '. $row["email"]. "<br>" . "<br>";

                    // Gets the phone number of that current user in the database.
                    echo 'Phone Number: '. $row["phonenumber"]. "<br>" . "<br>";
                }
            }
        ?>
        </div>
    </div>
</div>

</body>

</html>
