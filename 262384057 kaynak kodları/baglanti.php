<?php
//Veritabanı bağlantısı sağlamak için kullanılan kodlar sevdehan yılmaz 262384057
$sunucu = "localhost";
$kullanici = "root";
$sifre = "";
$veritabani = "insaat_db";

$baglanti = mysqli_connect($sunucu, $kullanici, $sifre, $veritabani);

if (!$baglanti) {
    die("Veritabanina baglanilamadi");
}

mysqli_set_charset($baglanti, "utf8");
?>
