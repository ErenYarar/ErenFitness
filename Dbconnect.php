<!-- Dbconnect.php ile projemi phpmyadmin sitesine bağlayabiliyorum -->
<!-- 
Kullanıcı kayıt olduğunda phpmyadmin sitesinde kullanıcının isimini, mailini ve hangi tarhide kayıt olduğunu görebilicem. 
 -->
<?php

/*
Error_reporting () işlevi hangi hataların raporlanacağını belirtir. Çalışma zamanında error_reporting yönergesini ayarlar.
Geçerli komut dosyasının hata raporu düzeyini belirtir. Değer numarası ve sabit ad kabul edilir.
*/
 error_reporting( ~E_DEPRECATED & ~E_NOTICE );
 
 define('DBHOST', 'localhost');
 define('DBUSER', 'root');
 define('DBPASS', '1234');
 define('DBNAME', 'blog');
 
 $conn = mysqli_connect(DBHOST,DBUSER,DBPASS); //$conn isimli terim oluşturduk ve bunu phpmyadmin sitesine kayıt olduğumuz bilgilere eşitledik.
 $dbcon = mysqli_select_db($conn,DBNAME); //$dbcon isimli terim oluşturduk ve bunu phpmyadmin'de kurduğumuz 'blog' isimli veritabanına eşitledik.
 
/*
phpmyadmin sitesine bağlanamıyorsak;
Yani phpmyadminde kayıt ismimiz olan 'root' ve
şifremiz olan 1234 ile bağlantı kuramaz isek fail mesajı verilsin. 
*/
 if ( !$conn ) {
  die("Connection failed : " . mysqli_error());
 }
 
 //phpmyadmin'de yarattığım 'blog' isimi ile bağlantı kuramazsak fail mesajı verilsin.
 if ( !$dbcon ) {
  die("Database Connection failed : " . mysqli_error());
 }
?>