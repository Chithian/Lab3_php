<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" 
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" 
crossorigin="anonymous"></script>
<link rel="stylesheet" href="bootstrap/css/register.css">
    <title style="color: white;">Welcome To NIPTICT </title>
</head>
<body id="rings" style="height: 600px; padding: 25px">
    <div class="container"  class="shadow-lg p-3 mb-5 bg-white rounded" style="width:500px;">
    <h1 class="text-center" style="color: pink;">Your Information </h1>
    <form method="post" action="Logout.php">
    <Label for="Fname" style="color: white;">You Name</Label>
    <h3 style="color: white;">
    	<?php echo $_SESSION['Fname'];?>		
    </h3>
    <Label for="gender" style="color: white;">Gender</Label>
    <h3 style="color: white;">
    	<?php echo $_SESSION['gender'];?>	
    </h3>
    <Label for="email" style="color: white;">Email</Label>
    <h3 style="color: white;">
    	<?php echo $_SESSION['gmail'];?>		
    </h3>
    <Label for ="phone" style="color: white;">Tel</Label>
    <h3 style="color: white;">
    	<?php echo $_SESSION['phone'];?>
    </h3>

    <input type="submit" name="Logout" value="Logout" id="botton" class="btn btn-primary" style="color: white;">
    </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/100/three.min.js"></script>
<script src="https://www.vantajs.com/dist/vanta.rings.min.js"></script>
<script src="three.r92.min.js"></script>
<script src="vanta.rings.min.js"></script>
<script>
VANTA.RINGS({
  el: "#rings"
})
</script>
</body>
</html>