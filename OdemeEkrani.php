<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  body {
    font-family: Arial;
    font-size: 17px;
    padding: 8px;
  }

  * {
    box-sizing: border-box;
  }

  .row {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
    margin: 0 -16px;
  }

  .col-25 {
    -ms-flex: 25%; /* IE10 */
    flex: 25%;
  }

  .col-50 {
    -ms-flex: 50%; /* IE10 */
    flex: 50%;
  }

  .col-75 {
    -ms-flex: 75%; /* IE10 */
    flex: 75%;
  }

  .col-25,
  .col-50,
  .col-75 {
    padding: 0 16px;
  }

  .container {
    background-color: #f2f2f2;
    padding: 5px 20px 15px 20px;
    border: 1px solid lightgrey;
    border-radius: 3px;
  }

  input[type=text] {
    width: 100%;
    margin-bottom: 20px;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 3px;
  }

  label {
    margin-bottom: 10px;
    display: block;
  }

  .icon-container {
    margin-bottom: 20px;
    padding: 7px 0;
    font-size: 24px;
  }

  .btn {
    background-color: #4CAF50;
    color: white;
    padding: 12px;
    margin: 10px 0;
    border: none;
    width: 100%;
    border-radius: 3px;
    cursor: pointer;
    font-size: 17px;
  }

  .btn:hover {
    background-color: #45a049;
  }

  a {
    color: #2196F3;
  }

  hr {
    border: 1px solid lightgrey;
  }

  span.price {
    float: right;
    color: grey;
  }

  @media (max-width: 800px) {
    .row {
      flex-direction: column-reverse;
    }
    .col-25 {
      margin-bottom: 20px;
    }
  }
</style>
</head>

<body>
<h2>Fitness Kursu Ödeme Formu</h2>
<p>Fitness Kursumuzun aylık, üç aylık, yıllık ücretleri olan online ödeme sayfası burasıdır. Eğer yüz yüze ödeme yapmak istiyorsanız iletişim kısmında adresimiz bulunmaktadır.</p>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="Home.php">     
        <div class="row">
          <div class="col-50">
            <h3>Fatura Adresi</h3>
            <label for="fname"><i class="fa fa-user"></i> Tam İsim</label>
            <input type="text" id="fname" name="firstname" placeholder="Muhammed Eren Yarar">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="eren@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Adres</label>
            <input type="text" id="adr" name="address" placeholder="">
            <label for="city"><i class="fa fa-institution"></i> Şehir</label>
            <input type="text" id="city" name="city" placeholder="İstanbul">

            <div class="row">
              <div class="col-50">
                <label for="state">İlçe</label>
                <input type="text" id="state" name="state" placeholder="Sarıyer">
              </div>
              <div class="col-50">
                <label for="zip">Posta Kodu</label>
                <input type="text" id="zip" name="zip" placeholder="34396">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Ödeme</h3>
            <label for="fname">Kabul Edilen Kartlar</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Kartta Geçen İsim</label>
            <input type="text" id="cname" name="cardname" placeholder="Muhammed Eren Yarar">
            <label for="ccnum">Kredi Kartının Numarası</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">AY</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="Nisan">
            <div class="row">
              <div class="col-50">
                <label for="expyear">YIL</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>         
        </div>
        <input type="submit" value="Ödemeyi Yap" class="btn btn-primary" onclick="OdemeAlert()">
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
      <h4>Kart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>3</b></span></h4>
      <p><a href="Home.php">Kurs 1</a> <span class="price">100 TL</span></p>
      <p><a href="Home.php">Kurs 2</a> <span class="price">320 TL</span></p>
      <p><a href="Home.php">Kurs 3</a> <span class="price">500 TL</span></p>
      <hr>
      <p>Toplam <span class="price" style="color:black"><b>920 TL</b></span></p>
    </div>
    <br>
    <center>
      <a href="Home.php" type="button" class="btn btn-primary" style="background-color: black; color: white; text-decoration: none;">Ana Sayfaya Geri Dön</a>
    </center>
  </div>
</div>

<script>
//Kullanıcı Ödemeyi kabul ettiğinde alert gelerek mesaj vermesini sağladık -> onClick ()
function OdemeAlert() {
  alert("Ödemeniz Başarıyla gerçekleşti...");
}

</script>
</body>
</html>
