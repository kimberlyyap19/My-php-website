<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future Investment</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div id="header"><?php 
    echo"<h1>Future<br> Investment</h1>"?></div>
   
    <?php 
    $InvestedAmount=1000;
    $NumberOfYears=12;
    $Interest=1.12;
    $Interests=1.14;
    $Years=2020?>
    
    <div id="table"> <?php 
    echo"Invested Amount:".$InvestedAmount."Pesos<br>";
    echo"Investment Year:".$NumberOfYears."Years";?></div>
    <div id="column-1"><?php 
    echo"<h5>Years<br><br></h5>";
   ?>
  <?php 
    for($i=1;$i<=12;$i++) {
        echo"".$Years++."<br>";
    }?></div>
  
  
     <div id="column-2"><?php 
    echo"<h5>Amount (Peso)<br><br></h5>";?>

    <?php 
    $x=$NumberOfYears;
    $i=0;
  for($i=1;$i<=$x;$i++)
  {
      if($i==1)
      {
        $InvestedAmount= $InvestedAmount* $Interest;
     
      }
      if($i==2)
      {
        $InvestedAmount= $InvestedAmount* $Interests;
     
      }
      if($i==3)
      {
        $InvestedAmount= $InvestedAmount* $Interest;
     
      }
      if($i==4)
      {
        $InvestedAmount= $InvestedAmount* $Interests;
     
      }
      if($i==5)
      {
        $InvestedAmount= $InvestedAmount* $Interest;
     
      }
      if($i==6)
      {
        $InvestedAmount= $InvestedAmount* $Interests;
     
      }
      if($i==7)
      {
        $InvestedAmount= $InvestedAmount* $Interest;
     
      }
      if($i==8)
      {
        $InvestedAmount= $InvestedAmount* $Interests;
     
      }
      if($i==9)
      {
        $InvestedAmount= $InvestedAmount* $Interest;
     
      }
      if($i==10)
      {
        $InvestedAmount= $InvestedAmount* $Interests;
     
      }  
      if($i==11)
      {
        $InvestedAmount= $InvestedAmount* $Interest;
     
      }
      if($i==12)
      {
        $InvestedAmount= $InvestedAmount* $Interests;
     
      }
    
      echo"".(round($InvestedAmount,2))."<br>";
  }
    
   ?></div></div>
</body>
</html>