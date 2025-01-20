<?php include "../View/header.php" ?>
<link rel="stylesheet" href="../CSS/album.css">

<main>

<div class="carousel">
    <input type="radio" name="slider" id="item-1" checked>
    <input type="radio" name="slider" id="item-2">
    <input type="radio" name="slider" id="item-3">
    
    <div class="cards">
        <label class="card" for="item-1" id="song-1">
            <img src="../images/princesse1.jpeg" alt="Image 1">
        </label>
        <label class="card" for="item-2" id="song-2">
            <img src="../images/princesse2.jpeg" alt="Image 2">
        </label>
        <label class="card" for="item-3" id="song-3">
            <img src="../images/Yanis.JPG" alt="Image 3">
        </label>
    </div>
</div>

<div class="navigation">
    <label for="item-1" class="bar"></label>
    <label for="item-2" class="bar"></label>
    <label for="item-3" class="bar"></label>
</div>


</main>

<?php include "../View/footer.php" ?>