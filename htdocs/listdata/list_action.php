<?php
$names = ["Login1", "Login2", "Login3"];
$passwords = ["Senha1", "Senha2", "Senha3"];


function echoData()
{  
    global $names, $passwords;
    echo("<style>table, th, td {\nborder:1px solid black;\n}</style>");
    echo("<body>\n<table style='width:100%'>\n<tr>\n<th>Login</th>\n<th>Senha</th>\n</tr>\n");
    for ( $i = 0; $i < count( $names ); $i++ ) {
        $login = $names[$i];
        $password = $passwords[$i];
        echo("<tr>\n<th>" . $login . "</th>\n<th>" . $login . "</th>\n</tr>\n");
    }
    echo("</table></body>");
}

echoData();
?>
