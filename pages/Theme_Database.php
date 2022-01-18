<?php 
//specify the server, username, password and database
$server = 'localhost';
$username = 'joshuasu_admin1';
$password = 'p4lmTrees';
$database = 'joshuasu_Guestbook1';

//try to connect to the database
$conn = new mysqli($server, $username, $password, $database);

$date=htmlspecialchars
($_REQUEST["fdate"]);
$children=htmlspecialchars
($_REQUEST["fchildren"]);
$adults=htmlspecialchars
($_REQUEST["fadults"]);
$email=htmlspecialchars
($_REQUEST["femail"]);
$name=htmlspecialchars
($_REQUEST["fname"]);
echo"Request Succesfully Submitted";

//construct the query using the data from the input fields
$sql = "INSERT INTO Birdz (guest_name, email, adult_no, children_no, trip_date)
 VALUES('$name','$email','$adults', '$children', '$date')";

//apply the query to the database, inserting the new comment and record whether it went in OK
$success = $conn->query($sql);

?>