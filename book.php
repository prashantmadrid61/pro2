<!DOCTYPE HTML>  
<html>
<head>
<style>

    input[type=text] {
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
        width:90%;
}
    .btn {
  background-color:saddlebrown;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
    width: 100%;
}
    h{
            background-color: saddlebrown;
            color: white;
            line-height: 60px;
            opacity: 0.9;
        }
.error {color: #FF0000;}
</style>
</head>
<body>  
<?php include 'indexcopy.php';?>



<h2>Enter Your Details</h2>
<form action="connect.php" method="post">  
  Name:<br>
    <input type="text" name="name" required><br>
  Email:<br>
    <input type="text" name="email" value="" required>
    <br>
  Age: <br>
    <input type="text" name="age" value="" required>

  <input type="submit" class="btn" value="Submit">  
</form>
</body>
</html>