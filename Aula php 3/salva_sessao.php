<?php
session_start();
$_SESSION['txt'] = $_GET["texto"];
echo "<h2> texto salvo na sesão";
?>