<?php
    session_start(); // ela tem que ser a primeira linha do codigo

    // Gera uma sessao
    $_SESSION["teste"] = "Alessandro";
    echo "Minha sessão e de: ".$_SESSION["teste"];
    echo "<br>";

    // gera um cookie
    setcookie("meuteste", $_SESSION["teste"],  time()+3600);
    echo "Meu cookie e de: ".$_COOKIE["meuteste"]; // printei o cookie


    
    // setcookie("meuteste", "fulano de tal", time()+3600);

    // echo "cookie setado com sucesso";

    // session_start();
    // $_SESSION["teste"] = array (
    //     "alessandro" // podemos faz um array dentro de uma session
    // );
    // $_SESSION['teste'] = "alessandro da silva dias"; // O navegado vai salva estes dados
    // echo "Meu nome e: " .$_SESSION["teste"];
?>