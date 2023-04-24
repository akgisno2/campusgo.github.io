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
    <title>Placement Guide</title>
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
        left:15%;
        top:7%;
        width:82%;
        height:80%;
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
<div class="p"> <p><h1>Placement Guide</h1>
        Campus placements season is beginning at almost all the colleges and each one of us wants to prepare to do the best.  In this article, a step by step guide for placement preparation is discussed.<br>



<h3>1.Aptitude Test</h3>
Course material<br>
Practice Tests<br>
Puzzles<br>
 

<h3>2.Programming Language</h3> It is recommended to know at least one language thoroughly) C, C++, Java, Python
 

<h3>3.Subject Basics</h3> Most important subjects that you must know for any company interview are undoubtedly data structures and algorithms.

 <H3>4.Other important CS subjects</h3> Please go through the basics of following three subjects :<br>
DBMS<br>
Operating System<br>
Computer Networks
 

<H3>5.Top topics for Interview Preparation for Software Developer</h3>  An assorted list of questions which should not be skipped.
 

<H3>6.Tracking your progress </h3> It is recommended that you create a profile on GeeksforGeeks for this. Logged in users can keep track of what all is done and what is in To Do.


<H3>7.Practice is undoubtedly the key to success </h3> Click here and choose the company to practice the coding questions that have been asked earlier. Students generally are seen skipping practice part and landing into trouble when asked to write the code in a live interview. Therefore, PRACTICE is strongly recommended.
 
<H3>8.MCQs of various subjects</h3> These are asked in first round of many companies and also help you build basics and foundations of any subject or topic.
 

<H39.>Interview Corner</h3> Interview Experiences give you a fair idea about what you might go through in your interviews. You should carefully observe the comments wherein students have answered certain queries regarding placement process too.
Choose your company and start preparing today!
</p></div>

    <ol>
  <li><img src="facebook.png" style="margin-left:600px" onclick="window.location.href='https://facebook.com/'"></li>
  <li><img src="mail.png" onclick="window.location.href='https://gmail.com/'"></li>
  <li><img src="twitter.png" onclick="window.location.href='https://twitter.com/'"></li>
  <li style="float: right;"><a href="contact.php">Contact</a></li>
  <li style="float: right;"><a href="about.php">About</a></li>
  
</ol>
</body>
</html>