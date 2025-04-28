<?php

include_once("db.php");

session_start();

	if($_SERVER["REQUEST_METHOD"] === "POST"){
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(empty($email)||empty($password)){
			echo "<div class='alert alert-danger'>All FIELDS ARE REQUIRED</div>";
		}

		$stmt = $con->prepare("SELECT * FROM user WHERE email = ?");
		$stmt->bind_param("s",$email);
		$stmt->execute();
		$result = $stmt->get_result();
    $user = $result->fetch_assoc();

		if($result->num_rows > 0 ){
			 if($password == $user['password']){

          $_SESSION['email'] = $user['email'];

				  header("Location: index.php");
			 }else{
          echo "<script>
                    alert('password do not match');
                </script>";
       }
		}else{
			echo "<div class='alert alert-danger'>Email Invalid</div>";
		}
	}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
 	<link rel="stylesheet" href="style.css"> 
  </head>
  <body>

  	<div class="container">
  		<div class="form-container shadow">
  			<form method="post">
  				<h1 class="text-center mb-5">Login</h1>
  				<div class="mb-3">
  					<label class="form-label">Email</label>
  					<input type="email" name="email" class="form-control">
  				</div>
  				<div class="mb-3">
  					<label class="form-label">Password</label>
  					<input type="password" name="password" class="form-control">
  				</div>
  				<button type="submit" class="btn btn-success mt-3">Login</button>
  				<p class="text-center mt-3">You don't have account?<a href="register.php">Register</a></p>
  			</form>
  		</div>
  	</div>




   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>


   