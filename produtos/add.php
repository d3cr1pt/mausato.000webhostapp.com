<?php 
session_start();
  require_once('functions.php'); 
  add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Novo Produto</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Descrição</label>
      <input type="text" class="form-control" name="customer['descricao']">
    </div>
	<div class="form-group col-md-7">
      <label for="name">Quantidade</label>
      <input type="tel" pattern="[0-9]{1,}" class="form-control" name="customer['quantidade']">
    </div>
	<div class="form-group col-md-7">
      <label for="name">Preço Unitário</label>
      <input type="number" step="0.01" min="0" class="form-control" name="customer['precounit']">
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