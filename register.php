<!--https://www.youtube.com/watch?v=NXAHkqiIepc&ab_channel=EasyTutorials-->
<!--The youtube video above helped to create a functional login/register page for this project.-->
<?php
// Starts the session
session_start();

// Create a connection variable that connects to the database
$conn = mysqli_connect("localhost","username", "pass", "username");

// If there was no connection made, display the error.
if (!$conn) {
   die("Connection failed: ". mysqli_connect_error());
}

// The following variables carry the value of the information that was sent by the user within the register form.
$user = $_POST['username'];
$pass = $_POST['password'];
$email = $_POST['email'];
$birthday = $_POST['birthday'];
$country = $_POST['country'];
$province = $_POST['province'];
$phonenumber = $_POST['phonenumber'];
$city = $_POST['city'];

// Get all the information from the table "usertable" from the database where the username matches the username that the user has inputted.
$sql = "SELECT * FROM usertable WHERE username = '$user'"; 
// Queries the line above and returns it to the result variable.
$result = $conn->query($sql);

// Takes the number of rows of the output in the result variable.
$num = $result->num_rows;

// Checks if the number of rows within the result variable is equal to 1. (If there is a username that the user inputted already exists.)
if ($num == 1){
    echo '<script>';
    echo 'alert("This username has already been taken.")';
    echo '</script>';
}
// Checks if any of the needed information was left blank in the form.
elseif (empty($user) or empty($pass) or empty($email) or empty($birthday) or empty($country) or empty($phonenumber)){
   echo '<script>';
   echo 'alert("The form is incomplete. Please complete it.")';
   echo '</script>';
}

// The information is stored into the usertable table if the username was not already taken and all the required information on the form was filled out.
else{
   $register = "INSERT INTO usertable(username, password, email, birthday, country, province, phonenumber, city) VALUES ('$user', '$pass', '$email', '$birthday', '$country', '$province', '$phonenumber', '$city')";
   // Queries the line above into the database.
   $conn->query($register);
   //Once the data has been stored, the page redirects the user to the login page.
   header('location:login.php');
}

?>

<html>
<head>
<title>Games Booth - Register Page</title>
<!--Links the external CSS file for the register page.-->
<link href="registerStyle.css" rel="stylesheet">
<!--Links bootstrap-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<meta charset="UTF-8">
</head>

<body>
<div class='registerBox'>
<h1 class='centerText'>Register</h1>
<!--The form's action is directed to its own page where the php is handled within this file. The php code can be found above.-->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

    <!--Putting the whole form within a container-->
    <div class="container">
        <!--Inputs will be organized by rows where 2 of them will be side by side for each row.-->
        <div class="row">
          <!--Since 2 inputs are sharing a row, each will occupy a space of 6 since a whole row has a value of 12.-->
          <!--Every input has an id name where it is used to grab the information that the user has inputted through the php code above.-->
          <div class="col-6">
            <p>Username: <div class='asterisk'>*</div></p><br><input class="transparentInput" type="text" name="username" id="username" placeholder="Enter Username">
          </div>
          <div class="col-6">
            <p>Password: <div class='asterisk'>*</div></p><br><input class="transparentInput" type="password" name="password" id="password" placeholder="Enter a Password" minlength="3">
          </div>
        </div>

        <div class="row">
            <div class="col-6">
                <p>Email: <div class='asterisk'>*</div></p><br><input class="transparentInput" type="text" name="email" id="email" placeholder="example@email.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,3}$">
            </div>
            <div class="col-6">
                <p>Date of Birth: <div class='asterisk'>*</div></p><br><input class="transparentInput" type="date" name="birthday" id="birthday" placeholder="YYYY-MM-DD">
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <p>Country: <div class='asterisk'>*</div></p><br><input class="transparentInput" type="text" name="country" id="country" placeholder="Enter your country">
            </div>
            <div class="col-6">
                <p>Province: </p><br><input class="transparentInput" type="text" name="province" id="province" placeholder="Enter your province">
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <p>Phone Number: <div class='asterisk'>*</div></p> <br><input class="transparentInput" type="tel" name="phonenumber" id="phonenumber" placeholder="XXX-XXX-XXXX" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" maxlength="12">
            </div>
            <div class="col-6">
                <p>City: </p><br><input class="transparentInput" type="text" name="city" id="city" placeholder="Enter your City">
            </div>
        </div>
                
        <br>
        <!--The submit button where the form will be processed by the php code above.-->
        <input class="registerButton" type="submit" value="Register">
        <br>
        <!--A back button where the user is able to go back to the login page.-->
        <a href="login.php" class="backButton">Go Back</a>
    </div>

</form>

</div>
</body>

</html>

