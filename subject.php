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

/*blur bg */
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}
body{
.bg-image {
background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5));
  /* The image used */
  
  /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(8px);
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 110%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 40%;
  padding: 20px;
  text-align: center;
 font-size:20px;
}


.container {
font-size:25px;
  padding: 16px;
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
  width: 50%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}
.query{
font-size:25px;}

input[type=checkbox]{
   zoom: 1.5;
}

</style>
</head>
<body>
<form action=" <?php echo $_SERVER['PHP_SELF'];?>" method="GET">
<div class="navbar">
  <li style="float:left"><a>@Siona Classes</a></li>
 <a href="http://192.168.100.252/ty10/project/contactus.html">Contact us</a>
  <a href="http://192.168.100.252/ty10/project/faculty.html">Feedback</a>
  <a href="http://192.168.100.252/ty10/project/aboutus.html">About us</a>
  <a href="http://192.168.100.252/ty10/project/facilities.html">Facilities</a>
  <a href="http://192.168.100.252/ty10/project/feedback.html">Faculty</a>
  <div class="dropdown">
    <button class="dropbtn">Classes
    </button>
    <div class="dropdown-content">
      <a href="http://192.168.100.252/ty10/project/class.html">8th grade</a>
      <a href="http://192.168.100.252/ty10/project/class.html">9th grade</a>
      <a href="http://192.168.100.252/ty10/project/class.html">10th grade</a>
    </div>
  </div>   
  
  <a href="http://192.168.100.252/ty10/project/main1.html">Home</a>
</div>
<div class="header">
  <h1>Siona Classes</h1>
 <img class="id1" src="http://192.168.100.252/ty10/project/logo.png"width="200" height="150">
<hr color="teal">
</div>

<div class="bg-image" ><img src="http://192.168.100.252/ty10/project/sub.jpg" width="1400" height="800">
<div class="bg-text">

<?php
echo "NAME: ".$_COOKIE["t1"];
?>

<h2>SELECT SUBJECTS:</h2>
<hr>
  <div class="container">
<table border=0 style="font-size:28px; color:white">
<tr><th>SELECT</th><th>Subject NAME</th></tr>
<tr><th></th><th></th></tr>
<tr><td><input type=checkbox name=c[] value=200></td><td>English</td></tr>
<tr><td><input type=checkbox name=c[] value=300></td><td>Hindi</td></tr>
<tr><td><input type=checkbox name=c[] value=200></td><td>marathi</td></tr>
<tr><td><input type=checkbox name=c[] value=250></td><td>science</td></tr>
<tr><td><input type=checkbox name=c[] value=230></td><td>Math</td></tr>
<tr><td><input type=checkbox name=c[] value=200></td><td>History/Grography</td></tr>
</table>
<hr>

<button type=submit name=s value=SUBMIT>SUBMIT</button>
<?php
//session_start();
include "connection.php";
//$s=implode(',', $_GET['c']);
$s=$_GET['c'];
$n=$_COOKIE["t1"];
//$r=pg_query("insert into subject(sbname,sname)values('$s','$n');");
//session_start();
$sum=0;
$s=$_GET['c'];
$i=0;
$p=array();
$q=array();
//if(array_key_exists($s))
//{
foreach($s as $k=>$v)
{
//setcookie("s");
$p[$k]=$v;
}
for($i=0;$i<count($p);$i++)
{
$sum=$sum+((int)$p[$i]);
}
//}
$_SESSION['tot']=$sum;

//echo "NAME: ".$_COOKIE[""];;
echo"<h4>the total fee per month will be Rs:".$sum."</h4>";
?>
<button type=submit><a href ="http://192.168.100.252/ty10/project/s_schedule.html">Click and Continue</a></button>
</div>
</div>

<footer class="foot">
<div class="query">
	contact us:9808576098<br>
	email:xzb@gmail.com<br>
	
<p style="font-size:25px;">	Siona Classes gives you the education you want and the attention you need.</p>
<br> 
</div><br><br>
	<div style="float:right;">power by @xxyyzz</div>
	</footer>
	</form>
</body>
</html>

</body>
</html>
