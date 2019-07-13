<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="javaS.js"></script>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
    <script src="cal.js"></script>    
</head>
<body>
	<div class="bg-img">
		<div class="container">
<div class="topnav" id="myTopnav">
	<div class="image"><img src="download.jpg" height="80" width="80" align="left"></div>
  <a href="index.php" class="active">Home</a>
  <a href="exp.php">Experiance Seagulf</a>
  
  <a href="about.php">About</a>
  <a href="login.php" class="right">Login</a>
  <a href="register.php" class="right">Register</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<div class="typewriter">
	<h2>Welcome To Seagulf</h2>
</div>
</div>
</div>
<div class="form">
    <div class="cal">
        <form action="sample.php" method="post">
            Date: <br>
            <input type="text" name="startdate" id="start_datepicker"/>
        </form>
    </div>
    <div class="Form_Contents1">
            From<br>
            <select>
     <option value="p" selected>New Delhi</option>
            </select>
    </div>
    <div class="Form_Contents2">
       To<br>
        <select  name="forma" onchange="location = this.value;">
  <option value="1">Fly High</option>
  <option value="p.php">Paris</option>
  <option value="B.php">Berlin</option>
  <option value="Ba.php">Barcelona</option>
  <option value="R">Rome</option>
</select>
    </div>
</div>
    <br><br><br>
    <div class="country">
     Countries To Visit
    </div><br>
<div class="grid-container1">
	<div class="image1">
		<div class="content">
            <a href="france.php"> <img src="top_10.jpg" height="300" width="600"></a><br>
           <h2>France</h2>
        </div>
	</div>
    <div class="image2">
		<div class="content">
            <a href="germany.php"><img src="top_14.jpg" height="300" width="600"></a>
            <h2>Germany </h2><br>
        </div>
	</div>
</div>
<div class="grid-container2">
	<div class="image3">
		<div class="content">
            <a href="italy.php"><img src="top_15.jpg" height="300" width="600"></a>
            <h2>Italy</h2>
        </div>
	</div>
    <div class="image4">
		<div class="content">
            <a href="spain.php"><img src="top_16.jpg" height="300" width="600"></a>
            <h2>Spain</h2><br>
        </div>
	</div>
</div><br><br>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
<div class="top">Top Destinations
	<div class="down">Take a look</div>
</div>

<div class="grid-container">
	<div class="grid-item1">
        <a href="paris.php"><div class="text"> Paris</div></a>
        </div>
	<div class="grid-item2">
        <a href="berlin.php"><div class="text"> Berlin</div></a>
	</div>
	<div class="grid-item3">
        <a href="rome.php"><div class="text"> Rome</div></a>
	</div>
	<div class="grid-item4">
        <a href="barcelona.php">	<div class="text"> Barcelona</div></a>
	</div>	
</div><br><br>
    
<div class="find">
    <form>
        <center><a href="#"><input type="button" value="Find Out More" ></a></center>
    </form>
</div>    
<br><br>    
    
    
    <div class="footer">
        <div class="item1">
            <ul>
                <h3>Follow Us</h3>
                <li><a href="#" class="fb btn">Facebook<i class="fa fa-facebook fa-fw"></i></a></li>
                <li><a href="#" class="twitter btn">Twitter<i class="fa fa-twitter fa-fw"></i></a></li>
                <li><a href="#" class="google btn">Google+<i class="fa fa-google fa-fw"></i></a></li>
            </ul>
        </div>
        <div class="item2">
            <ul>
                <h3>Country</h3>
                <li>France</li>
                <li>Germany</li>
                <li>Spain</li>
            </ul>
        </div>
        <div class="item3">
            <ul>
                <h3>Experiance</h3>
                <a href="exp.php"><li>Cabin Features</li></a>
                <li>Inflight Entertainment</li>
                <li>Dining</li>
                <li>Open Skies</li>
            </ul>
        
        </div>
    </div>
</body>
</html>