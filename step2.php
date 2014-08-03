<?php
$db = mysql_connect('localhost','root','')or
die('unable to connect');
mysql_select_db('RoomsAtRent', $db) or die(mysql_error($db));
		
$dir = 'C:\xampp\htdocs\RoomsAtRent\uploads';
$ext = '.jpg';
list($mwidth, $mheight, $mtype, $mattr) = getimagesize($_FILES['view1']['tmp_name']);
$image = imagecreatefromjpeg($_FILES['view1']['tmp_name']) or
die('File not uploaded.');

date_default_timezone_set('America/New_York');
$postdate = date('r');
//list($mwidth, $mheight, $mtype, $mattr) = getimagesize($_FILES['view1']['view1name']);
//list($iwidth, $iheight, $itype, $mattr) = getimagesize($_FILES['view2']['view2name']);
//list($owidth, $oheight, $otype, $mattr) = getimagesize($_FILES['view3']['view3name']);


$query = 'INSERT INTO
	 data
	 (date,name,location,phone,rent,type)
	 VALUES
	 	(  "'.$postdate.'",
		"' .$_POST['name']. '",
		"' .$_POST['location']. '",
		"' .$_POST['phone']. '",
		"' .$_POST['rent']. '",
		"' .$_POST['type']. '")';
	
	if (isset($query)) {
		 mysql_query($query, $db) or die(mysql_error($db));
		 
	}
	$mlast_id = mysql_insert_id();
    $mimagename = $mlast_id . 'main' . $ext;
	
	$query='UPDATE data SET mimage_id = "' . $mimagename . '" WHERE id="'.$mlast_id.'"';
	mysql_query($query, $db) or die(mysql_error($db));

imagejpeg($image, $dir . '/' . $mimagename, 100);

?>


<!----
 * Copyright (c) 2013-2014 RoomsAtRent.com
 * http://www.roomsatrent.com
 *
 * php code by Pankaj Adhikari
 ---->
 
 

<html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Rooms At Rent | Search for a place or Post an ad..</title>
  <link rel="stylesheet" href="css/step2.css">
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

<div class="text">
Your advertisement has been submitted successfully !
</div>

<div class="subtext">
Here is it ..
</div>

<section class="container">
<p> <label> Your name : <?php echo $_POST['name']; ?> </label></p> <br>
<p> <label> Type : <?php echo $_POST['type']; ?> </label></p> <br>
<p> <label> Location : <?php echo $_POST['location']; ?> </label></p> <br>
<p> <label> Phone number : <?php echo $_POST['phone']; ?> </label></p> <br>
<input type="button" onClick="location.href='index.php';" value="Back to Home">
</section>

<!-----Add a button to the full page ---- >

<!----
 * Copyright (c) 2013-2014 RoomsAtRent.com
 * http://www.roomsatrent.com
 *
 * Designed by AshiSh RaNa
 * http://www.facebook.com/ranariskyrajput
 ---->

</body>
<div class="footer"><a href="Privacy.php">Privacy Policy</a> | Copyrights reserved <a href="http://www.yourblogstory.com">YBS WebTech</a> | <a href="Disclaimer.php">Disclaimer</a> </div>
</html>
