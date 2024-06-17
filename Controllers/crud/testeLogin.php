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
    $id = $row['idUsuário'];

    if (mysqli_num_rows($result) < 1) {
        unset($_SESSION['loginLogin']);
        unset($_SESSION['senhaLogin']);
        unset($_SESSION['id']);
        header('Location: ../../Views/loginView.php');      

        
    } else {
        //print_r('Existe');
        //criar sessão:
        $_SESSION['loginLogin'] = $login;
        $_SESSION['senhaLogin'] = $senha;
        $_SESSION['id'] = $id;
        if($login == "MASTER"){header('Location: ../../Views/index.php');}
        else{
            header('Location: ../../Views/Autenticação2FAview.php');
        }
        
    };
} else {
    header('Location: ../../Views/loginView.php');
};
