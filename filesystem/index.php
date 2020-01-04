<?php

include('resources/php/functions/FileSystem.php');
include('resources/php/functions/userdata.php');

if(!isset($_COOKIE['CD']) || !isset($_COOKIE['CP'])){
	setcookie('CD', userdata::GetDir());
	setcookie('CP', userdata::GetDir());
}

if(isset($_POST['adddir'])){
	$dirname = $_POST['dirname'];
	if(isset($dirname)){
		FileSystem::AddDir($_COOKIE['CD'].'/'.$dirname);
		header('location:index.php');
	}
}

if(isset($_POST['addfile'])){
	$dirname = $_POST['filename'];
	if(isset($dirname)){
		FileSystem::AddDir($_COOKIE['CD'].'/'.$dirname);
		header('location:index.php');
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>File system</title>

</head>
<body onunload="deleteAllCookies()">

	<form method="POST">
		<input type="text" name="dirname" placeholder="Directory name">
		<input type="submit" name="adddir" value="Add directory">
		<input type="text" name="filename" placeholder="Directory name">
		<input type="submit" name="addfile" value="Add file">
	</form>

	<div class="filemanager">

		<ul class="backbutton">
			<li class="backbutt"><a href=<?php if(isset($_COOKIE['CP'])) echo $_COOKIE['CP']; ?> title=<?php if(isset($_COOKIE['CP'])) echo $_COOKIE['CP']; ?> class="button"><span class="name">Back</span></a></li>
		</ul>

		<ul class="data"></ul>

		<div class="nothingfound">
			<div class="nofiles"></div>
			<span>No files here.</span>
		</div>
	</div>

	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="resources/js/filemanager/handler.js"></script>
	<script src="resources/js/filemanager/Utils.js"></script>

</body>
</html>