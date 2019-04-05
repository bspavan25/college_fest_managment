<html>
<head>
	<title>participate</title>
	<style type="text/css">
		body{
		background-image: url(bgt.jpg);		
	}
	.btnlog{
    background-color: transparent;
    float: left;
    color: white;
      border: 2px solid #242526;
    top : 1%;
    right : 55%;
    padding: 5px 20px 5px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
    cursor: pointer;
    border-radius: 20px;
    transition: transform 0.2s;

}
	.logout{
    background-color: transparent;
    float: right;
    border: 2px solid #242526;
    color: white;
    top : 1%;
    right : 55%;
    padding: 5px 20px 5px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
    cursor: pointer;
    border-radius: 20px;
    transition: transform 0.2s;

}
.btnlog:hover,.logout:hover{
  transform: scale(1.03);
  background-color: #ddd;
  color: black;
}
.btnlog a:visited{
	color:white;
}
.btnlog a:hover{
	color:black;
}
.msg{
	font-size: 40px;
	color: white;

}
	</style>
</head>

<body>
	<div>
	<button class="logout"  onclick="window.location.href='home.html'">Logout</button>
</div> <br>
<br><br><br>
<?php

session_start(); 

if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)
{


if ($_POST['submit'] == 'UPDATE')
{ 
if(!$_POST['eventname']) 
echo 'Enter the name of the event as it is the primary key.'; 

else
{ 
$validationFlag = true;

$eventname = $_POST['eventname']; 
$time= $_POST['time']; 
$venue = $_POST['venue']; 
  

if($_POST['time']){ 
$update = " UPDATE events SET time= '".$time."' WHERE ename = '".$eventname."' "; 
} 
if($_POST['venue']){ 
$update = "UPDATE events SET venue= '".$venue."' WHERE ename = '".$eventname."' "; 
} 

if($validationFlag){ 
$link = mysql_connect('localhost', 'root', ''); 

if(!$link){ 
die('Failed to connect to server: ' . mysql_error()); 
} 
//Select database 
$db = mysql_select_db('test1'); 
if(!$db){ 
die("Unable to select database"); 
} 

$results = mysql_query($update); 
if($results == FALSE) 
echo mysql_error() . '<br>'; 
else 
{echo '<h3 align="center" class="msg">Updated Successfully</h3>';
					echo "<button class='btnlog'><a href='afteradminlogin.php'>BACK</a></button>";}
 
} 
} 
} 

}

else{ 
header('location:afteradminlogin.php'); 
exit(); 
} 
?>
</body>
			
</html>	
