<?php

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "";

try {


    $pdo = new PDO($dsn, $dbuser, $dbpass);
    
    /**
     * No caso so vamos lista se for titto@gmail.com
     */
    $sql = $pdo->query("SELECT * FROM usuarios WHERE email = 'tito@gmail.com'");

    if ($sql->rowCount() > 0) {

        /**
         * Alessandro da silva dias
         * alessandrobravim52@gmail.com
         * 
         * Listando nome e email E nome 
         *
        */

        foreach ($sql->fetchAll() as $usuarios) {
            // acabei de trena como lista arquivos com PDO  
            echo "-> Nome: ".$usuarios['nome']." -> Email: ". $usuarios['email'];
            echo "<br>";
            echo "<hr>";
        } 
    } else {
        echo "Não ha usuarios cadastrados";
    }

} catch(PDOException $e) {
    echo "falhou: ".$e->getMessage();
}

?>