<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset='charset=utf-8'>
	<title>Sean</title>
</head>
<body>
You are visitor # 
<?php
	include_once 'database.php';
	$conn = new mysqli($db_servername, $db_username, $db_password, $db_name, $db_port);

	if ($conn−>connect_error) 
	{ 
		echo "Error";
		die();
	}
	else
	{
		$conn->query('UPDATE root SET visits = visits + 1');
		if ($result = $conn->query('SELECT * FROM root')) {
			$row = $result->fetch_assoc();
			echo $row['visits'];
		}
	}
?>!!!
</body>
</html>
