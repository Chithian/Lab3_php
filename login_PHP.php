<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php
session_start();
$_SESSION['error']="";
?>
<?php
if (empty($_POST["gmail"]) || empty($_POST["password"])) {
    $_SESSION['error']="*Please Input Email and Password!";
        header("Location:Login.php");
}else{
    if(isset($_POST["gmail"]) && isset($_POST["password"]))
    {
        $user = $_POST['gmail'];
        $pwd = $_POST['password'];
         $file = fopen('textfile.txt', 'r');
         $good=false;
         while(!feof($file)){
        $line = fgets($file);
        $array = explode(",",$line);
    if($user == trim($array[1]) &&  $pwd == trim($array[4]))
    {
        $_SESSION["gmail"] = trim($array[1]);
         $_SESSION["phone"] = trim($array[3]);
         $_SESSION["Fname"] = trim($array[0]);
         $_SESSION["gender"] = trim($array[2]);
         // $_SESSION["error"] = trim($array[0]).trim($array[1]).trim($array[4]);
            $good=true;
            break;
        }else { 
            // $_SESSION["error"] = trim($array[0]).trim($array[1]).trim($array[4]);;
            $_SESSION['error']= alert("Not Match");
            header("Location:Login.php"); 
        }
    }
    $_SESSION['email']=$good;
    if($good){
        header("Location:Detail.php"); 
    }else{
        
        // $_SESSION['error']="**Credential Not Match!!";
        header("Location:Login.php"); 
   
    }
}else{
        $_SESSION['error']="*Please Input Email and Password!";
        header("Location:Login.php"); 
    }
}
?>
<script type="text/javascript">
    alert("Hello world");
</script>
</body>
</html>
