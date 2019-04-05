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
<br><br><br>
	<?php
			session_start();
			if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)
			{
				
			
			$login=$_SESSION['USER_ID'];
		
		
			$link = mysql_connect('localhost', 'root', ''); 
			$db = mysql_select_db('test1'); 
			
			$ename=$_POST['ename'];
			
			$q="SELECT *
				FROM events
				WHERE ename IN (SELECT ename
									FROM events) ";
				
			$x=mysql_query($q);
			$r=mysql_fetch_array($x);
			
			
				
				$q1="SELECT *
				FROM events e,participate p
				WHERE e.ename='".$ename."'
				AND p.userid='".$login."'
				AND e.ename IN (SELECT e2.ename
									FROM events e2
									WHERE e2.time='e.time')";
									
									
			$x1=mysql_query($q1);
			$r1=mysql_fetch_array($x1);
		

			$q2="SELECT time
				FROM events
				WHERE ename='".$ename."' ";
									
									
			$x2=mysql_query($q2);
			$r2=mysql_fetch_array($x2);
			$etime=$r2['time'];	
			
			
			$q3="SELECT e.ename
				FROM events e,participate p
				WHERE e.ename=p.ename
				AND p.userid='".$login."'
				AND e.time='".$etime."'";
									
									
			$x3=mysql_query($q3);
			$r3=mysql_fetch_array($x3);
			
			
			
			
			
			
			
			if(count($r3)>1)
			{
				
				echo "<script type=\"text/javascript\">".
        "alert('Concurrency problem!!!');".
        "</script>";

        echo '<h5 align="center" class="msg">You cannot register for the events running at the same time!!!</h5>';
					echo "<button class='btnlog'><a href='eventregistration.php'>BACK</a></button>";	
				exit();
				
			}
			
		
			
				
			if(!$r)
			{
				echo '<h3 align="center" class="msg">Enter event name properly!!!</h3>';
					echo "<button class='btnlog'><a href='eventregistration.php'>BACK</a></button>";	
			}
			
			else
			{
				
				$q="INSERT INTO participate(userid,ename) VALUES ('".$login."','".$ename."')";
				$x=mysql_query($q);
				
				if(!$x)
				{
					echo '<h3 align="center" class="msg">Something Wrong</h3>';
					echo "<button class='btnlog'><a href='eventregistration.php'>BACK</a></button>";					
				}
				
				else
				{
	
					echo '<h3 align="center" class="msg">Registration Successful</h3>';
					echo "<button class='btnlog'><a href='eventregistration.php'>BACK</a></button>";				
				}
			}}
			
			else
			{
				echo "session expired";
				include('loginhome.php');
				exit();
			}
			
	?>
</body>
			
</html>			
			