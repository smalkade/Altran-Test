<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<div class="container">
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Formulário de Pedido</h3>
                    </div>
             
                    <form class="form-horizontal" action="manterpedido.php?tipo=i" method="post">

                   <?php include 'banco.php';?>
                   
                        <div class="form-group">
                          <label for="cliente">Cliente</label>
                              <select id="cliente" name="cliente" class="form-control" >
                                <option value="0">Selecione...</option>
                                <?php
                                 $pdo = Database::connect();
                                 $sql = 'SELECT ID, NOME FROM CLIENTE';
                                 foreach ($pdo->query($sql) as $row) {
                                          echo '<option value="'. $row[0] . '">'. $row[1] . '</option>';
                                 }
                                 Database::disconnect();
                                 ?>
                              </select>
                        </div>

                        <div class="form-group">
                          <label for="produto">Produto</label>
                              <select id="produto" name="produto" class="form-control" >
                                <option value="0">Selecione...</option>
                                <?php
                                 $pdo = Database::connect();
                                 $sql = 'SELECT ID, NOME FROM PRODUTO';
                                 foreach ($pdo->query($sql) as $row) {
                                           echo '<option value="'. $row[0] . '">'. $row[1] . '</option>';
                                 }
                                 Database::disconnect();
                                 ?>
                              </select>
                        </div>

                      <div class="form-actions">
                          <button type="submit" class="btn btn-success">Salvar</button>
                          <a class="btn btn-default" href="pedidos.php" target="direita">Voltar</a>
                        </div>
                    </form>
                </div>
</div>