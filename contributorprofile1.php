<?php
session_start();
if(!isset($_SESSION["uid"]))
header("location: projfront.php");
?>
<html>
	<head>
    <style type="text/css">
			body
			{
				background-image:url(pics/bb.jpg);
				background-repeat:no-repeat;
				background-size:cover;
			}
			#parent
			{
				height:600px;
				width:900px;
				background-image:url(pics/background12.jpg);
				background-repeat:no-repeat;
				background-size:cover;
				margin:auto;
			}
			#top
			{
				height:40px;
				width:900px;
				background-image:url(pics/background10.jpg);
				background-repeat:no-repeat;
				background-size:cover;
			}
			#title
			{
				height:200px;
				width:900px;
				background-image:url(pics/titleOk.png);
				background-repeat:no-repeat;
				background-size:cover;
			}
			 a:hover
			{
			color:#999;
			cursor:pointer;
			}
			#menu
			{
				height:60px;
					width:900px;
					background-image:url(pics/gray2.jpg);
					background-size:cover;
					background-repeat:no-repeat;
			}
			#bodyy
			{
				height:400px;
				width:900px;
				background-image:url(pics/background14.jpg);
				background-repeat:no-repeat;
				background-size:cover;
				 background: linear-gradient(gray, black); 
			}
			 .thumbnail{overflow:hidden;}
  .thumbnail img:hover
  {
	  -webkit-transition: all 1s ease;
-moz-transition: all 1s ease;
-o-transition: all 1s ease;
-ms-transition: all 1s ease;
transition: all 1s ease;

-webkit-transform: scale(1.1); 
-moz-transform: scale(1.1);
 -o-transform: scale(1.1);
//border:1px #0000CC double;
//border-radius:10px;
//width:100%;

}
.thumbnail img{
-moz-transition: all 1s ease;
-o-transition: all 1s ease;
-ms-transition: all 1s ease;
transition: all 1s ease;

	}
	#popup
			{
				display:none;
				height: 160px;
				width:520px;
				background-image:url(pics/background14.jpg);
				margin-top:100px;
				position:fixed;
				margin-left:500px;
				border-radius:10px;
				box-shadow:20px 20px 20px #666666;
				padding-top:90px;
				padding-left:50px;
			}
			#andhera
			{
				height:100%;
				width:100%;
				position:fixed;
				background-image:url(pics/background3.jpg);
				opacity:.8;
				display:none;
				background-size:cover;
				background-repeat:no-repeat;
			}
			.homebtn
			{
				
				width:80px;
				height:30px;
				float:left;
				color:#FFF;
				text-align:center;
				margin-top:15px;
				margin-left:480px;
			}
			.logout
			{
				
				width:80px;
				height:20px;
				float:left;
				color:#FFF;
				text-align:center;
				margin-top:15px;
				margin-left:20px;
			}
			.logout:hover
			{
				cursor:pointer;
				color:#999;
			}
			.homebtn:hover
			{
				cursor:pointer;
				color:#000;
			}
			#welcome
			{
				font-size:24px;
				margin-left:20px;
				float:left;
				color:#FFF;
				margin-top:15px;
			}
			
		</style>
	<script type="text/javascript" src="jquery/jquery-1.8.2.min.js"></script>
    <script type="text/javascript">
					
				
				function pplview()
				{//alert("m");
					$.ajax({
					type:"GET",
					dataType:"JSON",
					url:"viewprofile.php",
					contentType:"application/json;charset=utf-8",
					success:function(data)
					{alert(data[0].count);
						$("#andhera").fadeIn(800);
					$("#popup").show(700);	
						$("#count").html(data[0].count);
						$("#andhera").click(andherafade);
					function andherafade()
				{
					$("#andhera").fadeOut(800);
					$("#popup").hide(700);
				}
					}
					});
				}
	</script>        
    </head>
    <body>
    <div id="andhera"></div>
    <div id="popup">
   <div id="pic" style="height: 400px;width: 460px; font-size: 36px; font-family: cursive; color: cornflowerblue;">Your Profile Visitors are:<span id="count" style="height: 400px;width: 460px; font-size: 36px; font-family: cursive; color: cornflowerblue;"></span></div>
   <div id="good"></div>
    </div>
   
    <div id="parent">
        <div id="top">
        </div>
        <div id="title">
        </div>
        <div id="menu">
        <div id="welcome">
         <?php

echo "Welcome Admin:" . $_SESSION["uid"];
?>
</div>
 <div class="homebtn" onClick="window.location.href = 'contributorprofile1.php'">HOME</div>
	 <div class="logout" id="log" onClick="logout();"><a href="sessionexpire.php" style="text-decoration:none;color:#FFF;">LOGOUT</a></div>
	
        </div>
        <div id="bodyy">
        <table>
        <tr>
        <td><div class="thumbnail" id="profile" >	
  				<img src="pics/profilelogo3.jpg" value="profile" height="200" width="200" style="margin-top:100px; margin-left:100px;border-radius:40px 40px 40px 40px" onClick="window.location.href = 'partnerform.php'"></div>
                <td><div class="thumbnail" id="like" onClick="viewprofile(id);">	 
  				<img src="pics/view2.jpg" value="like" height="200" width="200" style="margin-top:100px; margin-left:150px;border-radius:40px 40px 40px 40px" onClick="pplview();"></div>
        </div>
        </div>
    </body>
</html>