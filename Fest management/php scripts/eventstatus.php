<html>
<head>
	<title>event status</title>
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
.btnlog:hover,.logout:hover,#feed input[type=submit]:hover{
  transform: scale(1.03);
  background-color: #ddd;
  color: black;
}
#fb{
	letter-spacing: 5px;
    
    font: 40px "Lato", sans-serif;
    color: #111;	
}
		.container{
			width: 50%;
			margin: 0 auto;
		}
		#feed{
    border: 1px solid gray;
    border-radius: 3px;
    width: 450px;
    height: 200px;
    box-shadow: 0px 2px 2px 0px  gray;
    margin: 0 auto;
}

#feed h1{
    margin-top: 0px;
    font-weight: normal;
    padding: 10px;
    background-color: #242526;
    color: white;
    font-family: sans-serif;
}

#feed div{
    clear: both;
    margin-top: 10px;
    padding: 5px;
}
#feed .textbox{
    width: 96%;
    padding: 7px;
}



#feed input[type=submit]{
    
    background-color: rgb(76, 77, 79);
   
    float: center;
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

	</style>


</head>

<body>
<div>
	<button class="btnlog"  onclick="window.location.href='afteradminlogin.php'">Back to Home</button>
	<button class="logout"  onclick="window.location.href='home.html'">Logout</button>
</div> <br>
<br><br><br>
	<?php
		
		session_start();
		if( isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)
		{
			
			?>
			
			<div class='container'>
			<center>
			<form action="eventstatusform.php"; method="POST">
				<div id="feed">
					<h1>Event Status</h1>
			<div><input class="textbox" type="text" placeholder="Event name" name="book_name"  required='required'></input></div><br>
			<div><input type="submit" class="btn" value="SUBMIT"></div>
		</div>
			</form>
			</center>
		</div>
			<?php
		}
		else
		{
			echo "Session expired";
			include('afteradminlogin.php');
		}
	?>
</body>
</html>