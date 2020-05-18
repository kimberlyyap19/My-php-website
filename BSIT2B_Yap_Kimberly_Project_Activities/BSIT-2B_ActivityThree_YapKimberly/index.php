<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astrological Sign Classifier</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h2 id="birth">Astrological Sign Classifier</h2>
   <section class="form-section"> <form method="POST" action="">
    <div><input type="text" placeholder ="Enter your name" name="fname"   required></div>
    <div><input type="text" placeholder ="Your Birth Month" name="bmonth" required></div>
    <div><input type="text" placeholder ="Your Birthday" name="bday" required></div>
    <div><input type="submit" value ="Generate" name="gen" class ="button"></div>
    </form>
  <h5>SOCIAL LINK</h5>
  <a href="http://freewebsitetemplates.com/go/facebook/" ><img src="img/facebook.png" class="fb"></a>
  <a href="http://freewebsitetemplates.com/go/twitter/" ><img src="img/twitter.png" class="twit"></a>
  <a href="http://freewebsitetemplates.com/go/yahoo/" ><img src="img/yahoo.png" class="yahoo"></a>
  <a href="http://www.freewebsitetemplates.com/misc/contact" ><img src="img/gmail.png" class="gmail"></a>
  <h6>@KimberlyMerjanYap</h6>
</section>
    <section class="view-section">

    <?php 
    include("show.php")
    ?></section>
    
</body>
</html>