<?php

include __DIR__ . '/Views/header.php';
include __DIR__ . '/Models/Product.php';
include __DIR__ . '/Models/Cani.php';
include __DIR__ . '/Models/Gatti.php';
include __DIR__ . '/Models/Uccelli.php';
include __DIR__ . '/Models/Pesci.php';


// $movies = Product::fetchAll('movies_db', 'Movie');
// $books = Product::fetchAll('books_db', 'Book');
$cani =Dogs::fetchAll();
$gatti =Cats::fetchAll();
$uccelli =Birds::fetchAll();
$pesci =Fishes::fetchAll();




?>
<main class="container">
    <section>
        <h2>Dog food</h2>
        <div class="row">
            <?php foreach ($cani as $cane) {
                echo $cane->printCard($cane->formatItem());
            } ?>
        </div>
    </section>
<hr>
    <section>
        <h2>Cat food</h2>
        <div class="row">
            <?php foreach ($gatti as $gatto) {
                echo $gatto->printCard($gatto->formatItem());
            } ?>
        </div>
    </section>
<hr>
    <section>
        <h2>Bird food</h2>
        <div class="row">
            <?php foreach ($uccelli as $uccello) {
                echo $uccello->printCard($uccello->formatItem());
            } ?>
        </div>
    </section>
<hr>
    <section>
        <h2>Fish food</h2>
        <div class="row">
            <?php foreach ($pesci as $pesce) {
                echo $pesce->printCard($pesce->formatItem());
            } ?>
        </div>
    </section>

    

</main>

<?php include __DIR__ . '/Views/footer.php'; ?>