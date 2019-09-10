<?php 
session_start();
	require_once('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Produto: <?php echo $customer['descricao']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Descricao:</dt>
	<dd><?php echo $customer['descricao']; ?></dd>

	<dt>Quantidade:</dt>
	<dd><?php echo formatNumber($customer['quantidade']); ?></dd>

	<dt>Preço Unitário:</dt>
	<dd><?php echo formatMoney($customer['precounit']); ?></dd>
</dl>

<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>