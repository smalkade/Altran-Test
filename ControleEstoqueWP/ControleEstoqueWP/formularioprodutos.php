<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<div class="container">
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Formulário de Produtos</h3>
                    </div>
             
                    <form class="form-horizontal" action="manterproduto.php?tipo=i" method="post">
                        
                       <div class="form-group">
                          <label for="nome">Nome</label> <input type="text"
                            class="form-control" id="nome" name="nome" required>
                        </div>
                        <div class="form-group">
                          <label for="descricao">Descrição</label> <input type="text"
                            class="form-control" id="descricao" name="descricao" required>
                        </div>

                        <div class="form-group">
                          <label for="preco">Preço</label> <input type="text"
                            class="form-control" id="preco" name="preco" required>
                        </div>

                      <div class="form-actions">
                          <button type="submit" class="btn btn-success">Salvar</button>
                          <a class="btn btn-default" href="produtos.php" target="direita">Voltar</a>
                        </div>
                    </form>
                </div>
</div>