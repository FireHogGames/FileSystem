<?php

class userdata{

	public static function GetDir(){
		$dir = "root/user".userdata::GetId();
		return $dir;
	}

	public static function GetId(){
		//Put DB query here to get the user id.
		$user_id = 1;
		return $user_id;
	}

	
}

?>