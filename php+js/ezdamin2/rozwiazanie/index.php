<?php
$conn = new mysqli("localhost", "root", "", "todo");
$res = $conn->query("SELECT * FROM tasks WHERE date=\"2025-06-12\"");
$conn->close();
$table = "";
while ($row = $res->fetch_row()) {
    if ($row[3])
        $row[1] = "<del>$row[1]</del>";
    $table .= "<tr>";
    $table .= "<td>$row[0]</td>";
    $table .= "<td>$row[1]</td>";
    $table .= $row[2] ? "<td><button onclick=\"alert('$row[2]')\">Pokaż</button></td>" : "<td></td>";
    $table .= !$row[3] ? "<td><a href=\"delete.php?id=$row[0]\">X</a></td>" : "<td></td>";
    $table .= "</tr>";
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista zadań</title>
    <link rel="stylesheet" href="styl1.css">
</head>
<body>
    <header>
        <img src="note.png" alt="kartka">
        <h2>Lista zadań do wykonania</h2>
        <p>Na dzień 12.06.2025</p>
    </header>
    <main>
        <article>
            <table>
                <tr>
                    <th>Numer</th>
                    <th>Zadanie</th>
                    <th>Pokaż szczegóły</th>
                    <th>Zakończ</th>
                </tr>
                <?= $table ?>
            </table>
        </article>
        <aside>
            <h3>Porady motywacyjne</h3>
            <ul>
                <li>Nie kładź budzika obok łóżka</li>
                <li>Zjedz śniadanie</li>
                <li>Nie rób wszystkiego od razu,<br />bo zabraknie roboty na jutro</li>
            </ul>
            <a href="kwerendy.txt">Sprawdź inne</a>
        </aside>
    </main>
    <footer>
        <p>Obowiązki należące do: żółwio-żyrafa</p>
    </footer>
</body>
</html>