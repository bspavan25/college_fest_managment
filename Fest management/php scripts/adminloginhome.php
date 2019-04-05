<html> 
<head> 
<title>ADMIN Login Page</title> 
<style type="text/css">
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
.adminbg {
    position: relative;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("code1.jpg");
   min-height: 100%;
   filter : blur(3px);

  }
  .adminbg-text {
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
    color: white;
    font-weight: bold;
    border: 1px solid #f1f1f1;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 2;
    width: 30%;
    height: 85%;
    padding: 20px;
    text-align: center;
  }
	.container{
			width: 95%;
			margin: 0 auto;
			
		}
		#update{
    border: 1px solid gray;
    border-radius: 3px;
    width: 400px;
    height: 300px;
    box-shadow: 0px 2px 2px 0px  gray;
    margin: 0 auto ;
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
 
    background-color: rgb(76, 77, 79);
    
    float: center;
    border: 2px solid rgb(76, 77, 79);
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
</style>
</head> 
<body> 

<div class="adminbg"></div>

<div class="adminbg-text">
	<div>
	<button class="btnlog"  onclick="window.location.href='home.html'">Home</button>
	<button class="logout"  onclick="window.location.href='loginhome.php'">User</button>
</div> <br>
<br><br><h1>WELCOME ADMIN</h1>

<br><br>
		<div class='container' align="center"><form action='adminlogincheck.php' method='POST'>
			<div id='update'>
			<h1>Login</h1>
			<div> <input class='textbox' type='text' placeholder='Login ID' name='login' ; ></div>
			<div> <input class='textbox' type='password' name='password' placeholder='Password' required='required'></div>

			
			

			
			<div><input type='submit'; name='submit'; value='Login'></div></div></form></div></div>

</body> 
</html>