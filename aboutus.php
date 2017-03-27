<html>
	<head>
    	<link rel="stylesheet" type="text/css" href="stylesheet.css">
		<style type="text/css">
			#bodyy
			{
				width:1500px;
				height:450px;
			}
			#aboutus
			{
				font-size:24px;
				float:left;

				font-family:"Comic Sans MS", cursive;
				height:450px;
			}
			#abtimg
			{
				width:500px;
				
				height:400px;
				float:left;
				margin-left:50px;
				margin-top:20px;
			}
			
			
        </style>
        <script type="text/javascript" src="jquery/jquery-1.8.2.min.js"></script>
<script type="text/javascript">
function signup()
				{
					$("#andhera").fadeIn(800);
					$("#popup").show(700);
				}
					function andherafade()
				{
					$("#andhera").fadeOut(800);
					$("#popup").hide(700);
				}
				function logg()
				{
					
					$("#andheraa").fadeIn(800);
					$("#popuup").show(700);
				}
				function dofadein()
				{
					$("#andheraa").fadeOut(800);
					$("#popuup").hide(700);
				}
				function adjust_textarea(h) {
    h.style.height = "20px";
    h.style.height = (h.scrollHeight)+"px";
}
function adjust_textarea(h) {
    h.style.height = "20px";
    h.style.height = (h.scrollHeight)+"px";
}
</script>

    </head>
    <body>
    <div id="andhera" onClick="andherafade();"></div>
            <div id="popup">
            <form  name="sign" action="signupprocess.php">
<div id="first">
<label>User ID :</label>
<input id="uid" name="txtuid" placeholder="Full Name" type="text" pattern="[a-zA-Z ]*">
<label>Password :</label>
<input id="pwd" placeholder="Password" type="password" name="txtpwd">
<label>Contact Number :</label>
<input id="mob" placeholder="Contact Number" type="text" name="txtmob">
 <br><br>
 <table>
 <tr><td>
 <label for="bio">Who u are??</label>
    <tr><td><input type="radio" name="client" value="customer" checked> Customer<br>
	<td><input type="radio" name="client" value="contributor"> Contributor<br>
</table>
<br><br>
<input id="submit" type="submit" value="Submit">
</div>
</form>
            </div>
             <div id="andheraa" onClick="dofadein();"></div>
            <div id="popuup">
<form class="form-style-7" name="sign" action="sessionlogin.php">
<ul>
<li>
    <label for="userid">User ID</label>
    <span id="check"></span>
    <input type="text" id="txtuid" name="txtuid">
    <span>Enter your full user id here</span>
</li>
<li>
    <label for="password">Password</label>
   <input type="password" id="pwdd" name="txtpwdd">
    <span>Enter ur Password</span>
</li>
<li>
    <label for="bio">Who u are??</label>
    <input type="radio" name="client" value="customer" checked> Customer<br>
	<input type="radio" name="client" value="contributor"> Contributor<br>
</li>
<li>
     <input type="submit" name="login" value="Login" id="login"  >
</li>
</ul>
</form>
            </div>
    <div id="parent">
        	
            <div id="menu">
    		<div class="immg" style="float:left"><img src="pics/titleOk.png" height="100" width="900"></div>
            <div class="homebtn" onClick="window.location.href = 'projfront.php';">HOME</div>
            <div class="aboutus" onClick="
window.location.href = 'aboutus.php';">ABOUT US</div>
            <div class="signup" id="sign" onClick="signup();">SIGN UP</div>
            <div class="login" id="log" onClick="logg();">LOGIN</div>
            <div class="contactus">CONTACT US</div>
            </div>
            <div id="bodyy">
    <div id="aboutus" style="width:800px">
    	Functional Event Manager specializes in large-scale events for individual and public clients.<br><br>

 We can produce events anywhere in the world. A global network of trusted suppliers enables us to install custom-designed elements onsite in a timely way.<br><br>

Our commitment to innovative design is matched by our responsive client service. We thrive on challenges, and we look forward to working for you.
<br><br>We bring out the profile of best possible designers, architects and so on for u.
</div>
<div id="abtimg"><img src="pics/abtimg.jpg" width="500px" height="400px"></div>
<div id="hr" style="margin-top:10px">
<hr style="height:5px;width:100%;color:#000;background-color:#999;">
</div>
</div>
</div>
<div id="parent1" style="margin-top:20px;height:150px;">
<div id="myimg" style="float:left;height:150px;width:200px;margin-left:80px"><img src="pics/view.jpg"></div>
<div id="myself" style="float:left;height:150px;width:300px;font-size:24px;font-family:'Lucida Console', Monaco, monospace">
<b>DEVELOPED BY:TANYA<br><br>
<b>101411040<br></br>
<b>CAG
</div>
<div id="sirimg" style="float:left;height:150px;width:200px;margin-left:100px"><img src="pics/itsme.jpg" height="140px" style="border-radius:50px 50px 50px 50px"></div>
<div id="sir" style="float:left;height:150px;width:448px;font-size:24px;font-family:'Lucida Console', Monaco, monospace">
<b>UNDER GUIDANCE OF:RAJESH K. BANSAL<br><br>
<b>MCA,SCJP,MCP<br>
<b>FOUNDER AND DIRECTOR
</div>
</div>

    </body>
</html>