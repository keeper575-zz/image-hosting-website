
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GAURAV KUMAR HOME PAGE</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />

<script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
</head>

<body>
<div id="page">
	<div id="header">
    <h1>
    <center>
     FREE IMAGE HOSTING SITE
    </center>
    </h1>
    </div>
    <div id="menu-wrapper">
        <div id="menu">
            <ul>
                <li><a href="./index.php">Home</a></li>
                <li><a href="./about.php">About</a></li>
            </ul>
        </div>
    </div>
    <div id="content"> 
	<div id="content-left">
    <p> 
Select an image file to upload<br />
 Max filesize is 3 Megabytes per image file.<br />    
</p>
<form action="upload.php" method="post" id="upload_form" enctype="multipart/form-data">
		<input type="file" id="file" name="file"  />
<br /><br />
		<input type="file" id="file" name="file"/>
<br /><br />
		<input type="file" id="file" name="file" />
<br /><br />

Image type: NSFW(Adult)	<input type="radio" name="type" value="adult"> Family Safe <input type="radio" name="type" value="regular"><br /><br />
<input name="tos" checked="checked" type="checkbox"> I have read and agreed to the <a href="./terms"> Terms of Service</a>
<input type="submit" id="file" name="Start uploading now" />
</form>
<?php
		
?>
    </div>
    <div id="content-right">
<div id="contenta">
<div id="content-lefta">
upload via url<br><br>
<form action="url_upload.php" method="post">
<textarea name="url" cols="50" rows="10">
Enter url
</textarea>
<br />
<input type="submit" />
</form>


    </div>  
	</div> 
</div>
</div>
</div>
</body>
</html>

