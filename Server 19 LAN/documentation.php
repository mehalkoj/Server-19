<!DOCTYPE html>
<html lang="en">
  <head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php
#For Afternoon
if ($time < "19") {
    echo '<div "gradient" style="background-image: linear-gradient(#FEE2B3, #FFA299, #AD6989, #562349)">';
    
   }
   #For Morning
 else if ($time < "10") {
    echo '<div "gradient" style="background-image: linear-gradient(#FCECDD, #FFC288, #FEA82F, #FF6701)">';
 }
 #For Night
else {
    echo '<div "gradient" style="background-image: linear-gradient(#F5CDAA, #CFB495, #758184, #5D5B6A)">';
}

 #Time for user
 echo date("l jS \of F Y h:i:s A");

 #Variables For Time
$time = date("H");
 $timesaying = array("Good Morning", "Good Afternoon", "Night Night");

#If else statment for clock
 if ($time < "10") {
     echo "<p>$timesaying[0]</p>";
 } else if ($time < "19") {
     echo "<p>$timesaying[1]</p>";
 }
    else {
        echo "<p>$timesaying[2]</p>";
        } 

?>


    <title>Documentation</title>
</head>