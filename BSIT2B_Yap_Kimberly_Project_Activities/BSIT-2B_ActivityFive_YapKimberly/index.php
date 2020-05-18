<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Me,myself and It</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php 
$LowerLetter=array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
$UpperLetter=array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","S","Y","Z");
$Number=array("0","1","2","3","4","5","6","7","8","9");
?> 
<section id="body-section">
<div id="personal-info">
<?php
echo"<img id='profile' src='img/kim.jpg'><br>";
?>
<div id="sub"><?php
echo"<h5>Personal Information</h5>";
?></div>
<div id="sub1"><?php
echo"<h5>Educational</h5>";
?></div>
<div id="sub2"><?php
echo"<h5>Favourite Movie</h5>";
?></div>

<br>
<div id="tag">
<?php
echo"<h6>NAME:</h6><br>";
echo"<h6>ADDRESS:</h6><br>";
echo"<h6>DATE OF BIRTH:</h6><br>";
echo"<h6>AGE:</h6><br>";
echo"<h6>GENDER:</h6><br>";
echo"<h6>HEIGHT:</h6><br>";
echo"<h6>WEIGHT:</h6>";
?></div>
<div id="about">
<?php
echo"Hello! Im Kimberly student of Marinduque State College taking 
 Bs Information Technology and im inspiring website developer and animator.
 I have basic skills in Web Development and web design, currently working on 
 a project to boost my portfolio in making web applications and front end web design. ";

?></div>


<div id="info">
    <?php
    echo"
    $UpperLetter[10]$LowerLetter[8]$LowerLetter[12]$LowerLetter[1]$LowerLetter[4]$LowerLetter[17]$LowerLetter[11]$LowerLetter[24]
    $UpperLetter[12]$LowerLetter[4]$LowerLetter[17]$LowerLetter[9]$LowerLetter[0]$LowerLetter[13]
    $UpperLetter[24]$LowerLetter[0]$LowerLetter[15]<br><br>";
    echo"$UpperLetter[12]$LowerLetter[0]$LowerLetter[18]$LowerLetter[8]$LowerLetter[6]$LowerLetter[0]
    $UpperLetter[6]$LowerLetter[0]$LowerLetter[18]$LowerLetter[0]$LowerLetter[13]
    $UpperLetter[12]$LowerLetter[0]$LowerLetter[17]$LowerLetter[8]$LowerLetter[13]$LowerLetter[3]$LowerLetter[20]$LowerLetter[16]$LowerLetter[20]$LowerLetter[4]<br><br>";
    echo"$UpperLetter[12]$LowerLetter[0]$LowerLetter[24]
    $Number[1]$Number[9]
    $Number[1]$Number[9]$Number[9]$Number[7]<br><br>";
    echo" $Number[2]$Number[3]<br><br>";
    echo"$UpperLetter[5]$LowerLetter[4]$LowerLetter[12]$LowerLetter[0]$LowerLetter[11]$LowerLetter[4]<br><br>";
    echo" $Number[4].$Number[9]<br><br>";
    echo" $Number[4]$Number[8]";
    ?></div>

<div id="tags">
<?php
echo"<h6>ELEMENTARY:</h6><br>";
echo"<h6>HIGH SCHOOL:</h6><br>";


?></div>

<div id="school">
    <?php
    echo"$UpperLetter[12]$LowerLetter[0]$LowerLetter[18]$LowerLetter[8]$LowerLetter[6]$LowerLetter[0]
    $UpperLetter[4]$LowerLetter[11]$LowerLetter[4]$LowerLetter[12]$LowerLetter[4]$LowerLetter[13]$LowerLetter[19]$LowerLetter[0]$LowerLetter[17]$LowerLetter[24]
    $UpperLetter[18]$LowerLetter[2]$LowerLetter[7]$LowerLetter[14]$LowerLetter[14]$LowerLetter[11]<br><br>";
    echo"$UpperLetter[1]$LowerLetter[0]$LowerLetter[13]$LowerLetter[6]- $UpperLetter[1]$LowerLetter[0]$LowerLetter[13]$LowerLetter[6]
    $UpperLetter[13]$LowerLetter[0]$LowerLetter[19]$LowerLetter[8]$LowerLetter[14]$LowerLetter[13]$LowerLetter[0]$LowerLetter[11]
    $UpperLetter[7]$LowerLetter[8]$LowerLetter[6]$LowerLetter[7]
    $UpperLetter[18]$LowerLetter[2]$LowerLetter[7]$LowerLetter[14]$LowerLetter[14]$LowerLetter[11]<br><br>";
  
    ?></div>
    <div id="f-movie">
        <?php
        echo"<img id='movie-cover' src='img/m1.jpeg'>";
        echo"<img id='movie-cover' src='img/images.jpeg'>";
        echo"<img id='movie-cover' src='img/m3.jpeg'>";
        echo"<img id='movie-cover' src='img/m4.jpeg'>";
        
        
        ?>
        <br>
        <div id=m-title>
         <?php
        echo" <p>$UpperLetter[19]$UpperLetter[8] $UpperLetter[19]$UpperLetter[0] $UpperLetter[13]$UpperLetter[8]$UpperLetter[2]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        echo" $UpperLetter[19]$UpperLetter[7] $UpperLetter[4]&nbsp;&nbsp;$UpperLetter[7] $UpperLetter[14]$UpperLetter[18]$UpperLetter[19]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        echo" $UpperLetter[19]$UpperLetter[22] $UpperLetter[8]$UpperLetter[11] $UpperLetter[8]$UpperLetter[6]$UpperLetter[7]$UpperLetter[19]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        echo" $UpperLetter[7]$UpperLetter[0] $UpperLetter[17]$UpperLetter[17] $UpperLetter[24]&nbsp;&nbsp;$UpperLetter[15]$UpperLetter[14]$UpperLetter[19]$UpperLetter[19]$UpperLetter[4]$UpperLetter[17]</p>";
        ?></div>

    </div>
    </div></section>
</body>
</html>