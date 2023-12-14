<?php
    
    $dbHost = 'https://www.db4free.net';
    $dbUsername = 'volaodarj';
    $dbPassword = '26ec018b';
    $dbName = 'daarearj';
    
    $conexao = new mysqli('$dbHost','$dbUsername','$dbPassword','$dbName');

    if($conexao->connect_errno)
    {
        echo "Errou em alguma parada";
    }
    else
    {
        echo "Conexão rodando redondinha";
    }

?>
