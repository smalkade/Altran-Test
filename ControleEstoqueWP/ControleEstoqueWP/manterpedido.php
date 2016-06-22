<?php
     
    require 'banco.php';

    if ( !empty($_POST)) {
         
        $tipo = $_GET['tipo'];
     
        if ($tipo == 'i'){
            
            $cliente = $_POST['cliente'];
            $produto = $_POST['produto'];
             
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO pedido (idcliente,idproduto) values(?, ?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($cliente,$produto));
            Database::disconnect();
            ?>
                <script>
                location.href="pedidos.php";
                </script>
            <?php
        }

        if ($tipo == 'a'){

            $id = $_POST['id'];
            $cliente = $_POST['cliente'];
            $produto = $_POST['produto'];
             
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE pedido set idcliente = ?, idproduto = ? where id = ?";
            $q = $pdo->prepare($sql);
            $q->execute(array($cliente,$produto,$id));
            Database::disconnect();
            ?>
                <script>
                location.href="pedidos.php";
                </script>
            <?php
        }

    } else {

        $tipo = $_GET['tipo'];

        if ($tipo == 'e'){

            $id = $_GET['id'];
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "DELETE FROM pedido WHERE id = ?";
            $q = $pdo->prepare($sql);
            $q->execute(array($id));
            Database::disconnect();
            ?>
                <script>
                location.href="pedidos.php";
                </script>
            <?php
        }

    }


?>