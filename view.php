<?php
$username=$_POST['username'];
$dbc=mysqli_connect('localhost','root','raina48','new');
if($username)
{
$password=$_POST['Password'];	

$query='select userid,password,score,name from info';
$r=mysqli_query($dbc,$query);
while($row=mysqli_fetch_array($r))
{  
 
	if($row['userid']==$username)
	{  
		if($row['password']==$password)
		{
			setcookie('userid',$username);
			print ' <!DOCTYPE html>
<html>
<head>
 
</head>

<meta charset="UTF-8">
<link href="css/styles2.css" type="text/css" rel= "stylesheet" />

<body>
<h2>New Game!!</h2>
<p>Welcome '; print $row['name'] ;print' </p>
<p>Your Highest score: '; print $row['score'] ;print' </p>
<canvas id="mycanvas" >
</canvas>
<button id="but">START
</button>

 <script type= "text/javascript" src ="js/js2.js" >
 </script>
</body>


  
	 
</html> ';

	}
		else 
			print '
		<!DOCTYPE html>
<html>
<title>LOGIN</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/new.css" ></link>
<body>
<div>
  <form action="view.php" method ="POST">
   <p>Registered User</p>
   <br>
   Username:<br>
   <input type="text" name="username" placeholder="Enter Username" required >
   <br>
   Password:<br>
   <input type="password" name="Password" placeholder="Enter Password" required >
   <br>
   <input type="submit" name="login" value="LOGIN">
   <br>Incorrect Password
    
   </form>
   <form action="first.php" method="POST" >
   <p>New User</p>
   <br>
   Name:<br>
   <input type="text" name="name" placeholder="Enter Name" required >
   <br>
   User Id:<br>
   <input type="text" name="userid" placeholder ="Select UserId " required >
   <br>
   Password:<br>
   <input type="password" name="Password" placeholder="Choose Password" required >
   <br>
   Sex:<br>
   <select name="sex">
   <option value="male">Male</option>
   <option value="female">Female</option>
   </select>
   <br>
   Date of Birth:<br>
   <input type="date" name="dob">
   <br>
   <input type="submit" name="signup" value="SIGN UP">   
  </form>
  </div>
</body>
</html>';
	}
}


}
mysqli_close($dbc);
?>