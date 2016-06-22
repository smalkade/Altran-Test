<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>


<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<body>


<div class="container">
            <div class="row">
                <h3>Controle de Pedidos</h3>
            </div>
            <div class="row">
                <p>
                    <a href="formulariopedido.php" target="direita" class="btn btn-success">Inserir</a>
                </p>

                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Cliente</th>
                      <th>Produto</th>
                      <th>Ação</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                   include 'banco.php';
                   $pdo = Database::connect();
                   $sql = 'SELECT P.ID, C.NOME, PR.NOME FROM PEDIDO P INNER JOIN CLIENTE C ON C.id = P.IDCLIENTE INNER JOIN PRODUTO PR ON PR.ID = P.IDPRODUTO';
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>'. $row[0] . '</td>';
                            echo '<td>'. $row[1] . '</td>';
                            echo '<td>'. $row[2] . '</td>';
                            
                            echo '<td><a class="btn btn-warning" href="alterarpedido.php?id='.$row[0].'">Alterar</a>
                                      <a class="btn btn-danger" href="manterpedido.php?tipo=e&id='.$row[0].'">Excluir</a>
                                 </td>';
                            echo '</tr>';
                   }
                   Database::disconnect();
                  ?>
                  </tbody>
            </table>
        </div>
</div> <!-- /container -->

</body>

</html>