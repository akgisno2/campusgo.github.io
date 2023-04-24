<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background-image: url("bg9.jpg");
  height: 100%; 
 
  opacity:0.9;
	}
    .div{
        height:85%;
         width: 15%;
       position:absolute;
        top:7%;
        text-align: center;
        font-family: sans-serif;
        background-color: rgb(0, 0, 0);
        color: white;
        border-top:3.5px solid white;
        border-left:3.5px solid white;
        
    }
    .p{  position:absolute;
        left:30%;
        top:15%;
        width:65%;
        height:70%;
        padding:20px;
        font-family: sans-serif;
        font-size:20px;
        overflow-y:auto;
    }
    
	.box{
  height:60%;
  width: 300px;
  padding: 40px;
  position: absolute;
  top: 50%;
  left: 80%;
  transform: translate(-50%,-50%);
  background: #191919;
  text-align: center;
	}
	.box h1{
  margin-top:60px ;
  color: white;
  text-transform: uppercase;
  font-weight: 500;
	}
	.box input[type = "email"],.box input[type = "password"]{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #3498db;
  padding: 14px 10px;
  width: 200px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
	}
	.box input[type = "email"]:hover,.box input[type = "password"]:hover{
  width: 280px;
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
	ul { position:absolute;
    top:0;
    width:100%;
    height:7%;
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    font-family: sans-serif;
    background-color: rgb(0, 0, 0);
	}
   .div ul { position:absolute;
    top:20%;
    width:200px;
    height:80%;
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    overflow: auto;
    font-family: sans-serif;
    background-color: rgb(0, 0, 0);
	}
    .div ul li{
        width:100%;
        border-top:1px solid white;
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
    position:absolute;
    bottom:0;
    width:100%;
    height:7%;
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    font-family: sans-serif;
    background-color: rgb(0, 0, 0);

	}
	ul li img{
  height:30px;
  width:30px;
  margin: 8px 15px;
  border-radius: 100%;
	}
	ol li {
    float: left;
   
	}
	ol li img{
  background-color: #474747;
  height:30px;
  width:30px;
  margin: 8px 15px;
  border-radius: 20%;
	}
  .p img{position:relative;
      height:100px;
      width:200px;
      padding:20px;
    }
    .p img:hover{
      transform: scale(1.4);
      
    }
        </style>
</head>
<body>
<ul>
      <li><a href="welcome.php">Home</a></li>
      <li><a href="guide.php">Guide</a></li>
      <li><a href="Share.php">Share</a></li>
      <li style="float: right;"><img src="logo.png"></li>
      <li style="float: right;"><a href="logout.php">Logout</a></li>
     
</ul>  
    <div class="div"><?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <ul>
      <li><a href="infosys.php">Infosys</a></li>
      <li><a href="cisco.php">Cisco</a></li>
      <li><a href="wipro.php">Wipro</a></li>
      <li><a href="amazon.php">Amazon</a></li>
      <li><a href="Ibm.php">Ibm</a></li>
      <li><a href="persistent.php">Persistent</a></li>
      <li><a href="prismjohnson.php">Prism Johnson</a></li>
     </ul>
</div>
<div class="p"><a href="infosys.php"><img  src="infosys.png"></a>
<a href="cisco.php"><img  src="cisco.jpg"></a>
<a href="wipro.php"><img  src="wipro.jpg"></a><br>
<a href="amazon.php"><img src="amazon.jpg"></a>
<a href="ibm.php"><img src="ibm.jpg"></a>
<a href="persistent.php"><img src="persistent.jpg"></a><br>
<a href="prism.php"><img src="prism.png"></a>
</div>
    
    <ol>
  <li><img src="facebook.png" style="margin-left:600px" onclick="window.location.href='https://facebook.com/'"></li>
  <li><img src="mail.png" onclick="window.location.href='https://gmail.com/'"></li>
  <li><img src="twitter.png" onclick="window.location.href='https://twitter.com/'"></li>
  <li style="float: right;"><a href="contact.php">Contact</a></li>
  <li style="float: right;"><a href="about.php">About</a></li>
  
</ol>
</body>
</html>