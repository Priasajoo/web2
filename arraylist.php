<?php
$mahasiswa = ["zainul", "23510024", "Sistem Informasi", "zainul_23510024@stimata.ac.id"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Multidimensi</title>
</head>

<body>
    <h2>Daftar Mahasiswa</h2>
    <ul type="none">
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li><?= $mhs;  ?></li>
        <?php endforeach; ?>
    </ul>

</body>

</html>