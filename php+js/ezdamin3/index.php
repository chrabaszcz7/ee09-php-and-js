<?php
$link = new mysqli('localhost','root','','quotes');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codzienny cytat</title>
    <link rel="stylesheet" href="styl1.css">
</head>
<body>
    <header>
        <h1>Dzienna dawka motywacji</h1>
    </header>
    <section class="flex">
        <aside class="left">
            <img src="kwiaty.png" alt="kwiaty">
        </aside>
        <main>
            <blockquote>
                <!-- skrypt3 -->
                <?php
                if($dzisiejszy_dzien = "Sun"){
                    $dzisiejszy_dzien = 7;
                }else if($dzisiejszy_dzien = "Sat"){
                    $dzisiejszy_dzien = 6;
                }else if($dzisiejszy_dzien = "Fri"){
                    $dzisiejszy_dzien = 5;
                }else if($dzisiejszy_dzien = "Thu"){
                    $dzisiejszy_dzien = 4;
                }else if($dzisiejszy_dzien = "Wed"){
                    $dzisiejszy_dzien = 3;
                }else if($dzisiejszy_dzien = "Tue"){
                    $dzisiejszy_dzien = 2;
                }else if($dzisiejszy_dzien = "Mon"){
                    $dzisiejszy_dzien = 1;
                }
                
                    $sql="SELECT quote,author FROM daily
                    WHERE day=$dzisiejszy_dzien;";
                    $result = $link -> query($sql);
                    $qotd = $result -> fetch_all(1);


            foreach($qotd as $quote){
                echo"“{$quote['quote']}” ~ {$quote['author']}";
            }
                ?>
            </blockquote>
            <!-- skrypt2 -->
            <?php
                $dzisiejsza_data = date('d.m.Y');
                echo "<p>Dzisiejsza data: ".$dzisiejsza_data."</p>";

            ?>
        </main>
        <aside class="right">
            Zainspiruj się
            <a href="kwerendy.txt">innymi cytatami</a>
            <h2>Najlepsze dni tygodnia</h2>
            <ul>
                <li>piątek wieczór</li>
                <li>sobota</li>
                <li>niedziela</li>
            </ul>
            <!-- skrypt1 -->
            <?php
                $dzisiejszy_dzien_nazwa = date('D');
                if($dzisiejszy_dzien_nazwa = "Sun"){
                    echo "<h3>Dni do weekendu: 0</h3>";
                    $dzisiejszy_dzien = 7;
                }else if($dzisiejszy_dzien_nazwa = "Sat"){
                    echo "<h3>Dni do weekendu: 0</h3>";
                    $dzisiejszy_dzien = 6;
                }else if($dzisiejszy_dzien_nazwa = "Fri"){
                    echo "<h3>Dni do weekendu: 1</h3>";
                    $dzisiejszy_dzien = 5;
                }else if($dzisiejszy_dzien_nazwa = "Thu"){
                    echo "<h3>Dni do weekendu: 2</h3>";
                    $dzisiejszy_dzien = 4;
                }else if($dzisiejszy_dzien_nazwa = "Wed"){
                    echo "<h3>Dni do weekendu: 3</h3>";
                    $dzisiejszy_dzien = 3;
                }else if($dzisiejszy_dzien_nazwa = "Tue"){
                    echo "<h3>Dni do weekendu: 4</h3>";
                    $dzisiejszy_dzien = 2;
                }else if($dzisiejszy_dzien_nazwa = "Mon"){
                    echo "<h3>Dni do weekendu: 5</h3>";
                    $dzisiejszy_dzien = 1;
                }
            ?>
        </aside>
    </section>
    <footer>
        <p>autor: 00000000000</p>
    </footer>
</body>
</html>
<?php
$link -> close();
?>