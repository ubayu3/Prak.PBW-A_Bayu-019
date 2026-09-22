<?php
// kalkulator.php

$hasil = null;
$pesan = '';
$ekspresi = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = filter_input(INPUT_POST, 'a', FILTER_VALIDATE_FLOAT);
    $b = filter_input(INPUT_POST, 'b', FILTER_VALIDATE_FLOAT);
    $operator = $_POST['operator'] ?? '+';

    // Validasi input
    if ($a === false || $a === null || $b === false || $b === null) {
        $pesan = 'Angka pertama dan kedua harus diisi dengan benar.';
    } else {
        switch ($operator) {
            case '+':
                $hasil = $a + $b;
                break;

            case '-':
                $hasil = $a - $b;
                break;

            case '*':
                $hasil = $a * $b;
                break;

            case '/':
                if ($b == 0) {
                    $pesan = 'Pembagian dengan nol tidak diperbolehkan.';
                } else {
                    $hasil = $a / $b;
                }
                break;

            // MODIFIKASI 1: Operasi pangkat
            case '^':
                $hasil = $a ** $b;
                break;

            // MODIFIKASI 2: Operasi modulus
            case '%':
                if ($b == 0) {
                    $pesan = 'Modulus dengan nol tidak diperbolehkan.';
                } else {
                    $hasil = $a % $b;
                }
                break;

            default:
                $pesan = 'Operator tidak valid.';
        }

        if ($pesan === '' && $hasil !== null) {
            $ekspresi = "$a $operator $b = $hasil";
        }
    }
}
?>

<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Kalkulator</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .kalkulator {
            background: white;
            width: 400px;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
        }

        h1 {
            text-align: center;
            color: #2563eb;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        input,
        select,
        button {
            padding: 12px;
            font-size: 16px;
            border-radius: 8px;
            border: 1px solid #ccc;
        }

        button {
            background: #2563eb;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background: #1d4ed8;
        }

        .hasil {
            margin-top: 20px;
            padding: 15px;
            background: #dcfce7;
            border-radius: 8px;
            color: #166534;
        }

        .error {
            margin-top: 20px;
            padding: 15px;
            background: #fee2e2;
            border-radius: 8px;
            color: #991b1b;
        }
    </style>
</head>

<body>

<div class="kalkulator">

    <h1>Kalkulator Sederhana</h1>

    <form method="post">

        <input
            type="number"
            step="any"
            name="a"
            placeholder="Angka pertama"
            required
        >

        <select name="operator">
            <option value="+">+</option>
            <option value="-">−</option>
            <option value="*">×</option>
            <option value="/">÷</option>
            <option value="^">Pangkat</option>
            <option value="%">Modulus</option>
        </select>

        <input
            type="number"
            step="any"
            name="b"
            placeholder="Angka kedua"
            required
        >

        <button type="submit">Hitung</button>

    </form>

    <?php if ($pesan): ?>

        <div class="error">
            <?= htmlspecialchars($pesan) ?>
        </div>

    <?php elseif ($hasil !== null): ?>

        <div class="hasil">
            <strong>Hasil:</strong>
            <?= htmlspecialchars($ekspresi) ?>
        </div>

    <?php endif; ?>

</div>

</body>

</html>
