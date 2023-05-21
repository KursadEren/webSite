<?php
include("ayar.php");
session_start();
ob_start();
if(($_POST["username"]==$user) and ($_POST["password"]==$pass)){
$_SESSION["login"] = "true";
$_SESSION["user"] = $user;
$_SESSION["pass"] = $pass;
header("Location:admin.php");
}else if(($POST["username"]=="") and($POST["password"]=="")){
echo "Kullancı Adı veya Şifre girilmedi.<br>";
echo "Giriş sayfasına yönlendiriliyorsunuz.";
header("Refresh: 2; url=giris.php");
}
else {
echo "Kullancı Adı veya Şifre yanlış.<br>";
echo "Giriş sayfasına yönlendiriliyorsunuz.";
header("Refresh: 2; url=giris.php");
}
ob_end_flush();
?>