<?php

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    /**
     * Sempre ponha WHERE para nao zera o banco de dados ok
     */
    $sql = "DELETE FROM usuarios WHERE id = 1";
    $pdo->query($sql);
    echo "usuário deletado com sucesso";

} catch(PDOException $e) {
    echo "falhou: ".$e->getMessage();
}

?>