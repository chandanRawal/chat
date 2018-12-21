<?php
include("header.php");
?>


<body >
<center>
<div  style="height:500px; width:1300px; background-image: url('image/bglogin2.png');
				border:3px solid black; padding:20px; margin-top:20px;
				margin-left:20px; border-radius:30px;">
<center>
<?php
if(isset($_POST['submit']))
{
$a=$_POST['name'];	
$b=$_POST['dob'];	
$c=$_POST['gender'];	
$d=$_POST['email'];	
$e=$_POST['password'];	
$f=0;
$req=mysqli_query($conn,"insert into chat values('','$a','$b','$c','$d','$e','$f','')");
if($req)
{
	header("Location:login.php");
}
else
	echo "Error Please Re-Enter";
}
?>
<center>
<div #id="ds" style="height:auto; width:700px;  padding-left:120px; 
			
			text-align:-webkit-auto; font-size:20px; font-family:times;">
<p style="margin-left:100px;  font-style:bold; font-size:60px;">SIGN-UP</p>
<FORM METHOD="post" ACTION="">

		NAME<input type="name" name="name" style="margin-left:114px; width:250px;" required><br>
		DATE OF BIRTH<input type="date" name="dob" style="margin-left:28px; width:250px;" required><br>
		GENDER<br>
		MALE<input type="radio" name="gender" value="male" style="margin-left:118px; " required><br>
		FEMALE<input type="radio" name="gender" value="Female" style="margin-left:93px; " required><br>
		OTHERS<input type="radio" name="gender" value="others" style="margin-left:95px; " required><br>
		EMAIL<input type="email" name="email" style="margin-left:110px; width:250px;" required><br>
		PASSWORD<input type="password" name="password" style="margin-left:66px; width:250px;" required><br>
		<input type="submit" name="submit"><br>
</form>
<p style="font-size:30px;">Already have ice cube account...? <button style="font-size:30px;" >
<a href="login.php">login</a></button>
</div>
</div>
</center>
<br>
<br><br><br>
</center>
 <?php
 include("footer.php");
?>
