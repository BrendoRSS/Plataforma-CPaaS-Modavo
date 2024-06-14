<?php
 session_start();
//print_r($_REQUEST);

if (isset($_POST['submit']) && !empty($_POST['loginLogin']) && !empty($_POST['senhaLogin'])) {
    //acessa
    include_once('config.php');
    $login = $_POST['loginLogin'];
    $senha = $_POST['senhaLogin'];

    //echo $login;
    // echo '<br>';
    //echo $senha;

    $sql = "SELECT * FROM Usuários WHERE Login = '$login' and Senha = '$senha'";

    $result = $connection->query($sql);
    //print_r($sql);
    //print_r($result);

    if (mysqli_num_rows($result) < 1) {
        unset($_SESSION['loginLogin']);
        unset($_SESSION['senhaLogin']);
        header('Location: ../../Views/loginView.php');      

        
    } else {
        //print_r('Existe');
        //criar sessão:
        $_SESSION['loginLogin'] = $login;
        $_SESSION['senhaLogin'] = $senha;
        header('Location: ../../Views/Autenticação2FAview.php');
    };
} else {
    header('Location: ../../Views/loginView.php');
};
