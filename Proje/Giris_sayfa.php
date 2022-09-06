<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>	Crud İŞLEMLER</title>
</head>
<body>
 <h1>Veri Tabanı İslemleri</h1>
 <hr>
 <form action="islem.php" required="" method="POST">
 	Mail: <input type="email" name="mail" required="">
    Sifre: <input type="password" name="sifre" required="">
    <button type="submit" name="giris">Giriş Yap</button>
 	<button type="submit" name="ekle">Kaydol</button>
 </form>
</body>
</html>