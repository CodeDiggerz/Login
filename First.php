<?php
$name=$_POST['name'];
$userid=$_POST['userid'];
$password=$_POST['Password'];
$dob=$_POST['dob'];
setcookie('userid',$userid);
$dbc=mysqli_connect('localhost','root','raina48','new');
$query="insert into info(name,userid,password,dob) values ('$name','$userid','$password','$dob')";
if(@mysqli_query($dbc,$query))
{ }
	else
		print mysqli_error($dbc);
?>
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
			<?php
			  print " ";
			  print $name;
			  ?>
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


 