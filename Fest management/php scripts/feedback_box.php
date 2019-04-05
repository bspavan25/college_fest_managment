<html>
<head>
	<title>feedback</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    height: 350px;
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



#feed input[type=submit]{
    padding: 7px;
    width: 120px;
    background-color: rgb(76, 77, 79);
    border: 0px;
    color: white;
}
footer.page-footer {
    background-color: #f5f5f5;
    position: relative;
    padding-top: 0px;
    padding-bottom: 5px;
  }

  .social-links {
    font-size: 36px;
    float : right;

  }
  .social-links a {
    width: 25px;
    height: 25px;
    line-height: 25px !important;
    position: relative;
    margin: 10px;
    text-align: center;
    display: inline-block;
    color: black;

  }

  .social-links a:hover {
    color: red;
  }
	</style>

</head>

<body>
<div>
	<button class="btnlog"  onclick="window.location.href='afterlogin.php'">Back to Home</button>
	<button class="logout"  onclick="window.location.href='home.html'">Logout</button>
</div> <br><br><br><br>
<div class="container">
	
<div class="box">

	<?php
		
		session_start();
		if( isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)
		{
			
			?>
			<div class='container'>
			<center>
			<form action="feedback.php"; method="POST">
				<div id="feed">
					<h1>Feedback</h1>
			<div><textarea placeholder="Your valuable Feedback" name="feedback" cols="50" rows="10"; required='required'></textarea></div><br>
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
			include('loginhome.php');
		}
	?>
	</div>
	</div>
	<br><br><br><br><br><br><br>
	 <footer class="page-footer" background-color="blue">

              <div class="social-links" ><a href="https://www.twitter.com/CodeFest" title="Twitter"
                target="_blank"><i class="fa fa-twitter"></i></a><a href="https://www.instagram.com/CodeFest" title="Instagram"
                target="_blank"><i class="fa fa-instagram"></i></a><a href="https://www.facebook.com/CodeFest" title="Facebook" target="_blank">
                <i class="fa fa-facebook"></i></a></div>
        </footer>
</body>
</html>