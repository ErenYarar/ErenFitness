<?php
ob_start();
session_start();
require_once 'dbconnect.php';

if( !isset($_SESSION['user']) ) {
header("Location: login.php");
exit;
}
$res=mysqli_query($conn,"SELECT * FROM users WHERE userId=".$_SESSION['user']);
 $userRow=mysqli_fetch_array($res);
//kullanıcı giriş yaptığında görebileceği sayfayı bu php kodları ile sağlıyoruz.
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Keşfet</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style type="text/css">
  
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
}

.header {
  text-align: center;
  padding: 32px;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Yan yana duran dört eşit sütun oluşturdum */
.column {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
  max-width: 25%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
}

/* Responsive layout - dört sütun yerine iki sütun düzeni yapar */
@media screen and (max-width: 800px) {
  .column {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 50%;
  }
}

/* Responsive layout - iki sütunu yan yana değil üst üste yığar */
@media screen and (max-width: 600px) {
  .column {
    -ms-flex: 100%;
    flex: 100%;
    max-width: 100%;
  }
}

.dropdown-menu a{
    color: #333333 !important;
}

</style>
</head>
<body>

<div id="navbar">
  <div class="navbar-header">
    <a class="navbar-brand" href="Home.php">ErenFitness Kursu</a>
  </div>
  <a href="Home.php">Ana Sayfa</a>
  <div class="dropdown show">
    <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Keşfet 
    </a>
    <div class="dropdown-menu text-gray-dark" aria-labelledby="dropdownMenuLink">
      <a class="dropdown-item" href="kesfetHome.php">Resimler</a>
      <a class="dropdown-item" href="#hizala">İletişim</a>
    </div>
  </div>
  <a href="Home.php">Eğitmenlerimiz</a>
  <a href="https://www.neoldu.com/vucut-gelistirme-antrenman-programlari-15512h.htm">Haberler <span class="badge badge-danger">yeni</span> </a>
  <div style="float: right;">       
    <a href="logout.php?logout"><span class="fa fa-sign-out"></span> Çıkış Yap</a>
  </div>
</div>

<!-- <h4 style="color:red; text-align: center">Merhaba <?php echo $userRow['userName']; ?>, </h4> -->

<main>
<!-- Header -->
<div class="header">
  <h1 class="glow">RESİMLER</h1>
  <hr/>
</div>

<!-- Fotoğraf Tablosu - Resimler -->
<div class="row"> 
  <div class="column">
    <img src="img/kesfet/fitness_salonu_1.jpg" style="width:100%">
    <img src="img/kesfet/fitness_salonu_5.jpg" style="width:100%">
    <img src="img/kesfet/fitness_salonu_8.jpg" style="width:100%">
    <img src="img/kesfet/fitness_salonu_9.jpg" style="width:100%">
    <img src="img/kesfet/fitness_salonu_13.jpg" style="width:100%">
    <img src="img/kesfet/fitness_salonu_9.jpg" style="width:100%">
    <img src="img/kesfet/fitness_salonu_14.jpg" style="width:100%">
  </div>
  <div class="column">
    <img src="img/kesfet/fitness_salonu_11.jpg" style="width:100%">
    <img src="img/kesfet/fitness_salonu_13.jpg" style="width:100%">
    <img src="img/kesfet/fitness_salonu_3.jpg" style="width:100%">
    <img src="img/kesfet/fitness_salonu_10.jpg" style="width:100%">
    <img src="img/kesfet/fitness_salonu_6.jpg" style="width:100%">
    <img src="img/kesfet/fitness_salonu_12.jpg" style="width:100%">
  </div>  
  <div class="column">
    <img src="img/kesfet/fitness_salonu_2.jpg" style="width:100%">
    <img src="img/kesfet/fitness_salonu_13.jpg" style="width:100%">
    <img src="img/kesfet/fitness_salonu_2.jpg" style="width:100%">
    <img src="img/kesfet/fitness_salonu_17.jpg" style="width:100%">
    <img src="img/kesfet/fitness_salonu_16.jpg" style="width:100%">
    <img src="img/kesfet/fitness_salonu_7.jpg" style="width:100%">
    <img src="img/kesfet/fitness_salonu_12.jpg" style="width:100%">
  </div>
  <div class="column">
    <img src="img/kesfet/fitness_salonu_1.jpg" style="width:100%">
    <img src="img/kesfet/fitness_salonu_14.jpg" style="width:100%">
    <img src="img/kesfet/fitness_salonu_4.jpg" style="width:100%">
    <img src="img/kesfet/fitness_salonu_15.jpg" style="width:100%">
    <img src="img/kesfet/fitness_salonu_7.jpg" style="width:100%">
    <img src="img/kesfet/fitness_salonu_8.jpg" style="width:100%">
  </div>
</div>
</main>

<footer>
  <div id="hizala">
    <div id="footerInfo"><h1>ErenFitness kursu</h1>
      <ul>
          <li>Cep: 507 346 80 63 </li>
          <li>Email: eren1yarar2@gmail.com</li>
          <li>İstanbul / Sarıyer</li>
      </ul>
      <img src="img/heart.png" style="width: 50px;height: 50px; margin-right: 25px;">
      <img src="img/laugh.png" style="width: 50px;height: 50px; margin-right: 25px;">
      <img src="img/thumbs-up.png" style="width: 50px;height: 50px;">
    </div>
    <div id="contact">                
      <h1>İletişim</h1>
      <form action="https://formspree.io/eren1yarar2@gmail.com" method="post"> 
        <div class="text-white">
          <div class="input-block">
              <label for="contact_author">
                  <strong>Ad Soyad</strong> (gerekli)</label>
              <input type="text" name="contact_author" id="contact_author" style="background-color: black;color:#fff;" required>
          </div>
          <div class="input-block">
              <label for="_replyto">
                  <strong>E-Posta Adresi</strong> (gerekli)</label>
              <input type="email" name="_replyto" id="_replyto" style="background-color: black;color:#fff;" required>
          </div>            
          <div class="textarea-block">
            <label for="contact_content">
              <strong>İleti</strong> (gerekli)</label> <br>
            <textarea name="contact_content" id="contact_content" style="background-color: black;color:#fff;" required></textarea>
          </div>
          <input type="hidden" name="_next" value="http://localhost/STAJPROJE1/index.php"> 
          <input style="background-color: black;color: white" type="submit" class="btn btn-danger" value="GÖNDER">
        </div>
      </form>
    </div>
  </div>       
</footer>

<script>
////Navbar menüsü, kullanıcı siteyi aşağı scrolladığımızda siteye yapışıp takip etsin diye bu JS kodunu yazdım.
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-50px";
  }
}

</script>
</body>
</html>