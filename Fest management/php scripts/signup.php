
<?php 

if ($_POST['submit'] == "signup"){ 

$name = $_POST['name']; 
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password']; 


if($username && $password && $email && $name)

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

$qry="INSERT INTO USER VALUES ('".$name."','".$email."','".$username."','".$password."') ";  
$result=mysql_query($qry);


$qryy="SELECT count(*)as cnt FROM user WHERE login= '".$username."' AND password ='".$password."' "; 
 
$resultt=mysql_query($qryy); 

$row=mysql_fetch_array($resultt);

$cou=$row['cnt'];
if($cou==1){ 
 echo "<script type=\"text/javascript\">".
        "alert('Registration Successful');".
        "</script>";
include("home.html");
 exit();
}
else{
	
	
	echo "<script type=\"text/javascript\">".
        "alert('username already exists');".
        "</script>";


 include('signupform.php');
 exit();

 

}

}


else{ 
include('signupform.php'); 
echo '<center>Username or Password missing!!</center>'; 
exit(); 
} 
} 
else{ 
echo '<center> none </center>'; 
header("location: signupform.php"); 
exit(); 
} 
?>
