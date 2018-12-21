

<?php
$con=mysqli_connect("localhost","root","","chat");
?>

<body>
<b>Click to edit your profile</b><input type="submit" name="Edit" value="EDIT" action="profile_edit.php">
		<br><br><br><br>	
 <div class="f1">
</div>  
<div class="container">
<br><br><br>
<table>
<tr><td valign=top>  
        <b>Nick Name:</b><br><input type "name" name="name" value="<?php  echo $name; ?>" >
</tr></td>
 <tr><td><b>Address:</b><tr><td><input type="text" name="address" value="<?php mysqli_connect("localhost","root","","chat"); echo $address; ?>"></td></tr>

<tr>
<td><b>Location:<b><br><input type="text" name="location" id="location" value="<?php mysqli_connect("localhost","root","","chat"); echo $location; ?>">
   
</td></tr>
</table> 
  

     
</body>
</html>

