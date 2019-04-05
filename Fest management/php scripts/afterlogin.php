<html>
<head>
	<title>After login</title>
	<style>
	body{
		position: relative;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("bg0.jpg");
   min-height: 100%;
}
.topnav {
  overflow: hidden;
  background-color: transparent;

}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: transparent;
  color: white;
}
#reg{
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
	.btnlog{
    background-color: transparent;
    float: right;
    border: 2px solid white;
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
.btnlog:hover,#reg:hover{
  transform: scale(1.03);
}
.button {
  border-radius: 4px;
  background-color: #ddd;
  border: none;
  color: black;
  text-align: center;
  font-size: 20px;
  padding: 5px;
  width: 130px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  right : 5%;
  top : 500px;
}
.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
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


div.column {
	display: inline-block;
}

.text {
    text-align: center;
    position: absolute;
    top: 45%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    font-size: 52px;

}
 .text .co{
    font: 52px "Lato", sans-serif;
    background-color : gray;
    color: black;
    border-radius: 5px;



}

</style>
</head>
<body>
	<div class="topnav">
  		<a class="active" href="afterlogin.php">Home</a>
  		<a href="get_member_information.php">Profile</a>
      <a href="update_member_information.php">Update</a>
  		<a href="eventregistration.php">Register</a>
  		<a href="status.php">My status</a>
      <a href="winners.php">Winners</a>
  		<a href="home.html" style="float: right">Logout</a>
  		
</div>

	
	
	<div>
		<h1 style="text-align: center;font-size: 60px;color: white">-Welcome to Codefest'19-</h1>
	</div>
	<div>
		<?php
		
			session_start();
			
			if( isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)
			{

			
			
				
        echo '<div class="text">
          <p><b>Talk is Cheap</b><br>
            <span class="co"> Show us the code!!</span></p></div>';

				  echo"<br><br><br>"; echo"<br><br><br>"; echo"<br><br><br>"; echo"<br><br><br>"; 
				
				echo "<center><a href='eventregistration.php' id='reg'>Register for events</a></center><br><br>";
				
				
				
				
				
				
				
				
			}
	
			else
			{
				echo "Session expired";
				include('loginhome.php');
			}
		?>
	</div>
	<br><br><br>
	<button class="button"onclick="window.location.href='feedback_box.php'"><span>Feedback </span></button>
</body>
</html>