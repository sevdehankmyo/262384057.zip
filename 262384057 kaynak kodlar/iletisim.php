<!DOCTYPE html>
    <!-- İletişim sayfasını yapmak için kullanılan kodlar
    sevdehan yılmaz
    262384057 -->
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Iletişim - ABAK İnşaat</title>
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
            <div class="logo"><span>ABAK</span> İnşaat</div>
            <div class="menu">
                <ul>
                    <li><a href="index.php">Ana Sayfa</a></li>
                    <li><a href="hakkimizda.php">Hakkımızda</a></li>
                    <li><a href="hizmetler.php">Hizmetler</a></li>
                    <li><a href="projeler.php">Projeler</a></li>
                    <li><a href="iletisim.php" class="aktif">İletişim</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>

<div class="bolum" style="padding-top: 50px;">
    <div class="kapsayici">
        <div class="bolum-baslik">
            <h2>Bize Ulaşın</h2>
            <p>Projeleriniz için ücretsiz fiyat teklifi alın</p>
            <div class="cizgi"></div>
        </div>
        <div class="iletisim-grid">
            <div class="iletisim-bilgi">
                <h3>İletişim Bilgileri</h3>
                <div class="bilgi-satir">
                    <div class="bilgi-ikon">&#128205;</div>
                    <div>
                        <strong>Adres</strong>
                        <p>Runguçpaşa Cad. No:42, Bursa<br>Karacabey, Türkiye</p>
                    </div>
                </div>
                <div class="bilgi-satir">
                    <div class="bilgi-ikon">&#128222;</div>
                    <div>
                        <strong>Telefon</strong>
                        <p>0530 060 22 68<br>0530 306 22 68</p>
                    </div>
                </div>
                <div class="bilgi-satir">
                    <div class="bilgi-ikon">&#9993;</div>
                    <div>
                        <strong>E-posta</strong>
                        <p>https://www.instagram.com/abak_insaat/<br></p>
                    </div>
                </div>
                <div class="bilgi-satir">
                    <div class="bilgi-ikon">&#128337;</div>
                    <div>
                        <strong>Çalışma Saatleri</strong>
                        <p>Pazartesi - Cuma: 08:00 - 18:00<br>Cumartesi: 09:00 - 14:00</p>
                    </div>
                </div>
            </div>
            <div class="iletisim-form">
                <h3 style="margin-bottom: 20px; color: #1a1a2e;">Mesaj Gönderin</h3>
                <form method="post" action="mesaj.php">
                    <label>Ad Soyad</label>
                    <input type="text" name="ad" required>

                    <label>Telefon</label>
                    <input type="text" name="telefon" required>

                    <label>E-posta</label>
                    <input type="email" name="email" required>

                    <label>Mesajınız</label>
                    <textarea name="mesaj" required></textarea>

                    <button type="submit" class="btn">Gonder</button>
                </form>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="kapsayici">
        <div class="footer-grid">
            <div>
                <h4>ABAK İnşaat</h4>
                <p>Güvenilir inşaat çözmmleri<br>ile yanınızdayız.</p>
            </div>
            <div>
                <h4>Sayfalar</h4>
                <ul>
                    <li><a href="index.php">Ana Sayfa</a></li>
                    <li><a href="hakkimizda.php">Hakkımızda</a></li>
                    <li><a href="hizmetler.php">Hizmetler</a></li>
                    <li><a href="iletisim.php">İletişim</a></li>
                </ul>
            </div>
            <div>
                <h4>İletişim</h4>
                <p>Runguçpaşa Cad. No:42<br>Bursa / Karacabey</p>
                <p>Tel: 0530 060 22 68</p>
            </div>
        </div>
        <div class="alt-cizgi">
            <p>2026 ABAK İnşaat. Tüm hakları saklıdır.</p>
        </div>
    </div>
</footer>

</body>
</html>
