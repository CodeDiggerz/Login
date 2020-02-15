<?php
$name=$_POST['name'];
$userid=$_POST['userid'];
$password=$_POST['Password'];
$sex=$_POST['sex'];
$dob=$_POST['dob'];
setcookie('userid',$userid);
$dbc=mysqli_connect('localhost','root','raina48','new');
$query="insert into info(name,userid,password,sex,dob) values ('$name','$userid','$password','$sex','$dob')";
if(@mysqli_query($dbc,$query))
{ print "Congrats!! You have succefully registered.";}
	else
		print mysqli_error($dbc);
?>
<DOCTYPE html>
<html>
<head>
 
</head>

<meta charset="UTF-8">
<link href="css/styles2.css" type="text/css" rel= "stylesheet" />

<body>
<h2>New Game!!</h2>
<p>Welcome: 
<?php
print $name;
?>
</p>

<canvas id="mycanvas" >
</canvas>
<button id="but">START
</button>

 <script type= "text/javascript" src ="js/js2.js" >
 </script>
</body>


  
	 
</html>

 