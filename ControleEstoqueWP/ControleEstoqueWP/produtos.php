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
                <h3>Controle de Produtos</h3>
            </div>
            <div class="row">
                <p>
                    <a href="formularioprodutos.php" target="direita" class="btn btn-success">Inserir</a>
                </p>

                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Nome</th>
                      <th>Descrição</th>
                      <th>Preço</th>
                      <th>Ação</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                   include 'banco.php';
                   $pdo = Database::connect();
                   $sql = 'SELECT id, nome, descricao, preco FROM produto ORDER BY nome DESC';
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['id'] . '</td>';
                            echo '<td>'. $row['nome'] . '</td>';
                            echo '<td>'. $row['descricao'] . '</td>';
                            echo '<td>'. $row['preco'] . '</td>';
                            echo '<td><a class="btn btn-warning" href="alterarproduto.php?id='.$row['id'].'">Alterar</a>
                                      <a class="btn btn-danger" href="manterproduto.php?tipo=e&id='.$row['id'].'">Excluir</a>
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