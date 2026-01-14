<?php
$link = new mysqli('localhost','root','','todo');


if(isset($_POST['resetbtn'])){
    $resetbtn = $_POST['resetbtn'];
    $sql="UPDATE tasks
SET finished=0";
$result = $link -> query($sql);
}

header("location: .");
$link -> close();
?>