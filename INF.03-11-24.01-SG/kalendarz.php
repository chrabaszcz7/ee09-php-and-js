<?php
$link = new mysqli('localhost','root','','terminarz');
$sql="SELECT DISTINCT wpis FROM zadania
WHERE dataZadania BETWEEN '2020-07-1' AND '2020-07-7' AND NOT wpis='';";
$result=$link->query($sql);
$zadania=$result->fetch_all(1);

$sql="SELECT dataZadania,wpis FROM zadania
WHERE miesiac='lipiec';";
$result=$link->query($sql);
$bloki=$result->fetch_all(1);
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadania na lipiec</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>
    <header>
        <section class="left">
            <img src="logo1.png" alt="lipiec">
        </section>
        <section class="right">
            <h1>TERMINARZ</h1>
            <p>najbliższe zadania: <?php
                foreach($zadania as $zadanie){
                    echo"{$zadanie['wpis']}; ";
                }
            ?></p>
        </section>
    </header>
    <main>
        <!-- skrypt2 -->
        <?php
            foreach($bloki as $blok){
                echo"
        <secton class='blok'>
            <h6>{$blok['dataZadania']}</h6>
            <p>{$blok['wpis']}</p>
         </secton>";
            }
        ?>

        
    </main>
    <footer>
        <a href="sierpien.html">Terminarz na sierpień</a>
        <p>Stronę wykonał: 00000000000</p>
    </footer>
</body>
</html>
<?php
$link -> close();
?>