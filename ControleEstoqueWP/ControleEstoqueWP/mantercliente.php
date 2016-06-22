<?php
     
    require 'banco.php';

    if ( !empty($_POST)) {
         
        $tipo = $_GET['tipo'];
     
        if ($tipo == 'i'){
            
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
             
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO cliente (nome,email,telefone) values(?, ?, ?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($nome,$email,$telefone));
            Database::disconnect();
            ?>
                <script>
                location.href="clientes.php";
                </script>
            <?php
        }

        if ($tipo == 'a'){

            $id = $_POST['idcliente'];
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
             
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE cliente set nome = ?, email = ?, telefone = ? where id = ?";
            $q = $pdo->prepare($sql);
            $q->execute(array($nome,$email,$telefone,$id));
            Database::disconnect();
            ?>
                <script>
                location.href="clientes.php";
                </script>
            <?php
        }

    } else {

        $tipo = $_GET['tipo'];

        if ($tipo == 'e'){

            $id = $_GET['id'];
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "DELETE FROM cliente WHERE id = ?";
            $q = $pdo->prepare($sql);
            $q->execute(array($id));
            Database::disconnect();
            ?>
                <script>
                location.href="clientes.php";
                </script>
            <?php
        }

    }


?>