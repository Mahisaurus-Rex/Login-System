<?php
$username=$_POST['username']; //gets all info from index.html
$email=$_POST['email'];
$password=$_POST['password'];



$con=mysqli_connect("localhost", "root","","login");//mysqli(""localhost", "username","password","database name");
$result=mysql_query($con,"SELECT * FROM `login_info` WHERE `username` = '$username' && `email = '$email' && `password` = '$password'")



?>