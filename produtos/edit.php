<?php 
session_start();
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Produto</h2>

<form action="edit.php?id=<?php echo $customer['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Descrição</label>
      <input type="text" class="form-control" name="customer['descricao']" value="<?php echo $customer['descricao']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data de Cadastro</label>
      <input type="text" class="form-control" name="customer['created']" disabled value="<?php echo $customer['created']; ?>" placeholder="<?php echo formatDate($customer['created']); ?>">
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-3">
      <label for="campo1">Quantidade</label>
      <input type="text" class="form-control" name="customer['quantidade']" value="<?php echo $customer['quantidade']; ?>">
    </div>
    <div class="form-group col-md-3">
      <label for="campo2">Preço Unitário</label>
      <input type="number" step="0.01" class="form-control" name="customer['precounit']" value="<?php echo $customer['precounit'];?>">
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