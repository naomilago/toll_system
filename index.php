<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Toll System</title>
</head>
<body>

 <?php

	$host = 'localhost';
	$db = 'toll_system';
	$user = 'root';
	$password = '';

	$data_source_name = "mysql:host=$host;dbname=$db;charset=UTF8";

	try {
		
		$php_data_object = new PDO($data_source_name, $user, $password);

		if ($php_data_object) {
			echo "Connected to $db database successfully!";

			$php_data_object->exec("INSERT INTO owner (cpf, name, age, budget) VALUES (123456789, 'Naomi Lago', 19, 3452.2);");
			$php_data_object->exec("INSERT INTO toll (location, price) VALUES ('São Paulo, SP', 7.9)");
			$php_data_object->exec("INSERT INTO vehicle (license_plate, discount, passing_through) VALUES ('SFW-2022', 0, 0);");

			$owner_name = $php_data_object->query('SELECT name FROM owner;');

			// echo $owner_name;
		}
	} catch (PDOException $e) {
		echo $e->getMessage();
	}

 ?>

</body>
</html>