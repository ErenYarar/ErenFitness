<?php
//phpmyadmin ile bağlantısını sağlıyorum, dbconnect.php sayfasındaki bağlantıyı kullanarak.
 ob_start();
 session_start();
 require_once 'dbconnect.php';
//login yani kullanıcı girişi sayfasına yönlendirdim.
 if( !isset($_SESSION['user']) ) {
  header("Location: login.php");
  exit;
 }
 //sql kodunu kullanarak users tablosundaki user isimli kullanıcılar örtüşüyorsa home.php sayfasının açılmasını sağladık.
 $res=mysqli_query($conn,"SELECT * FROM users WHERE userId=".$_SESSION['user']);
 $userRow=mysqli_fetch_array($res);
?>
<!-- Kullanıcı siteye giriş yaptığında göreceği ana sayfa (html sayfamız) 
index.php sayfası ile aynı sadece kullanıcının ismi ile Merhaba [kullanıcı ismi] yazdırıyoruz. 
Ve 'SINIRLARINIZI ZORLAYIN' resmi yerine animasyonlu kelimeler kullanıyoruz.
-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ana Sayfa</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- CSS Başlangıç -->
  <!-- dropdown-menu class'ı içerisinde a taginde bulunan yazıların rengini siyah yapmak amaçlı oluşturulmuştur. 
  ml15 ise 'SINIRLARINIZI ZORLAYIN' kelimesini animasyonlu yazmak için oluşturulmuştur.
  -->
  <style type="text/css">
  .dropdown-menu a {
      color: #333333 !important;
  }
  .ml15 {
    font-weight: 800;
    font-size: 3.8em;
    text-transform: uppercase;
    letter-spacing: 0.5em;
  }
  .ml15 .word {
    display: inline-block;
    line-height: 1em;
  }
  </style>
</head>

<body>
  <!-- Sayfa açılır açılmaz siteyi staj için yaptığımı belirten bir yazı, kapatılabilir. -->
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  Bu site Muhammed Eren Yarar tarafından 2. Staj projesi için yapılmıştır.
  </div>

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
    <a href="#section1">Eğitmenlerimiz</a>
    <a href="https://www.neoldu.com/vucut-gelistirme-antrenman-programlari-15512h.htm">Haberler <span class="badge badge-danger">yeni</span> </a>
    <div style="float: right;">      
      <a href="logout.php?logout"><span class="fa fa-sign-out"></span> Çıkış Yap</a>
    </div>
  </div>

<!-- Header kısmı -->
<header>
  <div id="banner">
    <div id="bannerInfo">
  	<br><br>
    	<h4 style="color:red; text-align: center">Merhaba <?php echo $userRow['userName']; ?>, </h4>
    	<h1>Ilk ay ücretsiz fitness eğitimimiz başlamıştır.<br></h1>
      <h2 style="color: white; text-align: center;">Vücut Geliştirme ve Fitness Kursu</h2>
      <p>Spor, vücudun fiziksel durumu üzerindeki olumlu etkisi sayesinde bir kişinin zihinsel sağlığını iyileştirir.</p>         
      <div id="button"><a href="#section2">Fiyatları Gör&nbsp;&nbsp;<div class="iconBanner"></div></a></div>     
    </div>           
  </div>
  <div id="info">
    <div id="box">
      <div class="iconOne"></div>
      <h1>Sağlık</h1>
      <p>Sağlıklı bir hayatın olmazsa olmazı spordur. Fitness kelime anlamı olarak "Sağlıklı ve formda olmak"dır. Bir çok egzersize dayalı bir spordur. </p>
    </div>
    <div id="box">
      <div class="iconTwo"></div>
      <h1>Vücut Gelişimi</h1>
      <p>Fitness özellikle vücut geliştirmek isteyenlerin en çok uyguladığı spor dallarından birisidir. </p>
    </div>
    <div id="box">
      <div class="iconThree"></div>
      <h1>Herkese Uygun</h1>
      <p>Fitness sporunu 16 yaşından 60 yaşına kadar kadın erkek herkese uygundur.</p>
    </div>
    <div id="box">
      <div class="iconFour"></div>
      <h1>Faydaları</h1>
      <p>Fitness sporu vücutta bol bol endorfin, östrojen veya testesteron hormonu salgılanmasını sağlar. Bu da, kişinin kendisini psikolojik olarak daha iyi ve zinde hissetmesini sağlar.</p>
    </div>                
  </div>
</header>  

<main>
	<div id="section2">
    <div id="sablonlar">
    <h1>Ücret Tabloları</h1>
    <div class="sablon">
      <div class="iconOne" style="float: right; margin-right: 10px; margin-top: 5px;"></div>
      <h1 style="font-size: 50px;" class="glow">100<sup>TL</sup></h1>
      <p>Aylık Ücret</p>
        <div class="bilgi"><h3>Eğitmen Yardımı Yoktur</h3></div>
        <div class="bilgi"><h3>Program Yapılır</h3></div>
        <div class="bilgi"><h3>Ölçüm Yapılır</h3></div>
        <div id="button" style="margin: 0; margin-top: 20px;margin-left: 80px;"><a href="OdemeEkrani.php">Daha fazlası<div class="iconBanner"></div></a></div>
    </div>

    <div class="sablon">        
      <h1 style="font-size: 50px;" class="glow">320<sup>TL</sup></h1>
      <p>3 Aylık Ücret</p>
        <div class="bilgi"><h3>Eğitmen Yardımı Vardır</h3></div>
        <div class="bilgi"><h3>Program Yapılır</h3></div>
        <div class="bilgi"><h3>Ölçüm Yapılır</h3></div>
        <div id="button" style="margin: 0; margin-top: 20px;margin-left: 80px;"><a href="OdemeEkrani.php">Daha fazlası<div class="iconBanner"></div></a></div>
    </div>

    <div class="sablon" style="float: right; margin: 0;">          
      <h1 style="font-size: 50px;" class="glow">500<sup>TL</sup></h1>
      <p>Yıllık Ücret</p>
        <div class="bilgi"><h3>Eğitmen Yardımı Vardır</h3></div>
        <div class="bilgi"><h3>Program Yapılır</h3></div>
        <div class="bilgi"><h3>Ölçüm Yapılır</h3></div>
        <div id="button" style="margin: 0; margin-top: 20px;margin-left: 80px;"><a href="OdemeEkrani.php">Daha fazlası<div class="iconBanner"></div></a></div>
    </div>
    </div> 
  </div>  
<!-- Kelimeleri animasyonlu kullanma sadece kullanıcı girişi yapan kişilerin görebileceği kısım -->
<center>
<h1 class="ml15">
  <span class="word">SINIRLARINIZI</span>
  <span class="word">ZORLAYIN</span>
</h1>
</center>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<br><br>

<div class="content">
  <div id="section1">
    <section class="web_disigner">
      <div class="web_disigner_contain">
        <center><h1  style=" display:inline;">Eğitmenlerimiz</h1></center>
        <div class="container">
          <div class='row'>
            <div class='col-md-12'>
              <div class="carousel slide media-carousel" id="media">
                <div class="carousel-inner">
                  <div class="item  active">
                    <div class="row">
                      <div class="col-md-4 padtop30">
                        <center><div class="parent_circle">
                          <div class="parent_circle_contain">
                          <p style="font-size: 18px">Zeynep Y.</p>
                          <hr/>
                          <p>Fitness Eğitmeni</p>
                          <a href="kesfetYorumHome.php">Daha Fazla Bilgi...</a>
                        </div>
                        <div class="child_round_circle child_round_circle_img1">                 
                        </div>
                        </div>
                        </center>
                      </div>          
                      <div class="col-md-4 padtop30">
                       <center><div class="parent_circle">
                       <div class="parent_circle_contain">
                          <p style="font-size: 18px">Beste E.</p>
                          <hr/>
                          <p>ANTRENÖR</p>
                          <a href="kesfetYorumHome.php">Daha Fazla Bilgi...</a>
                        </div>
                        <div class="child_round_circle child_round_circle_img2">                  
                        </div>
                        </div>
                        </center>
                      </div>
                      <div class="col-md-4 padtop30">
                    <center> <div class="parent_circle">
                          <div class="parent_circle_contain">
                          <p style="font-size: 18px">Ali E.</p>
                          <hr/>
                          <p>ANTRENÖR</p>
                          <a href="kesfetYorumHome.php">Daha Fazla Bilgi...</a>
                        </div>
                        <div class="child_round_circle child_round_circle_img3">                  
                        </div>
                        </div>
                        </center> 
                      </div>        
                    </div>
                  </div>                        
                </div>
              </div>
            </div>
          </div>
    </section>
  </div>
</div>
</main>

<!-- Footer Kısmı -->
<!-- Bu kısım ikiye ayrıldı İlk kısımda kendim hakkında numaram, mail adresim, ve Ev adresim var
İkinci kısımda kullanıcı bana mail atmak ister ise diye iletişim hattı var.
 -->
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

/// 'SINIRLARINIZI ZORLAYIN' kelimelerinin animasyonunu sağlamak için bu scripti yazdım.
anime.timeline({loop: true})
  .add({
    targets: '.ml15 .word',
    scale: [14,1],
    opacity: [0,1],
    easing: "easeOutCirc",
    duration: 800,
    delay: (el, i) => 800 * i
  }).add({
    targets: '.ml15',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
</script>
</body>
</html>




