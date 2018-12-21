<?php
include("header.php");
?>

<html>
<head>
<style>
#f1 {
    color: #ff0000;
	font-family:"Comic Sans MS", cursive, sans-serif;
	font-size:32px;
    text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
}
#f2 {
    color: #ff0000;
	font-family:"Comic Sans MS", cursive, sans-serif;
	font-size:32px;
    text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
}
</style>		
	<script src="js/twitter.js"></script> 
	<script>
$(document).ready(function(){
	var i=1;
	if(i==1)
	{
		$("#snow").attr("src", "#");
		i=0;
	}
    $("#snowgirao").click(function(){
        location.reload();
    });
});
</script>
  </head>
<body style="background-color:#e6e6ff">		
			

				<div class="container-fluid" >
				<div class="row" style="padding:15px;">
					<div class="col-sm-12" style="padding:15px; height:560px; width:1300px;
					                              border:3px solid #e6ffff;border-radius:10px;">
					<div style="background-image: url('image/mainpic3.jpg');  
						background-repeat: no-repeat; height:100%; width:100%;">
					
					<div id="d1" style="height:200px; width:400px;">
					<image src="image/ICE CUBE_5.png" style="height:100%; width:100%; ">
					<button id="p1" href="login" style="margin-top:-70%; border-radius:20px;
								margin-left:30%; display:none; font-size:20px;">Start Chatting</button>
					</div>
					<div id="f1" style="padding:8px; width:300px; float:left;
								margin-left:5%; margin-top:3%; ">
					<p>
					
					"Start Chating with our hundreds of					 					
					 emojies designed to make your chat more intresting"
					</p>
					</div>
					<div id="f2" style="padding:20px; width:400px; display: none;
								margin-top:-10%; margin-right:3%; float:right;
								border:radius:20px; border:3px solid white;
								height:300px;border-radius:20px;
								background-color:#e6ffff;">
					
					<button id="b1" style=" font-size:15px;
					background-color:white; float:right; ">X
					</button>
					
					<a href="login.php" id="b2" style=" font-size:100px;
					background-color:black; margin-left:6%;
					border-radius:20px; font-family:times;
					color:white;">LOGIN
					</a>				
					
					<a href="signup.php" id="b3" style=" font-size:25px;
					background-color:white;border-radius:20px;
					margin-top:10%; margin-left:10%;font-family:times;">
					new to ice cube? Sign-up now
					</a>
					</div>
					<button id="snowgirao">Snow Girao</button>
					</div>
					</div>
			</div>
			</div>
<script>
$("#d1").on({
    mouseenter: function(){
        var div = $("#d1");
		var div2 = $("#f1");
		var div3 = $("#p1");
        div.animate({height: '300px', opacity: '8'}, "fast");
      	div2.hide();
		div3.show();
		div3.animate({height: '50px', opacity: '8'}, "fast");
    }, 
    mouseleave: function(){
        var div = $("#d1");
		var div2 = $("#f1");
		var div3 = $("#p1");
        div.animate({height: '200px',width: '400px', opacity: '8'}, "fast");
        div2.show();
		div3.hide();
    }, 
});

$("#p1").on({
    click: function(){
        var div = $("#p1");
		var div2 = $("#f2");
		div2.toggle();
		
      	
    }, 
	
    mouseleave: function(){
        var div = $("#d1");
		var div2 = $("#f1");
		var div3 = $("#p1");
        div.animate({height: '200px',width: '400px', opacity: '8'}, "fast");
        div2.show();
		div3.hide();
    }, 
});


$("#b1").on({
    click: function(){
        var div = $("#b1");
		var div2 = $("#f2");
		div2.toggle();
		
      	
    },
});


/*
$(document).ready(function(){
    $("#d1").click(function(){
        var div = $("#d1");
		var div2 = $("#f1");
        div.animate({height: '400px', opacity: '0.4'}, "slow");
        div.animate({width: '400px', opacity: '0.8'}, "fast");
        div.animate({height: '500px',padding: '50px',
						width: '1200px', opacity: '8'}, "slow");
		div2.hide();
    });
}); */
</script>
<?php
include("footer.php");
?>