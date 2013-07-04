<?php
$subdir = $_POST['type'];
echo "type of file is ".$subdir."<br>";
$b = time (); 
$subdir  = "./upload/".$subdir."/".date("Y",$b)."/"; 
if (!file_exists($subdir))
{
mkdir($subdir,0777,TRUE);
chmod($subdir,0777);
}
echo "subdir ".$subdir."<br>";

$subdir = $subdir.date("m",$b)."/"; 
echo "subdir ".$subdir."<br>";
if (!file_exists($subdir))
{
mkdir($subdir,0777,FALSE);
chmod($subdir,0777);
}
//echo "subdir ".$subdir."<br>";
$subdir = $subdir.date("d",$b)."/"; 
echo "subdir ".$subdir."<br>";
if (!file_exists($subdir))
{
mkdir($subdir,0777,FALSE);
chmod($subdir,0777);
}
$num = 1;
while(true)
{
$subdir = $subdir.$num."/" ;
echo "subdir ".$subdir."<br>";
if (!file_exists($subdir))
{
mkdir($subdir,0777,FALSE);
chmod($subdir,0777);
}

$count = 0;
foreach (glob($subdir."*.*") as $img) {
if(is_file($img))
++$count;
}
echo "number of images in this dir ".$count."<br>";
if($count >99)
{
$num++ ;
continue ;
}
else
break;
}
$extension = end(explode(".", $_FILES["file"]["name"]));
$allowedExts = array("gif", "jpeg", "jpg", "png");
if ((($_FILES['file']['type'] == 'image/gif')
			|| ($_FILES["file"]["type"] == "image/jpeg")
			|| ($_FILES["file"]["type"] == "image/jpg")
			|| ($_FILES["file"]["type"] == "image/pjpeg")
			|| ($_FILES["file"]["type"] == "image/x-png")
			|| ($_FILES["file"]["type"] == "image/png"))
		&& ($_FILES["file"]["size"] < 3000000)
		&& in_array($extension, $allowedExts))
{
	if ($_FILES["file"]["error"] > 0)
	{
		echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
	}
	else
	{
		echo "Upload: " . $_FILES["file"]["name"] . "<br>";
		echo "Type: " . $_FILES["file"]["type"] . "<br>";
		echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
		echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

		if (file_exists($subdir.$_FILES["file"]["name"]))
		{
			echo $_FILES["file"]["name"] . " already exists. ";
		}
		else
		{
			if(move_uploaded_file($_FILES["file"]["tmp_name"],"/var/www/html/ImageHosting/".$subdir.$_FILES["file"]["name"]))
			echo "Stored in: " . $subdir.$_FILES["file"]["name"];
			else
			echo "error saving file <br >";
			//var_dump($_FILES);
			//echo "/var/www/html/ImageHosting/upload/".$subdir."/".$_FILES["file"]["name"];
		}
	}
}
else
{
	echo "Invalid file"."<br>";
}
?>
