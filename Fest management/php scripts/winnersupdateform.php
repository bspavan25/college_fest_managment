
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
<br><br><br><?php

session_start(); 

if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)
{


if ($_POST['submit'] == 'UPDATE')
{ 
if(!$_POST['wlogin']) 
echo 'Enter all attributes'; 

else
{ 
$validationFlag = true;

$ename = $_POST['ename']; 
$rank= $_POST['rank']; 
$login = $_POST['wlogin']; 
   

if($validationFlag){ 
$link = mysql_connect('localhost', 'root', ''); 

if(!$link){ 
die('Failed to connect to server: ' . mysql_error()); 
} 

$db = mysql_select_db('test1'); 
if(!$db){ 
die("Unable to select database"); 
} 




$q="INSERT INTO winners VALUES('".$login."','".$ename."','".$rank."')";







$results = mysql_query($q); 
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