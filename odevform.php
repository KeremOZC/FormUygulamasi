<?php
if(isset($_POST['Gonder'])){
$isim = $_POST['ad'];
$kull = $_POST['kul'];
$mail = $_POST['eposta'];
$okul = $_POST['sinif'];
$cepno = $_POST['numara'];
$aalan = $_POST['alan'];
echo "Adı ve Soyadı: $isim<br>";
echo "Kullanıcı Adı: $kull<br>";
echo "E-posta: $mail<br>";
echo "Sınıf: $okul<br>";
if(empty($cepno)){}
else{
echo "Telefon Numarası: $cepno<br>";}
echo "Fikirleriniz ve Görüşleriniz: $aalan<br>";
}
?>