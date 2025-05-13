<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim - BilgiTek</title>
    <link rel="stylesheet" href="style.css">

    <style>
        /* Genel menü tasarımı */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #007BFF;
            color: white;
            padding: 15px 20px;
        }

        .logo a {
            text-decoration: none;
            color: white;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .menu {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .menu li {
            margin-left: 20px;
        }

        .menu a {
            text-decoration: none;
            color: white;
            font-size: 1rem;
            padding: 10px 15px;
            transition: background-color 0.3s, color 0.3s;
        }

        .menu a:hover {
            background-color: white;
            color: #007BFF;
            border-radius: 5px;
        }

        .menu a.active {
            font-weight: bold;
            text-decoration: underline;
        }

        /* Özel iletişim sayfası tasarımı */
        .contact-section {
            padding: 50px 20px;
            background-color: #f4f4f4;
            text-align: center;
        }

        .contact-form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
        }

        .contact-form h1 {
            margin-bottom: 20px;
            font-size: 1.8rem;
            color: #007BFF;
            font-weight: bold;
            text-transform: uppercase;
        }

        .contact-form label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
            text-align: left;
            color: #333;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #bbb;
            border-radius: 8px;
            font-size: 1rem;
            outline: none;
            transition: border-color 0.3s;
        }

        .contact-form input:focus,
        .contact-form textarea:focus {
            border-color: #007BFF;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
        }

        .contact-form button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 12px 25px;
            font-size: 1.1rem;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
        }

        .contact-form button:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        .form-message {
            margin-top: 20px;
            font-size: 1rem;
            font-weight: bold;
            color: green;
        }

        /* Mobil uyumluluk */
        @media (max-width: 600px) {
            .contact-form {
                padding: 15px;
            }

            .contact-form h1 {
                font-size: 1.5rem;
            }

            .contact-form button {
                font-size: 1rem;
                padding: 10px 20px;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <a href="index.php">BilgiTek</a>
        </div>
        <nav>
            <ul class="menu">
                <li><a href="index.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">Ana Sayfa</a></li>
                <li><a href="hakkimizda.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'hakkimizda.php' ? 'active' : ''; ?>">Hakkımızda</a></li>
                <li><a href="iletisim.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'iletisim.php' ? 'active' : ''; ?>">İletişim</a></li>
            </ul>
        </nav>
    </header>

    <section class="contact-section">
        <h1>Bizimle İletişime Geçin</h1>
        <form action="iletisim.php" method="POST" class="contact-form">
            <label for="ad">Ad Soyad:</label>
            <input type="text" id="ad" name="ad" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="mesaj">Mesaj:</label>
            <textarea id="mesaj" name="mesaj" rows="5" required></textarea>

            <button type="submit">Gönder</button>

            <?php if (!empty($form_durumu)) { ?>
                <p class='form-message'><?php echo $form_durumu; ?></p>
            <?php } ?>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 BilgiTek. Tüm Hakları Saklıdır.</p>
    </footer>
</body>
</html>
<?php
require_once 'veritabani.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ad = $_POST['ad'] ?? null;
    $email = $_POST['email'] ?? null;
    $mesaj = $_POST['mesaj'] ?? null;

    if ($ad && $email && $mesaj) {
        try {
            $sql = "INSERT INTO iletisim (ad, email, mesaj) VALUES (:ad, :email, :mesaj)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':ad' => $ad,
                ':email' => $email,
                ':mesaj' => $mesaj
            ]);
            $form_durumu = "Mesaj başarıyla kaydedildi!";
        } catch (PDOException $e) {
            $form_durumu = "Mesaj kaydedilirken hata oluştu: " . $e->getMessage();
        }
    } else {
        $form_durumu = "Tüm alanları doldurmanız gerekiyor!";
    }
}
?>
