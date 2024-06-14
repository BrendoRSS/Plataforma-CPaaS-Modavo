<?php 
session_start();
unset($_SESSION['loginLogin']);
unset($_SESSION['senhaLogin']);

header('Location: ../../Views/index.php')

?>