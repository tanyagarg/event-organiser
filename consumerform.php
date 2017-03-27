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
			.fs
		{
			margin:auto;float:left;margin-left:450px;
			width:200px; height:150px‬; 
			
		}
		.yeserror
			{
				background-image:url(pics/right.png);
				background-size:cover;
				width:40px;
				height:40px;
				background-size:contain;
				background-repeat:no-repeat;
				
			}
			.noerror
			{
				background-image:url(pics/wrong.png);
				background-size:cover;
				width:40px;
				height:40px;
				background-size:contain;
				background-repeat:no-repeat;
								
			}
			.err
			{
				font-weight:bold;
				color:#F00;
			}
			.rr
			{
				font-weight:bold;
				color:#0F0;
			}
        </style>
        
    	<script type="text/javascript" src="jquery/jquery-1.8.2.min.js"></script>
    	<script type="text/javascript">
			var b1=false,b2=false,b3=false,b4=false,b5=false;
			$(document).ready(function()
			
			{
			
				$("#mob").blur(function()
				{
				var mn=$(this).val();
					var r=/^[7-9]{1}[0-9]{9}$/;
					var bool=r.test(mn);
				 	if(bool==false )
					{b1=false;
					$(this).focus();
					$("#errmob").html("Add Valid Contact");
					$("#errmob").removeClass("rr").addClass("err");
					$("#rrmob").addClass("noerror").removeClass("yeserror");
				   }
				   else
					  	{
							b1=true;
							$("#errmob").html("DONE");
							$("#errmob").removeClass("err").addClass("rr");
							$("#rrmob").addClass("yeserror").removeClass("noerror");
						}
				}
				);

			});
			function dosubmit(uid,mob,addr,city,mail,occu)
		{
			if(b1==true && b2==true && b3==true && b4==true && b5==true)
			{
			var url="consumerprocess.php?uid="+uid+"&mob="+mob+"&addr="+addr+"&city="+city+"&mail="+mail+"&occu="+occu;
			$.get(url,function(data,status)
				{
					if(data=="1")
					header("location: changefrontt.php");
					else
					alert("try again");	
				} );
			}
			else
			alert("plz fill the required fields");
		}
			function doupdate(mob,addr,city,mail,occu)
		{
			var url="consumerprocesss.php?mob="+mob+"&addr="+addr+"&city="+city+"&mail="+mail+"&occu="+occu;
			$.get(url,function(data,status)
				{
					
					if(data=="1")
					window.location.href = 'changefrontt.php';
					else
					alert("try again");	
				} );
		}
		
		var u="";
				
			
			function docheckaddr(val)
			
			{
				if((val.length)==0 )
				{
					b3=false;
					$("#ar").focus();
					$("#erraddr").html("MANDATORY");
					$("#erraddr").removeClass("rr").addClass("err");	
					$("#rraddr").addClass("noerror").removeClass("yeserror");	
				}
				else
				{
					b3=true;
					$("#erraddr").html("DONE");
					$("#erraddr").removeClass("err").addClass("rr");
					$("#rraddr").addClass("yeserror").removeClass("noerror");
				}
			}
			function docheckcity(val)
			
			{
				if((val.length)==0)
				{
					b4=false;
					$("#city").focus();
					$("#errcity").html("MANDATORY");
					$("#errcity").removeClass("rr").addClass("err");
					$("#rrcity").addClass("noerror").removeClass("yeserror");		
				}
				else
				{
					b4=true;
					$("#errcity").html("DONE");
					$("#errcity").removeClass("err").addClass("rr");
					$("#rrcity").addClass("yeserror").removeClass("noerror");
				}
			}
			function docheckmail(val)
			
			{
				if((val.length)==0 )
				{
					b5=false;
					$("#mail").focus();
					$("#errmail").html("MANDATORY");
					$("#errmail").removeClass("rr").addClass("err");	
					$("#rrmail").addClass("noerror").removeClass("yeserror");	
				}
				else
				{
					b5=true;
					$("#errmail").html("DONE");
					$("#errmail").removeClass("err").addClass("rr");
					$("#rrmail").addClass("yeserror").removeClass("noerror");
				}
			}
			
				
		function fetch()
	{
		var url="consumerfetch.php?";
			$.get(url,function(data,status)
				{
						
						var ary=data.split(";");
					$("#mob").val(ary[0]);
					$("#ar").val(ary[1]);
					$("#city").val(ary[2]);
					$("#mail").val(ary[3]);
					if(ary[4]=="job")
					{
						$("#rj").prop("checked",true);	
					}
					else
					{
						$("#rb").prop("checked",true);
					}
				} );
	}
	function chk()
	{
		var url="consumeruid.php?";
		$.get(url,function(data,status)
		{
			if(data=="1"){
			fetch();}
			
		});
	}

		</script>
    </head>
    
    <body onLoad="chk();">
    <center>
    <h1 style="    font-family: sans-serif;
    color: #FFF;
    font-size: 36px;">Client Profile</h1>
    <fieldset class="fs" >
    <legend class="personal" style="color:#FFF; 
    font-size: 22px;
    font-family: serif;">PERSONAL</legend>
    <form action="consumerprocess.php" method="post">
  <div id="namm" style="font-size: 24px;
    font-family: serif;
    color: #FFF;">
   <?php

if(isset($_SESSION["uid"]))
{
	echo "<b>Welcome Dear:</b>" . $_SESSION["uid"];
}
?>
</div>
    	<table  style="width:300px;color:#000">
       
        <tr style="height:30px">
        	<td>CONTACT <span id="errmob" style="height:30px; width:90px;padding-left:10px"></span>
        <tr style="height:30px">
            <td><input type="text" name="txtmob" id="mob" autofocus placeholder="Enter Valid Contact" onBlur="docheckmob(this.value);">
             <div id="rrmob" style="height:25px; width:60px;padding-left:5px;float:right"></div>
        </tr>
        <tr style="height:30px">
        	<td>ADDRESS<span id="erraddr" style="height:30px; width:90px;padding-left:10px"></span>
        <tr >
            <td><textarea rows="4" cols="50" name="txtaddr" id="ar" required  placeholder="Enter Address" style="width:180;height:200;resize:none" onBlur="docheckaddr(this.value);"></textarea> 
            <div id="rraddr" style="height:25px; width:60px;padding-left:5px;float:right"></div>
         </tr>
         <tr style="height:30px">
        	<td>CITY <span id="errcity" style="height:30px; width:90px;padding-left:10px"></span>
        <tr style="height:30px">
            <td><input type="text" name="txtcity" id="city" autofocus placeholder="Enter ur City" onBlur="docheckcity(this.value);">
            <div id="rrcity" style="height:25px; width:60px;padding-left:5px;float:right">
         </tr>
         <tr style="height:30px">
        	<td>EMAIL<span id="errmail" style="height:30px; width:90px;padding-left:10px"></span>
         <tr style="height:30px">
            <td><input type="email" name="txtmail" id="mail" required autofocus placeholder="Enter Valid Email-ID" onBlur="docheckmail(this.value);">
         	<div id="rrmail" style="height:25px; width:60px;padding-left:5px;float:right">
         </tr>
         <tr style="height:30px">
         	<td>OCCUPATION<br>
         <tr style="height:30px">
         	<td>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" value="Job" id="rj" name="r">JOB &nbsp;&nbsp;&nbsp;&nbsp;
            	<input type="radio" value="Bussiness" id="rb" name="r">BUSSINESS
                <br><br>
         <tr style="height:30px">
        	<td><center><input type="button" value="UPDATE" name="btnu" id="btnuu" onClick="doupdate(txtmob.value,txtaddr.value,txtcity.value,txtmail.value,r.value);"></center>
         </tr>
        </table>
    </form>
    </fieldset>
    </center>	
    </body>
</html>