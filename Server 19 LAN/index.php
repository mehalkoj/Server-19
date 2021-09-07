<!DOCTYPE html>
<html lang="en">
  <head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style>

 body{
    font-family: Arial;
  padding: 10px;
  background-image: linear-gradient(#D68060, #F1AE89, #DFF3E3, #86ABA1);

 }
.header {
    padding: 30px;
  text-align: center;
  background: white;
}

.topnav{
    overflow: hidden;
}
.topnav a{
    float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  border-radius: 25px;
}

.topnav a:hover{
    background-color: #DFF3E3;
  color: black;
}


.leftcolumn {
    float: left;
  width: 55%;
}

.rightcolumn {
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 50px;
  right: 50px;
  left: 30px;
    float: right;
  width: 40%;
  background-color: #f1f1f1;
  padding-left: 20px;
  padding-bottom: 20px;
  padding-right: 20px;
  
}

/* Add a card effect for articles */
.card {
  background-color: white;
  padding: 20px;
  margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
} 

.footer {
    padding: 20px;
  text-align: center;
  margin-top: 20px;
}


</style>

<title>Server19</title>
 </head>
 <body>

    <div class="header">
        <h1>Server 19</h1>
    </div>

    <div class="topnav">
  <a href="index.php">Home</a>
  <a href="games_list.php">Games</a>
  <a href="documentation.php">Documentation</a>
</div>





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
    <a href="Game_Pages/American_Wasteland_Page.php"> <img src ="/img_pages/Tony Hawk's American Wasteland.jpg" alt="" style="width: 200px; height: 200px;"></a> 
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
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
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