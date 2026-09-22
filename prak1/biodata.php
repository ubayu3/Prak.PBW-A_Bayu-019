<?php
// biodata.php

function statusKelulusan(float $ipk): string
{
    // Validasi IPK
    if ($ipk < 0 || $ipk > 4) {
        return 'IPK Tidak Valid';
    }

    if ($ipk >= 3.50) return 'Sangat Memuaskan';
    if ($ipk >= 3.00) return 'Memuaskan';

    return 'Perlu Peningkatan';
}

function statusSemester(int $semester): string
{
    if ($semester >= 8) {
        return 'Semester Akhir';
    }

    if ($semester >= 5) {
        return 'Semester Menengah';
    }

    return 'Semester Awal';
}

$mahasiswa = [
    'nim' => '4524210019',
    'nama' => 'Bayu Sardo Situmorang',
    'prodi' => 'Teknik Informatika',
    'semester' => 5,
    'ipk' => 3.72,
    'email' => 'bayu@example.com'
];
?>

<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Biodata Mahasiswa</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f4f7;
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background-color: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #2563eb;
            text-align: center;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .predikat {
            margin-top: 20px;
            padding: 15px;
            background-color: #e0f2fe;
            border-radius: 8px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Biodata Mahasiswa</h1>

    <ul>
        <?php foreach ($mahasiswa as $kunci => $nilai): ?>
            <li>
                <strong><?= ucfirst($kunci) ?>:</strong>
                <?= htmlspecialchars((string)$nilai) ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <div class="predikat">
        <p>
            <strong>Predikat IPK:</strong>
            <?= htmlspecialchars(statusKelulusan($mahasiswa['ipk'])) ?>
        </p>

        <p>
            <strong>Status Semester:</strong>
            <?= htmlspecialchars(statusSemester($mahasiswa['semester'])) ?>
        </p>
    </div>

</div>

</body>
</html>
