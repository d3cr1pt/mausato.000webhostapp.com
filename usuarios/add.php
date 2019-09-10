<?php 
session_start();
  require_once('functions.php'); 
  add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Novo Cliente</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-4">
      <label for="name">Nome de Usuário</label>
      <input type="text" class="form-control" name="customer['name']">
    </div>

	<div class="form-group col-md-4">
	  <label for="name">Email</label>
	  <input type="text" class="form-control" name="customer['email']">
	</div>

    <div class="form-group col-md-3">
      <label for="campo2">Senha</label>
      <input type="password" class="form-control" name="customer['password']">
    </div>

  </div>
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>