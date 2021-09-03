<?php

/**
 * Este Crud tem uma segurança media nele pelomenos basicas para ninguem invadir
 */

    require "config.php";
    $id = 0;
    /**
    * Usei (false) so para exenplo de usa assim e usando com isso (!)
    */
    if(isset($_GET['id']) && empty($_GET['id']) == false) {
        $id = addslashes($_GET['id']);
    }

    if(isset($_POST['nome']) && !empty($_POST['nome'])) {
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);

        $sql = "UPDATE  usuarios SET nome = '$nome', email = '$email' WHERE id = '$id'";
        $pdo->query($sql);

        header("location: index.php");
    }
    /**
     * Caso ele não passe no segundo (if) ele so vai listar
     */

    $sql = "SELECT * FROM usuarios WHERE id = '$id'";
    $sql = $pdo->query($sql);
    if($sql->rowCount() > 0) {
        /**
         * Para pega so um usuario nao gastamos usa (fecthAll)
         * E tabem não gastaremos utilizar o (foreach) por que 
         * nos so vamos pegar a primeira linha.
         * 
         * Caso não tenha achado tanbem aquele (id) ele vai volta para 
         * pagina principal por segurançar
         * */
        $dado =  $sql->fetch();
    } else {
        header("Location: index.php");
    }
?>

<form method="POST">
    Nome:<br />
    <input type="text" name="nome" value="<?php echo $dado['nome']; ?>" /><br/><br/>
    E-mail:<br />
    <input type="text" name="email" value="<?php echo $dado['email']; ?>" /><br/><br/>

    <input type="submit" value="Atulizar" />
</form>