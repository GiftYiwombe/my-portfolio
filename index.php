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
  <title> my portfolio  </title>
<meta charset="UTF-8">
<link rel="stylesheet" href="styles.css">
<script>
var i;
var images = [];
var time = 3000;


images[0]='R.png';
images[1]='img2.png';

function changeImg() {

document.slide.src =images[i];

if(i<images.length -1){

  i++;
}  else{

  i=0;
}
setTimeout("changeImg()",time);
}
window.onload = changeImg;

</script>
<script>


  function validateForm() {
  let x = document.forms["myForm"]["fname"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }



}

</script>
<style>
h1, p,h3{
text-align: center;

}

.slideshow{
text-align: center;

}
body{
  color: white;
  font-size: large;
}

</style>

</head>

<body>
  
  <div style="margin-left: 45px;">
  <div class="header">
    <header class="header">
      
<nav> 
  <img src="logoindex.png" alt="logo">
  <ul> 
    <li> <a href = "index.html"> Home </a></li>  
    <li> <a href="skills.html">Skills</a> </li>   
    <li> <a href="projects.html">Projects </a> </li> 
    <li> <a href="about.html">About</a> </li>   
  </ul>
</nav>
       
  </header>        

</div>
<h1>  Hi, my name is Gift Yiwombe! </h1>

<p>I am a begginer web designer, and also a student at Mzuzu University, <br>
   persuing Bachlor of science in information and communication technology, <br>
   I am a very passionate young man who is always devoted in my work, <br>
   and this is one of my school assignments that the lecturer had given me to do. <br>                                                                        
    
</p>

<h3>My other previous projects</h3>
<p>some of a few projects I have worked on are shown in the pictures below  <br> 
  <div class="slideshow">
  <div style="margin-top: 70px;">
 <img name="slide" width="250" height="150">
  </div>
</div>
</p>


<h3>My other skills </h3>
<p>    
     Some of my other skills are: Graphic designing<br> 
     video editing, Audio production,<br> 
     and creating animations.<br>                                                          
</p>
<div class="button-container"><button class="button-color"> Hire me now </button><br><br></div>

<h5>my social meadia links</h5>


</body>
<footer>
<ul>  
<li><a href ="https://web.facebook.com/profile.php?id=100092162982438">facebook</a> </li>
<li><a href="https:wa.me/265886416168">Whatsapp</a></li>   

<li> <a href="contact.html">Contact</a> </li>
 </ul>
</footer>
</div>



</html>