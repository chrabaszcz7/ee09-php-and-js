<?php
$link = new mysqli('localhost','root','','podroze');
$sql="SELECT nazwaPliku,podpis FROM zdjecia
ORDER BY podpis ASC;";
$result = $link -> query($sql);
$zdjecia = $result -> fetch_all(1);

$sql="SELECT cel,dataWyjazdu FROM wycieczki
WHERE dostepna=0;";
$result = $link -> query($sql);
$niedostepne = $result -> fetch_all(1);
?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poznaj Europę</title>
    <link rel="stylesheet" href="styl9.css">
</head>
<body>
    <header>
        <h1>BIURO PODRÓŻY</h1>
    </header>
    <main>
        <section class="left">
            <h2>Promocje</h2>
            <table>
                <tr>
                    <td>Warszawa</td>
                    <td>od 600 zł</td>
                </tr>
                <tr>
                    <td>Wenecja</td>
                    <td>od 1200 zł</td>
                </tr>
                <tr>
                    <td>Paryż</td>
                    <td>od 1200 zł</td>
                </tr>
            </table>
        </section>
        <section class="mid">
            <h2>W tym roku jedziemy do...</h2>
            <!-- skrypt1 -->
            <?php
                foreach($zdjecia as $zdjecie){
                    echo"<img src='{$zdjecie['nazwaPliku']}' alt='{$zdjecie['podpis']}' title='{$zdjecie['podpis']}'>";
                }
            ?>
        </section>
        <section class="right">
            <h2>Kontakt</h2>
            <a href="mailto:biuro@wycieczki.pl">napisz do nas</a>
            <p>telefon: 444555666</p>
        </section>
    </main>
    <section class="dane">
        <h3>W poprzednich latach byliśmy...</h3>
        <ol>
            <!-- skrypt2 -->
             <?php
                foreach($niedostepne as $dostepne){
                    echo"<li>Dnia {$dostepne['dataWyjazdu']} pojechaliśmy do {$dostepne['cel']}</li>";
                }

            ?>
        </ol>
    </section>
    <footer>
        <p>Stronę wykonał: 00000000000</p>
    </footer>
</body>
</html>
<?php
$link -> close();
?>