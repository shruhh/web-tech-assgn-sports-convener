<?php

$con = mysqli_connect('localhost', 'root');

if($con){
	echo "Connection successful";
}
else{
	echo "No connection!";
}

mysqli_select_db($con, 'iitbsportsdata');

$name = $_POST['name'];
$roll = $_POST['roll'];

$query = "insert into userinfodata (name, roll) values ('$name', '$roll')" ;

mysqli_query($con, $query);

header('location:index.php');

?>
