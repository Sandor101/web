<?php
session_start();

//error_reporting(E_ALL);
//ini_set('display_errors', '1');

	include("connection.php");
	include("functions.php");
	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$user_name = $_POST['username'];
		$password = $_POST['password'];
		
		if (!empty($user_name) &&
			!empty($password) && 
			!is_numeric($user_name))
		{
			
			
			$query = "select * from user where username = '$user_name' limit 1";
			$result = mysqli_query($con,$query);
			
			if($result && mysqli_num_rows($result)>0)
			{
				$user_data = mysqli_fetch_assoc($result);
				
				if (password_verify($password,$user_data['password']))
				{
					$_SESSION['user_ID'] = $user_data['user_ID'];
					header("Location: rendeles.php");
				}
			}
			echo "Hibás felhasználó vagy jelszó 01";
		}else
		{
			echo "Hibás adatok!";
		}
			
	}
?>
 
 <!DOCTYPE html>
 <html lang="hu">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="bootstrap-4.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="login.css">
     <title>Bejelentkezés</title>
 </head>

 <body>
 <div class="container">
     <h1>Bejelentkezés Vegetar</h1>
 
     <h4><a href="fo.html">Kezdő oldal</a></h4>
                      <!--------log in form------>
 
     <div class="logInForm" id="logIn">
     <form method="POST">
        <!-- To check the user loged In status -->
        <p>
         <?php
            if (!isset($_COOKIE["user_ID"]) OR !isset($_SESSION["user_ID"]) ) {
             echo "<p>Kérem elsőnek regisztráljon.</p>";
            }
         ?>
       </p>
 
       <input id="text" type="text" name="username" placeholder="Felhasználónév"> <br><br>
       <input id="text" type="password" name="password" placeholder="Jelszó"><br><br>
       <label for="checkbox">Emlékezz rám</label>
       <input type="checkbox" name="stayLoggedIn" id="chechbox" value="1"> <br><br>
       <input id="button" type="submit" name="logIn" value="Bejelentkezés">
 
       <!-- User registration form link -->
       <p>Nincs fiókod?<a href="signup.php"> Fiók létrehozása</a></p>
     </form>
     </div>
 </div>
 

 </body>
 </html>