
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</head>
<body>


<?php 
	$strFullname = $_POST['Fname'];
	$strGmail = $_POST['gmail'];
 	$strGen = $_POST['gender'];
 	$strPho = $_POST['phone'];
 	$strPass = $_POST['password'];


 	$fileName = 'textfile.txt';
 	$fp = fopen($fileName, 'a');
 	$savestring = $strFullname .",". $strGmail .",". $strGen .",". $strPho .",". $strPass . "\n";
 	fwrite($fp, $savestring);
 	
	// $fileHandle = fopen($fileName, 'w') or die("Can't open file");

	// $strGmail = "Email\n";
	// fwrite($fileHandle, $$strGmail)

	// $strPass = "pass\n";
	// fwrite($fp, $strName);
	fclose($fp); 
 	?>

<div class="alert alert-success" role="alert">
 		 This is  success alert—check it out in the filetext.txt !
	</div>

</body>
</html>