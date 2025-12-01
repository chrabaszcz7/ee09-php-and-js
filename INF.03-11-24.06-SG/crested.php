<?php
$link = new mysqli('localhost','root','','hodowla');
$sql="SELECT rasa FROM rasy;";
$result = $link -> query($sql);
$rasy = $result -> fetch_all(1);


$sql="SELECT DISTINCT data_ur,miot,rasa FROM swinki
    INNER JOIN rasy ON rasy.id = swinki.rasy_id
WHERE rasy_id=7;";
$result = $link -> query($sql);
$swinki = $result -> fetch_all(1);

$sql="SELECT imie,cena,opis FROM swinki
    INNER JOIN rasy ON rasy.id = swinki.rasy_id
WHERE rasy_id=7;";
$result = $link -> query($sql);
$swinki2 = $result -> fetch_all(1);
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hodowla świnek morskich</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>Hodowla świnek morskich - zamów świnkowe maluszki</h1>
    </header>
    <section class="flex">
        <section class="left">
            <nav>
                <a href="peruwianka.php">Rasa Peruwianka</a>
                <a href="american.php">Rasa American</a>
                <a href="crested.php">Rasa Crested</a>
            </nav>
            <main>
                <img src="Crested.jpg" alt="Świnka morska rasy crested">
                <!-- skrypt2 -->
                <?php
                    foreach($swinki as $swinka){
                        echo"
                    <h2>Rasa: {$swinka['rasa']}</h2>
                    <p>Data urodzenia: {$swinka['data_ur']}</p>
                    <p>Oznaczenie miotu: {$swinka['miot']}</p>";
                    }
                    
                ?>
                <hr>
                <h2>Świnki w tym miocie</h2>
                <!-- skrypt3 -->
                <?php
                    foreach($swinki2 as $swinka){
                        echo"
                        <h3>{$swinka['imie']} - {$swinka['cena']} zł</h3>
                        <p>{$swinka['opis']}</p>";
                    }
                    
                ?>
            </main>
        </section>

        <section class="right">
            <h3>Poznaj wszystkie rasy świnek morskich</h3>
            <ol>
                <?php
                    foreach($rasy as $rasa){
                        echo "<li>{$rasa['rasa']}</li>";
                    }

                ?>
            </ol>
        </section>
    </section>
    <footer>
        <p>Stronę wykonał: 00000000000</p>
    </footer>
</body>
</html>
<?php
$link -> close();
?>