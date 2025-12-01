<?php
$link = new mysqli('localhost','root','','konkurs');
$sql="SELECT nazwa,opis,cena FROM nagrody
    ORDER BY RAND() LIMIT 5;";
$result = $link -> query($sql);
$nagrody = $result -> fetch_all(1);

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WOLONTARIAT SZKOLNY</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>KONKURS - WOLONTARIAT SZKOLNY</h1>
    </header>
    <main>
        <section class="left">
            <h3>Konkursowe nagrody</h3>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <button>Losuj nowe nagrody</button>
            </form>
            <table>
                <tr>
                    <th>Nr</th>
                    <th>Nazwa</th>
                    <th>Opis</th>
                    <th>Wartosc</th>
                </tr>
                <!-- skrypt1 -->
                <?php
                $i=1;
                    foreach($nagrody as $nagroda){
                        echo"
                <tr>
                    <td>$i</th>
                    <td>{$nagroda['nazwa']}</td>
                    <td>{$nagroda['opis']}</td>
                    <td>{$nagroda['cena']}</td>
                </tr>";
                $i++;
                    }
                ?>
            </table>
        </section>
        <section class="right">
            <img src="puchar.png" alt="Puchar dla wolontariusza">
            <h4>Polecane linki</h4>
            <ul>
                <li><a href="kw1.jpg">Kwerenda1</a></li>
                <li><a href="kw2.jpg">Kwerenda2</a></li>
                <li><a href="kw3.jpg">Kwerenda3</a></li>
                <li><a href="kw4.jpg">Kwerenda4</a></li>
            </ul>
        </section>
    </main>
    <footer>
        <p>Numer zdającego: 00000000000</p>
    </footer>
</body>
</html>

<?php
// $link -> close();
?>