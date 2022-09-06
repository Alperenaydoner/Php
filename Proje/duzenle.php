<?php 
require_once 'baglan.php';
require_once 'islem.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>	Crud İŞLEMLER</title>
</head>
<body>
 <h1>Veri Tabanı Düzenleme İslemleri</h1>
 <hr>
 <?php
/* if($_GET['durum']=="ok")
  echo "basarılı";
else 
echo "basarısız";*/
$bilgilersor=$db->prepare("Select * from bilgiler where ıd=:id ");
$bilgilersor->execute(array(
  'id' => $_GET['ıd']
));
$bilgilercek=$bilgilersor->fetch(PDO::FETCH_ASSOC);
?>
<form action="islem.php" required="" method="POST">
  Ad: <input type="text" name="ad" required="" value="<?php echo $bilgilercek['ad']; ?>">
Soyad: <input type="text" name="soyad" required=""value="<?php echo $bilgilercek['soyad'];?>">
  Mail: <input type="email" name="mail" required=""value="<?php echo $bilgilercek['mail']; ?>">
  <input type="hidden" value="<?php echo $bilgilercek['ıd'];?>" name="ıd" >
  <button type="submit" name="update">Formu Gönder</button>
</form>
<br>