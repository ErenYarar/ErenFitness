<?php
  ob_start();
  session_start();
  include_once 'dbconnect.php';
  //dbconnect.php sayfasıyla bağlantısını sağladım çünkü o sayfada phpmyadmindeki veri tabanına bağlantı kurabiliyorum
  if ( isset($_SESSION['user'])!="" ) {
    header("Location: home.php");
    exit;
  }
  //Eğer kullanıcı girişinde kullanıcı ismi yok ise home.php sayfasına yönlendirir.
  $error = false;
  //Bundan sonra yanlış girilen email ve şifrelere hata göstermek için error ismini tanımladık. Aşağıda göstericem.
  if( isset($_POST['btn-login']) ) { 
    
    $email = trim($_POST['email']);
    $email = strip_tags($email);
    $email = htmlspecialchars($email);
    
    $pass = trim($_POST['pass']);
    $pass = strip_tags($pass);
    $pass = htmlspecialchars($pass);
    
    if(empty($email)){
     $error = true;
     $emailError = "Lütfen email adresinizi giriniz.";
    } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
     $error = true;
     $emailError = "Lütfen geçerli bir e-posta adresi girin.";
    }
    // Eğer email kısmı boş ise ya da düzgün bir mail girilmediyse uyarı mesajı geliyor.
    if(empty($pass)){
     $error = true;
     $passError = "Lütfen şifrenizi giriniz.";
    }
    // Eğer sifre girilmez ise uyarı mesajı geliyor.
    if (!$error) {
     
    $password = hash('sha256', $pass);
    
    $res=mysqli_query($conn,"SELECT userId, userName, userPass FROM users WHERE userEmail='$email'");
    $row=mysqli_fetch_array($res);
    $count = mysqli_num_rows($res);
    //Eğer kullanıcı giriş yaparsa home.php sayfasına yönlendir. Ama yapamadıysa hata mesajı göster.
    if( $count == 1 && $row['userPass']==$password ) {
      $_SESSION['user'] = $row['userId'];
      header("Location: home.php");
    } else {
      $errMSG = "Hatalı Kimlik Bilgisi, Lütfen tekrar deneyin...";
    }      
    }   
  }
?>

 <!DOCTYPE html>
  <html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Giriş Yap</title>
  <style type="text/css">
    /* Yazıların fontunu belirledim.*/
    @font-face {
      font-family: "Poppins-Regular";
      src: url("../fonts/poppins/Poppins-Regular.ttf"); }
    @font-face {
      font-family: "Poppins-SemiBold";
      src: url("../fonts/poppins/Poppins-SemiBold.ttf"); }

    /* Sayfadaki her bir kutu boyurunu bir border içine aldım.*/
    * {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box; }

    body {
      font-family: "Poppins-Regular";
      color: #333;
      font-size: 13px;
      margin: 0; }

    input, textarea, select, button {
      font-family: "Poppins-Regular";
      color: #333;
      font-size: 13px; }

    p, h1, h2, h3, h4, h5, h6, ul {
      margin: 0; }

    img {
      max-width: 100%; }

    ul {
      padding-left: 0;
      margin-bottom: 0; }

    a:hover {
      text-decoration: none; }

    :focus {
      outline: none; }

    .wrapper {
      min-height: 100vh;
      background-size: cover;
      background-repeat: no-repeat;
      display: flex;
      align-items: center; }

    .inner {
      padding: 20px;
      background: #fff;
      max-width: 850px;
      margin: auto;
      display: flex; }
      .inner .image-holder {
        width: 50%; }
      .inner form {
        width: 50%;
        padding-top: 36px;
        padding-left: 45px;
        padding-right: 45px; }
      .inner h3 {
        text-transform: uppercase;
        font-size: 25px;
        font-family: "Poppins-SemiBold";
        text-align: center;
        margin-bottom: 28px; }

    .form-group {
      display: flex; }
      .form-group input {
        width: 50%; }
        .form-group input:first-child {
          margin-right: 25px; }

    .form-wrapper {
      position: relative; }
      .form-wrapper i {
        position: absolute;
        bottom: 9px;
        right: 0; }

    .form-control {
      border: 1px solid #333;
      border-top: none;
      border-right: none;
      border-left: none;
      display: block;
      width: 100%;
      height: 30px;
      padding: 0;
      margin-bottom: 25px; }
      .form-control::-webkit-input-placeholder {
        font-size: 13px;
        color: #333;
        font-family: "Poppins-Regular"; }
      .form-control::-moz-placeholder {
        font-size: 13px;
        color: #333;
        font-family: "Poppins-Regular"; }
      .form-control:-ms-input-placeholder {
        font-size: 13px;
        color: #333;
        font-family: "Poppins-Regular"; }
      .form-control:-moz-placeholder {
        font-size: 13px;
        color: #333;
        font-family: "Poppins-Regular"; }

    select {
      -moz-appearance: none;
      -webkit-appearance: none;
      cursor: pointer;
      padding-left: 20px; }
      select option[value=""][disabled] {
        display: none; }

    button {
      border: none;
      width: 164px;
      height: 51px;
      margin: auto;
      margin-top: 40px;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 0;
      background: #333;
      font-size: 15px;
      color: #fff;
      vertical-align: middle;
      -webkit-transform: perspective(1px) translateZ(0);
      transform: perspective(1px) translateZ(0);
      -webkit-transition-duration: 0.3s;
      transition-duration: 0.3s; }
      button i {
        margin-left: 10px;
        -webkit-transform: translateZ(0);
        transform: translateZ(0); }
      button:hover i, button:focus i, button:active i {
        -webkit-animation-name: hvr-icon-wobble-horizontal;
        animation-name: hvr-icon-wobble-horizontal;
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out;
        -webkit-animation-iteration-count: 1;
        animation-iteration-count: 1; }

    @-webkit-keyframes hvr-icon-wobble-horizontal {
      16.65% {
        -webkit-transform: translateX(6px);
        transform: translateX(6px); }
      33.3% {
        -webkit-transform: translateX(-5px);
        transform: translateX(-5px); }
      49.95% {
        -webkit-transform: translateX(4px);
        transform: translateX(4px); }
      66.6% {
        -webkit-transform: translateX(-2px);
        transform: translateX(-2px); }
      83.25% {
        -webkit-transform: translateX(1px);
        transform: translateX(1px); }
      100% {
        -webkit-transform: translateX(0);
        transform: translateX(0); } }
    @keyframes hvr-icon-wobble-horizontal {
      16.65% {
        -webkit-transform: translateX(6px);
        transform: translateX(6px); }
      33.3% {
        -webkit-transform: translateX(-5px);
        transform: translateX(-5px); }
      49.95% {
        -webkit-transform: translateX(4px);
        transform: translateX(4px); }
      66.6% {
        -webkit-transform: translateX(-2px);
        transform: translateX(-2px); }
      83.25% {
        -webkit-transform: translateX(1px);
        transform: translateX(1px); }
      100% {
        -webkit-transform: translateX(0);
        transform: translateX(0); } }

    @media (max-width: 1199px) {
      .wrapper {
        background-position: right center; } }

    @media (max-width: 991px) {
      .inner form {
        padding-top: 10px;
        padding-left: 30px;
        padding-right: 30px; } }

    @media (max-width: 767px) {
      .inner {
        display: block; }
        .inner .image-holder {
          width: 100%; }
        .inner form {
          width: 100%;
          padding: 40px 0 30px; }

    button {
      margin-top: 60px; } }
  </style>
</head>

<body>
  <div class="container">
   <div id="login-form" class="wrapper" style="background-image: url('img/sporArkaPlan.jpg');">
    <div class="inner">
      <div class="image-holder">
        <img src="img/sporPencere2.jpg" alt="">
      </div>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">       
       <div class="col-md-12">        
          <div class="form-group">
            <h1 class="">Sitemize Giriş Yap!</h1>
          </div>         
          <div class="form-group">
            <hr />
          </div>               
          <?php
       if ( isset($errMSG) ) {        
          ?>
        <div class="form-group">
                 <div class="alert alert-danger">
        <span class="glyphicon glyphicon-info-sign" style="color: red;"> <?php echo $errMSG; ?></span>
                    </div>
                 </div>
                    <?php
       }
       ?>    
       <!-- Mail girişi için input oluşturdum, ve php ile hata mesajının gelmesini sağladım.-->            
        <div class="form-wrapper">
          <div class="input-group">         
            <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $email; ?>" maxlength="40" />
            <span class="text-danger" style="color: red;"><?php echo $emailError; ?></span>
          </div>         
        </div>
        <!-- Şifre girişi için input oluşturdum, ve php ile hata mesajının gelmesini sağladım.-->
        <div class="form-wrapper">
          <div class="input-group">          
          <input type="password" name="pass" class="form-control" placeholder="Şifre" maxlength="15" />
            </div>
            <span class="text-danger" style="color: red"><?php echo $passError; ?></span>
        </div>
        
        <!-- Fazladan boşluk bıraktım -->
        <div class="form-group">
          <br>
        </div>
        
        <div class="form-group">
         <button type="submit" class="btn btn-block btn-primary" name="btn-login" font-size: 20px;>Giriş Yap</button>
        </div>
        
        <div class="form-group">
          <br><br><br>
        </div>
        <center>
          <div class="form-wrapper">
            Hesabın yok ise <a href="signup.php" style="text-decoration: none; font-size: 15px; color: red;">Kayıt Ol!</a> 
          </div>
          <div class="form-group">
            <br><br><br>
          </div>
          <div class="form-wrapper">
            <a href="index.php" style="font-size: 15px; color: red;">Ana Sayfaya Geri Dön</a> 
          </div>
        </center>
      </div>
    </form>
  </div> 
</div>
</div>

</body>
</html>
<?php ob_end_flush(); ?>