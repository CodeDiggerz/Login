<?php
$username=$_POST['username'];
$dbc=mysqli_connect('localhost','root','raina48','new');
if($username)
{
$password=$_POST['Password'];	

$query='select userid,password,name from info';
$r=mysqli_query($dbc,$query);
while($row=mysqli_fetch_array($r))
{  
 
	if($row['userid']==$username)
	{  
		if($row['password']==$password)
		{
			setcookie('userid',$username);
      print '
      <!DOCTYPE html>
<html>
  <head>
    <title>My Website</title>
    <link rel="stylesheet" type="text/css" href="css/login.css" />
    <!-- Gaanja -->
  </head>

  <body>
    <div id="Head">
      <header id="main-header">
        <div class="container">
          <h1 id="mainH">
            <a href="#" id="Logo">Potatotiser</a>
            <img id="TheLogo" src="images/logo.JPG" />
          </h1>
        </div>
      </header>

      <nav id="navbar">
        <div class="container">
          <ul>
            <li style="background-color: gray;"><a href="#">Home</a></li>
            <li><a href="#">Team</a></li>
            <li><a href="#">Commitment</a></li>
            <li><a href="#">Forum</a></li>
            <li><a href="#">blog</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Log In</a></li>
          </ul>
        </div>
      </nav>
    </div>
    <section id="showcase">
      <div class="container">
        <h1>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate
        </h1>
      </div>
    </section>
    <div class="container">
      <section id="main">
        <h1>Welcome 
        ';

			
			  print " ";
			  print $username;
			  print '
		</h1>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
          minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat. Duis aute irure dolor in
          reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
          culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </section>

      <aside id="sidebar">
        <h3 style="text-align: center;">Notice-Board</h3>
        <ul>
          <li>new report on price of fertilizers</li>
          <li>crop reports : February 2020</li>
          <li>How to keep soil ideal !</li>
          <li>Kapila Pashu Ahar has launched Kapila Sampoorna</li>
          <li>Buy brand new Powertrac Euro 50</li>
          <li>weather today</li>
        </ul>
      </aside>
    </div>

    <footer id="main-footer">
      <p>Copyright &copy; 2020 CodeDiggerz</p>
    </footer>
  </body>
</html>
';

	}
		else 
			print '
      <!DOCTYPE html>
      <html>
        <head>
          <title>My Website</title>
          <link rel="stylesheet" type="text/css" href="css/login.css" />
        </head>
        <body>
          
          <div id="Head">
          <header id="main-header">
            <div class="container">
              <h1 id="mainH"><a href="#" id="Logo">Potatotiser</a><img src="images/logo.JPG"></h1>
            </div>
          </header>
      
          <nav id="navbar">
            <div class="container">
              <ul>
                <li ><a href="#">Home</a></li>
                <li><a href="#">Team</a></li>
                <li><a href="#">Commitment</a></li>
                <li><a href="#">Achievements</a></li>
                <li><a href="#">blog</a></li>
                <li><a href="#">Contact</a></li>
                <li style="background-color: gray;"><a href="#">Log In</a></li>
              </ul>
            </div>
          </nav>
          </div> 
          <div id="form">
            <form action="view.php" method ="POST">
             <p>Registered User</p>
             
             Username<br>
             <input type="text" name="username" placeholder="Enter Username" required >
             <br>
             Password<br>
             <input type="password" name="Password" placeholder="Enter Password" required >
             <br>
             <p> INCORRECT PASSWORD</p>
             <input type="submit" name="login" value="LOGIN">
              
             </form>
             <form action="first.php" method="POST" >
             <p>New User</p>
             
             Name<br>
             <input type="text" name="name" placeholder="Enter Name" required >
             <br>
             User Id<br>
             <input type="text" name="userid" placeholder ="Select UserId " required >
             <br>
             Password<br>
             <input type="password" name="Password" placeholder="Choose Password" required >
             <br>
             Date of Birth<br>
             <input type="date" name="dob">
             <br>
             <input type="submit" name="signup" value="SIGN UP">   
            </form>
            </div>
          <footer id="main-footer">
            <p>Copyright &copy; 2020 CodeDiggerz</p>
          </footer>
        </body>
      </html>
      ';
	}
}


}
mysqli_close($dbc);
?>