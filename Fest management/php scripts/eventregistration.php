<head>
	<title>register</title>
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
		
.btnlog:hover,.logout:hover{
  transform: scale(1.03);
  background-color: #ddd;
  color: black;
}
.container{
			width: 50%;
			margin: 0 auto;
		}
		#event{
    border: 1px solid gray;
    border-radius: 3px;
    width: 550px;
    height: 500px;
    box-shadow: 0px 2px 2px 0px  gray;
    margin: 0 auto;
}

#event h1{
    margin-top: 0px;
    font-weight: normal;
    padding: 10px;
    background-color: #242526;
    color: white;
    font-family: sans-serif;
}

#event div{
    clear: both;
    margin-top: 10px;
    padding: 5px;
}

#event .textbox{
    width: 96%;
    padding: 7px;
}

#event input[type=submit]{
    padding: 7px;
    width: 120px;
    background-color: rgb(76, 77, 79);
    border: 0px;
    color: white;
}
.msg{
	font-size: 40px;
	color: white;

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
				
			$q="SELECT *
				FROM participate
				WHERE userid='".$login."'
				GROUP BY userid HAVING count(*)>=3";
				
			
			
			$x=mysql_query($q);
			$r=mysql_fetch_array($x);
			
			if($r)
			{
				
				echo "<script type=\"text/javascript\">".
        "alert('You cannot register for more than three events!!!');".
        "</script>";

         echo '<h5 align="center" class="msg">Sorry!!!You cannot register for more than three events </h5>';

			}
			
			else{
					$q="SELECT * 
			FROM events 
						";
				
			$r=mysql_query($q);
			
			
			
			echo "<div class='container'><div id='event'>
				<h1>Register</h1><center><table border=1; cellpadding=10; style='border-collapse: collapse;background-color:#ddd;width:90%'>";
			echo "<th style=' border: 1px solid black;padding: 8px; padding-top: 12px;padding-bottom: 12px;text-align: left;background-color: gray;color: white;'>Event name</th>
			<th style=' border: 1px solid black;padding: 8px; padding-top: 12px;padding-bottom: 12px;text-align: left;background-color: gray;color: white;'>Time</th>
			<th style=' border: 1px solid black;padding: 8px; padding-top: 12px;padding-bottom: 12px;text-align: left;background-color: gray;color: white;'>Venue</th>";
				
			while ($row = mysql_fetch_array($r))
			{
				echo '<tr style="tr:nth-child(even){background-color: #f2f2f2;}"> 

				<td style=" border: 1px solid black;padding: 8px;">'.$row['ename'].'</td>
				<td style=" border: 1px solid black;padding: 8px;">'.$row['time'].'</td>
				<td style=" border: 1px solid black;padding: 8px;	">'.$row['venue'].'</td> 
				</tr>'; 
			}
			echo "</table></center></br></br>";

				echo "
				

				<form action='participate.php'; method='POST'>
				
				
				<div><input class='textbox' type='text' name='ename' placeholder='Event name' required='required'></br></div>
				<div><input type='submit' name='submit' value='submit'></div>
				
				</form></div></div> <br><br>";
				
			

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
	