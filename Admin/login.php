<?php

    require('../connection.php');

    $user = $_POST['usuario_login'];
    $pass = $_POST['usuario_clave'];

    $loginSQL = "SELECT * FROM tacceso WHERE login_acceso='$user' AND clave_acceso='$pass'";
    $loginResult = $conn->query($loginSQL);
    if($loginResult->num_rows > 0){
        // echo 'bien';
        $cifrado = crypt($pass,'rl');
        setcookie('id',$cifrado);
        $cookieSQL = "UPDATE tacceso SET cookie='$cifrado'";
        $conn->query($cookieSQL);
        header('Location:/Christian-Ronaldo-Restaurant/admin');
    }else{
        echo 'datos invalidos';
    }