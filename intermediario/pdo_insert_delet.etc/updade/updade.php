<?php

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);

    $novasenha = md5("teste123");

    // $sql = "UPDATE usuarios SET email = 'abc@gmail.com' WHERE email = 'bonieky@gmail.com'";
    $sql =  "UPDATE usuarios SET senha = '$novasenha' WHERE email = 'abc@gmail.com'";
    /**Podemos faz isso quando nao vamos recebe nada novamente do servidor */
    $pdo->query($sql);
    
    echo "senha alterada com sucesso";

} catch(PDOException $e) {
    echo "falhou: ".$e->getMessage();
}

?>