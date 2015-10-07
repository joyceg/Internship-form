<!--<html>
<head> </head>
<script>
    alert( "You have successfully logged out." );
    window.location = "../login.html";
</script>

</html>
-->
<html>
<body>
<?php
    session_start();
    header("Location:../login.html");
	session_destroy();
	setcookie(PHPSESSID,session_id(),time()-1);


?>
</body>
</html>
