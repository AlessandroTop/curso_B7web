<?php
    $autor = addslashes($_POST["autor"]); // 'or 1=1' -> ele mostrara todos minhas postagems
                              //   '; DROP TABLE posts; -> so com esse sql posso deleta todos posts
            // O addslashes ele coloca / barras quando poim algumas ' apas para nao quebra
    $sql = "SELECT * from posts WHERE autor = ''";
?>
