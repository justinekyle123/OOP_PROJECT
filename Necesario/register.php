<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
 	<link rel="stylesheet" type="text/css" href="style.css"> 
  </head>
  <body>

  	<div class="container">
  		<div class="form-container shadow">
  			<form method="post">
  				<h1 class="text-center mb-5">Register</h1>
  				<div class="mb-3">
  					<label class="form-label">Email</label>
  					<input type="email" name="email" class="form-control">
  				</div>
  				<div class="mb-3">
  					<label class="form-label">Password</label>
  					<input type="password" name="password" class="form-control">
  				</div>
          <div class="mb-3">
            <label class="form-label">Repeat Password</label>
            <input type="password" name="password" class="form-control">
          </div>
  				<button type="submit" class="btn btn-success mt-3">Register</button>
  				<p class="text-center mt-3">You already have account?<a href="login.php">Login</a></p>
  			</form>
  		</div>
  	</div>




   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>