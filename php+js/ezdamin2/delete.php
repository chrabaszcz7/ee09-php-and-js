<?php
$link = new mysqli('localhost','root','','todo');

if(!empty($_GET['id'])){

$id=$_GET['id'] ?? NULL;
    $sql="UPDATE tasks
SET finished=1
WHERE id=$id;";
$result = $link -> query($sql);
}
header("location: .");
$link -> close();
?>