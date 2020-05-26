<!DOCTYPE html>
<html>
<head>
	<title>IIT B Sports</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>


<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Bombay Blackcats</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="userinfo.php">Data</a>
      </li>    

    </ul>
  </div>
</nav>

<div class="w-50 m-auto">
<form action="userinfo.php" method="post">

  <div class="form-group">
    <label for="formGroupExampleInput">Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter your full name">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Roll Number</label>
    <input type="text" class="form-control" name="roll"  placeholder="Enter your roll number">
  </div>
   
   <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
	
<div class="w-50 m-auto">
<style>
table {
	border-collapse: collapse;
	width: 100%;
	color: #588c7e;
	font-family: monospace;
	font-size: 25px;
	text-align: left;
}
th {
	background-color: #588c7e;
	color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>Id</th>
<th>Name</th>
<th>Roll No.</th>
</tr>

<?php
	$conn = mysqli_connect('localhost', 'root', '', "iitbsportsdata");
	// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}
	$sql = "SELECT id, name, roll FROM userinfodata";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
	echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"] . "</td><td>"
	. $row["roll"]. "</td></tr>";
	}
	echo "</table>";
	} else { echo "0 results"; }
	$conn->close();
?>
</table>
</body>
</div>




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>
</html>
