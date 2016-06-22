<?php
     
    require 'banco.php';

    if ( !empty($_POST)) {
         
        $tipo = $_GET['tipo'];
     
        if ($tipo == 'i'){
            
            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $preco = $_POST['preco'];
             
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO produto (nome,descricao,preco) values(?, ?, ?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($nome,$descricao,$preco));
            Database::disconnect();
            ?>
                <script>
                location.href="produtos.php";
                </script>
            <?php
        }

        if ($tipo == 'a'){

            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $preco = $_POST['preco'];
             
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE produto set nome = ?, descricao = ?, preco = ? where id = ?";
            $q = $pdo->prepare($sql);
            $q->execute(array($nome,$descricao,$preco,$id));
            Database::disconnect();
            ?>
                <script>
                location.href="produtos.php";
                </script>
            <?php
        }

    } else {

        $tipo = $_GET['tipo'];

        if ($tipo == 'e'){

            $id = $_GET['id'];
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "DELETE FROM produto WHERE id = ?";
            $q = $pdo->prepare($sql);
            $q->execute(array($id));
            Database::disconnect();
            ?>
                <script>
                location.href="produtos.php";
                </script>
            <?php
        }

    }


?>