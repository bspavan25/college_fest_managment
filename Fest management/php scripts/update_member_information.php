<head>
	<title>update info</title>
	<style>
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
			width: 50%;
			margin: 0 auto;
		}
		#update{
    border: 1px solid gray;
    border-radius: 3px;
    width: 450px;
    height: 350px;
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
    padding: 7px;
    width: 120px;
    background-color: rgb(76, 77, 79);
    border: 0px;
    color: white;
}
	</style>
</head>

<body>
	<div>
	<button class="btnlog"  onclick="window.location.href='afterlogin.php'">Back to Home</button>
	<button class="logout"  onclick="window.location.href='home.html'">Logout</button>
</div> <br>
<br><br><br>	
	<?php
	session_start();
	
		if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)
		{

			
			echo "<div class='container'><form action='update_member.php' method='POST'>
			<div id='update'>
			<h1>Update your Details</h1>
			<div> <input class='textbox' type='password' name='password' placeholder='Password' required='required'></div>

			<div> <input class='textbox' type='text' placeholder='Update Name' name='name' ; ></div>
			<div> <input class='textbox' type='text' placeholder='Update Email' name='email'; ></div>

			
			<div><input type='submit'; name='submit'; value='UPDATE NAME'></div>
			<div><input type='submit'; name='submit'; value='UPDATE EMAIL'></div></div></form></div>";
			
		}
			
			else
		{
			echo "Session expired";
			include('loginhome.php');
		}
	?>
</body>
</html>
			