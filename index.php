<?php
header("Content-Type: text/html");
?>

<html><head><title>Server Changelog</title></head><body>
<?php
$files = scandir('./');
$files = array_reverse($files);
print "<h2>Server changelog</h2><hr>";
foreach ($files as $file){
	if (($file == ".") || ($file == "..") || ($file == "index.php")) continue;
	$filecontents = file_get_contents($file);
	$title = substr($file, 4);
	$title = str_replace("-", " ", $title);
	print "<h4>";
	print $title;
	print "</h4><blockquote>";
	print $filecontents;
	print "</blockquote><hr>";
}
?>
</body></html>
