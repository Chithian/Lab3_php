<?php 
	session_start();
	if (isset($_SESSION['email'])&&$_SESSION['email']) {
		header("Location:Detail.php");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Lab3_bootstrap</title>
	<meta charset="utf-8">
	<meta name="description" content="log_in_form">
	<meta name="author" content="Assignment">
	<meta name="keyword" content="login">
  <meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">



  <link rel="stylesheet" type="text/css" href="lab3.css">

</head>
<body id="your-element-selector" style="background-position: cover; margin-top: 40px;padding: 25px">
  
  <div class="jumbotron"  style="width: 50%;margin-left: 340px;height: 570px">
    <div class="container">
  
  <form action="login_PHP.php" method="post" class="was-validated">
    <div class="form-group">
      <i class="fas fa-user-secret" style="font-size: 20px"></i>
      <label for="uname">Gmail</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter gmail" name="gmail" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <i class="fas fa-key" style="font-size: 20px"></i>
      <label for="pwd">Password</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> Remember me
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </label>
    </div>
    <div>
        <div class="d-flex justify-content-center links">
          Don't have an account?<a href="http://localhost:8888/lab3/register.html">Sign Up</a>
        </div>
        <div class="d-flex justify-content-center">
          <a href="#">Forgot your password?</a>
        </div>
      </div>

    <button type="submit" style="text-align: center;" class="btn btn-primary">Submit</button>

    <?php 
    	if (empty($_SESSION["error"])) {
    		echo " ";
    		# code...
    	}else{
    		echo $_SESSION["error"];
    	}

    ?>

  </form>
</div>
 <!-- Animation JS  -->
  <div id="your-element-selector" style="height: 200px;"></div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/100/three.min.js"></script>
<script src="https://www.vantajs.com/dist/vanta.waves.min.js"></script>
<script src="three.r92.min.js"></script>
<script src="vanta.waves.min.js"></script>
<script>
VANTA.WAVES({
  el: "#your-element-selector"
})
// VANTA.BIRDS('#your-element-selector')
</script>
</body>
</html>