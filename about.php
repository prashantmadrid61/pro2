<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
html {
  box-sizing: border-box;
}
    body{
        margin: 0;
        padding: 0;
    }

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 20px;
  padding: 0 12px;
}

/*@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}*/

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;

}
.button a{
    text-decoration: none;
    color: white;
 }
.h{
        background-color:saddlebrown;
        opacity: 0.9;
        color: white;
        line-height: 60px;
        padding-left: 20px;
}

.button:hover {
  background-color: #555;
}
    
</style>
</head>
<body>
<?php include 'indexcopy.php';?>
    <div class="h"><h2>About Us</h2></div>
<br>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="top_18.jpg" style="width:100%">
      <div class="container">
        <h2>Our Partner Airlines</h2>
        <p class="title">A wider network of destinations at greater convenience</p>
          <p><button class="button"><a href="1.php">Read More</a></button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="top_20.jpeg" style="width:100%" height="300">
      <div class="container">
        <h2>Ethics and compliance</h2>
        <p class="title">Doing business with integrity.</p>
          <p><button class="button"><a href="2.php">Read More</a></button></p>
      </div>
    </div>
  </div>
    <div class="column">
    <div class="card">
      <img src="top_22.jpg" style="width:100%" height="300">
      <div class="container">
        <h2>Our Responsibility</h2>
        <p class="title">The ‘Together’ strategy.</p>
          <p><button class="button"><a href="3.php">Read More</a></button></p>
      </div>
    </div>
  </div>
      <div class="column">
    <div class="card">
      <img src="top_23.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>Our subsidiaries</h2>
        <p class="title">Etihad subsidiaries and joint ventures.</p>
          <p><button class="button"><a href="4.php">Read More</a></button></p>
      </div>
    </div>
  </div>
    <div class="column">
    <div class="card">
      <img src="top_24.jpg" style="width:100%" height="350">
      <div class="container">
        <h2>Our fleet</h2>
        <p class="title"Our new-generation fleet..</p>
          <p><button class="button"><a href="5.php">Read More</a></button></p>
      </div>
    </div>
  </div>
  
</div>

</body>
</html>
