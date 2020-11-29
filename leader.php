<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="styles.css">

<style>


</style>
</head>

<body>
  
    <nav>
        <div class="topnav" id="myTopnav">
            <p class="logo"> CRAZY GAMES</p>
            <a href="#login/register" id="loginnav" onclick="loginFunction()">Login/Register</a>
            <a href="#contact" id="contactnav" onclick="contactFunction()">Contact</a>
            <a href="#game" id="gamenav" onclick="gameFunction()">Game</a>
            <a href="#about" id="aboutnav" onclick="aboutFunction()">About</a>

            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </nav>




<div class="container-fluid">   
  <div class="row">        
  <div class="col">
<div class="row"> 
  <img src="torch.gif" alt="" style="width:100%";>
</div>
    <div class="row"> 
  <img src="cup.gif" alt="" style="width:100% " ;>
</div>

    </div>
    <div class="col-8">
<div class="row " style="margin:2%;">
  <div class=" mx-auto">
        <h2 class="text-center" style="color: red; font-family: 'Press Start 2P', cursive;">
            Leaderboard
        </h2>
    </div>
</div>
<div class="row">
  <table class="table  table-dark table-striped table-hover  text-center">
    <thead >
      <tr class="bg-primary ">
        <th>ID</th>
        <th>Name</th>
        <th>Score</th>
      </tr>
    </thead>
        <tbody>
<?php

$conn = mysqli_connect("localhost", "gsaade", "agyeveym", "gsaade") 
or die(mysql_error());


$sql9 = "SELECT * FROM leaderboard order by score ASC; ";
$result2 = $conn->query($sql9);

if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    
  $id =  $_POST["id"];
  $name =  $_POST["name"];
  $score =  $_POST["score"];

  $insert =  "INSERT INTO leaderboard (id, name, score) VALUES (" . $id . ",'" . $name . "',". $score  . ");" ;

  $conn->query($insert);
} 


if ($result2->num_rows > 0) {
    // output data of each row
    while($row = $result2->fetch_assoc()) {
		echo "<tr>";
        echo "<td>" . $row["ID"] . " </td>" ;
        echo "<td>". $row["name"]  . "</td>" ;
        echo "<td>". $row["score"]  . "</td>" ;
        echo "</tr>";
		}
        } else {
            echo "0 results";
            }

       echo  "</tbod> </table>";

/*
$conn = mysqli_connect("localhost", "gsaade", "agyeveym", "gsaade") 
or die(mysql_error());

$sql3 = "
CREATE TABLE leaderboard (
    id NUMBER(5) NOT NULL,
    name VARCHAR2(50) NOT NULL,
    score NUMBER(5) NOT NULL,
      primarykey(id)

);
";

CREATE TABLE leaderboard (
    ID int NOT NULL ,
    name varchar(255) NOT NULL,
    score int
);

$conn->query($sql3);


$sql4 = "
INSERT INTO leaderboard
(id, name, score)
VALUES
( 2, 'emma', 4);

*/
?>

</div>

    </div>

      <div class="col">
        <div class="row"> 
  <img src="torch.gif" alt="" style="width:100%";>
</div>
    <div class="row"> 
  <img src="cup.gif" alt="" style="width:100% " ;>
</div>

    </div>
    </div>
    </div>

</body>
</html>

