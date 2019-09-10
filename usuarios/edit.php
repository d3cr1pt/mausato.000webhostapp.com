<?php 
session_start();
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Usuário</h2>

<form action="edit.php?id=<?php echo $customer['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-4">
      <label for="name">Nome do Usuário</label>
      <input type="text" class="form-control" name="customer['name']" value="<?php echo $customer['name']; ?>">
    </div>
	
	<div class="form-group col-md-4">
      <label for="name">Nome de Usuário</label>
      <input type="text" class="form-control" name="customer['email']" value="<?php echo $customer['email']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Senha</label>
      <input type="text" disabled class="form-control" name="customer['password']" value="<?php echo $customer['password']; ?>">
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