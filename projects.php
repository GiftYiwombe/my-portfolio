
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

<title>my projects</title>
<style>

   h5,h1{
   text-align: center;
}
body{
 background: aqua;
}

img-area{ 
position: relative;
width: 500px;
height: 300px;
overflow: hidden;
}


.img-area img{

   width: 100%;
   height: 100%;
   object-fit: cover;
}


.preveousbutton, .nextbutton{
   position: absolute;
   top: 50%;
   transform: translateY(-50%);
   padding: 10px;
   background-color: black;
   border: none;
   cursor: pointer;
   }
   
   
</style>

</head>

<body>

   
<h1>I have worked on many projects in the past, some of them which <br>
   are included in the pictured that are shown below</h1>

  <div class="wrapper">

          <h5>My previous projects</h5>
    <div class="img-area">
      
      <div class=""><img src="1.png" alt=""> </div>
      <div class=""><img src="2.png" alt=""> </div>
      <div class=""><img src="3.png" alt=""> </div>
      <div class=""><img src="4.png" alt=""> </div>
      <button id="nextbotton">Next</button>
      <button id="preveousbotton">Preveous</button>
      
    </div>
 </div>
 <script>

const imgArea = document.getElementById('imgArea');
const preveousbutton = document.getElementById('preveousbutton');
const nextbutton = document.getElementById('nextbutton');


let currentIndex = 0;
showImage(currentIndex);

preveousbutton.addEventListener('click',() =>{
    currentIndex = (currentIndex -1 + imgArea.children.length) % 
    imgArea.children.length;
    showImage(currentIndex);
});

nextbutton.addEventListener('click',() =>{
    currentIndex = (currentIndex + 1) % imgArea.children.length; 
    imgArea.children.length;
    showImage(currentIndex);
});


function showImage(Index){
    for(i=0;i<imgArea.children.length;i++){
        const image = imgArea.children[i];
        image.style.display = i === index ? 'block' : 'none';
    }

}


 </script>   

</body>



</html>