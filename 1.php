<?php 
if(isset($_POST['submit'])){
	//D:/xampp/htdocs/echo $_SERVER['DOCUMENT_ROOT'];
	$folderpath=$_POST['folderpath'];
	$albumname=$_POST['albumname'];
	
	
$directory =$folderpath.'/';
$i = 1; 
$handler = opendir($directory);
while ($file = readdir($handler)) {
    if ($file != "." && $file != "..") {
        $newName = $albumname."_".$i . '.mp3';
        rename($directory.$file, $directory.$newName); // here; prepended a $directory
        $i++;
    }
}
closedir($handler);
}
?>

<form method="post">
Folder Path:<input type="text" name="folderpath" placeholder="D:/xampp/htdocs"/>
Album Name:<input type="text" name="albumname" />
<input type="submit" value="Submit" name="submit"/>
</form>