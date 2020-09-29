<html>
<head>
<title>form</title>
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>"method="POST">
    
    
    <input type="textarea" name="password" placeholder="password" >
    <input type="submit"  name="compare"> 
   
   
<?php
$path="Fandamental Python .pdf";
$password="Rushim";
$var1=$_POST['password'];
if($var1==$password){
     echo"your doucument is here";
     echo '<embed src="Fundamentals Python .pdf" type="application/pdf"   height="500px" width="100%"';
}
else
echo "wrong password";

?>
</form>
</body>
</html>