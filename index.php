<!DOCTYPE html>
<html lang="en">
  <head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

      <!---- Css ---->
      <link rel="stylesheet" href="css_Scripts/nav_bar.css">
<link rel="stylesheet" href="css_Scripts/main.css">

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="frameworks/uikit.min.css"/>

<!-- UIkit JS -->
<script src="frameworks/uikit.min.js"></script>


<title>Server19</title>
 </head>
 <body>
   

    <div class="header">
        <h1>Server 19</h1>
    </div>

    <!---- Nav Bar ---->
    <div class="topnav">
  <a href="index.php">Home</a>
  <a href="games_list.php">Games</a>
  <a href="documentation.php">Documentation</a>
</div>




<!---- Download List ---->
<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>Recently Added</h2>
      <h6>On September 6th, 2021</h6>
      <a href="Game_Pages/Big_Biz_Page.php"><img src ="img_pages/220px-Big_Biz_Tycoon_2_Coverart.png" alt="" style="width: 200px; height: 200px;"></a> 
    <a href="Game_Pages/Mall_Tycoon_2_Page.php"><img src ="/img_pages/220px-Malltycoon.jpg" alt="" style="width: 200px; height: 200px;"></a> 
    <a href="Game_Pages/Rep_Rev_Page.php"><img src ="/img_pages/220px-Republic_-_The_Revolution.jpg" alt="" style="width: 200px; height: 200px;"></a> 
    <a href="Game_Pages/School_Tycoon_Page.php"><img src ="/img_pages/220px-School_Tycoon_Coverart.png" alt="" style="width: 200px; height: 200px;"></a> 
    <a href="Game_Pages/Vegas_Tycoon_Page.php"><img src ="/img_pages/vegas_tycoon.jpg" alt="" style="width: 200px; height: 200px;"></a> 
    <a href="Game_Pages/Swat_4_Page.php"> <img src ="/img_pages/Swat_4.png" alt="" style="width: 200px; height: 200px;"></a> 
    <!--- <a href="Game_Pages/American_Wasteland_Page.php"> <img src ="/img_pages/Tony Hawk's American Wasteland.jpg" alt="" style="width: 200px; height: 200px;"></a> --->
    <a href="Game_Pages/World_In_Conflict_Page.php"> <img src ="/img_pages/WorldInConflict.jpg" alt="" style="width: 200px; height: 200px;"></a> 
    </div>

    <div class="card">
      <h2>Quality Of Life</h2>

    </div>
  </div>

  <div class="rightcolumn">
    <div class="card">
      <h2>You Loaded In At</h2>

      <?php
      #Time for user
  echo date("l jS \of F Y h:i:s A"); 


?>
    </div>

    <div class="card">
      <h3>Popular At The Moment</h3>
      <div class="fakeimg"><p>Image</p></div>
      <div class="fakeimg"><p>Image</p></div>
      <div class="fakeimg"><p>Image</p></div>
    </div>
    <div class="card">
      <h3>Message Board</h3>
      <p>Go Ahead And Share</p>
    </div>
  </div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>







<div class="footer">
  <h2>Footer</h2>
</div>




    </body>
</html>