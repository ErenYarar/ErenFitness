<?php
 session_start();
 if (!isset($_SESSION['user'])) {
  header("Location: index.php");
 } else if(isset($_SESSION['user'])!="") {
  header("Location: home.php");
 }
 //İLK Sayfa görüntüsü index.php'de açılıyor. eğer kullanıcı giriş yaparsa home.php sayfası görünücektir.
 if (isset($_GET['logout'])) {
  unset($_SESSION['user']);
  session_unset();
  session_destroy();
  header("Location: index.php");
  exit;
 }
 //Kullancı çıkış yap butonuna tıkladığında user yokolsun ve tekrardan index.php sayfasına dönelim.
?>