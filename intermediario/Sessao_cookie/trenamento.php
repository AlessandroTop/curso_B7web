<?php
    session_start();

    /**
     * Tanbem posso carrega um array em sesao para carrega emais etc
     */

    $_SESSION['teste'] = 'testado';


    // Envia cookie
    setcookie('nome[um]', 'Alessandro');
    setcookie('nome[dois]', 'tito');
    setcookie('nome[tres]', 'nuria');

    // Depois que a pagina recarregar, mostra eles
    if (isset($_COOKIE["nome"])) {
        foreach ($_COOKIE['nome'] as $nome => $valor) {
            echo "$nome : $valor <br />\n";
        }
    }

    /**Printando #SESSION */
    echo $_SESSION['teste'];

    /**Debugando os cookie se ele esta visivel depois */
    print_r($_COOKIE['nome']);



    // setcookie('nome', 'tito', mktime().time()+60*2);

    // /**
    //  * Se por o setcookie com o time negativo ele vai exclui o outro cookie
    //  */
    // setcookie("nome", '', time() - 120);
    // echo 'Meu nome e: '. $_COOKIE['nome'];

?>