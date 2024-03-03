<?php

$Hewan = [
    [
      "NAMA HEWAN" => "SINGA",
      "POSTUR TUBUH" => "BESAR",
      "TEMPAT TINGGAL " => "AFRIKA",
      "MAKANAN YANG DISUKAI" => "DAGING",
      "WATAK" => "GALAK DAN SOMBONG"
      "gambar" => "OIP.jpg"
    ]
 ];


 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Get</title>
 </head>
 <body>
    <h1>HEWAN BUAS</h1>
    <?php foreach ($Hewan as $hwn); ?>
    <ul>
    <l1>
        <a
        href="img/<?= $hwn["gambar"] ;?>">
        </li>
        <li>NAMA HEWAN : <?= $hwn["NAMA HEWAN"]; ?></li>
        <li>POSTUR TUBUH : <?= $hwn["POSTUR TUBUH"]; ?></li>
        <li>TEMPAT TINGGAL : <?= $hwn["TEMPAT TINGGAL"]; 
        ?></li><li>MAKANAN YANG DISUKAI : 
            <?= $hwn["MAKANAN YANG DISUKAI"]; ?></li>
        <li>WATAK : <?= $hwn["WATAK"]; ?></li>

    </l1> <?php endforeach; ?>

    
 </body>
 </html>

