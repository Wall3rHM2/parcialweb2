<?php
$names = ["Login1", "Login2", "Login3"];
$passwords = ["Senha1", "Senha2", "Senha3"];
$NAME = $_GET['nome'];
$PASSWORD = $_GET['senha'];

function loginCheck( $names, $passwords, $NAME, $PASSWORD ) {
    $isValid = false;
    for ( $i = 0; $i < count( $names ); $i++ ) {
        $login = $names[$i];
        if ( $NAME == $login && $passwords[$i] == $PASSWORD ) { //usuario existe e senha valida
            echo("Sucesso ao logar");
            $isValid = true;
        }
    }
    if ( !$isValid ) echo( "Login invalido" );
}

loginCheck( $names, $passwords, $NAME, $PASSWORD );
//echo htmlspecialchars($NAME);

?>
