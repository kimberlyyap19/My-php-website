

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Song Choice</title>
    <link rel="stylesheet" type="text/css" href="style.php">
</head>
<body>
<section id="playlist">
<div id="title">Your Song Choice</div>
<form action="fsong1.php" method="POST" enctype="multipart/form-data">
<button id="songplay" ><h3>Kathang_Isip</h3></button></form>
<form action="fsong2.php" method="POST" enctype="multipart/form-data">
<button id="songplay1" ><h3>Magbalik</h3></button></form>
<form action="fsong3.php" method="POST" enctype="multipart/form-data">
<button id="songplay2" ><h3>You're Still The One</h3></button></form></div>

<div id="socialmedia" ><div id="title">Social Media</div>
<form action="http://freewebsitetemplates.com/go/facebook/" method="POST" enctype="multipart/form-data">
<button id="songplay" ><h3>Facebook</h3></button></form>
<form action="http://freewebsitetemplates.com/go/twitter/" method="POST" enctype="multipart/form-data">
<button id="songplay1" ><h3>Twitter</h3></button></form>
<form action="http://freewebsitetemplates.com/go/instagram/" method="POST" enctype="multipart/form-data">
<button id="songplay2" ><h3>Instagram</h3></button></form>
<form action="http://www.freewebsitetemplates.com/misc/contact" method="POST" enctype="multipart/form-data">
<button id="gmail" ><h3>Gmail</h3></button></form>
<div id="creator">@KimberlyMerjanYap</div>

</div>

</section>
<div id="Songlyrics">
<div id="lyrics-div">
<img src="img/image2.jpg" alt="" class="test-box">
<div><audio controls>
    <source src="music/Your still the one lyrics.mp3" type="audio/mpeg" class="a">
    </audio></div>
    <?php 
echo "<h1>You're Still The One</h1><br><br><br>";
echo "<h4>(By Shania Twain)</h4><br><br>";
echo "<h5>[Intro]</h5><br><br>";
echo "<p> D D G A </p><br>";
echo "<h5>[Verse 1]</h5><br><br>";
echo "<p> D G A </p><br>";
echo "<p>Looks like we made it, Look how far we've come my baby</p><br><br>";
echo "<p> D G A </p><br>";
echo "<p> We might a took the long way, We knew we'd get there someday </p><br><br>";

echo "<h5>[Bridge]</h5><br><br>";
echo "<p>D G A </p><br>";
echo "<p>They said, I bet they'll never make it</p><br>";
echo "<p> D G A </p><br>";
echo "<p>But just look at us holding on</p><br>";
echo "<p>D G A</p><br>";
echo "<p>We're still together still going strong</p><br>";
?>
</div>

<div id="lyrics-div-center"><?php 
echo "<h5>[Chorus]</h5><br><br>";
echo "<p>D </p><br>";
echo "<p>You're still the one</p><br>";
echo "<p>G</p><br>";
echo "<p>You're still the one I run to</p><br>";
echo "<p>Em A </p><br>";
echo "<p>The one that I belong to</p><br>";
echo "<p>D G A</p><br>";
echo "<p>You're still the one I want for life</p><br>";
echo "<p>D</p><br>";
echo "<p>You're still the one</p><br>";
echo "<p>G </p><br>";
echo "<p>You're still the one that I love</p><br>";
echo "<p>Em A</p><br>";
echo "<p>The only one I dream of</p><br>";
echo "<p>D G A</p><br>";
echo "<p>You're still the one I kiss good night</p><br>";
echo "<h5>[Verse 2]</h5><br><br>";
echo "<p>D </p><br>";
echo "<p>Ain't nothin' better</p><br>";
echo "<p>G A</p><br>";
echo "<p>We beat the odds together</p><br>";
echo "<p>D </p><br>";
echo "<p>I'm glad we didn't listen</p><br>";
echo "<p>G A</p><br>";
echo "<p>Look at what we would be missin'</p><br>";
echo "<h5>[Repeat Bridge]</h5><br><br>";
echo "<h5>[Repeat Chorus]</h5><br><br>";
echo "<h5>[Solo - D G A]</h5><br><br>";




?></div>
<div id="lyrics-div-side"><?php 
echo "<h5>[Repeat Chorus]</h5><br><br>";
echo "<p>D</p><br>";
echo "<p>I'm so glad we made it</p><br>";
echo "<p>G A</p><br>";
echo "<p>Look how far we've come my baby</p><br>";


?></div>
   
</div>
</body>
</html>