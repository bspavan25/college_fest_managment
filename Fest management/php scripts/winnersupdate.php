
 
<?php 

session_start(); 

if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
} 
else{ 
header('location:adminloginhome.php'); 
exit(); 
} 
?> 

<html> 
<head>
	<title>Event Update</title>
	<style type="text/css">
		body{
		background-image: url(bgt.jpg);		
	}
			.btnlog{
    background-color: transparent;
    float: left;
    border: 2px solid black;
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
		
.btnlog:hover,.logout:hover,#update input[type=submit]:hover{
  transform: scale(1.03);
  background-color: #ddd;
  color: black;
}
			.container{
			width: 50%;
			margin: 0 auto;
		}
		#update{
    border: 1px solid gray;
    border-radius: 3px;
    width: 450px;
    height: 300px;
    box-shadow: 0px 2px 2px 0px  gray;
    margin: 0 auto;
}

#update h1{
    margin-top: 0px;
    font-weight: normal;
    padding: 10px;
    background-color: #242526;
    color: white;
    font-family: sans-serif;
}

#update div{
    clear: both;
    margin-top: 10px;
    padding: 5px;
}

#update .textbox{
    width: 96%;
    padding: 7px;
}

#update input[type=submit]{
   
    background-color: rgb(76, 77, 79);
    float: center;
    border: 2px solid black;
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
	</style>
</head>
<body> 
		<div>
	<button class="btnlog"  onclick="window.location.href='afteradminlogin.php'">Back to Home</button>
	<button class="logout"  onclick="window.location.href='home.html'">Logout</button>
</div> <br><br><br><br>
<center> 

<div class='container'><form action='winnersupdateform.php' method='POST'>
			<div id='update'>
			<h1>Update Winners</h1>
			<div> <input class='textbox' type='text' name='wlogin' placeholder='Winner Login ID' required='required'></div>

			<div> <input class='textbox' type='text' placeholder='Event name' name='ename'; ></div>
			<div> <input class='textbox' type='text' placeholder='Rank' name='rank'; ></div>

			
			
			<div><input type='submit'; name='submit'; value='UPDATE'></div></div></form></div><br><br>
</form> 
</center> 
</body> 
</html>
