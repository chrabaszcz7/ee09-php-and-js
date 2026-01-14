<?php
$link = new mysqli('localhost','root','','samochody');
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfigurator samochodów</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>Serwis Konfiguracji samochodów</h1>
    </header>
    <nav>
        <h2>Samochody</h2>
        <h2>Konfigurator</h2>
        <h2>Kontakt</h2>
    </nav>
    <main>
        <section class="left">
            <table>
                <!-- skrypt1 -->
                <?php
                    $sql="SELECT marka,model,cena,nazwa,doplata FROM pojazdy
                        INNER JOIN kolory ON kolory.id = pojazdy.kolor
                    WHERE model='alfa';";
                    $result = $link -> query($sql);
                    $cars = $result -> fetch_all(1);

                    foreach($cars as $car){
                        echo"
                        <tr>
                            <td>{$car['marka']}</td>
                            <td>{$car['model']}</td>
                            <td>{$car['nazwa']}</td>
                            ";
                            $absolute_price = $car['cena']+$car['doplata'];
                            echo"<td>$absolute_price</td>
                        </tr>";
                    }
                    
                ?>
                
            </table>
        </section>
        <section class="mid">
            <table>
                <tr>
                    <th colspan="2">Konfiguracja</th>
                    <th>Cena</th>
                </tr>
                <tr>
                    <td colspan="3"><img src="a1.jpg" alt="konfiguracja 1"></td>
                </tr>
                <!-- skrypt2 -->
                <?php
                $sql="SELECT marka,model,cena FROM pojazdy
                ORDER BY RAND() LIMIT 2;";
                $result = $link -> query($sql);
                $cars2 = $result -> fetch_all(1);

                $car1 = $cars2[0];
                
                echo"
                    <tr>
                        <td>Marka</td>
                        <td>{$car1['marka']}</td>
                        <td rowspan='2'>{$car1['cena']}</td>
                    </tr>
                    <tr>
                        <td>Model</td>
                        <td>{$car1['model']}</td>
                    </tr>";
                ?>
                
                <tr>
                    <td colspan="3"><img src="a2.jpg" alt="konfiguracja 2"></td>
                </tr>
                <!-- skrypt2 -->
                <?php
                    $car2 = $cars2[1];
                echo"
                    <tr>
                        <td>Marka</td>
                        <td>{$car2['marka']}</td>
                        <td rowspan='2'>{$car2['cena']}</td>
                    </tr>
                    <tr>
                        <td>Model</td>
                        <td>{$car2['model']}</td>
                    </tr>";

                ?>
            </table>
        </section>
        <section class="right">
            <h3>111 222 444</h3>
            <img src="a3.png" alt="Samochód">
        </section>
        <video controls loop>
            <source src="" type="video/mp4">
        </video>
    </main>
    <footer>
        <p>Strone wykonał: 00000000000</p>
    </footer>
</body>
</html>
<?php
$link -> close();
?>