<?php
    $con = mysqli_connect('localhost','root','');
    if(!$con){
        echo 'Not connected to database';
    }
    if(!mysqli_select_db($con,'student'))
    {
        echo 'Not Database not selected';
    }
$Name=$_POST['name'];
$Email=$_POST['email'];
$Age=$_POST['age'];
    
    $sql="insert into details (Name,Email,Age) values('$Name','$Email','$Age')";
    if(!mysqli_query($con,$sql))
    {
        echo 'Not inserted';
    }
    else{
        echo 'Loading....';
        header('refresh:2; pay.php');
    }
    
?>