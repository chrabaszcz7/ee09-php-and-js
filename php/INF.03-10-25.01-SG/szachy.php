<?php
$link = new mysqli('localhost','root','','szachy');
$sql="SELECT pseudonim,tytul,ranking,klasa FROM zawodnicy
WHERE ranking>2787
ORDER BY ranking DESC;";
$result=$link->query($sql);
$zawodnicy = $result-> fetch_all(1);

$sql="SELECT pseudonim, klasa FROM zawodnicy
ORDER BY RAND() LIMIT 2;";
$result=$link->query($sql);
$zawodnicy2 = $result-> fetch_all(1);

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KOŁO SZACHOWE</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h2><em>Koło szachowe gambit piona</em></h2>
    </header>
    <main>
        <section class="left">
            <h4>Polecane link</h4>
            <ul>
                <li><a href="kw1.jpg">kwerenda1</a></li>
                <li><a href="kw2.jpg">kwerenda2</a></li>
                <li><a href="kw3.jpg">kwerenda3</a></li>
                <li><a href="kw4.jpg">kwerenda4</a></li>
            </ul>
            <img src="logo.png" alt="Logo koła">
        </section>
        <section class="right">
            <h3>Najlepsi gracze naszego koła</h3>
            <table>
                <tr>
                    <td>Pozycja</td>
                    <td>Pseudonim</td>
                    <td>Tytuł</td>
                    <td>Ranking</td>
                    <td>Klasa</td>
                </tr>
                <!-- skrypt1 -->
                <?php
                $i=1;
                    foreach($zawodnicy as $zawodnik){
                        echo"
                <tr>
                    <td>$i</td>
                    <td>{$zawodnik['pseudonim']}</td>
                    <td>{$zawodnik['tytul']}</td>
                    <td>{$zawodnik['ranking']}</td>
                    <td>{$zawodnik['klasa']}</td>
                </tr>";
                $i++;
                }

                ?>
            </table>
            <h4>
            <?php
                foreach($zawodnicy2 as $zawodnik){
                    echo"{$zawodnik['pseudonim']} {$zawodnik['klasa']} ";
                }
            ?>
            </h4>
            <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
                <button>Losuj nową parę graczy</button>
            </form>
            <p>Legenda: AM - Absolutny Mistrz, SM - Szkolny Mistrz, PM - Mistrz Poziomu, KM - Mistrz Klasowy</p>
        </section>
    </main>
    <footer>
        <p>Strone Wykonał: 00000000000</p>
    </footer>

</body>
</html>