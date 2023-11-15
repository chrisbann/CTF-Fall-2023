<?php
	session_start();
	if ($_SESSION['login'] == null) {
		header("Location: admin.php");
		exit;
	}
    else {
        session_destroy();
        echo '<!DOCTYPE html>
<html>
<head>
<title>Logout</title>
<link rel="stylesheet" type="text/css" href="yui.2.css" />
<link rel="stylesheet" type="text/css" href="global.6.css" />
</head>
<body>
<h2>You are now logged out.</h2>
<p><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>key{b84f1c52938e5018fdc9e8b322e46d389a0a92c5574de140a6999bfd8115246e}</p>
</body>
</html>';}
?>
