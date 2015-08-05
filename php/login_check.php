<?php
		checkuser();

		function checkuser()
		{
echo "fsdf";
		$check_user= $_POST['username'];
		$check_pass= $_POST['password'];
		$UserName="aecdf3d2299d0b3c7a12226f319f3db3ec3ad96f";
		$Passowrd="cf9d6c20eab4ad4fe808354f10ef65e4d8bb555d";
		$test1=hash_hmac('ripemd160',$check_user, 'secret');
		$test2=hash_hmac('ripemd160',$check_pass,'secret');
if($UserName == $test1)
	{
			if($Passowrd == $test2)

		{
	 header("Location:administrator.php");

		}
		else {
			header("Location:failure.html");
		}
	}
	else {
		header("Location:failure.html");
	}
}

?>
