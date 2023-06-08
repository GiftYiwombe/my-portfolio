
<DOCTYPE html>
<html>
<head> retreving data</head>
<body>
<h1>This page has php code to retrieve data from database tables</h1>
</body>

</html>

<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "portfolio";

if (!$conn = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname)){
  die("Failed to connect");
}
echo "connection succesful";


$retreivedData = mysqli_query($conn,"SELECT * from contact");

while($row = mysqli_fetch_array($retreivedData)){
echo $row["FirstName"]. " ";
}
?>