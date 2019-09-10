<?php 
session_start();
require_once 'config.php'; 
require_once DBAPI;

$db = open_database();
include(HEADER_TEMPLATE); ?>
<h1>Painel de Controle</h1>
<hr />
<style>
	.text-center {
		margin-left: auto;
		margin-right: auto;
	}
</style>

<?php if ($db) : ?>
<div class="container-fluid">
    <?php if(isset($_GET["error"])): ?>
        <div class='alert alert-danger'>Você digitou o login/senha incorretamente! Tente novamente</div>
    <?php endif; ?>
    <?php if(isset($_GET["logout"])): ?>
        <div class='alert alert-warning'>Você foi deslogado, volte sempre.</div>
    <?php endif; ?>
<?php if(isset($_SESSION['logged_in'])):?>
<div class="row">
	<div class="col-4">
		<a href="produtos/add.php" class="btn btn-dark">
			<div class="row">
				<div class="col-12 text-center" align="center">
					<i class="fa fa-plus fa-5x"></i>
				</div>
				<div class="col-12 text-center" align="center">
					<p>Novo Produto</p>
				</div>
			</div>
		</a>
	</div>
	<div class="col-4">
		<a href="produtos/" class="btn btn-default">
			<div class="row">
				<div class="col-12 text-center" align="center">
					<i class="fa fa-shopping-cart fa-5x"></i>
				</div>
				<div class="col-12 text-center" align="center">
					<p>Produtos</p>
				</div>
			</div>
		</a>
	</div>
</div>
<hr>
<div class="row">
	<div class="col-4">
		<a href="customers/add.php" class="btn btn-dark">
			<div class="row">
				<div class="col-12 text-center" align="center">
					<i class="fa fa-plus fa-5x"></i>
				</div>
				<div class="col-12 text-center" align="center">
					<p>Novo Cliente</p>
				</div>
			</div>
		</a>
	</div>
	<div class="col-4">
		<a href="customers/" class="btn btn-default">
			<div class="row">
				<div class="col-12 text-center" align="center">
					<i class="fa fa-handshake fa-5x"></i>
				</div>
				<div class="col-12 text-center" align="center">
					<p>Clientes</p>
				</div>
			</div>
		</a>
	</div>
</div>
<hr>
<div class="row">
	<div class="col-4">
		<a href="usuarios/add.php" class="btn btn-dark">
			<div class="row">
				<div class="col-12 text-center" align="center">
					<i class="fa fa-plus fa-5x"></i>
				</div>
				<div class="col-12 text-center" align="center">
					<p>Novo Funcionário</p>
				</div>
			</div>
		</a>
	</div>
	<div class="col-4">
		<a href="usuarios/" class="btn btn-default">
			<div class="row">
				<div class="col-12 text-center" align="center">
					<i class="fa fa-user-cog fa-5x"></i>
				</div>
				<div class="col-12 text-center" align="center">
					<p>Funcionários</p>
				</div>
			</div>
		</a>
	</div>
</div>
<?php endif; ?>
<?php else : ?>
	<div class="alert alert-danger" role="alert">
		<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
	</div>

<?php endif; ?>
</div>
<?php include(FOOTER_TEMPLATE); ?>