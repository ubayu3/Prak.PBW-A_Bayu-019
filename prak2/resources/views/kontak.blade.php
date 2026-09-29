<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: #000
            color: #333;
        }

        nav {
            background: linear-gradient(135deg, #c90f0f, #0f0101);
            padding: 18px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav .logo {
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
            color: #2b2526;
        }

        .container {
            max-width: 900px;
            margin: 60px auto;
            padding: 20px;
        }

        .card {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        }

        h1 {
            color: #585252;
            margin-bottom: 10px;
        }

        .subtitle {
            color: #2e0303;
            margin-bottom: 30px;
        }

        .contact-info {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .contact-box {
            background: #eff6ff;
            padding: 25px;
            border-radius: 10px;
        }

        .contact-box h3 {
            color: #3a2f30;
            margin-bottom: 8px;
        }

        .contact-box p {
            color: #555;
        }

        .back {
            display: inline-block;
            margin-top: 30px;
            background: linear-gradient(135deg, #c90f0f, #0f0101);
            color: white;
            padding: 12px 20px;
            border-radius: 8px;
            text-decoration: none;
        }

        .back:hover {
            background: linear-gradient(135deg, #c90f0f, #0f0101);

        @media (max-width: 600px) {
            nav {
                padding: 18px 20px;
            }

            .contact-info {
                grid-template-columns: 1fr;
            }

            .card {
                padding: 25px;
            }
        }
    </style>
</head>

<body>

    <nav>
        <div class="logo">Website Saya</div>

        <div>
            <a href="/">Home</a>
            <a href="/kontak">Kontak</a>
        </div>
    </nav>

    <div class="container">
        <div class="card">

            <h1>Hubungi Kami</h1>
            <p class="subtitle">
                Jika kamu memiliki pertanyaan atau membutuhkan informasi,
                silakan hubungi kami melalui kontak di bawah ini.
            </p>

            <div class="contact-info">

                <div class="contact-box">
                    <h3>📧 Email</h3>
                    <p>bayuks@websaya.com</p>
                </div>

                <div class="contact-box">
                    <h3>📱 Telepon</h3>
                    <p>0812-3456-7890</p>
                </div>

                <div class="contact-box">
                    <h3>📍 Alamat</h3>
                    <p>Jl. Merdeka No. 10, Bekasi Timur</p>
                </div>

                <div class="contact-box">
                    <h3>🕐 Jam Operasional</h3>
                    <p>Senin - Jumat, 08.00 - 17.00</p>
                </div>

            </div>

            <a href="/" class="back">← Kembali ke Home</a>

        </div>
    </div>

</body>
</html>
