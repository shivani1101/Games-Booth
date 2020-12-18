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
<script> 
//animation for table
$(document).ready(function() {
     
     $("tr").each(function(i) {
     	$(this).delay(300*i).fadeIn();
	});
});
</script>
</head>

<body>
     


<!--rows for images and table-->

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

//connection to database
$conn = mysqli_connect("localhost", "", "", "") 
or die(mysql_error());

//query for fetching scores
$sql9 = "SELECT * FROM leaderboard order by score ASC; ";
$result2 = $conn->query($sql9);

// submit for form for new score input
 if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    
  $id =  $_POST["id"];
  $name =  $_POST["name"];
  $score =  $_POST["score"];

  $idid = "SELECT score FROM leaderboard WHERE id = " .  $id . "; ";
  $result = $conn->query($idid);
//oupdating old score
  if(($conn -> affected_rows) == 0  ){

  $insert1 =  "INSERT INTO leaderboard (id, name, score) VALUES (" . $id . ",'" . $name . "',". $score  . ");" ;

  $conn->query($insert1);

  }else {
//input new score , row
  while($obj = $result->fetch_assoc()){

  $sc =  $obj["score"];

  if ( $sc > $score){

  $insert =  "UPDATE  leaderboard  SET score = " . $score . " WHERE ID = ".$id . ";";
  $conn->query($insert);

  }
  }

  }
      header("location:leader.php"); // your current page

} 

// display the fetched table row by row
if ($result2->num_rows > 0) {
    // output data of each row
    while($row = $result2->fetch_assoc()) {
		echo "<tr style=' display:none; '>";
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
examples of creating table and insert queries 

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
//images on the side
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

