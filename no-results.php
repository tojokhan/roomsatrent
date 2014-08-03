<?php
$db = mysql_connect('localhost','root','')or
die('unable to connect');
mysql_select_db('RoomsAtRent', $db) or die(mysql_error($db));
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
  <link rel="stylesheet" href="css/style-no-results.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
<!----Header Search bar---->
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

<!---Header Search bar Ends---->


  <section class="container">
    <div class="searchbox">
<form method="post" action="posts.php">
<h1>No place found at your location !


<br> Try another location..or <a href="index.php">post an ad</a></h1>
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
<div class="footer"><a href="Privacy.php">Privacy Policy</a> | Copyrights reserved <a href="http://www.yourblogstory.com">YBS WebTech</a> | <a href="Disclaimer.php">Disclaimer</a> </div>
</html>
