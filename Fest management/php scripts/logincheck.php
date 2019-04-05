
<?php 
if ($_POST['submit'] == 'Login'){ 

$login = $_POST['login']; 

$password = $_POST['password']; 


if($login && $password)
{ 

$link = mysql_connect('localhost', 'root', ''); 


if(!$link) { 
die('Failed to connect to server: ' . mysql_error()); 
} 


$db = mysql_select_db('test1'); 
if(!$db)
 { 
die("Unable to select database"); 
} 

$qry="SELECT count(*)as cnt FROM user WHERE login= '".$login."' AND password ='".$password."' "; 
 
$result=mysql_query($qry); 

$row=mysql_fetch_array($result);

$cou=$row['cnt'];

if($cou==1){ 

$count = 1; 
} 
else{ 

include('loginhome.php'); 
echo '<center>Incorrect Username or Password !!!<center>'; 
exit(); 

} 

if( $count == 1){ 

session_start(); 
$_SESSION['IS_AUTHENTICATED'] = 1; 
$_SESSION['USER_ID'] = $login; 
header('location:afterlogin.php'); 
} 
else{ 

include('login.php'); 
echo '<center>Incorrect Username or Password !!!<center>'; 
exit(); 
} 
} 
else{ 
include('loginhome.php'); 
echo '<center>Username or Password missing!!</center>'; 
exit(); 
} 
} 
else{ 
header("location: loginhome.php"); 
exit(); 
} 
?>
