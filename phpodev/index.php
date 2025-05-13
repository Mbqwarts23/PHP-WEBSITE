<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BilgiTek Web</title>
  
    <link rel="stylesheet" href="style.css">
    <script defer src="script.js"></script>
</head>
<body>
    <header>
        <div class="logo">
            <a href="index.php" id="refresh-logo">BilgiTek</a>
        </div>
      
        <button class="menu-toggle" aria-label="Menüyü Aç/Kapat">☰</button>
        <nav class="menu">
            <ul>
                <li><a href="index.php#home">Ana Sayfa</a></li>
                <li><a href="hakkimizda.php" target="_blank">Hakkımızda</a></li>
                <li><a href="iletisim.php">İletişim</a></li>
            </ul>
        </nav>
    </header>


    <section id="home" class="section">
        <h1>BilgiTek'e Hoş Geldiniz</h1>
        <p>BilgiTek, 2015 yılından bu yana teknoloji ve yazılım çözümleri sunmaktadır. Amacımız, müşterilerimizin iş süreçlerini modernleştirmek ve dijital dönüşümlerine katkıda bulunmaktır.</p>

        <h2>Hizmetlerimiz</h2>
        <div class="services">
            <div class="service">
                <img src="images/yazilim.jpg" alt="Yazılım Geliştirme">
                <h3>Yazılım Geliştirme</h3>
                <p>Özel ihtiyaçlara göre tasarlanmış, kullanıcı dostu ve güvenilir yazılımlar.</p>
            </div>
            <div class="service">
                <img src="images/siberGuvenlik.jpg" alt="Siber Güvenlik">
                <h3>Siber Güvenlik</h3>
                <p>Şirketinizi dijital tehditlere karşı koruma altına alıyoruz.</p>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 BilgiTek. Tüm Hakları Saklıdır.</p>
    </footer>
</body>
</html>
