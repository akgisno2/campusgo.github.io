<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert(' User Registration Completed')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
		
 body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background-image: url("bg23.jpg");
    opacity:0.9;
  }
  .box{
    height:60%;
    width: 400px;
    padding: 20px;
    position: absolute;
    top: 50%;
    left: 80%;
    transform: translate(-50%,-50%);
    background: #191919;
    text-align: center;
  }
  .p{  position:absolute;
        left:10%;
        top:30%;
        background-color:#DBDADA;
        border-radius:25%;
      
        padding:10px;
        font-family: sans-serif;
        font-size:70px;
        overflow-y:auto;}
  .box h1{
    margin-top:10px ;
    color: white;
    text-transform: uppercase;
    font-weight: 500;
  }
  .box input[type = "text"],.box input[type = "password"],.box input[type = "date"],.box input[type = "email"]{
    border:0;
    background: none;
    display: inline-block;
    margin: 10px auto;
    text-align: center;
    border: 2px solid #3498db;
    padding: 14px 10px;
    width: 125px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
  }
  .box input[type = "text"]:hover,.box input[type = "password"]:hover,.box input[type = "date"]:hover,.box input[type = "email"]:hover{
    width: 175px;
    border-color: #2ecc71;
  }
  .box input[type = "submit"]{
    border:0;
    background: none;
    display: inline-block;
    margin: 20px auto;
    margin-right: 10px;
    text-align: center;
    border: 2px solid #2ecc71;
    padding: 14px 40px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer;
  }
  .box input[type="button"]{
    border:0;
    background: none;
    display: inline-block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #2ecc71;
    padding: 14px 31px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer; 
  }
  .box input[type = "submit"]:hover,.box input[type="button"]:hover{
    background: #2ecc71;
  }
  ul { position:fixed;
      top:0;
      width:100%;
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      font-family: sans-serif;
      background-color: rgb(0, 0, 0);
  }
  #nma{
      width:280px;
  }
  #nma:hover{
      width: 325px;
    border-color: #2ecc71;
  }
   li {
      float: left;
      
  }
  
   li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
  }
  
   li a:hover {
      background-color: #4CAF50;
  }
  
  
  ol {
      position:fixed;
      bottom:0;
      width:100%;
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      font-family: sans-serif;
      background-color: rgb(0, 0, 0);
  
  }
  ol li {
      float: left;
     
  }
  ul li img{
    height:30px;
    width:30px;
    margin: 8px 15px;
    border-radius: 100%;
  }
  ol li img{
    background-color: #474747;
    height:30px;
    width:30px;
    margin: 8px 15px;
    border-radius: 20%;
  }
  
	


	
	</style>
	<title>Register Here</title>
</head>
<body>
<ul>
      <li><a href="welcome.php">Home</a></li>
      
      <li style="float: right;"><img src="logo.png"></li>
    </ul>
    <div class="p"><p>CampusGo</p>
</div>
	
		<form class="box" action="" method="POST" >
            
		<h1>Registration</h1>
				<input type="text" placeholder="Username" id="nma" name="username" value="<?php echo $username; ?>" required>
			
			
				<input type="email" placeholder="Email"  id="nma" name="email" value="<?php echo $email; ?>" required>
			
		
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
         
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
  				<br>
				<input type="submit" name="submit" class="btn" value="Register">
			
			<p  style="color:white">Have an account? <a href="index.php">Login Here</a>.</p>
		</form>
		<ol>
  <li><img src="facebook.png" style="margin-left:600px" onclick="window.location.href='https://facebook.com/'"></li>
  <li><img src="mail.png" onclick="window.location.href='https://gmail.com/'"></li>
  <li><img src="twitter.png" onclick="window.location.href='https://twitter.com/'"></li>
  <li style="float: right;"><a href="contact.php">Contact</a></li>
  <li style="float: right;"><a href="about.php">About</a></li>
  
</ol>
	
</body>
</html>