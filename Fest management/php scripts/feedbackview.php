<html>
<head>
	<title>feedback read</title>
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
    height: 400px;
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
	</style>
</head>

<body>
	<div>
	<button class="btnlog"  onclick="window.location.href='afteradminlogin.php'">Back to Home</button>
	<button class="logout"  onclick="window.location.href='home.html'">Logout</button>
</div> <br>

	<br><br>
	<?php
	session_start();
		if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)
		{
			
					
			$link = mysql_connect('localhost', 'root', ''); 
			$db = mysql_select_db('test1'); 
			
			$q="SELECT *
				FROM feedback ";
				
			$r=mysql_query($q);
			$t=mysql_fetch_array($r);
		
			
			
			echo "<div class='container'><div id='event'>
				<h1>Your Status</h1><center><table border=1; cellpadding=10; style='border-collapse: collapse;background-color:#ddd;width:90%'>";
			echo "<th style=' border: 1px solid black;padding: 8px; padding-top: 12px;padding-bottom: 12px;text-align: left;background-color: gray;color: white;'>User ID</th>
			<th style=' border: 1px solid black;padding: 8px; padding-top: 12px;padding-bottom: 12px;text-align: left;background-color: gray;color: white;'>Feedback</th>";
							
				
				$r1=mysql_query($q);
			while ($row = mysql_fetch_array($r1))
			{
				
				echo '<tr style="tr:nth-child(even){background-color: #f2f2f2;}"> 

				<td style=" border: 1px solid black;padding: 8px;">'.$row['userid'].'</td>
				<td style=" border: 1px solid black;padding: 8px;">'.$row['feedback'].'</td>
				</tr>'; 
			}
			echo "</table></center></div></div>";

		}
		

	
		else
		{
			echo "Session expired";
			include('adminlogin.php');
		}
	?>
</body>
</html>