<?php

include('FileSystem.php');
include('userdata.php');

if(isset($_POST['adddir'])){
	$dirname = $_POST['dirname'];
	if(isset($dirname)){
		FileSystem::AddDir(userdata::GetDir().'/'.$dirname);
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
<body>

	<form method="POST">
		<input type="text" name="dirname" placeholder="Directory name">
		<input type="submit" name="adddir" value="Add directory">
	</form>

	<div class="filemanager">

		<ul class="data"></ul>

		<div class="nothingfound">
			<div class="nofiles"></div>
			<span>No files here.</span>
		</div>
	</div>

	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="handler.js"></script>

</body>
</html>