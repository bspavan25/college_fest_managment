<html>
<head>
	<title>After Admin login</title>
	<style type="text/css">
		body{
			position: relative;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("code1.jpg");
   min-height: 100%;
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
.bgrp{
	background-color: #ddd;
    float: center;
    border: 2px solid #ddd;
    color: black;
    top : 1%;
    right : 55%;
    padding: 5px 20px 5px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 28px;
    cursor: pointer;
    border-radius: 20px;
    transition: transform 0.2s;
}
	</style>
</head>
<body>
	<div>
	<button class="btnlog"  onclick="window.location.href='home.html'"> Home</button>
	<button class="logout"  onclick="window.location.href='home.html'">Logout</button>
</div> <br><br><br><br>
	
	<div>
		<?php
		
			session_start();
			
			if( isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)
			{
				echo "<center><a href='adminevent.php' class='bgrp'>Update Events</a></center><br><br>";

				echo "<center><a href='winnersupdate.php' class='bgrp'>Update Winners</a></center><br><br>";
				
				echo "<center><a href='eventstatus.php' class='bgrp'>Event Status</a></center><br><br>";

				echo "<center><a href='feedbackview.php' class='bgrp'>View Feedback</a></center><br><br>";
				
				
				
				
				
			}
	
			else
			{
				echo "Session expired";
				include('adminloginhome.php');
			}
		?>
	</div>
</body>
</html>