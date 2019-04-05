<html>
<head>
	<title>getmember info</title>
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
.container{
			width: 40%;
			margin: 0 auto;
		}
		#info{
    border: 1px solid gray;
    border-radius: 3px;
    width: 400px;
    height: 270px;
    box-shadow: 0px 2px 2px 0px  gray;
    margin: 0 auto;
}

#info h1{
    margin-top: 0px;
    font-weight: normal;
    padding: 10px;
    background-color: #242526;
    color: white;
    font-family: sans-serif;
}

#info div{
    clear: both;
    margin-top: 10px;
    padding: 5px;
}


.button {
  border-radius: 4px;
  background-color: #ddd;
  border: none;
  color: black;
  text-align: center;
  font-size: 20px;
  padding: 5px;
  width: 230px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 0px;
  right : 50%;
  float: center;
}
.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
  float: center;
}

.button span:after {
  content: '\00BB';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
</head>

<body>
	<div>
	<button class="btnlog"  onclick="window.location.href='afterlogin.php'">Back to Home</button>
	<button class="logout"  onclick="window.location.href='home.html'">Logout</button>
</div> <br>

	<br><br>
	<?php
	session_start();
		if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)
		{
			
			
			$login=$_SESSION['USER_ID'];
		
		
			$link = mysql_connect('localhost', 'root', ''); 
			$db = mysql_select_db('test1'); 
			
			$q="SELECT name,email,login,password
				FROM user
				WHERE login= '".$login."'";
				
			$r=mysql_query($q);
			$t=mysql_fetch_array($r);
			
			
			echo "<div class='container'>
					<div id='info'>
					<h1>Your Details</h1>
					<center><table  border=1px; style='border-collapse: collapse;background-color:#ddd;width:80%;font-size:20px;'>
					<tr >
					<td style='padding:8px;'><b>Name</b></td>
					<td style='padding:8px;'>".$t['name']."</td>
					</tr>
			
					<tr>
					<td style='padding:8px;'><b>E-mail</b></td>
					<td style='padding:8px;'>".$t['email']."</td>
					</tr>
					
					<tr>
					<td style='padding:8px;'><b>Login ID</b></td>
					<td style='padding:8px;'>". $t['login'] ."</td></tr>
			
					<tr>
					<td style='padding:8px;'><b>Password</b></td>
					<td style='padding:8px;'>".$t['password']."</td>
					
					</tr></table></center></div></div>";

				
		}
	
		else
		{
			echo "Session expired";
			include('loginhome.php');
		}
	?>
	<br><br>
	<div>
	<button left="50%" class="button"onclick="window.location.href='update_member_information.php'"><span>Update my details</span></button></div>
</body>
</html>