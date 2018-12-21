
<?php
date_default_timezone_set("asia/kolkata");
?>
<?php
include("header.php");
$idd=$_SESSION['id'];
$res2=mysqli_query($conn,"select * from chat WHERE id='$idd'");
$row2=mysqli_fetch_assoc($res2);

?>

<?php
		if(isset($_POST['submit']))
{
		$a=$_POST['input'];
		$b=$_SESSION['id'];		
		$date=date('d-m-Y h:m:s');
		mysqli_query($conn,"insert into msg values('','$a','$b','$date')");
		header("Location:chatbox.php");
}
?>

    <body class="body">
		<div class="container-fluid" >
			<div class="row">
				<div class="col-sm-5" >
					<div class="profile" id="profile">
						<center>
						<p style="font-size:40px;">Profile</p>
						</center>
						<img  src="upload/<?php echo $row2['profileimage']; ?>" class="ppimage">
						<label style="margin-left:100px;margin-top:-60px;" for="imgs">
							<img src="./image/picchange.png" style="height:60px;width:60px;cursor:pointer;">
						</label>
						<form action="" method="POST" id="imgform" enctype="multipart/form-data">
						
						<input id="imgs" style="display:none;" type="file" name="myfile" value="choose_file " >
						<?php
						if(!empty($_FILES['myfile']['name'])){
						
						$name=$_FILES['myfile']['name'];
						$tnam=$_FILES['myfile']['tmp_name'];
					    $store="upload/".$name;	
						move_uploaded_file($tnam,$store);
						echo $name;
						if(!empty($name))
						{
						$id= $_SESSION['id'];
						 mysqli_query($conn,"UPDATE `chat` SET `profileimage`='$name' WHERE id='$id'");
						 header('location:chatbox.php');
						}
						}
						?>
						</form>
						<input type="button" id="onlineb1" value="Online"></button>
					</div>
					
<div class="profile" style="display:none" id="online">
            <center>
			<p id="fo1" >Online</p>
			</center>
			<?php
				$res=mysqli_query($conn,"select * from chat");
				if(mysqli_num_rows($res)>0)
				{
				while($row=mysqli_fetch_assoc($res))
				{	
					if($row['status']==1)
					{	
			?>
						
					<P>
					<img src="upload/<?php echo  $row['profileimage']; ?>" style="border-radius:360px; height:50px; width:50px;">
			<?PHP		
					echo $row['name'];
					echo "<br>";
					}						
				}	
				}
				
            ?>	<br>
<input type="button" id="profileb1" value="profile" ></button>
</P>						
</div>
					
				</div>		
							<div class="b2">
							<a href="signout.php" >Sign-Out</a>
							</div>
							
							<div class="welcometoicecube" style="margin-top:-55px;">
							<p >welcome to ICE CUBE</p>
							</div>
				<div class="col-sm-7" id="chatmsgbr" >
			
												<div class="chatmsg" id="box">
						<?php
						$res=mysqli_query($conn,"select * from msg");
						if(mysqli_num_rows($res)>0)
						{
						while($row=mysqli_fetch_assoc($res))
						{	
							$idd=$row['name'];
							$res2=mysqli_query($conn,"select * from chat WHERE id=$idd");
							$row2=mysqli_fetch_assoc($res2);							
						?>
					
						<p class="msgbox1">
						
						<img src="upload/<?php echo $row2['profileimage']; ?>" style="height:60px; width:60px;
									border-radius:360px;">
						<span style="font-size:18px;padding:5px;">
						<?php
						echo $row2['name'].":"."&nbsp;&nbsp;&nbsp;";
						echo $row['input'];	
						?>
						<br>
						<small style="margin-left:4%;">
						<?php
						$c = strtotime($row['time']);
						echo date('h:m:s',$c);?>
						</small>
						</span>
												
						</p>
<?php						
						}	
						}
						?>
						
					</div>
						<div class="inputbox">
								<form action="" method="post">		
								<input type="text" name="input" class="bl" style="height:96%; width:82%; border-radius:10px;">
								<input type="submit" name="submit" value="send" style="width:14%;height:96%;
											border-radius:10px;font-size:22px;">
								</form>
						</div>
					</div>
			

			</div>
		</div>
<div class="container-fluid">
<div class="row">
<div class="col-sm-5">

<div class="col-sm-7">		
</div>
</div>
</div>
</div>


<script>
$('#imgs').on('change', function(){
	
		$('#imgform').submit();

});

</script>

<script>
var box = document.getElementById('box');
box.scrollTop = box.scrollHeight;
</script>

<script>
$(document).ready(function(){
    $("#submit1").click(function(){
        $("#div1").load("demo_test.txt #p1");
    });
});
</script>

<script>
$(document).ready(function(){
    $("#onlineb1").click(function(){
        $("#profile").hide();
		$("#online").show();
    });
	
	$("#profileb1").click(function(){
        $("#online").hide();
		$("#profile").show();
    });
});
</script>
<?php
include("footer.php");
?>
