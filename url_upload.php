<?php
if($_POST){
$url = $_POST['url'];
 
//add time to the current filename
$name = basename($url);
list($txt, $ext) = explode(".", $name);
$name = $txt.time();
$name = $name.".".$ext;
//echo $name ; 
$upload = file_put_contents("upload/".$name,file_get_contents($url));
//check success
if($upload) 
echo "Success: <a href='upload/".$name."' target='_blank'>Check Uploaded</a>"."<br>";
else echo "please check your folder permission"."<br>";
//echo $upload."<br>";
//var_dump($upload);
}
?>
