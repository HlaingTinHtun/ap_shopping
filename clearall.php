<?php

session_start();

unset($_SESSION['cart']);

header("Location: index.php");

?>
