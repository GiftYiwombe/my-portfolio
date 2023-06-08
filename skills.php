<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "portfolio";

if (!$conn = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname)){

   die("Failed to connect");
  
}
echo "connection succesful";

?>


<!DOCTYPE html>

<html>
<head>
<style>
h1,h3,p{

    text-align: center;
}

body{
    background-color:blue;
}

</style>
<title>my skills</title>
</head>

<body>
    <img src="logo.png" alt="logo"> 
  <h1>My skills</h1>

 <h3> video editing</h3>
  
<p>I am good at video editing, and shooting pictures as well as video
    directing , some of the tools I use <br>
    include adobe photoshope and adobe premiere.</p>


  <h3>programming</h3> 
     

<p>In addition to that, I also have knowledge in coding, I know front end languages like html, javaScript and css <br>
as well as other programming languages like C language and Java.  </p>


<h3>Graphic designing</h3>

<p>My other skill is that I am also a graphic designer, Im skilled in logo creating using adobe illustrator, in <br>
addition to that im also good at creating artworks as well as invitation cards using adobe photoshope. </p>
    </div>
   
</body>


</html>