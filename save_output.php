<?php 
$title = $_POST['title'];
$output = $_POST['editor'];
$date = date("d-m-Y");
$time = date("H:i a");
$conn = mysqli_connect("localhost","root","","nijust");
$query = mysqli_query($conn,"INSERT INTO dictations(title,dictation,date,time) VALUES('$title','$output','$date','$time')");
if($query == TRUE)
header("Location: main_index.html?msg=Successful");
else
header("Location: main_index.html?msg=Not+Successful");
 ?>