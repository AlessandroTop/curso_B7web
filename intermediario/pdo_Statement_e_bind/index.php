<?php

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    $nome = 'alessandro';
    $id = 2;

    $sql = "UPDATE usuarios SET nome = :novonome WHERE id = :id";
    $sql = $pdo->prepare($sql);
    /**
     * Este metodo e para melhora mais a seguranca 
     * para nao aver delete no banco de dados
     * 
     */
    $sql->bindValue(':novonome', $nome);
    $sql->bindValue(':id', $id);
    $sql->execute();
    /**
     * O primeiro parametro ele procura esse nome e substitui por outro
     * Na query
     */
    
    echo 'atulizado com sucesso';

} catch(PDOException $e) {
    echo "falhou: ".$e->getMessage();
}

?>