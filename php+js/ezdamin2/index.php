<?php
$link = new mysqli('localhost','root','','todo');
?>

<!DOCTYPE html>
<html lang="en">
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
        <form action="reset.php" method="post">
            <button id="resetbtn" name="resetbtn">RESET</button>
        </form>
    </header>
    <section class="flex">
        <main>
            <table>
                <tr>
                    <th>Numer</th>
                    <th>Zadanie</th>
                    <th>Pokaż szczegóły</th>
                    <th>Zakończ</th>
                </tr>
                <!-- skrypt1 -->
                <?php
                $sql="SELECT ID,title,details,finished,date FROM tasks
                WHERE date='2025-06-12';";
                $result = $link -> query($sql);
                $zadania = $result -> fetch_all(1);
                
                foreach($zadania as $zadanie){
                    if($zadanie['finished']){
                        $zadanie['title']="<del>{$zadanie['title']}</del>";
                    }



                    echo"<tr>";
                        echo"<td>{$zadanie['ID']}</td>";
                        echo"<td>{$zadanie['title']}</td>";

                        if($zadanie['details']){
                            echo"<td><button onclick=\"alert('{$zadanie['details']}')\">Pokaż</button></td>";
                        }else{
                            echo"<td></td>";
                        }

                        if(!$zadanie['finished']){
                            echo"<td><a href='delete.php?id={$zadanie['ID']}'>X</a></td>";
                        }else{
                            echo"<td></td>";
                        }
                        
                    echo"</tr>";
                }

                ?>

            </table>
        </main>
        <aside>
            <h3>Porady motywacyjne</h3>
            <ul>
                <li>Nie kładź budzika obok łóżka</li>
                <li>Zjedz śniadanie</li>
                <li>Nie rób wszystkiego od razu,<br> bo zabraknie roboty na jutro</li>
            </ul>
            <a href="kwerendy.txt">Sprawdź inne</a>
        </aside>
    </section>
    <footer>
        <p>Obowiązki należące do: 00000000000</p>
    </footer>
</body>
</html>
<?php
$link -> close();
?>