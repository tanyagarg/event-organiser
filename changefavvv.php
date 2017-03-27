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
			background-image:url(pics/b.jpg);
			background-repeat:no-repeat;
				background-size:cover;
		}
			#parent
			{
				height:1200px;
				width:1100px;
				margin:auto;
				background-image:url(pics/background32.jpg);
				background-repeat:no-repeat;
				background-size:cover;
				
    box-shadow: 1px 10px 15px 8px #FFF;
			}
						
			#photo
			{
				height:200px;
				width:1100px;
				background-image:url(pics/titleOk.png);
				background-repeat:no-repeat;
				background-size:cover;
			}
			#head
			{
				height:60px; width:1100px;
				background-image:url(pics/background25.jpg);
				background-repeat:no-repeat;
				background-size:cover;

			}
			#bodyy
			{
				width:1200px;
				height:740px;
				
			}
			.homebtn
			{
				
				width:80px;
				height:30px;
				float:left;
				color:#FFF;
				text-align:center;
				margin-top:15px;
				margin-left:550px;
			}
			 a:hover
			{
			color:#999;
			cursor:pointer;
			}
			.profile
			{
				
				width:80px;
				height:30px;
				float:left;
				color:#FFF;
				text-align:center;
				margin-top:15px;
				margin-left:20px;
			}

			.logout
			{
				
				width:80px;
				height:30px;
				float:left;
				color:#FFF;
				text-align:center;
				margin-top:15px;
				margin-left:20px;
			}
			.favorites
			{
				
				width:100px;
				height:30px;
				float:left;
				color:#FFF;
				text-align:center;
				margin-top:15px;
				margin-left:20px;
			}
			.homebtn:hover
			{
				cursor:pointer;
				color:#999;
			}
			.profile:hover
			{
				cursor:pointer;
				color:#999;
			}
				.logout:hover
			{
				cursor:pointer;
				color:#999;
			}
				.favorites:hover
			{
				cursor:pointer;
				color:#999;
				
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
border-radius:80px 80px 80px 80px;

	}
	@keyframes animatedBackground {
	from { background-position: 0 0; }
	to { background-position: 100% 0; }
}
#animate-area	{ 
	width: 1100px; 
	height: 150px; 
	background-image:url(pics/favorites5.jpg);

	background-size:contain;
	background-repeat:repeat-x;

	animation: animatedBackground 40s linear infinite;
}
		</style>
        <script type="text/javascript" src="jquery/jquery-1.8.2.min.js"></script>
        <script type="text/javascript">
				function full( )
	{
		//alert(src);
//		$("#full").css("display","block");
	//	$("#fullImg").css("background-size","cover");
		//$("#fullImg").css("background-image","url("+src+")");
		//$("#fullImg").fadeIn("slow");
	}
			function viewfav(value)	
				{
					$.ajax({
						type:"GET",dataType:"JSON",url:"changefavprocess.php?value="+value,
						contentType:"application/json;charset=utf-8",success: function(data)
						{//alert(data);
							//alert(JSON.stringify(data));
							$("#tble").empty();
							if(data=="")
							{
								$("#tble").empty();
								$("#fullImg").hide();
							$("#full").hide();
							alert("Sorry!!No Favorites");
							
							//$("#tble").append("<img src='pics/favorites3.jpg' width=100% height=100%>");
							}
						else
							{
							//var row=$('<tr>');
						$("#tble").empty();
						$("#full").css("display","block");
						$("#fullImg").css("background-size","cover");
						//$("#fullImg").css("background-image","url("+src+")");
						$("#fullImg").fadeIn("slow");
						
						$("#tble").append("<tr><th>Contributor<th>Function<th>Category</tr>");
						//$("#tble").empty();
						for(var l=0;l<data.length;l++)
						{
							
							var busness=((data[l]).businessid).split(";");
						
							//alert(busness.length);
							for(var m=0;m<busness.length;m++)
							{var row=$('<tr>');
								//alert(busness[m]);
								row.append("<td>"+busness[m]+"</td>");//alert("plzz");
						//	$("#ids").append("<li  value='"+a[n]+"' id='"+a[n]+"'>"+a[n]+"</li>");	
							//row.append("<td>"+data[l].businessid+"</td>");
							row.append("<td>"+data[l].function+"</td>");
							row.append("<td>"+data[l].categoryfav+"</td>");
							}
							
							$("#tble").append(row);
						}
						}
						}
					});
				}
		</script>
    </head>
    <body>
    	<div id="full" style="width:100%; height:100%; position:fixed; background-color:#666666; opacity:.9; display:none; z-index:9000">
  
  </div>
  
  <div id="fullImg" style="border:4px solid #666666;    height: 400px;width: 500px;;display:none; position:fixed; margin-left:25%; margin-top:5%;background-image:url(pics/background14.jpg); z-index:10000;"><div id="wrongg" style="height: 30px;width: 30px; float: right;"  onClick="$('#fullImg').fadeOut('slow');$('#full').fadeOut('slow');"><img src="pics/wrong9.jpg" style="height: 30px;
    width: 30px;float: right;"></div>
  <table style="margin:auto;margin-top:10px;    font-family: cursive;
    font-size: 30px;text-align:center;" id="tble" border="2"  width="350px" height="350px">
</table>
  </div>
    	<div id="parent">
        	<div id="top" style="height:50px;
				width:1100px;
				background-image:url(pics/background10.jpg);
				background-repeat:no-repeat;
				background-size:cover;
				font-size: 24px;
    font-family: fantasy;
    color: #FFF;
    text-align: -webkit-center;">
                       <?php

echo "Welcome Dear:" . $_SESSION["uid"];
?>
            </div>
            <div id="photo">
            </div>
            <div id="head">
  				 <div class="homebtn" onClick="window.location.href = 'changefrontt.php'">HOME</div>
           
                <div class="profile" onClick="window.location.href = 'consumerform.php'"> PROFILE</div>
            <div class="favorites" onClick="window.location.href = 'changefavvv.php'">FAVORITES</div>
            <div class="logout" id="log" onClick="logout();"><a href="sessionexpire.php" style="text-decoration:none;color:#FFF;">LOGOUT</a></div>
 
            </div>
            <div id="bodyy"><div id="animate-area" style="height:100px;margin-bottom:20px;">
           
            </div>
            <table height="740px" width="100%">
            	<tr>
                	<td> <div class="thumbnail" id="marriage" onClick="viewfav(id);">	 <a href="javascript:full();">
  				<img src="pics/marriagefav3.jpg" value="marriage" height="150" width="200" style="margin-top:0px"></a></div>
                    </td>
                    <td><div class="thumbnail" id="birthdayparty" onClick="viewfav(id);">	 <a href="javascript:full();">	
                    <img src="pics/birthdayfav.jpg" value="birthday" height="150" width="200" style="margin-top:0px"></a></div>
                    </td>
                    <td><div class="thumbnail" id="conference" onClick="viewfav(id);">	 <a href="javascript:full();">	
                    <img src="pics/conferencefav2.png" value="conference" height="150" width="200" style="margin-top:0px">
                    </td>
                   <td><div class="thumbnail" id="collegefest" onClick="viewfav(id);">	 <a href="javascript:full();">	
                  <img src="pics/collegefest1.jpg" height="150" width="200" value="collegefest" style="margin-top:0px"></a><div>
                    </td>
                </tr>
                	<tr>
                	<td><div class="thumbnail" id="deewan" onClick="viewfav(id);">	 <a href="javascript:full();">	
                    <img src="pics/deewanfav.png" height="150" width="200" style="margin-top:0px"></a></div>
                    </td>
                    <td>	<div class="thumbnail" id="kirtan" onClick="viewfav(id);">	 <a href="javascript:full();">
                    <img src="pics/kirtan fav.jpg" height="150" width="200" style="margin-top:0px"></a></div>
                    </td>
                    <td><div class="thumbnail" id="kittyparty" onClick="viewfav(id);">	 <a href="javascript:full();">	
                    <img src="pics/kittyfav.jpg" height="150" width="200" style="margin-top:0px"></a></div>
                    </td>
                    <td><div class="thumbnail" id="ladiessangeet" onClick="viewfav(id);">	 <a href="javascript:full();">	
                    <img src="pics/ladiessangeet.jpg" height="150" width="200" style="margin-top:0px"></a></div>
                    </td>
                </tr>
                <tr>
                 <td><div class="thumbnail" id="newyearparty" onClick="viewfav(id);">	 <a href="javascript:full();">	
                 <img src="pics/newyrfav.jpg" height="150" width="200" style="margin-top:0px"></td></a></div>
                    </td>
                     <td><div class="thumbnail" id="conference" onClick="viewfav(id);">	 <a href="javascript:full();">	
                     <img src="pics/conferencefav.png" height="150" width="200" style="margin-top:0px"></a></div>
                    </td>
                    <td><div class="thumbnail" id="familyfunction" onClick="viewfav(id);">	 <a href="javascript:full();">	
                    <img src="pics/familyfav.jpg" height="150" width="200" style="margin-top:0px"></a></div>
                    </td>
                     <td>	<div class="thumbnail" id="schoolfunction" onClick="viewfav(id);">	 <a href="javascript:full();">
                     <img src="pics/schholfav.jpg" height="150" width="200" style="margin-top:0px"></a></div>
                    </td>
                </tr>
            </table>
            </div>
        </div>
    </body>
</html>