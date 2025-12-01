<?php
$link = new mysqli('localhost','root','','mieszalnia');

$data_od = $_POST['data_od'] ?? NULL;
$data_do = $_POST['data_do'] ?? NULL;

if($data_od & $data_do){
    $sql="SELECT nazwisko,imie,zamowienia.id as zamowienie_id,kod_koloru,pojemnosc,data_odbioru FROM klienci
    INNER JOIN zamowienia ON zamowienia.id_klienta = klienci.Id
WHERE data_odbioru BETWEEN '$data_od' AND '$data_do'
ORDER BY data_odbioru ASC;";
}else{
    $sql="SELECT nazwisko,imie,zamowienia.id as zamowienie_id,kod_koloru,pojemnosc,data_odbioru FROM klienci
    INNER JOIN zamowienia ON zamowienia.id_klienta = klienci.Id
ORDER BY data_odbioru ASC;";
}
$result = $link -> query($sql);
$form = $result -> fetch_all(1)
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mieszalnia farb</title>
    <link rel="shortcut icon" href="fav.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <img src="baner.png" alt="Mieszalnia farb">
    </header>
    <section class="form">
        <form action="" method="post">
            <label for="data_od">Data odbioru od: </label><input type="date" name="data_od" id="data_od">
            <label for="data_do">Data odbioru do: </label><input type="date" name="data_do" id="data_do">
            <button>Wyszukaj</button>
        </form>
    </section>
    <main>
        <table>
            <tr>
                <th>Nr zamówienia</th>
                <th>Nazwisko</th>
                <th>Imię</th>
                <th>Kolor</th>
                <th>Pojemność [ml]</th>
                <th>Data odbioru</th>
            </tr>
            <!-- skrypt -->
            <?php
            foreach($form as $forms){
                echo"
            <tr>
                <td>{$forms['zamowienie_id']}</td>
                <td>{$forms['nazwisko']}</td>
                <td>{$forms['imie']}</td>
                <td style='background-color:#{$forms['kod_koloru']};'>{$forms['kod_koloru']}</td>
                <td>{$forms['pojemnosc']}</td>
                <td>{$forms['data_odbioru']}</td>
            </tr>";
            }
            ?>
            
        </table>
    </main>
    <footer>
        <h3>Egzamin INF.03</h3>
        <p>Autor: 00000000000</p>
    </footer>
</body>
</html>
<?php
$link -> close();
?>