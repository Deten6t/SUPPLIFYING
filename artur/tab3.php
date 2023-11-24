<?php
$name=$_POST['name'];
$date=$_POST['date'];
$_SESSION['name']=$name;

 $bd=mysqli_connect("localhost","root","", "tov");
 $sql=("INSERT INTO `tov` (`name`,`date`) VALUES('$name','$date')");
 $result=mysqli_query($bd,$sql);

header('location: tab.php');
?>