<?php

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);

    $sql = "SELECT * FROM usuarios WHERE email = 'alessandrobravim52@gmail.com'";
    $sql = $pdo->query($sql);

    /* row segnifica linha 
    * Count segnifica contar
    */

    if ($sql->rowCount() > 0) {

        foreach ($sql->fetchAll() as $usuario) {
            echo "nome: ".$usuario["nome"]."| email: ".$usuario["email"]."<br>";
        }
    } else {
        echo "Não há usuários cadastrados!";
    }

} catch(PDOException $e) {
    echo "falhou: ".$e->getMessage();
}

?>