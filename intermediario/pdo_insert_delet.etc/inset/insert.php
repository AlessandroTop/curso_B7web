<?php

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);

    $nome = "testador";
    $email =  "teste@hotmail.com";
    /**md5 e para por a senha criptografada */
    $senha = md5('12345');

    $sql =  "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'";
    $sql = $pdo->query($sql);

    /**
     * Pega o id que retorna do servido para qual foi enviado 
     * */
    echo "Usuário inserido: ".$pdo->lastInsertId();

} catch(PDOException $e) {
    echo "falhou: ".$e->getMessage();
}

?>