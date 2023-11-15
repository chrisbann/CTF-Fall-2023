<?php
	session_start();
	if ($_SESSION['login'] == null)
	{
		header("Location: admin.php");
		exit;
	}
	if (!isset($_COOKIE['admin'])) {
	   setcookie('admin', 'false');
	   $_COOKIE['admin'] = 'false';
	   echo '
<html>
<head><title>404 Not Found</title></head>
<body bgcolor="white">
<center><h1>404 Not Found</h1></center>
<hr><center>nginx/1.14.12</center>
</body>
</html>
<!-- Hmmm, the plot thickens... key{d0f6f90d389b1130f77464cd8eab1f63ab46d74321c755e2cf1a97f978c37457}-->';
     }
     elseif (isset($_COOKIE['admin']) && strcmp($_COOKIE['admin'], 'true') == 0) {
     	    echo "<!DOCTYPE html><html><head><title>Main</title></head><body><p>Congratulations! Here you go: key{4a78620e2f0dad0410d704dd3499865cce992fb4e294449e35fe6bd2807333f6}</p></body></html>";
     }
     else {
                echo '
<html>
<head><title>404 Not Found</title></head>
<body bgcolor="white">
<center><h1>404 Not Found</h1></center>
<hr><center>nginx/1.14.12</center>
</body>
</html>
<!-- Hmmm, the plot thickens... key{d0f6f90d389b1130f77464cd8eab1f63ab46d74321c755e2cf1a97f978c37457}-->';}
?>
