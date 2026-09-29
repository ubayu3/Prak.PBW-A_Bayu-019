<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tentang Kami - LaraPress</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f7fb;
            color: #333;
        }

        nav {
            background: linear-gradient(135deg, #c90f0f, #0f0101);
            padding: 18px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            color: white;
            font-size: 22px;
            font-weight: bold;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 25px;
            font-weight: bold;
        }

        nav a:hover {
            color: #dbeafe;
        }

        .container {
            max-width: 850px;
            margin: 60px auto;
            padding: 20px;
        }

        .card {
            background: white;
            padding: 45px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
            text-align: center;
        }

        h1 {
            color:linear-gradient(135deg, #c90f0f, #0f0101);
            margin-bottom: 20px;
        }

        p {
            color: #555;
            line-height: 1.8;
            margin-bottom: 25px;
        }

        .highlight {
            background: #eff6ff;
            border-left: 5px solid #c00606;
            padding: 20px;
            margin: 25px 0;
            text-align: left;
            border-radius: 8px;
        }

        .buttons a {
            display: inline-block;
            background: linear-gradient(135deg, #c90f0f, #0f0101);
            color: white;
            padding: 12px 20px;
            margin: 5px;
            border-radius: 8px;
            text-decoration: none;
            transition: 0.2s;
        }

        .buttons a:hover {
            background: #ebebeb];
        }

        .buttons .secondary {
            background: #e5e7eb;
            color: #333;
        }

        .buttons .secondary:hover {
            background: #d1d5db;
        }

        footer {
            text-align: center;
            color: #888;
            margin-top: 40px;
            font-size: 14px;
        }

        @media (max-width: 600px) {
            nav {
                padding: 18px 20px;
            }

            nav a {
                margin-left: 10px;
            }

            .container {
                margin: 30px auto;
            }

            .card {
                padding: 30px 20px;
            }
        }
    </style>
</head>

<body>

    <nav>
        <div class="logo">LaraPress</div>

        <div>
            <a href="/">Home</a>
            <a href="/tentang">Tentang</a>
            <a href="/kontak">Kontak</a>
        </div>
    </nav>

    <div class="container">
        <div class="card">

            <h1>Tentang LaraPress</h1>

            <p>
                Selamat datang di <strong>LaraPress</strong>!
                LaraPress adalah sebuah proyek blog sederhana yang dibuat
                untuk mempelajari dasar-dasar framework
                <strong>Laravel 12</strong>.
            </p>

            <div class="highlight">
                <strong>💡 Tentang Proyek</strong>
                <p>
                    Proyek ini digunakan untuk memahami konsep dasar Laravel,
                    seperti routing, view, Blade Template, dan pembuatan
                    halaman web sederhana.
                </p>
            </div>

            <p>
                Semoga proyek sederhana ini dapat menjadi langkah awal
                untuk membuat aplikasi web yang lebih menarik dan kompleks
                menggunakan Laravel.
            </p>

            <div class="buttons">
                <a href="/">← Kembali ke Home</a>
                <a href="/kontak" class="secondary">Hubungi Kami</a>
            </div>

        </div>

        <footer>
            &copy; 2026 LaraPress. Dibuat untuk belajar Laravel.
        </footer>
    </div>

</body>
</html>
