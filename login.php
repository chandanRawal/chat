<?php
include("header.php");
?>
<body >
<center>
<div  style="height:500px; width:1300px; background-image: url('image/bglogin2.png');
				
				border:3px solid black; padding:20px; margin-top:20px;
				margin-left:20px; border-radius:30px;">
<center>
<div style="height:auto; width:700px;  padding-left:120px; padding-top:30px;
			text-align:-webkit-auto; font-size:20px; font-family:times; border ra">
<p style="margin-left:100px;  font-style:bold; font-size:60px;">LOGIN</p>
<FORM METHOD="post" ACTION="">

EMAIL<input type="email" name="email" style="margin-left:100px;" required ><br>
PASSWORD<input type="password" name="password" style="margin-left:56px;" required><br>
<input type="submit" name="submit">
</form>
<p style="font-size:30px;">New to ice cube...? <button style="font-size:30px;">
<a href="signup.php">SIGN-UP NOW</a></button>
</div>
</center>
<br>
</center>

<?php

	if(isset($_POST['submit']))
	{ 
		$mail=$_POST['email'];
		$pass=$_POST['password'];
		
		$sql=mysqli_query($conn,"select * FROM chat WHERE email='".$mail."' and password='".$pass."'");

			if(mysqli_num_rows($sql)>0)
				{				
							$row=mysqli_fetch_assoc($sql);				
						
							$name=$row['name'];
							$id=$row['id'];
							$_SESSION['username']=$name;
						    $_SESSION['id']=$id;	
							$_SESSION['id2']=$id;	
							$b=1;
							$_SESSION['n1']=$row['profileimage'];
							$res= mysqli_query($conn,"UPDATE `chat` SET `status`=$b WHERE id=$id");
							header("Location:chatbox.php");
				}
				else
				{
					echo "invalid username or password";
				}
		}
?><br><br><br>
 <?php
 include("footer.php");
?>