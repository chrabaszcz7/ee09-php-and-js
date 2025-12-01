<?php
$link = new mysqli('localhost','root','','wykaz');

$poczatek = $_POST['poczatek'] ?? NULL;
if($poczatek){
    $sql="SELECT miasta.nazwa as nazwa_miasta,wojewodztwa.nazwa as nazwa_wojewodztwa FROM miasta
    INNER JOIN wojewodztwa ON wojewodztwa.id = miasta.id_wojewodztwa
WHERE miasta.nazwa LIKE '$poczatek%'
ORDER BY miasta.nazwa ASC;";
$result = $link -> query($sql);
$miasta = $result -> fetch_all(1);
}

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wyszukiwarka miast</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="fav.png" type="image/x-icon">
</head>
<body>
        <header>
            <img src="baner.jpg" alt="Polska">
        </header>
        <main>
            <section class="left">
                <section class="top">
                    <h4>Podaj początek nazwy miasta</h4>
                    <form action="" method="post">
                        <input type="text" name="poczatek" id="poczatek">
                        <button>Szukaj</button>
                    </form>
                </section>
                <section class="bottom">
                    <p>Egzamin INF.03</p>
                    <p>Autor: 00000000000</p>
                </section>    
            </section>
            <section class="right">
                <h1>Wyniki wyszukiwania miast z uwzględnieniem filtra:</h1>
                <!-- skrypt -->
                <?php
                    if(!empty($sql)){
                        echo"
                        <p>$poczatek</p>
                        <table>
                        <tr>
                            <th>Miasto</th>
                            <th>Województwo</th>
                        </tr>
                        ";
                    foreach($miasta as $miasto){
                        echo"
                        <tr>
                            <td>{$miasto['nazwa_miasta']}</td>
                            <td>{$miasto['nazwa_wojewodztwa']}</td>
                        </tr>";
                    }

                    echo"</table>";
                    }
                    
                    
                ?>
            </section>
        </main>

</body>
</html>
<?php
$link -> close();
?>
<!-- nwm czy tak powinno być, niby tak pisze ale rozwiazania na netcie sa 
inne, mimo wszystko zrobilem tak jak kazali, jezeli wynik bedzie 
nie poprawny polecam usunac if(!empty($sql)), przed php w .right 
dodac tabele z 2x td Miasto i wojewodztwo i wypisac to wszystko foreachem,
jeszcze przed tym dodac u gory else bez zadnych warunkow
css tez jest rozjebany bo powinny byc inne kolory lecz robilem to tak jak jest napisane
ogolnie te zadanie jest zjebane pozdrawiam zycze dobrej oceny
-->