<?
// İletişim formundan gelen verileri veritabanına kaydetmek için kullanılan kodlar
include "baglanti.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ad = $_POST["ad"];
    $telefon = $_POST["telefon"];
    $email = $_POST["email"];
    $mesaj = $_POST["mesaj"];

    $sql = "INSERT INTO mesajlar (ad, telefon, email, mesaj) VALUES ('$ad', '$telefon', '$email', '$mesaj')";
    mysqli_query($baglanti, $sql);
}
?>
<!DOCTYPE html>
    <!--teklif alın sayfasını yapmak için kullanılan kodlar
    sevdehan yılmaz
    262384057 -->
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Mesaj Gönderildi</title>
    <link rel="stylesheet" href="stil.css">
</head>
<body>

<div class="ust-bar">
    <div class="kapsayici">
        <span>Tel: 0530 060 22 68</span>
        <span>https://www.instagram.com/abak_insaat/</span>
    </div>
</div>

<header>
    <div class="kapsayici">
        <div class="nav">
            <div class="logo"> <span>ABAK</span> İnşaat</div>
            <div class="menu">
                <ul>
                    <li><a href="index.php">Ana Sayfa</a></li>
                    <li><a href="hakkimizda.php">Hakkımızda</a></li>
                    <li><a href="hizmetler.php">Hizmetler</a></li>
                    <li><a href="projeler.php">Projeler</a></li>
                    <li><a href="iletisim.php">İletişim</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>

<div class="bolum" style="padding-top: 80px; text-align: center;">
    <div class="kapsayici">
        <h2 style="color: #27ae60; margin-bottom: 15px;">Mesajınız Başarıyla Gönderildi</h2>
        <p style="color: #666; margin-bottom: 30px;">En kısa sürede sizinle iletişime geçeceğiz.</p>
        <a href="index.php" class="btn">Ana Sayfaya Dön</a>
    </div>
</div>

<footer>
    <div class="kapsayici">
        <div class="alt-cizgi" style="border: none;">
            <p>2026 ABAK İnşaat. Tüm hakları saklıdır.</p>
        </div>
    </div>
</footer>

</body>
</html>
