<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hakkımızda - BilgiTek</title>
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

        /* Bölüm genel tasarımı */
        .section {
            padding: 50px 20px;
            text-align: center;
            background-color: #f9f9f9;
        }

        .section h1 {
            margin-bottom: 20px;
            font-size: 2rem;
            color: #007BFF;
            font-weight: bold;
        }

        .section p {
            margin-bottom: 15px;
            font-size: 1.2rem;
            line-height: 1.6;
            color: #333;
        }

        footer {
            text-align: center;
            padding: 10px;
            background-color: #333;
            color: white;
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
                <li><a href="index.php#home" class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">Ana Sayfa</a></li>
                <li><a href="hakkimizda.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'hakkimizda.php' ? 'active' : ''; ?>">Hakkımızda</a></li>
                <li><a href="iletisim.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'iletisim.php' ? 'active' : ''; ?>">İletişim</a></li>
            </ul>
        </nav>
    </header>

    <section class="section">
        <h1>Hakkımızda</h1>
        <p>BilgiTek, 2015 yılında teknoloji ve yazılım alanında yenilikçi çözümler sunmak amacıyla kurulmuştur. Misyonumuz, müşterilerimize modern ve sürdürülebilir hizmetler sunarak onların başarılarına katkıda bulunmaktır.</p>
        <p>Vizyonumuz, global ölçekte tanınan bir teknoloji şirketi olmaktır.</p>
    </section>

    <footer>
        <p>&copy; 2024 BilgiTek. Tüm Hakları Saklıdır.</p>
    </footer>
</body>
</html>
