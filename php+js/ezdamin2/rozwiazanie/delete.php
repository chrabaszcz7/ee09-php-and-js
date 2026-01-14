<?php
if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    $conn = new mysqli("localhost", "root", "", "todo");
    $conn->query("UPDATE tasks SET finished=1 WHERE ID=$id");
    $conn->close();
}

header("location: .");
