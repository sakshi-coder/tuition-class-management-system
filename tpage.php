
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {font-family: "Lato", sans-serif;

text-align: justify; /* For Edge */
  -moz-text-align-last: center; /* For Firefox prior 58.0 */
  }

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}

.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial, Helvetica, sans-serif;
}



.navbar a {
  float:right;
  font-size: 20px;
  color: white;
  text-align: center;
  padding: 24px 16px;
  text-decoration: none;
}

.dropdown {
  float: right;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 20px;  
  border: none;
  outline: none;
  color: white;
  padding: 24px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: center;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.header {
z-index: 2;  padding: 20px;
  text-align: center;
  font-size: 35px;
}


.id1{
  position: absolute;
  left:20px;
  top: 95px;
  align:center;
  z-index: 2;

}

.foot{
font-family:"Comic Sans MS", cursive, sans-serif;
padding: 40px;
background-color:black;
font-size:20px;
color:white;
text-align:center;
}


/* Set a style for all buttons */
button {
	font-size:20px;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}
.query{
font-size:25px;}

.grid-container {
  display: grid;
  grid-template-columns: auto auto auto auto;
  background-color:LightCyan;
    padding: 10px;
}

.grid-container > div {
  background-color:white;
  border: 1px solid rgba(0, 0, 0, 0.8);
  padding: 20px;
  font-size: 30px;
  text-align: center;
}

.item1{
   grid-column: 1/ span 4;
  }
  
.item2 {  
padding :0px;
grid-column: 2/ span 1;
}

button {
font-size:20px;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

input[type=text],input[type=textarea] {
  width: 80%;
  
  padding: 0px 0px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  
  font-size:28px;
}
</style>
<script>
function myFunction() {
  alert("you want to send notice ");
}
function lo() {
  alert(" you want to Logout");
}
</script>
</head>
<body>
<form method="get" action="http://192.168.100.252/ty10/project/noti.php">
<div class="navbar">
 <li style="float:left"><a>@Excel Classes</a></li>
 <a href="http://192.168.100.252/ty10/project/contactus.html">Contact Us</a>
  <a href="http://192.168.100.252/ty10/project/faculty.html">Feedback</a>
  <a href="http://192.168.100.252/ty10/project/aboutus.html">About us</a>
  <a href="http://192.168.100.252/ty10/project/facilities.html">Facilities</a>
  <a href="http://192.168.100.252/ty10/project/feedback.html">Faculty</a>
  <div class="dropdown">
    <button class="dropbtn">Classes
    </button>
    <div class="dropdown-content">
      <a href="http://192.168.100.252/ty10/project/classes.html">8th grade</a>
      <a href="http://192.168.100.252/ty10/project/classes.html">9th grade</a>
      <a href="http://192.168.100.252/ty10/project/classes.html"> 10th grade</a>
    </div>
  </div>   
  
  <a href="http://192.168.100.252/ty10/project/main1.html">Home</a>
</div>

</body>

<div class="header">
  <h1>Excel Classes</h1>
 <img class="id1" src="http://192.168.100.252/ty10/project/logo.png"width="200" height="150">

</div>
<hr color="teal">
<div class="grid-container" style="grid-gap:50px;" >

  <div class="item2" style="background-color: ; padding:50px;">
<h5 style="color:brown; font-size:30px;  font-family:Comic Sans MS, cursive, sans-serif;">
<b><i><u>WELCOME BACK!!!</b></i></u>

<?php
//setcookie("e",$e);
echo "NAME: ".$_COOKIE["e"];

?>
</h5>

  <img src="http://192.168.100.252/ty10/project/icon4.jpg" height="200px"><br>
   
	<button type="submit" align=center style="font-size:28px; background-color:black;"> 
	<a style="color:white"href="http://192.168.100.252/ty10/project/ts.php"> Veiw Schedule  </a>
  </button>
  <br>
  
	<button type="submit" align=center style="font-size:28px; background-color:black;"> 
	<a style="color:white"href="http://192.168.100.252/ty10/project/t.html"> Update Profile
  </a>
  </button>
  <br>
  
	
	<button type="submit" align=center style="font-size:28px; background-color:black;"> 
	<a style="color:white"href="http://192.168.100.252/ty10/project/sp.php">Student Profile 
  </a>
  </button>
  
  <br> 

	<button type="submit" align=center style="font-size:28px; background-color:black;"> 
	<a style="color:white"href="http://192.168.100.252/ty10/project/tts.html">enter test series 
  </a>
  </button>
    
	<button type="submit" align=center style="font-size:28px; background-color:black;"> 
	<a style="color:white"href="http://192.168.100.252/ty10/project/logout.php"onclick="lo()"> Logout
  </a>
  </button>
  <br>
  </div>


<div class="item3"style="background-color:PaleTurquoise;padding:60px;">
<table border=0 >NOTIFICATION :
<tr><td>TITLE:</td><td><INPUT TYPE=TEXT NAME="t1" required></td><BR></tr>
<tr><td>TEACHER NAME:</td><td><INPUT TYPE=TEXT NAME ="t2" required></td></tr><BR>
<tr><td>FOR BATCH:</td><td><INPUT TYPE=TEXT NAME="t3" required></td></tr><BR>
<tr><td>FOR CLASS:</td><td><INPUT TYPE=TEXT NAME="t4" required></td></tr><BR>
<tr><td>FOR BOARD:</td><td><INPUT TYPE=TEXT NAME="t5" required></td></tr><BR>
<tr><td>CONTENT:</td><td><TEXTAREA ROWS=10 COLS=50  name ="t6" required></TEXTAREA><BR></td></tr></table>
<button TYPE=SUBMIT style="width:50%;"onclick="myFunction()">submit</button>
</div>
  
</div>

<footer class="foot">
<div class="query">
	contact us:9808576098<br>
	email:xzb@gmail.com<br>
	
<p style="font-size:25px;">	Excel Classes gives you the education you want and the attention you need.</p>
<br> 
</div><br><br>
	<div style="float:right;">power by @xxyyzz</div>
	</footer>
	</form>
	</body>
	</html>
