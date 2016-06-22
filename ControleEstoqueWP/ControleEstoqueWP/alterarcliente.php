<?php
    require 'banco.php';
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( null==$id ) {
        header("Location: index.php");
    } else {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT id, nome, email, telefone FROM cliente where id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        Database::disconnect();
    }
?>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<div class="container">
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Clientes</h3>
                    </div>
             
                    <form class="form-horizontal" action="manterCliente.php?tipo=a" method="post">
                      
                       <div class="form-group">
                          <input type="hidden"
                            class="form-control" id="idcliente" name="idcliente" value="<?php echo $data['id'];?>" >
                       </div>

                       <div class="form-group">
                          <label for="nome">Nome</label> <input type="text"
                            class="form-control" id="nome" name="nome" value="<?php echo $data['nome'];?>" required>
                        </div>
                        <div class="form-group">
                          <label for="email">E-mail</label> <input type="text"
                            class="form-control" id="email" name="email" value="<?php echo $data['email'];?>" required>
                        </div>

                        <div class="form-group">
                          <label for="telefone">Telefone</label> <input type="text"
                            class="form-control" id="telefone" name="telefone" value="<?php echo $data['telefone'];?>" required>
                        </div>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-success">Salvar</button>
                          <a class="btn btn-default" href="clientes.php" target="direita">Voltar</a>
                        </div>
                    </form>
                </div>
</div>
