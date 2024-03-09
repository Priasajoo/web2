<?php
$genre = array ("Drama", "Action", "Advanture", "Comedy", "Drama", "Fantasy", "Horror", "Romance");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The movie naruto</title>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .hewan {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <center><h1>Daftar pemain naruto the movie</h1></center>
    <center><img src="array/img/cover.jpg" alt="cover"></center>

    <h3>1. sasuke uchiha</h3>
    <img src="array/img/1.jpg" alt="">
    <br>
    Genre Film <?= $genre[1]; ?>, <?= $genre[3]; ?>, <?= $genre[4]; ?>, <?= $genre[6]; ?>
    <p>karakter ini memiliki sifat yang unik yaitu sangat dingin dan cuek kepada semua orang kecuali istrinya</p>
    <p>seseorang ninja yang kuat dan pemeberani membela desanya.</p>
    
    <h3>2. naruto dan saasuke</h3>
    <img src="array/img/2.jpg" alt="">
    <br>
    Genre Film <?= $genre[0]; ?>, <?= $genre[1]; ?>, <?= $genre[5]; ?>
    <p>seorang dua sahabat yang pernah berselisih dan dua duanya takut istri tercinta nya.</p>
    

    <h3>3. uchiha obito</h3>
    <img src="array/img/3.jpg" alt="">
    <br>
    Genre Film <?= $genre[0]; ?>, <?= $genre[1]; ?>, <?= $genre[3]; ?>
    <p>difilm ini menceritakan tentang seorang ninja konoha yang dilatih dikonoha sejak kecil dan berkhianat karena sang pujaan hati dibunuh oleh teman sendiri.</p>
    

    <h3>4. Tsunade atau nenek tua</h3>
    <img src="array/img/4.jpg" alt="">
    <br>
    Genre Film <?= $genre[1]; ?>, <?= $genre[4]; ?>, <?= $genre[5]; ?>
    <p>seorang hokage perempuan pertama diserial ini yang hebat dan baik hati.</p>
    

    <h3>5. HINATA</h3>
    <img src="array/img/5.jpg" alt="">
    <br>
    Genre Film <?= $genre[0]; ?>, <?= $genre[1]; ?>, <?= $genre[5]; ?>
    <p>ISTRI tercinta naruto yang sangat cantik dan ramah juga sayang anak , dia seorang ninja juga.</p>
    
</body>

</html>