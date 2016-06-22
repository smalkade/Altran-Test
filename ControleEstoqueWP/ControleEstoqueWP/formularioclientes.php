<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<div class="container">
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Formulário de Clientes</h3>
                    </div>
             
                    <form class="form-horizontal" action="mantercliente.php?tipo=i" method="post">
                        
                       <div class="form-group">
                          <label for="nome">Nome</label> <input type="text"
                            class="form-control" id="nome" name="nome" required>
                        </div>
                        <div class="form-group">
                          <label for="email">E-mail</label> <input type="text"
                            class="form-control" id="email" name="email" required>
                        </div>

                        <div class="form-group">
                          <label for="telefone">Telefone</label> <input type="text"
                            class="form-control" id="telefone" name="telefone" required>
                        </div>

                      <div class="form-actions">
                          <button type="submit" class="btn btn-success">Salvar</button>
                          <a class="btn btn-default" href="clientes.php" target="direita">Voltar</a>
                        </div>
                    </form>
                </div>
</div>