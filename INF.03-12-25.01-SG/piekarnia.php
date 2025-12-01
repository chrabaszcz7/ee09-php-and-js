<?php
$link = new mysqli('localhost','root','','piekarnia');

$wyrob = $_POST['wyrob'] ?? null;
if($wyrob){
    $sql="SELECT rodzaj,nazwa,gramatura,cena FROM wyroby
    WHERE rodzaj='$wyrob';";
}else{
    $sql="SELECT rodzaj,nazwa,gramatura,cena FROM wyroby
    WHERE rodzaj='';";
}
$result = $link ->query($sql);
$wyrob2 = $result -> fetch_all(1);


$sql="SELECT DISTINCT rodzaj FROM wyroby;";
$result = $link ->query($sql);
$wyroby = $result -> fetch_all(1);
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIEKARNIA</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <img src="wypieki.png" alt="Produkty naszej piekarni">
    <nav>
        <a href="kw1.jpg">KWERENDA1</a>
        <a href="kw2.jpg">KWERENDA2</a>
        <a href="kw3.jpg">KWERENDA3</a>
        <a href="kw4.jpg">KWERENDA4</a>
    </nav>
    
    <header>
        <h1>WITAMY</h1>
        <h4>NA STRONIE PIEKARNI</h4>
        <p>Od 31 lat oferujemy najwyższej jakości pieczywo. Naturalnie świeże, naturalnie smaczne. Pieczemy wyłącznie wypieki na naturalnym zakwasie bez polepszaczy i zagęstników. Korzystamy wyłącznie z najlepszych ziaren pochodzących z ekologicznych upraw położonych w rejonach zgierskim i ozorkowskim.</p>
    </header>
    <main>
        <h4>Wybierz rodzaj wypieków:</h4>
        <form action="" method="post">
            <select name="wyrob" id="wyrob">
                <?php
                    foreach($wyroby as $wyrob){
                        echo "<option>{$wyrob['rodzaj']}</option>";
                    }
                ?>
            </select>
            <button>Wybierz</button>
        </form>
        <table>
            <tr>
                <th>Rodzaj</th>
                <th>Nazwa</th>
                <th>Gramatura</th>
                <th>Cena</th>
            </tr>
            <!-- skrypt2 -->
            <?php
                foreach($wyrob2 as $wyrobb){
                    echo"
            <tr>
                <td>{$wyrobb['rodzaj']}</td>
                <td>{$wyrobb['nazwa']}</td>
                <td>{$wyrobb['gramatura']}</td>
                <td>{$wyrobb['cena']}</td>
            </tr>";
                }
            ?>
        </table>
    </main>
    <footer>
        <p>AUTOR: 00000000000</p>
        <p>Data: 16.11.2025</p>
    </footer>
</body>
</html>
<?php
$link -> close();
?>