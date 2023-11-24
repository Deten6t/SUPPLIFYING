<?php
 session_start();

 $login=$_POST['login'];
 $password=$_POST['password'];

    $bd=mysqli_connect("localhost","root","", "регистрация");
    $sql=("SELECT * FROM `регистрация` WHERE login='$login'AND password='".md5($password)."';");

    $result=mysqli_query($bd,$sql);
    foreach($result as $row){
if ($login==$row['login']&& $password==$row['password']){
    $_SESSION['login']=$login;
    header('location: index1.php');
}
    }
    {
 echo "Извините, введённый вами login или пароль не существует.";
    }
    
?>