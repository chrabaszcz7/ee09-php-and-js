<?php
$link = new mysqli('localhost','root','','smoki');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h2>Poznaj smoki!</h2>
    </header>
    <section class="flex">
        <nav>
            <section class="first">
                <p>Baza</p>
            </section>
            <section class="second">
                <p>opisy</p>
            </section>
            <section class="third">
                <p>galeria</p>
            </section>
        </nav>
        <main>
            <section class="first2">
                <h3>Baza Smoków</h3>
                <form action="" method="post">
                    <select name="smoki_nazwa" id="">
                        
                        <!-- skrypt1 -->
                        <?php
                            $sql="SELECT DISTINCT pochodzenie FROM smok
                            ORDER BY pochodzenie ASC;";
                            $result = $link -> query($sql);
                            $lista = $result -> fetch_all(1);

                            foreach($lista as $listy){
                                echo"<option value='{$listy['pochodzenie']}'>{$listy['pochodzenie']}</option>";
                            }

                        $smoki_nazwa = $_POST['smoki_nazwa'] ?? NULL;
                        $skrypt2=[];
                        if($smoki_nazwa && isset($_POST['szukaj'])){
                            $sql="SELECT nazwa,dlugosc,szerokosc FROM smok
                            WHERE pochodzenie='$smoki_nazwa';";
                        $result = $link -> query($sql);
                        $skrypt2 = $result -> fetch_all(1);
                        }
                        
                        ?>
                    </select>
                    <button name="szukaj">Szukaj</button>
                </form>
                <table>
                    <tr>
                        <th>Nazwa</th>
                        <th>Długość</th>
                        <th>Szerokość</th>
                    </tr>
                    <!-- skrypt2 -->
                    <?php
                        foreach($skrypt2 as $skrypt){
                            echo"
                            <tr>
                                <th>{$skrypt['nazwa']}</th>
                                <th>{$skrypt['dlugosc']}</th>
                                <th>{$skrypt['szerokosc']}</th>
                            </tr>";
                        }
                    ?>
                </table>
            </section>
            <section class="second2">
                <h3>Opisy smoków</h3>
                <dl>
                    <dt>ok czerwony</dt>
                    <dd>Pochodzi z Chin. Ma 1000 lat. Żywi się mniejszymi zwierzętami. Posiada łuski cenne na rynkach wschodnich do wyrabiania lekarstw. Jest dziki i groźny.</dd>
                    <dt>Smok zielony</dt>
                    <dd>Pochodzi z Bułgarii. Ma 10000 lat. Żywi się mniejszymi zwierzętami, ale tylko w kolorze zielonym. Jest kosmaty. Z sierści zgubionej przez niego, tka się najdroższe materiały.</dd>
                    <dt>Smok niebieski </dt>
                    <dd>Pochodzi z Francji. Ma 100 lat. Żywi się owocami morza. Jest natchnieniem dla najlepszych malarzy. Często im pozuje. Smok ten jest przyjacielem ludzi i czasami im pomaga. Jest jednak próżny i nie lubi się przepracowywać.</dd>
                </dl>
            </section>
            <section class="third2">
                <h3>Galeria</h3>
                <img src="smok1.jpg" alt="Smok czerwony">
                <img src="smok2.jpg" alt="Smok wielki">
                <img src="smok3.jpg" alt="Smok łaciaty">
            </section>
        </main>
        <script src="script.js"></script>
    </section>
    <footer>
        <p>Stronę opracował: 00000000000</p>
    </footer>
</body>
</html>
<?php
$link -> close();
?>