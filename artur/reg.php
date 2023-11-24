<?php
session_start();

$login=$_POST['login'];
$password=$_POST['password'];

 $bd=mysqli_connect("localhost","root","", "регистрация");
 $sql=("INSERT INTO `регистрация` (`login`,`password`) VALUES('$login','".md5($password)."')");
 $result2=mysqli_query($bd,$sql);

 $_SESSION['login']=$login;
 header('location: index1.php');

    ?>