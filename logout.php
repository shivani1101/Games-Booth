<!--https://www.youtube.com/watch?v=NXAHkqiIepc&ab_channel=EasyTutorials-->
<!--The youtube video above helped to create a functional login/register page for this project.-->
<?php
// Starts the session.
session_start();
//When the user clicks on the logout button, it triggers this file and executes the following command where it destroys the current session.
session_destroy();

// The user is then brought back to the login page.
header('location:login.php');
?>
