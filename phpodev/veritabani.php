<?php
// Veritabanı bağlantısı
$host = 'localhost';
$dbname = 'bilgitek'; // Veritabanı adını doğru yazdığınızdan emin olun
$username = 'root';   // XAMPP varsayılan kullanıcı adı
$password = '';       // XAMPP varsayılan şifre (genelde boş bırakılır)

// Hata gösterimini etkinleştir (Geliştirme sırasında tüm hataları görebilmek için)
error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    // PDO ile MySQL bağlantısı oluşturma
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Veritabanı bağlantısı başarılıysa mesaj göster (isteğe bağlı)
    echo "Veritabanı bağlantısı başarılı!<br>";

} catch (PDOException $e) {
    // Bağlantı hatalarını yakala ve mesaj göster
    die("Veritabanı bağlantısı başarısız: " . $e->getMessage());
}

// Tablonun varlığını kontrol edin ve eksikse oluşturun
try {
    $sql = "CREATE TABLE IF NOT EXISTS iletisim (
        id INT AUTO_INCREMENT PRIMARY KEY,
        ad VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        mesaj TEXT NOT NULL,
        tarih TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    $pdo->exec($sql);
    echo "Tablo kontrol edildi ve gerekiyorsa oluşturuldu.<br>";
} catch (PDOException $e) {
    die("Tablo oluşturulurken bir hata oluştu: " . $e->getMessage());
}
?>
