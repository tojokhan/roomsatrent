<?php
$db = mysql_connect('localhost','root','')or
die('unable to connect');
mysql_select_db('RoomsAtRent', $db) or die(mysql_error($db));
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
  <link rel="stylesheet" href="css/full.css">
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

<h1>Disclaimer - RoomsAtRent.com</h1>
<b>Your Content Is Your Responsibility:</b> <br>You are solely responsible for any messages, reviews, text, photos, videos, graphics, code, or other information, content or materials that you post, submit, publish, display or link to through the Services or send to other Housing.com users.<br>
<br>
<b> We May Choose to Monitor User Content : </b><br> We does not approve, control, or endorse your or anyone else's User Content and has no obligation to do so. However, we reserve the right (but assume no obligation) to remove or modify User Content for any reason, at our sole discretion, including User Content that we believe violates our Terms of Use.<br>
<br>
<b> Be Truthful:</b> <br>You agree to provide accurate, complete, current, and truthful information when you add or edit facts about your home or otherwise provide content via the Services.<br>
<br>
<b>Do Not Post Illegal or Harmful Content: </b><br>You agree not to post, submit, or link to any User Content or material that infringes, misappropriates, or violates the rights of any third party (including intellectual property rights) or that is in violation of any federal, state, or local law, rule, or regulation. You also agree not to post, submit or link to any User Content that is defamatory, obscene, pornographic, indecent, harassing, threatening, abusive, inflammatory, or fraudulent, purposely false or misleading or otherwise harmful.<br>
<br>
<b>Do Not Violate Others' Rights:</b><br> You agree not to post copyrighted material without permission from the owner of the copyright. This includes, for example, photographs or other content you upload via the Services. You also agree not to disclose confidential or sensitive information. This includes but is not limited to information about neighbors or other information that would potentially be viewed as an invasion of privacy.<br>
<br>
<b>Your grant to Use Your Content:</b><br> When you provide User Content via our Services, you grant Housing.com a royalty-free, perpetual, irrevocable, and fully sublicensable license to publish, reproduce, distribute, display, adapt, modify and otherwise use your User Content in connection with our Services. We will not pay you or otherwise compensate you for the content you provide to us.<br>
<br>
<b>Your Content May Be Made Public: </b><br>You understand and agree that any User Content that you post or submit to Housing.com may be redistributed through the Internet and other media channels, and may be viewed by the general public.<br>
<br>
<b>We reserve the right in our sole discretion to edit or remove information or materials provided by you.</b>
<br><br>
<div class="footer"><a href="Privacy.php">Privacy Policy</a> | Copyrights reserved <a href="http://www.yourblogstory.com">YBS WebTech</a> | <a href="Disclaimer.php">Disclaimer</a> </div>
</section>


<!----
 * Copyright (c) 2013-2014 RoomsAtRent.com
 * http://www.roomsatrent.com
 *
 * Designed by AshiSh RaNa
 * http://www.facebook.com/ranariskyrajput
 ---->

</body>

</html>
