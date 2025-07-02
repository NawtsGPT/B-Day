<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sebuah Surat Untukmu You</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <audio id="background-music" loop src="./assets/audio"></audio>
    <div class="balloons-container">
    <div class="balloon" style="--speed:15; --size:140; --i:1;"><img src="./assets/ballon1.svg" alt="Balon Pink"></div>
    <div class="balloon" style="--speed:12; --size:150; --i:2;"><img src="./assets/ballon2.svg" alt="Balon Putih"></div>
    <div class="balloon" style="--speed:18; --size:130; --i:3;"><img src="./assets/ballon1.svg" alt="Balon Pink"></div>
    <div class="balloon" style="--speed:10; --size:160; --i:4;"><img src="./assets/ballon2.svg" alt="Balon Putih"></div>
    <div class="balloon" style="--speed:16; --size:180; --i:5;"><img src="./assets/ballon1.svg" alt="Balon Pink"></div>
    <div class="balloon" style="--speed:11; --size:155; --i:6;"><img src="./assets/ballon2.svg" alt="Balon Putih"></div>
    </div>
    <img src="./assets/ballon1.svg" class="gallery-decoration balloon-left" alt="Balon">
    <img src="./assets/cat-love.gif" class="gallery-decoration doll-right" alt="Boneka Lucu">

    <div class="container letter-page">
        <div class="letter-box">
            <p id="letter-text"></p>
        </div>
        <a href="galeri.php" id="gallery-button" class="btn-start hidden">Lanjut...</a>
    </div>
    
    <script>
        const letterContent = `Untuk You,

Loream Jeboed.`;
    </script>
    <script src="js/script.js"></script>
</body>
</html>