<?php
include("header.php");
?>
<?php
session_start();
$con=mysqli_connect("localhost","root","","chat");	
$b=0;
$id=$_SESSION['id'];
$res= mysqli_query($conn,"UPDATE `chat` SET `status`=$b WHERE id=$id");
							
session_unset();
session_destroy();
header('Location:index.php');
?>