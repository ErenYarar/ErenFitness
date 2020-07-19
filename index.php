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
(Arka planı beyaz olduğu için default olarak beyaz renkli butonlar geldiği için)-->
<style type="text/css"> 
.dropdown-menu a{
    color: #333333 !important;
}
</style>
</head>

<body>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  Bu site Muhammed Eren Yarar tarafından 2. Staj projesi için yapılmıştır.
</div>

<!-- Navbar Menüsü oluşturmak amaçlı yazılmıştır. -->
<div id="navbar">
  <div class="navbar-header">
      <a class="navbar-brand" href="index.php">ErenFitness Kursu</a>
  </div>
  <a href="index.php">Ana Sayfa</a>
  <div class="dropdown show">
    <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Keşfet 
    </a>
    <div class="dropdown-menu text-gray-dark" aria-labelledby="dropdownMenuLink">
      <a class="dropdown-item" href="kesfetIndex.php">Resimler</a>
      <a class="dropdown-item" href="#hizala">İletişim</a>
    </div>
  </div>
  <a href="#section1">Eğitmenlerimiz</a>
  <a href="https://www.neoldu.com/vucut-gelistirme-antrenman-programlari-15512h.htm">Haberler <span class="badge badge-danger">yeni</span> </a> <!-- Bootstrap kullanark badge oluşturuldu. -->
  <!-- index.php sayfası kullanıcı sayfayı açar açmaz göreceği ana sayfa olucaktır. Bu yüzden Kullanıcı girişi ve kayıt olma seçenekleri bu sayfadadır.-->
  <div style="float: right;">
    <a href="Signup.php" ><span class="fa fa-user"></span> Kayıt Ol</a>
    <a href="Login.php" ><span class="fa fa-sign-in"></span> Giriş Yap</a>
  </div>
</div>

<!-- Header Kısmını oluşturmak amaçlı yazılmıştır. 
banner isimli id oluşturdum ve css kısmında arka plana fotoğraf koydum.  
Fotoğraf üstüne ise başlık ve buton koydum. Bu butona href'de yazdığım
#section2 ile aşağıda oluşturduğum ücret tablolarına oluşturduğum section2 
isimli id'ye bağladım. Bu sayede butona tıklandığında ücret tablolarına gitmesini sağladım.
-->
<header>
  <div id="banner">
    <div id="bannerInfo">
    <br><br>
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
      <p>Fitness özellikle vücut geliştirmek isteyenlerin en çok uyguladığı spor dallarından birisidir.  </p>
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
          <div id="button" style="margin: 0; margin-top: 20px;margin-left: 80px;" onclick="myPara()"><a href="#">Daha fazlası<div class="iconBanner"></div></a></div>
        </div>

        <div class="sablon">           
          <h1 style="font-size: 50px;" class="glow">320<sup>TL</sup></h1>
          <p>3 Aylık Ücret</p>
          <div class="bilgi"><h3>Eğitmen Yardımı Vardır</h3></div>
          <div class="bilgi"><h3>Program Yapılır</h3></div>
          <div class="bilgi"><h3>Ölçüm Yapılır</h3></div>
          <div id="button" style="margin: 0; margin-top: 20px;margin-left: 80px;"  onclick="myPara()"><a href="#">Daha fazlası<div class="iconBanner"></div></a></div>
        </div>

        <div class="sablon" style="float: right; margin: 0;">           
          <h1 style="font-size: 50px;" class="glow">500<sup>TL</sup></h1>
          <p>Yıllık Ücret</p>
          <div class="bilgi"><h3>Eğitmen Yardımı Vardır</h3></div>
          <div class="bilgi"><h3>Program Yapılır</h3></div>
          <div class="bilgi"><h3>Ölçüm Yapılır</h3></div>
          <div id="button" style="margin: 0; margin-top: 20px;margin-left: 80px;"  onclick="myPara()"><a href="#">Daha fazlası<div class="iconBanner"></div></a></div>
        </div>
    </div> 
  </div> 

<!-- 'SINIRLARINIZI ZORLAYIN' Resmi -->
<img src="img/widthResim.png" style="width: 100%;height: 100%;">            

<!-- Eğitmenlerimiz Bölümü -- Navbarda eğitmenlerimiz kısmına tıklandığında eğitmenlerin 
gösterildiği kısım çıksın diye id'ye section1 verip navbardaki butona da aynı ismi verdik.-->    
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
                      <center>
                        <div class="parent_circle">
                          <div class="parent_circle_contain">
                            <p style="font-size: 18px">Zeynep Y.</p>
                            <hr/>
                            <p>Fitness Eğitmeni</p>
                            <a href="kesfetYorumIndex.php">Daha Fazla Bilgi...</a>
                          </div>             
                        <div class=" child_round_circle child_round_circle_img1"></div>
                        </div>
                      </center>
                    </div>          
                    <div class="col-md-4 padtop30">
                      <center>
                        <div class="parent_circle">
                         <div class="parent_circle_contain">
                            <p style="font-size: 18px">Beste E.</p>
                            <hr/>
                            <p>ANTRENÖR</p>
                            <a href="kesfetYorumIndex.php">Daha Fazla Bilgi...</a>
                          </div>
                          <div class="child_round_circle child_round_circle_img2"></div>
                        </div>
                      </center>
                    </div>
                    <div class="col-md-4 padtop30">
                    <center> 
                      <div class="parent_circle">
                        <div class="parent_circle_contain">
                          <p style="font-size: 18px">Ali E.</p>
                          <hr/>
                          <p>ANTRENÖR</p>
                          <a href="kesfetYorumIndex.php">Daha Fazla Bilgi...</a>
                        </div>
                        <div class=" child_round_circle child_round_circle_img3"></div>
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

//Kullanıcının siteye kayıt olmadan kursu satın almasını engellemek için 
//fonksiyon oluştup kullanıcıya kursu satın almak istediği butona tıkladığında 
//karşısına kayıt olması gerektiğini belirten bir alert oluşturdum. 
function myPara() {
  alert("Kursu alabilmeniz için siteye kayıt olmalısınız!");
}

$(document).ready(function() {
  $('#media').carousel({
    pause: true,
    interval: false,
  });
});

</script>

</body>
</html>