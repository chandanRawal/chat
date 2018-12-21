
<div class="logo"><b>Edit your Profile</b><br><br></div>
			
 <div class="f1">
</div>  

<div class="container">
<b><span>Upload Your Profile Picture</span></b><br><br>
<tr><td><input type="file" name="upload"></td></tr><br><br><br>
<table>
<tr><td valign=top>  
        <b>Nick Name:</b><br><input type "name" name="name" >
</tr></td>
 <tr><td><b>Address:</b><tr><td><input type="text" name="address"></tr></td>

<tr>
<td><b>Location:<b><br><input type="text" name="location" id="location" >
   
</tr></td>
</table> </td></tr>
 <form method="post" action="profile.php" name="editform" id="editform">
        <input type="submit" name="register" id="register" value="update">  
    </form>   
</div> 
     
</body>
</html>

<?php
{     $con=mysqli_connect("localhost","root","","chat");
    if(isset($POST['update']))
	{  $name=$_POST['name'];
	   $address=$_POST['address'];
	   $location=$_POST['location'];
	   $name=$_FILES['upload']['name'];
       $tnam=$_FILES['upload']['tmp_name'];
       $store="upload/".$name;	
       move_uploaded_file($tnam,$store);
	   mysqli_query($con,"insert into info values('','$name','$address','$location')");
      if($req)
	  {   header("location:profile.php");
  
	  } 
else
{	echo "error";
	  }
	}
}
?>