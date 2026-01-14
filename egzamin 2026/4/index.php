<?php
$link = new mysqli('localhost','root','','sklep2');





$sql="SELECT nazwa,cena FROM towary
LIMIT 4;";
$result = $link -> query($sql);
$towar = $result -> fetch_all(1);

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hurtownia szkolna</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>Hurtownia z najlepszymi cenami</h1>
    </header>
    <main>
        <section class="left">
            <br><h2>Nasze ceny</h2><br>
            <table>
                <?php
                    foreach($towar as $towary){
                        echo"
                    <tr>
                        <td>{$towary['nazwa']}</td>
                        <td>{$towary['cena']}</td>
                    </tr>";
                    }
                ?>
                
            </table>
            <!-- skrypt1 -->
        </section>
        <section class="mid">
            <br><h2>Koszt zakupów</h2><br>
            <form action="" method="post">
                <label for="artykuly">wybierz artykuł: </label>
                <select name="artykuly" id="artykuly">
                    <option value="Zeszyt 60 kartek">Zeszyt 60 kartek</option>
                    <option value="Zeszyt 32 kartki">Zeszyt 32 kartki</option>
                    <option value="Cyrkiel">Cyrkiel</option>
                    <option value="Linijka 30 cm">Linijka 30 cm</option>
                </select><br>
                <label for="sztuki">liczba sztuk: </label><input type="number" name="sztuki" id="sztuki"><br>
                <button name="btnoblicz">OBLICZ</button>
            </form>
            <!-- skrypt2 -->
            <?php
            $artykuly = $_POST['artykuly'] ?? NULL;
            $sztuki = $_POST['sztuki'] ?? NULL;
            if($artykuly && $sztuki && isset($_POST['btnoblicz'])){
                $sql="SELECT cena FROM towary
                WHERE nazwa='$artykuly';";
                $result = $link -> query($sql);
                $ceny = $result -> fetch_row();

                $cena = $ceny[0];
                echo"Wartosc zakupow: ". $cena*$sztuki;
            }

            ?>




        </section>
        <section class="right">
            <br><h2>Kontakt</h2><br>
            <img src="zakupy.png" alt="hurtownia">
            <br><p>e-mail: <a href="mailto:hurt@poczta2.p">hurt@poczta2.pl</a></p>
        </section>
    </main>
    <footer>
        <h4>Witrynę wykonał: 00000000000</h4>
    </footer>
</body>
</html>
<?php
$link -> close();
?>