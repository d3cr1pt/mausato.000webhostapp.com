<?php 
session_start();
	require_once('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Usuário <?php echo $customer['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Nome do Usuário:</dt>
	<dd><?php echo $customer['name']; ?></dd>

	<dt>Email de Usuário:</dt>
	<dd><?php echo $customer['email']; ?></dd>

	<dt>Criado em:</dt>
	<dd><?php echo formatDate($customer['created']); ?></dd>

	<dt>Atualizado em:</dt>
	<dd><?php echo formatDate($customer['modified']); ?></dd>
</dl>
<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>