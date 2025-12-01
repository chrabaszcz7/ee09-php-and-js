<?php
$link = new mysqli('localhost','root','','zdobywcy');
$nazwisko = $_POST['nazwisko'] ?? NULL;
$imie = $_POST['imie'] ?? NULL;
$funkcja = $_POST['funkcja'] ?? NULL;
$email = $_POST['email'] ?? NULL;

if($nazwisko && $imie && $funkcja && $email){
    $sql="INSERT INTO osoby
VALUES
('NULL','$nazwisko','$imie','$funkcja','$email');";
$result = $link -> query($sql);
}



$sql="SELECT nazwisko,imie,funkcja,email FROM osoby;";
$result = $link -> query($sql);
$osoby = $result->fetch_all(1);
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZDOBYWCY GÓR</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Klub zdobywców gór polskich</h1>
    </header>
    <nav>
        <a href="kw1.jpg">kwerenda1</a>
        <a href="kw2.jpg">kwerenda2</a>
        <a href="kw3.jpg">kwerenda3</a>
        <a href="kw4.jpg">kwerenda4</a>
    </nav>
    <main>
        <section class="left">
            <img src="logo.png" alt="logo zdobywcy">
            <h3>razem z nami:</h3>
            <ul>
                <li>wyjazdy</li>
                <li>szkolenia</li>
                <li>rekreacja</li>
                <li>wypoczynek</li>
                <li>wyzwania</li>
            </ul>
        </section>
        <section class="right">
            <h2>Dołącz do naszego zespołu</h2>
            <p>Wpisz swoje dane do formularza:</p>
            <form action="" method="post">
                <label for="nazwisko">Nazwisko: </label><input type="text" name="nazwisko" id="nazwisko">
                <label for="imie">Imię: </label><input type="text" name="imie" id="imie">
                <label for="funkcja">Funkcja:</label>
                <select name="funkcja" id="funkcja">
                    <option value="uczestnik">uczestnik</option>
                    <option value="przewodnik">przewodnik</option>
                    <option value="zaopatrzeniowiec">zaopatrzeniowiec</option>
                    <option value="organizator">organizator</option>
                    <option value="ratownik">ratownik</option>
                </select>
                <label for="email"></label><input type="email" name="email" id="email">
                <button type="submit">Dodaj</button>
                <!-- skrypt1 -->
            </form>
            <table>
                <tr>
                    <th>Nazwisko</th>
                    <th>Imię</th>
                    <th>Funkcja</th>
                    <th>Email</th>
                </tr>
                <!-- skrypt1 -->
                <?php
                    foreach($osoby as $osoba){
                        echo"
                <tr>
                    <td>{$osoba['nazwisko']}</td>
                    <td>{$osoba['imie']}</td>
                    <td>{$osoba['funkcja']}</td>
                    <td>{$osoba['email']}</td>
                </tr>";
                    }
                ?>
            </table>
        </section>
    </main>
    <footer>
        <p>Stronę wykonał: 00000000000</p>
    </footer>
</body>
</html>
<?php
$link -> close();
?>