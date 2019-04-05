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
			
			$login=$_SESSION['USER_ID'];
			$password=$_POST['password'];
			
		if($_POST['submit']=='UPDATE NAME')
			{
				$q="SELECT password
					FROM user
					WHERE login='".$login."'";
					
				$x=mysql_query($q);
				$r=mysql_fetch_array($x);
				
				if($r['password']==$password)
				{
					$name=$_POST['name'];
					
					$q="UPDATE user
						SET name='".$name."'
						WHERE login='".$login."'";
						
				$x=mysql_query($q);
				
				if(!$x)
				{
					echo '<h3 align="center" class="msg">something wrong</h3>';
						include('update_member_information.php');
											
				}
				
				else
				{
					echo '<h3 align="center" class="msg">UPDATED</h3>';
					echo "<button class='btnlog'><a href='update_member_information.php'>BACK</a></button>";												
				}

				}
				else
				{
					
						echo '<h3 align="center" class="msg">Wrong Password</h3>';
						echo "<button class='btnlog'><a href='update_member_information.php'>BACK</a></button>";	
						
						exit();
				}
		}
		
		if($_POST['submit']=='UPDATE EMAIL')
			{
				$q="SELECT password
					FROM user
					WHERE login='".$login."'";
					
				$x=mysql_query($q);
				$r=mysql_fetch_array($x);
				
				if($r['password']==$password)
				{
					$email=$_POST['email'];
					
					$q="UPDATE user
						SET email='".$email."'
						WHERE login='".$login."'";
						
				$x=mysql_query($q);
				
				if(!$x)
				{
					echo '<h3 align="center" class="msg">something wrong</h3>';
					echo "<button class='btnlog'><a href='update_member_information.php'>BACK</a></button>";							
				}
				
				else
				{
					echo '<h3 align="center" class="msg">UPDATED</h3>';
					echo "<button class='btnlog'><a href='update_member_information.php'>BACK</a></button>";												
				}

				}
				else
				{
					echo '<h3 align="center" class="msg">Wrong Password</h3>';
				}
		}
		

		}
			else
		{
			echo "Session expired";
			include('login_member.php');
		}
	?>
</body>