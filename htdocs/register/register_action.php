<?php
$names = ["Login1", "Login2", "Login3"];
$passwords = ["Senha1", "Senha2", "Senha3"];
$NAME = $_GET['nome'];
$PASSWORD = $_GET['senha'];

function loginAvailable( $names, $passwords, $NAME, $PASSWORD ) {
    $isValid = true;
    for ( $i = 0; $i < count( $names ); $i++ ) {
        $login = $names[$i];
        if ( $NAME == $login ) { //usuario existe
            $isValid = false;
        }
    }
    return $isValid;
}


$available = loginAvailable( $names, $passwords, $NAME, $PASSWORD );
if ( $available ) 
{
    array_push( $names, $NAME );
    array_push( $passwords, $PASSWORD );
    echo "login registrado com sucesso";
}

else { echo "erro ao registrar login"; }

?>
