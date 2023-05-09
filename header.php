<?php 
	$menu="Home";
	if (isset($_GET['menu'])){
		$menu = $_GET['menu'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<neta cjarset="UTF-8">
	<title>JNUBlog - <?php echo $menu; ?>
	</title>
</head>
<body style="margin: 0px">
	<table border="0", width="100%" style="border-collapse: collapse;">
	<tr><td colspan="2" style="background-color: green;height: 120px;"><center><h1>Jambi News Update</td></h1></center></tr>