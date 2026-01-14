<?php
$link = new mysqli('localhost','root','','dnd');

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D&D</title>
    <link rel="stylesheet" href="styl1.css">
</head>
<body>
    <aside>
        <h2>Podręcznik potworów</h2>
        <!-- skrypt1 -->
        <?php
        $sql="SELECT name,size,type,alignement FROM monsters
            INNER JOIN sizes ON sizes.id = monsters.size_id
            INNER JOIN types ON types.id = monsters.type_id
            INNER JOIN alignements ON alignements.id = monsters.alignement_id
        ORDER BY RAND() LIMIT 1;";
        $result = $link -> query($sql);
        $potwory = $result -> fetch_all(1);

        foreach($potwory as $potwor){
            echo"
            <p class='nazwa_potwora'>{$potwor['name']}</p>
            <p>rozmiar: {$potwor['size']}</p>
            <p>typ: {$potwor['type']}</p>
            <p>kierunek: {$potwor['alignement']}</p>";
        }
        
        ?>
        <p><a href="https://forgottenrealms.fandom.com/">źródło</a></p>
        <p><a href="kwerendy.txt">arkusz statystyk</a></p>
    </aside>
    <section class="right">
        <header>
            <h1>Rzuć kością</h1>
        </header>
        <main>
            <img src="6.png" alt="6" id="zdjecie"><br>
            <button id="btn">Losuj</button>
            <script src="script.js"></script>
        </main>
        <footer>
            Autor: 00000000000
        </footer>
    </section>
</body>
</html>
<?php
$link -> close();
?>