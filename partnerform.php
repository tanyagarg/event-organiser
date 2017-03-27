<html>
	<head>
    	
        <style type="text/css">
		.fs
		{
			margin:auto;float:left;margin-left:100px;
			width:400px; height:150px‬;
			
		}
		.fss
		{
			margin:auto;margin-left:100px;
			float:left;
			width:400px; height:600px‬;
			
		}
		.pers
			{ 
			 color:#999; padding:10px;
			text-align:center;
			font-size:24px;
			}
			.prof
			{ 
			 color:#999; padding:10px;
			text-align:center;
			font-size:24px;
			}
			#popup
			{
				height: 250px;
				width:200px;
				background-color:#333;
				margin-top:250px;
				position:fixed;
				margin-left:500px;
				border-radius:10px;
				box-shadow:20px 20px 20px #666666;
				display:none; 		
			}
			#popuup
			{
				height: 250px;
				width:200px;
				background-color:#333;
				margin-top:250px;
				position:fixed;
				margin-left:500px;
				border-radius:10px;
				box-shadow:20px 20px 20px #666666;
				display:none; 		
			}
			#andhera
			{
				height:100%;
				width:100%;
				position:fixed;
				background-color:#666;
				opacity:.5;
				display:none;
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
		var count=0;
		$(document).ready(function()
			
			{
			
             	var count=0;
				$("#mob").blur(function()
				{
				var mn=$(this).val();
					var r=/^[7-9]{1}[0-9]{9}$/;
					var bool=r.test(mn);
				 	if(bool==false)
					{
					$(this).focus();
					$("#errmob").html("Add Valid Contact");
					$("#errmob").removeClass("rr").addClass("err");
					$("#rrmob").addClass("noerror").removeClass("yeserror");
				   }
				   else
					  	{
							$("#errmob").html("DONE");
							$("#errmob").removeClass("err").addClass("rr");
							$("#rrmob").addClass("yeserror").removeClass("noerror");
						}
				}
				);

				$("#btnadd").click(doadd)
				function doadd()
				{
					$("#andhera").fadeIn(500);
					$("#popup").slideToggle(500);
					$("#nam").blur();
					$("#txtadd").focus();
				}
				$("#btnaddfun").click(doaddfun)
				function doaddfun()
				{
					$("#andhera").fadeIn(500);
					$("#popuup").slideToggle(500);
					$("#nam").blur();
					$("#txtaddfun").focus();
				}
				$("#iadd").click(dohide)
				function dohide()
				{
					$("#andhera").fadeOut(500);
					$("#popup").slideToggle(500);
					//count=0;
					//$("#m").removeAttr("disabled");
				}
			
					$("#addfun").click(dohidee)
				function dohidee()
				{
					$("#andhera").fadeOut(500);
					$("#popuup").slideToggle(500);
					//count=0;
					//$("#m").removeAttr("disabled");
				}
			});
		
		var u="";
			function chk(uid)
			{
				var url="chkuid.php?uid="+uid;
				$.get(url,function(data,status)
				{
					if(data=="1")
					{
						
					$("#btns").prop('disabled',true);
					$("#btnu").prop('disabled',false);
					fetch(uid);
					//fetchcat(uid);
					//fetchfunc(uid);
					}
					else
					{
						
					$("#btnu").prop('disabled',true);
					$("#btns").prop('disabled',false);
					}
					u=data;
				});
			}
			function docheckuid(uid)
			{
				//alert(uid);
				if((uid.length)=="0")
				{
					//$("#uid").focus();
					$("#erruid").html("MANDATORY");
					$("#erruid").removeClass("rr").addClass("err");
					$("#rruid").addClass("noerror").removeClass("yeserror");		
				}
				else
				{
					//alert("yes");
					//var url="chkuid.php?uid="+uid;
				//$.get(url,function(data,status)
				
				var url="partneruid.php?uid="+uid;
				$.get(url,function(data,status)
				{
					//alert("no")
					if(data=="1")
					{
						$("#erruid").html("FOUND");
					$("#erruid").removeClass("err").addClass("rr");
					$("#rruid").removeClass("noerror").addClass("yeserror");
					chk(uid);
					}
				
				else
				{
					
					$("#erruid").html("THANK U");
					$("#btnu").prop('disabled',true);
					$("#btns").prop('disabled',false);
					$("#erruid").removeClass("err").addClass("rr");
					$("#rruid").removeClass("noerror").addClass("yeserror");
					document.getElementById('nam').value = "";
					document.getElementById('mob').value = "";
					document.getElementById('cit').value = "";
					document.getElementById('eml').value = "";
					document.getElementById('ar').value = "";
					document.getElementById('frm').value = "";
					document.getElementById('estb').value = "";
					document.getElementById('spec').value = "";
					document.getElementById('wrk').value = "";
					document.getElementById('info').value = "";
					$("#ppi").prop("src","");
					
				}
				});
				}
			}
				
			
			function docheckname(val)
			
			{
				if((val.length)==0)
				{
					$("#nam").focus();
					$("#errname").html("MANDATORY");
					$("#errname").removeClass("rr").addClass("err");
					$("#rrname").addClass("noerror").removeClass("yeserror");		
				}
				else
				{
					$("#errname").html("DONE");
					$("#errname").removeClass("err").addClass("rr");
					$("#rrname").addClass("yeserror").removeClass("noerror");
				}
			}
			function docheckaddr(val)
			
			{
				if((val.length)==0 )
				{
					$("#ar").focus();
					$("#erraddr").html("MANDATORY");
					$("#erraddr").removeClass("rr").addClass("err");	
					$("#rraddr").addClass("noerror").removeClass("yeserror");	
				}
				else
				{
					$("#erraddr").html("DONE");
					$("#erraddr").removeClass("err").addClass("rr");
					$("#rraddr").addClass("yeserror").removeClass("noerror");
				}
			}
			function docheckcity(val)
			
			{
				if((val.length)==0)
				{
					$("#cit").focus();
					$("#errcity").html("MANDATORY");
					$("#errcity").removeClass("rr").addClass("err");
					$("#rrcity").addClass("noerror").removeClass("yeserror");		
				}
				else
				{
					
					$("#errcity").html("DONE");
					$("#errcity").removeClass("err").addClass("rr");
					$("#rrcity").addClass("yeserror").removeClass("noerror");
				}
			}
			function readurl(input)
			{
				if(input.files && input.files[0])
				{
					var reader=new Filereader();
					reader.onload=function(e)
					{
						$("#ppi").attr("src",e.target.result);
					};
					reader.readAsDataURL(input.files[0]);
				}
			}
			function docheckfirm(val)
			
			{
				if((val.length)==0)
				{
					$("#frm").focus();
					$("#errfirm").html("MANDATORY");
					$("#errfirm").removeClass("rr").addClass("err");
					$("#rrfirm").addClass("noerror").removeClass("yeserror");		
				}
				else
				{
					$("#errfirm").html("DONE");
					$("#errfirm").removeClass("err").addClass("rr");
					$("#rrfirm").addClass("yeserror").removeClass("noerror");
				}
			}
			
			
				function fetch(uid)
				{
					var url="fetchall.php?uid="+uid;
				$.get(url,function(data,status)
				{
					alert(ids.length);
					alert(data);
					var ary=data.split(",");
					$("#nam").val(ary[0]);
					$("#mob").val(ary[1]);
					$("#ar").val(ary[2]);
					$("#cit").val(ary[3]);
					$("#eml").val(ary[4]);
					$("#ppi").prop("src",ary[5]);
					$("#frm").val(ary[6]);
					$("#estb").val(ary[7]);
					$("#spec").val(ary[8]);
					$("#wrk").val(ary[9]);
					$("#info").val(ary[10]);
					$("#hdn").val(ary[5]);
					var gh=ary[11].split(";");
					for(var j=0;j<ids.length;j++)
					{
					for(var i=0;i<gh.length;i++)
					{
						//alert(gh[i]);
						if(gh[i]==ids[j].value)
						{
							//alert("yes");
							alert(ids[j].value);
						var listbox = document.getElementById(ids);
		//for(var count=0; count < listbox.options.length; count++) {
			//listbox.options[j].selected = isSelect;	
						//$('gh[i]').attr("selected",true);
						getSelection()
						alert(gh[i]);
						//$('#ids[value=ids[j].value').prop('selected', 'selected').change();

						}
					}
					}
					//alert(gh[0]);
				});
				}
				var i;
				function fetchAllIds()
				{
					var url="fetchcat.php";
					$.get(url,function(data,status)
					{
						
						var ary=data.split(";");
						//alert(ary.length);
						$("‪#‎ids‬").empty();
						$("#ids").append("<option value=none >select</option>");
						for(i=0;i<ary.length-1;i++)
						{ //alert(data);
							$("#ids").append("<option value='"+ary[i]+"' id='"+ary[i]+"'>"+ary[i]+"</option>");
							
						}
						i=ary.length;
						
					} );
				}
				
				function doadd(val)
		{
			//$("#uid").blur();
			$("#txtadd").focus();
			//alert(val);
			
			var url="taskprocess.php?val="+val;
			
			$.get(url,function(data,status)
				{
					$("#ids").append("<option value="+val+" id="+val+" selected>"+val+"</option>");
					//alert(data);	
				} );
		}
		var j;
				function fetchfunctions()
				{
					var url="frontfunctions.php";
					$.get(url,function(data,status)
					{alert(data);
						
						var ary=data.split(";");
						//alert(ary.length);
						$("‪#‎ids‬s").empty();
						$("#idss").append("<option value=none >functions</option>");
						for(var m=0;m<ary.length-1;m++)
						{ //alert(data);
							$("#idss").append("<option value='"+ary[m]+"' id='"+ary[m]+"'>"+ary[m]+"</option>");
							
						}j=ary.length;
						
					} );
				}
				function doaddfun(val2)
		{
			//$("#uid").blur();
			$("#txtaddfun").focus();
			//alert(val);
			
			var url="functionprocess.php?val="+val2;
			$.get(url,function(data,status)
				{

	                $("#idss").append("<option value="+val2+" id="+val2+" selected>"+val2+"</option>");
					$("#idss").val(val2);
							//alert(data);	
				});
		}
		</script>
        
	</head>
    
    <body onLoad="fetchAllIds(),fetchfunctions();">
		<div id="andhera"></div>
        <div id="popup">
        <center><form action="taskprocess.php" method="post">
        <table  style="margin-top:100px;margin-left:0px; color:#FFF">
        <tr>
        <td width="20px">TASK
        <td width="130px"><input type="text" id="txtadd" style="width:130px" name="tasktxt">
        </tr>
        <tr>
        <td><input type="button" value="add" name="sadd" id="iadd" onClick="doadd(tasktxt.value);">
        </tr>
        </table></form>
        </center>
        </div>
        <div id="andhera"></div>
        <div id="popuup">
        <center><form action="funprocess.php" method="post">
        <table  style="margin-top:100px;margin-left:0px; color:#FFF">
        <tr>
        <td width="20px">Function
        <td width="130px"><input type="text" id="txtaddfun" style="width:130px" name="funtxt">
        </tr>
        <tr>
        <td><input type="button" value="add" name="saddfun" id="addfun" onClick="doaddfun(funtxt.value);">
        </tr>
        </table></form>
        </center>
        </div>
        
    <center>
    <fieldset class="fs">
    <legend class="pers">PERSONAL</legend>
    <form action="partnerprocess.php" enctype="multipart/form-data" method="post">
    	<table  width="350px" >
        
        <tr><td>UID<span id="erruid" style="height:30px; width:90px;padding-left:10px"></span></td>
        	<tr><td><input type="text" name="txtuid" id="uid" required autofocus placeholder="Enter Valid UID" onBlur="docheckuid(this.value);">
            <input type="button" value="search" name="srch" id="srch" onClick="chk(txtuid.value)">
            <div id="rruid" style="height:25px; width:60px;padding-left:5px;float:right"></div>
        </tr>
        <tr >
        <td>CATEGORY
        <tr><td><select size="5" multiple name="cat[]" id="ids" style="width:180px;" required>
        			
				</select>
        	<input type="button"  value="add" id="btnadd" name="btnadd">
        </tr>
        <tr>
        `	<td>FUNCTIONS
        	<tr>
            <td><select size="5" multiple name="fun[]" id="idss" style="width:180px;" required>
        			
				</select>
            	<input type="button"  value="add" id="btnaddfun" name="btnaddfun">
        </tr>
        <tr>
        	<td>NAME <span id="errname" style="height:30px; width:90px;padding-left:10px"></span>
        <tr>
            <td><input type="text" name="txtname" id="nam" required placeholder="Enter NAME" onBlur="docheckname(this.value);">
            <div id="rrname" style="height:25px; width:60px;padding-left:5px;float:right"></div>
            <input type="hidden" name="hid" id="hid" >
        </tr>
        <tr >
        	<td>MOBILE<span id="errmob" style="height:30px; width:90px;padding-left:10px"></span>	
		<tr>       
            <td><input type="text" name="txtmob" id="mob" required placeholder="Enter Valid MOBILE" onBlur="docheckmob(this.value);">
            <div id="rrmob" style="height:25px; width:60px;padding-left:5px;float:right"></div>

        </tr>
        <tr >
        	<td>ADDRESS <span id="erraddr" style="height:30px; width:90px;padding-left:10px"></span>
       	<tr>
            <td><textarea rows="4" cols="50" name="txtaddr" id="ar" style="width:180px;height:100px;resize:none;" required onBlur="docheckaddr(this.value);" ></textarea><div id="rraddr" style="height:25px; width:60px;padding-left:5px;float:right"></div>
        </tr>
        <tr>
        	<td>CITY <span id="errcity" style="height:30px; width:90px;padding-left:10px"></span>
       	<tr>
            <td><input type="text" name="txtcity" id="cit" required onBlur="docheckcity(this.value);">
            <div id="rrcity" style="height:25px; width:60px;padding-left:5px;float:right"></div>
        </tr>
         <tr >
        	<td>EMAIL-ID
         <tr>
            <td><input type="email" name="txteml" id="eml"  placeholder="Enter Valid Email-ID">
        </tr>
        </table>
        </fieldset>
        
        <fieldset class="fss">
        <legend class="prof">PROFESSIONAL</legend>
        
        <table style="padding-left:80px;">
        <tr>
        	<td >FIRM<span id="errfirm" style="height:30px; width:90px;padding-left:10px"></span>
        	<tr><td><input type="text" name="txtfrm" id="frm" required onBlur="docheckfirm(this.value);">
             <div id="rrfirm" style="height:25px; width:60px;padding-left:5px;float:right"></div>
        </tr>
       	
       
        <tr>
        	<td>ESTABILISHED
       <tr> 
       		<td><input type="date" name="txtestb" id="estb"  >
        	
        </tr>
        <tr>
        	<td>SPECIALISATION
        <tr> 
        	<td><input type="text" name="txtspec" id="spec" >
        </tr>
        <tr>
        	<td>PREVIOUS WORK
        <tr>	
        	<td><textarea rows="3" cols="30" name="txtwrk" id="wrk" style="width:180px;height:100px;resize:none"> </textarea>
        </tr>
        <tr>
        	<td>OTHER INFO
        <tr> 
        	<td height="60px"><textarea rows="3" cols="30" name="txtinfo" id="info"  style="width:180px;height:100px;resize:none;">
            				</textarea>
        </tr>
         <tr >
        	<td>ID-PROOF
       	<tr>
            <td><input type="file" name="pp" id="pp" onChange="readurl(this);"/>
            
             <img src="#" id="ppi" width="100" height="100" style="padding-left:10px;padding-top:30px" />

        </tr><br>
          
        </table><br>
        <input type="submit" value="SAVE" name="btn" id="btns">&nbsp;&nbsp;&nbsp;
         <input type="submit" value="UPDATE" name="btn" id="btnu">
        </form>
       </fieldset> 
    </center>
    </body>
</html>