<?php 
require_once 'baglan.php';
session_start();
if(isset($_POST['ekle']))
{
	$kayde=$db->prepare("INSERT into proje set sifre=:sifre,eposta=:mail");

	$insert= $kayde->execute(array(
		
		'sifre'=>$_POST['sifre'],
		'mail'=>$_POST['mail'],

	));

	if ($insert) {
		header("Location:Deneme.php");
		exit;
	}
}
if(isset($_POST['giris']))
{
	$giris=$db->prepare("Select * from proje where sifre=:sifre 
		 && eposta=:mail");

	$giris->execute(array(
		
		'sifre'=>$_POST['sifre'],
		'mail'=>$_POST['mail'],

	));
	$bilgilercek=$giris->fetch(PDO::FETCH_ASSOC);
	$_SESSION['kullaniniid']=$bilgilercek['id'];
	
}
?>
  <html>
<head>
</head>
<body>
<form action="Deneme.php" required="" method="POST">
<input type="hidden" value="<?php echo $bilgilercek['id'];?>" name="id" >
</form>
</body>
</html><?php

	$say=$giris->rowCount();

	if ($say>0) {

		header("Location:Deneme.php?$ıd");
		exit;
	}
	else {
		header("Location:Giris_sayfa.php");
	}

if(isset($_POST['update']))
{
	$ıd=$_POST['ıd'] ;
$kayde=$db->prepare("UPDATE  bilgiler set ad=:ad,soyad=:soyad,mail=:mail where ıd={$_POST['ıd']}");

	$insert= $kayde->execute(array(
		'ad'=>$_POST['ad'],
		'soyad'=>$_POST['soyad'],
		'mail'=>$_POST['mail'],

	));

	if ($insert) {
		header("Location:duzenle.php?durum=ok&&ıd=$ıd");
		exit;
	}
}
if($_GET['bilgilerimsil']=="ok")
{ echo "Hoşgeldinizz";

$sil=$db->prepare("DELETE * from bilgiler  where ıd=id");

	$kontrol= $sil->execute(array(
		"id"=> $_GET['ıd']
	));

	if ($kontrol) {
		header("Location:Deneme.php?durum=ok");
		exit;
	}exit; 
}
?>
