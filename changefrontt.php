<?php

session_start();
if(!isset($_SESSION["uid"]))
header("location: projfront.php");
?>
<html>
	<head>
    	<style type="text/css">
	    *{
			margin:0px;
		}
		body
		{
			background-image:url(pics/b.jpg);
			background-repeat:no-repeat;
			background-size:cover;
			
				
		}
			#prnt
			{
				height:980;
				width:900;
				margin:auto;
			}
			#parent
			{
				background-image:url(pics/background12.jpg);
				height:100%;
				width:100%;
				box-shadow: 1px 10px 15px 8px #FFF;
				background-repeat:no-repeat;
				background-size:cover;
			}
			#top
			{
				
				width:900px;
				background-image:url(pics/background10.jpg);
				background-repeat:no-repeat;
				background-size:cover;
				    height: 40px;
    font-size: 24px;
    font-family: fantasy;
    color: #FFF;
    text-align: -webkit-center;

			}
			#photo
			{
				height:200px;
				width:900px;
				background-image:url(pics/titleOk.png);
				background-repeat:no-repeat;
				background-size:cover;
			}
			#head
			{
				height:60px;
				width:900px;
				background-image:url(pics/background25.jpg);
				background-repeat:no-repeat;
				background-size:cover;
			}
			#bodyy
			{
				width:900px;
				height:680px;
			}
			#cmbo
			{
				margin-left: 220px;
				margin-top: 20px;
				width: 700px;
				height: 30px;
			
			}
			 #box
			 {
				 float:left;
				
				 border:1px solid black;
				 width:200px;
				 height:580px;
				 overflow-y:scroll;
				 margin-top:0px;
				 display:none;
			 }
			  #ids
			 {
				 list-style:none;
			 }
			 #box>ol>li
			 {
				 background-color:#000;
				 margin-bottom:0px;
				 margin-left:-40px;
				 color:#FFF;
				 border-bottom:2px dotted #FFFFFF;
				 text-align:center;
				 cursor:pointer;
				 line-height:80px;
				 font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
			 }
			 #box>ol>li:hover
			 {
				 background-color:#333;
				 color:#FFF;
			 }
			 #infotbl
			 {
				 float:left;
				 height:540px;
				 width:650px;
				 margin-left:5px;
			 }
			  #popup
			{
				display:none;
				height: 560px;
				width:550px;
				background-image:url(pics/background14.jpg);
				margin-top:40px;
				position:fixed;
				margin-left:520px;
				border-radius:10px;
				box-shadow:20px 20px 20px #666666;
				background-repeat:no-repeat;
				background-size:cover;
			}
			
			#andhera
			{
				height:100%;
				width:100%;
				position:fixed;
				background-color:#666;
				opacity:.8;
				display:none;
			}
			 #popuup
			{
				display:none;
				height: 530px;
				width:500px;
				background-image:url(pics/background20.jpg);
				margin-top:60px;
				position:fixed;
				margin-left:500px;
				border-radius:10px;
				box-shadow:20px 20px 20px #666666;
				background-repeat:no-repeat;
				background-size:cover;
			}
			
			#andheraa
			{
				height:100%;
				width:100%;
				position:fixed;
				background-color:#666;
				opacity:.8;
				display:none;
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
	
		#homebtn
		{
    width: 80px;
    height: 30px;
    float: left;
    color: #FFF;
    text-align: center;
    margin-top: 15px;
    margin-left: 460px;
		}
		#profile
		{
			 width: 80px;
    height: 30px;
    float: left;
    color: #FFF;
    text-align: center;
    margin-top: 15px;
    margin-left: 30px;
		}
		#logout
		{
			 width: 80px;
    height: 30px;
    float: left;
    color: #FFF;
    text-align: center;
    margin-top: 15px;
    margin-left: 30px;
		}
		#favorites
		{
			width: 80px;
    height: 30px;
    float: left;
    color: #FFF;
    text-align: center;
    margin-top: 15px;
    margin-left: 30px;
		}
		#homebtn:hover
		{
		cursor:pointer;
		color:#000;
		}
		#profile:hover
		{
		cursor:pointer;
		color:#000;
		}
		#logout:hover
		{
		cursor:pointer;
		color:#FFF;
		}
		#favorites:hover
		{
		cursor:pointer;
		color:#000;
		}
		
		.form-style-1 {
    margin:10px auto;
    max-width: 400px;
    padding: 20px 12px 10px 20px;
    font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
.form-style-1 li {
    padding: 0;
    display: block;
    list-style: none;
    margin: 10px 0 0 0;
}
.form-style-1 label{
    margin:0 0 3px 0;
    padding:0px;
    display:block;
    font-weight: bold;
}
.form-style-1 input[type=text], 
.form-style-1 input[type=email],
textarea, 
select{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    border:1px solid #BEBEBE;
    padding: 7px;
    margin:0px;
    -webkit-transition: all 0.30s ease-in-out;
    -moz-transition: all 0.30s ease-in-out;
    -ms-transition: all 0.30s ease-in-out;
    -o-transition: all 0.30s ease-in-out;
    outline: none;  
}
.form-style-1 input[type=text]:focus, 
.form-style-1 input[type=email]:focus,
.form-style-1 textarea:focus, 
.form-style-1 select:focus{
    -moz-box-shadow: 0 0 8px #88D5E9;
    -webkit-box-shadow: 0 0 8px #88D5E9;
    box-shadow: 0 0 8px #88D5E9;
    border: 1px solid #88D5E9;
}
.form-style-1 .field-divided{
    width: 100%;
}

.form-style-1 .field-long{
    width: 100%;
}
.form-style-1 .field-select{
    width: 100%;
}
.form-style-1 .field-textarea{
    height: 100px;
}
.form-style-1 input[type=submit]{
    background: #4B99AD;
    padding: 8px 15px 8px 15px;
    border: none;
    color: #fff;
}
.form-style-1 input[type=submit]:hover{
    background: #4691A4;
    box-shadow:none;
    -moz-box-shadow:none;
    -webkit-box-shadow:none;
}

		</style>
        <script type="text/javascript" src="jquery/jquery-1.8.2.min.js"></script>
        <script type="text/javascript">
			var i=0,j=0,k=0,aa;
var s=new Array();
				var a=new Array();
				
function fetch()
{
	
$.ajax({
type:"GET",
dataType:"JSON",
url:"frontproprac.php",
contentType:"application/json;charset=utf-8",
success:function(data)
{//alert(aa);
//alert(JSON.stringify(data));
			for(var l=0;l<data.length;l++)
		{
		var key=(data[l].functions).split(";");
		var flag;
		//alert("key"+key);
		for(var m=0;m<key.length;m++)
		{			if(key[m]==aa)
				{
				var keey=((data[l]).category).split(";");
				//alert(keey);
				for(var p=0;p<keey.length;p++)
				{flag=0;
				for(var r=0;r<s.length;r++)
				if(s[r]==keey)
				flag=1;
				if(flag!=1)
				s[i]=keey;
				//alert(s[i]);
				if(s[i]!=undefined)
					{
					//	alert(s[i].length);
						for( j=0;j<s[i].length;j++)
						{
						//	alert(s[i][j]);alert("om");
							if(s[i]==undefined){}
							else
							{
								//alert("happ");
								
								for(var z=0;z<a.length;z++)
								{
									//alert("om");
									flag=0;
							//	alert(a[z]);
									if(a[z]==s[i][j])
									{flag=1;break;}
								}
									if(flag!=1){
									a[k]=s[i][j];k++;}
							}
						}
					}
				i++;
				}
				}
			
		}
		}
		//alert(a.length);
		$("‪#‎tbl‬").empty().html("");
	            
				for(var n=0;n<a.length;n++)
				{//alert(a[n]);
				    
					$("#ids").append("<li onClick=dofind(id); value='"+a[n]+"' id='"+a[n]+"'>"+a[n]+"</li>");
				}
              }
       });
 }	var incr=0;var valueoffunc;


							function dofind(val)
							{
								$("#tbl").empty();
								//alert(val);
								valueoffunc=val;
								$.ajax({
								type:"GET",
								dataType:"JSON",
								url:"fetchinfocontri.php",
								contentType:"application/json;charset=utf-8",
								success:function(data)
						{		//alert("aa "+aa);
								//alert(JSON.stringify(data));
								
								
							$("#tbl").append("<tr><th>Name<th>Mobile<th>Address<th>City<th>Details<th>Add to Favorites<th>SMS</tr>");
								for(var l=0;l<data.length;l++)
							{
								var key=((data[l]).functions).split(";");
								var flag;
								//alert("key "+key);
								for(var m=0;m<key.length;m++)
								{		//alert("aa "+aa); 
									if(key[m]==aa)
									{
										var keey=((data[l]).category).split(";");
										//alert(keey);
										for(var p=0;p<keey.length;p++)
											{
												if(keey[p]==val)
												{
													
													
														var row=$('<tr>');
														row.append("<td width=90 align=center>"+data[l].cname+"</td>");
														row.append("<td width=90 align=center>"+data[l].mobile+"</td>");
														row.append("<td width=150 align=center>"+data[l].addr+"</td>");
														row.append("<td width=90 align=center>"+data[l].city+"</td>");
	row.append("<td width=100 align=center> <a  class='thumbnail' ><img src='pics/detail_2.jpg' width=40 id='"+data[l].uid+"'  onClick=dodetails(id);></td>");
									
    row.append("<td align=center><a class='thumbnail' ><img src='pics/star.jpg' id='"+data[l].uid+"' width=40 onClick=doaddfav(id);></td>");
	row.append("<td width=100 height=100 align=center><a class='thumbnail' ><img src='pics/sms_4.jpg' id='"+data[l].uid+"' width=60 onClick=sms(id); height=60 ></td>");
														incr++;
														$("#tbl").append(row);
													
												}
											}
									}
			
								}
							}
						}
					});
				}
				
				function doaddfav(id)
				{//alert(valueoffunc);
				//alert(id);
				//alert(aa);
					var url="addfavorites.php?id="+id+"&func="+aa+"&cat="+valueoffunc;
					$.get(url,function(data,status)
					{
						//alert(data);
						if(data==1)
						alert("Added to Favorites");
						else
						alert("Sorry!! Please try again");
					}
					);
				}
				
				var idd;
				function dodetails(id)
				{
					$.ajax({
						type:"GET",dataType:"JSON",url:"fetchonerecord.php?uid="+id,
						contentType:"application/json;charset=utf-8",success: function(data)
						{
							$("#andhera").fadeIn(500);
					$("#popup").fadeIn(500);
							//alert(data[0].uid);
							idd=data[0].uid;
							//alert(data[0].id);
							//$("‪#ppp").css("background-image","url('"+data[0].id+"')");
							$("#ppp").attr("src",data[0].id);
							$("#dtUid").html(data[0].cname);
							$("#mob").html(data[0].mobile);
							$("#addr").html(data[0].addr);
							$("#city").html(data[0].city);
							$("#mail").html(data[0].email);
							$("#firm").html(data[0].firm);
							$("#estb").html(data[0].estb);
							$("#spec").html(data[0].spec);
							$("#prevwork").html(data[0].prevwork);
							$("#pic").html(data[0].count);
							$("#info").html(data[0].otherinfo);
							
							$("#wrongg").click(dohide);
				

						}
					});
				}
				function dohide()
				{
					$("#andhera").fadeOut(500);
					$("#popup").fadeOut(500);

				}

				function count()
				{
					var url="increasecount.php?id="+idd;
							$.get(url,function(data,status)
							{//alert(data);
								$("#pic").html(data);
                                $("#likee").css("display","none");
							});
							
				}
		function doget()
				{
					aa=$("#idss :selected").text();
					//alert("aa"+aa);
					$("#ids").empty();
					fetch();
					$("#box").css('display','block');		
				}
				function fetchselect()
				{
					var url="frontfunctions.php";
					$.get(url,function(data,status)
					{//alert(data);
						
						var ary=data.split(";");
						//alert(ary.length);
						$("‪#‎ids‬s").empty();
						$("#idss").append("<option value=none>functions</option>");
						for(var m=0;m<ary.length-1;m++)
						{ //alert(data);
							$("#idss").append("<option value='"+ary[m]+"' id='"+ary[m]+"'>"+ary[m]+"</option>");
							
						}
						
					} );
				}
				
				function sms(id)
				{
					var iddd=id;
					$("#andheraa").fadeIn(500);
					//$("#popuup").show();
					$("#popuup").fadeIn(400);
					fetchsms(iddd);
					
				$("#wrong").click(dohidee)
				function dohidee()
				{
					$("#andheraa").fadeOut(500);
					$("#popuup").fadeOut(400);

				}
				}
				
				function fetchsms(iddd)
				{
					var url="smsfetchusers.php?id="+iddd;
				$.get(url,function(data,status)
				{
					var ary=data.split(",");
					$("#mobb").val(ary[0]);
					$("#addrr").val(ary[1]);
					$("#cityy").val(ary[2]);
					$("#maill").val(ary[3]);
					
				});
				
				}
				function sendsms(mob,addr,city,mail,msg)
				{
					var url="frontSMS_process.php?mob="+mob+"&addr="+addr+"&city="+city+"&mail="+mail+"&msg="+msg;
			$.get(url,function(data,status)
				{
					alert(data);
					if(data=="sent")
					alert("Sent");
					else
					alert("SMS Failed..");	
				} );
				}
				
		</script>
       <link rel="stylesheet" href="menuu_files/css3menu1/style.css" type="text/css" /><style>._css3m{display:none}</style>
    </head>
    <body onLoad="fetchselect();">
    
<div id="andhera"></div> <div id="andheraa"></div>
<div id="popup" style="box-shadow: 2px -1px 16px 10px rgba(213, 220, 228, 0.52);
" ><div id="wrongg" style="height: 30px;width: 30px; float: right;"><img src="pics/wrong9.jpg" style="height: 30px;
    width: 30px;float: right;"></div>
	<table width="100%" height="100%"  style="box-shadow:10px #000000;padding: 10px 10px 10px 10px;
    font-size: 20px;
    font-style: oblique;
    font-family: monospace;
    color: #50503b; border-collapse:collapse;">
    <tr>
    	<td colspan="2" valign="top" align="center">
        	<img id="ppp" src="uploads/aa_aa_right.png"></td>
		<tr>
        	<td><center><b>NAME</b></center>
            <td><center><b><span id="dtUid" style="height:20;width:50"></span></b></center>
        <tr>
        	<td><center><b>MOBILE</b></center>
            <td><center><b><span id="mob" style="height:20;width:50"></span></b></center>
       <tr>
        	<td><center><b>ADDRESS</b></center>
            <td><center><b><span id="addr" style="height:20;width:50"></span></b></center>
       <tr>
        	<td><center><b>CITY</b></center>
            <td><center><b><span id="city" style="height:20;width:50"></span></b></center>
       <tr>
        	<td><center><b>EMAIL</b></center>
            <td><center><b><span id="mail" style="height:20;width:50"></span></b></center>
       <tr>
        	<td><center><b>FIRM</b></center>
            <td><center><b><span id="firm" style="height:20;width:50"></span></b></center>
       <tr>
        	<td><center><b>ESTABLISHED</b></center>
            <td><center><b><span id="estb" style="height:20;width:50"></span></b></center>
       <tr>
        	<td><center><b>SPECIALISATION</b></center>
            <td><center><b><span id="spec" style="height:20;width:50"></span></b></center>
       <tr>
        	<td><center><b>PREVIOUS WORK</b></center>
            <td><center><b><span id="prevwork" style="height:20;width:50"></span></b></center>
       <tr>
        	<td><center><b>OTHER INFO</b></center>
            <td><center><b><span id="info" style="height:20;width:50"></span></b></center>
       <tr>
       		<td><center><img src="pics/like8.png" id="likee" width="80px" height="40px"  onClick="count();" ></center>
            <td><center><b><span id="pic" style="height:20;width:50"></span></b></center>
       </table>
       </div>
      
<div id="popuup">
<div id="header" style="width:500px;height:50px;background-color:#039;border-radius:10px 10px 10px 10px; font-size: 32px;font-family: fantasy; text-align: center;color: #FFF;">Send SMS<div id="wrong" style="height: 30px;width: 30px; float: right;"><img src="pics/wrong9.jpg" style="height: 30px;
    width: 30px;float: right;"></div></div>
<center>
<form >
<ul class="form-style-1">
        <li>
        <label >Contact </label>
        <input type="text" name="txtmob" class="field-long" id="mobb" readonly />
    </li>
    <li>
        <label>Address </label>
        <input type="text" name="txtaddr" class="field-long" id="addrr" readonly/>
    </li>
    <li>
        <label>City</label>
        <input type="text" name="txtcity" class="field-long" id="cityy" readonly/>
    </li>
    <li>
        <label>Email </label>
        <input type="email" name="txtmail" class="field-long" id="maill" readonly/>
    </li> 
    
    <li>
        <label>Your Message <span class="required">*</span></label>
        <textarea name="txtmsg" id="field5" class="field-long field-textarea" style="resize:none;" autofocus></textarea>
    </li>
    <li>
        <input type="button" value="Send Message" onClick="sendsms(txtmob.value,txtaddr.value,txtcity.value,txtmail.value,txtmsg.value)"/>
    </li>
</ul>
</form>
</center>
    

</div>  
    <div id="prnt" class="prnt">	
    	<div id="parent" class="parent">
        	<div id="top" class="top"><?php

echo "Welcome Dear:" . $_SESSION["uid"];
?>
            </div>
            <div id="photo">
            </div>
            <div id="head">
            	<div id="homebtn" onClick="window.location.href = 'changefrontt.php'">HOME</div>
                <div id="profile" onClick="window.location.href = 'consumerform.php'">PROFILE</div>
                <div id="favorites" onClick="window.location.href = 'changefavvv.php';">FAVORITES</div>
                <div id="logout" onClick="logout();"><a href="sessionexpire.php" style="text-decoration:none;color:#FFF;">LOGOUT</a></div>       
            </div>
            <div id="bodyy" style="border:#000 1px solid;">
            <div id="cmbo">
          <span style="font-size: 20px; font-family: monospace;"><b>  Select Any Function</b> </span>&nbsp;&nbsp;<select  name="cat" id="idss" style="width: 180px;height: 41px;font-size: 18px;border-radius: 5px;" onChange="doget();" >
				</select>
                </div> 
            <div id="box" style="margin-top: 30px;">
				<ol id="ids">
    			</ol>
    		</div>
			<div id="infotbl" style="margin-top: 30px;">
            <table id="tbl" border="2" style="border-collapse:collapse; float:left" >
			</table>

            </div>
            </div>	 
        </div>
    </div>
    </body>
</html>