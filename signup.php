<?php
session_start();

	include("connection.php");
	include("functions.php");
	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$user_name = $_POST['username'];
        $email = $_POST['email'];
		$password = $_POST['password'];
		$pw2 = $_POST['pw2'];
		
		if(preg_match('/[A-Z]/',$password) &&
		   preg_match('/[a-z]/',$password) &&
		   preg_match('/[0-9]/',$password) &&
		   strlen($password) > 8)
		{
		
		if (!empty($user_name) &&
            !empty($email) && 
			!empty($password) && 
			!is_numeric($user_name) &&
			$password === $pw2)
		{
		//	$hash = password_hash($password,PASSWORD_DEFAULT);
			$user_id = rand(1,20);
			$query = "insert into user(user_ID,username,email,password)
					  values('$user_id','$user_name','$email','$password')";
			mysqli_query($con,$query);
			
			header("Location: login.php");
			die;
		}else
		{
			echo "Hibás adatok! (Két jelszó nem egyezik meg pl..)";
		}
		}else
		{
			echo "Jelszónak tartalmaznia kell kis-
			és nagybetűket,
			illetve legalább nyolc hosszúnak kell lennie.
			És szám is legyen benne. :-$";
		}			
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	 <title>Regisztráció</title>
	<style>
		.container {
    justify-content: center;
    text-align: center;
    align-items: center;
    color: black;

}

input {
    padding: 10px;
    border-radius: 20px;
}

body {
    background-image: url(image/kep04.jpg);

}

a {
    font-size: 30px;
}

label {
    font-size: 27px;
    color: red;

}

#button {
    background-color: green;
    border-radius: 20px;
}

p {
    font-size: 23px;
}
	</style>
</head>

<body>
	<div class="container">
		<p>Kérjük, töltse ki ezt az űrlapot fiók létrehozásához.</p>
			<div id="box">
				<form method="post">
				<input id="text" type="text" name="username" placeholder="Felhasználónév"><br><br>
				<input id="text" type="text" name="email" placeholder="Email-cím"><br><br>
				<input id="text" type="password" name="password" placeholder="Jelszó"><br><br>
				<input id="text" type="password" name="pw2" placeholder="Jelszó újra"><br><br>
				<input id="button" type="submit" value="Regisztráció"><br><br>
				<a href="login.php">Bejelentkezés</a>
				</form>
			</div>
	</div>

</body>
</html>