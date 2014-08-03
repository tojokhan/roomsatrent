<?php
$db = mysql_connect('localhost','root','')or
die('unable to connect');

$query = 'CREATE DATABASE IF NOT EXISTS RoomsAtRent';
mysql_query($query, $db) or die(mysql_error($db));

mysql_select_db('RoomsAtRent', $db) or die(mysql_error($db));

$query = 'CREATE TABLE data(
id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT ,
name VARCHAR( 30 ) NOT NULL ,
location VARCHAR( 50 ) NOT NULL ,
phone VARCHAR( 30 ) NOT NULL ,
rent VARCHAR( 500 ) ,
TYPE VARCHAR( 30 ) NOT NULL ,
mimage_id VARCHAR( 100 ) ,
date VARCHAR( 100 ) ,
PRIMARY KEY ( id )
) ENGINE = MYISAM';
mysql_query($query, $db);
?>
<html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Rooms At Rent | Search for a place or Post an ad..</title>
  <link rel="stylesheet" href="css/style.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>



<!------Search bar------->
<div style=" padding:6px; height:50px; background:rgba(0, 0, 0, 0.5);">
<a href="index.php"><img src="images/Header5.png"></a>
  <div style=" width:839px; float:right;" align="right">
  <FONT COLOR=#FFFFFF size="+2">
<form method="post" action="posts.php">
<input type="text" name="locate" placeholder="Type a location to search.." required maxlength="20">
<input type="radio" name="type" value="room" checked>Room set
<input type="radio" name="type" value="flat">Flat
<input type="radio" name="type" value="house">House
<input type="submit" name="search" value="Search">
</form>
<br>
</FONT>
</div>
</div>
<!------Search bar ends here----->


<div class="text">
Searching for a place to stay in ?
</div>

<div class="subtext">
Just enter your location and get the best place for you..<br> <br>or place an ad to let your place..
</div>
  <section class="container">
    <div class="login">
      <h1>Fill this form to let a place</h1>
      <form method="post" action="step2.php" enctype="multipart/form-data">
        <p><input type="text" name="name" placeholder="Enter your complete name here" required maxlength="30"></p>
        <p><input type="text" name="location" placeholder="Enter your location here (City, State)" required maxlength="50"></p>
        <p><input type="tel" name="phone" placeholder="Enter your phone number here" required maxlength="15"></p>
        <p><textarea name="rent" placeholder="Rent/Description (500 words maximum)" data-grid="a"></textarea></p>
          <p>
          Type : 
           <input type="radio" name="type" value="room" checked>Room set
            <input type="radio" name="type" value="flat">Flat
               <input type="radio" name="type" value="house">House</p>
<br>
<p>
<h1> Upload a view of your place..</h1>
<p> <h1>Image : <input type="file" name="view1" value="view1" required></h1> </p>
   </p>    
        <p class="submit"><input type="submit" name="submit" value="Submit"></p>
      </form>
    </div>
  </section>

  <section class="searchcontainer">
    <div class="searchbox">
<form method="post" action="posts.php">
<h1>Search for a place near you..</h1>
<p><input type="text" name="locate" placeholder="Type a location.." required maxlength="20"></p>
<p> &nbsp;Type : 
<input type="radio" name="type" value="room" checked>Room set
<input type="radio" name="type" value="flat">Flat
<input type="radio" name="type" value="house">House</p>
<p class="submit"><input type="submit" name="submit" value="Search"></p>
</form>
</div>
</section>
</body>
<!----
 * Copyright (c) 2013-2014 RoomsAtRent.com
 * http://www.roomsatrent.com
 *
 * Designed by AshiSh RaNa
 * http://www.facebook.com/ranariskyrajput
 ---->
 <br><br>
<div class="footer"><a href="Privacy.php">Privacy Policy</a> | Copyrights reserved <a href="http://www.yourblogstory.com">YBS WebTech</a> | <a href="Disclaimer.php">Disclaimer</a> </div>
</html>
