<?php 
require_once 'baglan.php';
session_start();
?>
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
<table style="width:75%" border="1"> 
  <tr> 
    <th>MAİL</th>
    <th>Islemler</th>
    <th>Islemler</th>
  </tr>
  <?php   

$bilgilersor=$db->prepare("Select * from proje where id=:id  ")->fetch(PDO::FETCH_ASSOC);
$bilgilersor->execute('id'=>$_SESSION['kullanicid']);
while ($bilgilercek=$bilgilersor->fetch(PDO::FETCH_ASSOC))  {?>

  <tr>
    <td><?php echo $bilgilercek['eposta']?></td>
    <td align ="center"><a href="duzenle.php?ıd=<?php echo $bilgilercek['id'];?>"><button>Düzenle</button></a></td>
  </tr>
<?php }  ?>

</table>
</body>
</html>