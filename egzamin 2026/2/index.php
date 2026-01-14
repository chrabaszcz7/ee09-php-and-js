<?php
$link = new mysqli('localhost','root','','bazar');
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zdrowy Bazarel</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>Zdrowy bazarek</h1>
    </header>
    <nav>
        <!-- skrypt1 -->
        <?php
        $sql="SELECT nazwa,plik FROM towar
            LIMIT 10;";
        $result = $link -> query($sql);
        $imgs = $result -> fetch_all(1);

        foreach($imgs as $img){
            echo"<img src='{$img['plik']}' alt='{$img['nazwa']}'>";
        }
        ?>
        
    </nav>
    <main>
        <aside class="left">
            <img src="market.png" alt="bazarek">
        </aside>
        <section class="right">
            <p>Wybierz owoc lub warzywo i podaj jego wage</p>
            <form action="" method="post">
                <select name="id_towaru" id="id_towaru">
                    
                    <!-- skrypt2 -->
                    <?php
                        $sql="SELECT id,nazwa FROM towar;";
                        $result = $link -> query($sql);
                        $option = $result -> fetch_all(1);

                        foreach($option as $options){
                            echo"<option value='{$options['id']}'>{$options['nazwa']}</option>";
                        }
                    ?>
                </select>
                <input type="number" name="liczba" id="liczba">
                <button name="zamow">Zamów</button>
            </form>
            <!-- skrypt3 -->
            <?php
            $id_towaru = $_POST['id_towaru'] ?? NULL;
            $liczba = $_POST['liczba'] ?? NULL;
            $wypisanie = [];
            if($id_towaru && $liczba){
                $sql="SELECT rodzaj,nazwa,cena FROM towar
                WHERE id=$id_towaru;";
                $result = $link -> query($sql);
                $wypisanie = $result -> fetch_all(1);
            }

            foreach($wypisanie as $wypisz){
                echo"<p>{$wypisz['rodzaj']} {$wypisz['nazwa']} wartość:";
                $wartosc = $wypisz['cena']*$liczba;
                echo $wartosc;
                echo"zł</p>";
                $sql="INSERT INTO zamowienie
                    VALUES
                    (NULL,$id_towaru,2,$liczba);";
                $result = $link -> query($sql);
            }
            ?>
            
        </section>
    </main>
    <footer>
        <p>Strone opracował: 00000000000</p>
    </footer>
</body>
</html>
<?php
$link -> close();
?>
