<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>CRUD com Bootstrap</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="<?php echo BASEURL; ?>vendor/jquery-3.3.1.min.js"></script>
        <script src="<?php echo BASEURL; ?>vendor/popper.min.js"></script>
        <script src="<?php echo BASEURL; ?>vendor/bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="<?php echo BASEURL; ?>vendor/bootstrap/css/bootstrap.min.css">
        <script src="<?php echo BASEURL;?>vendor/bootstrap-datepicker.min.js"></script>
        <script src="<?php echo BASEURL;?>vendor/inputmask.min.js"></script>
        <script src="<?php echo BASEURL;?>vendor/jquery.mask.min.js"></script>
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
                background-color: #dcdcdc;
            }
        </style>
        <link rel="stylesheet" href="<?php echo BASEURL; ?>vendor/fontawesome/css/all.css">
        <script src="<?php echo BASEURL; ?>vendor/fontawesome/js/all.js"></script>
        <link rel="stylesheet" href="<?php echo BASEURL; ?>vendor/datepicker/jquery.datetimepicker.css">
        <script src="<?php echo BASEURL; ?>vendor/datepicker/jquery.datetimepicker.full.min.js"></script>
        <link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css">
        <script src="<?php echo BASEURL; ?>js/main.js"></script>
    </head>
    <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" style="margin-bottom: 20px">
      <a class="navbar-brand" href="<?php echo BASEURL; ?>"><i class="fas fa-apple-alt"></i>&nbsp; Loja</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASEURL; ?>"><i class="fas fa-home"></i>&nbsp;Início <span class="sr-only">(current)</span></a>
          </li>
		  <?php
		  if(isset($_SESSION['logged_in'])) {
			  ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Produtos
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo BASEURL; ?>produtos"><i class="fas fa-shopping-cart"></i>&nbsp;Gerenciar produtos</a>
                <a class="dropdown-item" href="<?php echo BASEURL; ?>produtos/add.php"><i class="fas fa-cart-plus"></i>&nbsp;Adicionar produtos</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Clientes
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo BASEURL; ?>customers"><i class="fas fa-user"></i>&nbsp;Gerenciar clientes</a>
                <a class="dropdown-item" href="<?php echo BASEURL; ?>customers/add.php"><i class="fas fa-user-plus"></i>&nbsp;Adicionar clientes</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Funcionários
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo BASEURL; ?>usuarios"><i class="fas fa-users-cog"></i>&nbsp;Gerenciar funcionários</a>
                <a class="dropdown-item" href="<?php echo BASEURL; ?>usuarios/add.php"><i class="fas fa-user-plus"></i>&nbsp;Adicionar funcionários</a>
              </div>
            </li>
          </li>
		  <?php } ?>
        </ul> <!-- Fim do List Navbar -->
        <ul class="nav navbar-nav flex-row justify-content-between ml-auto" id="login">
        <?php if(isset($_SESSION['logged_in'])) {
          echo '<li class="nav-item order-2 order-md-1"><a href="'. BASEURL .'usuarios/" class="nav-link" title="settings"><i class="fa fa-lg fa-user-cog"></i>&nbsp;'.ucfirst($_SESSION['user_name']).'</a></li>';

        }
	            if(!isset($_SESSION['logged_in'])):?>
                <li class="dropdown order-1">
                    <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle">Login <span class="caret"></span></button>
                    <ul class="dropdown-menu dropdown-menu-right mt-2">
                      <li class="p-3">
						<form action="<?php echo BASEURL; ?>login/login.php" method="POST">
                            <form class="form" role="form">
                                <div class="form-group">
                                Email:<br>
                                    <input id="emailInput" name="email" placeholder="Email" class="form-control form-control-sm" type="text" required="">
                                </div>
                                <div class="form-group">
                                Senha:<br>
                                    <input id="passwordInput" name="password" placeholder="Password" class="form-control form-control-sm" type="password" required="">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                                </div>
                                <div class="form-group text-xs-center">
                                    <small><a href="#">Forgot password?</a></small>
                                </div>
                            </form>
                        </li>
                    </ul>
                </li>
				<?php endif;?>
				<a class="order-3">&nbsp;</a>
				<?php if(isset($_SESSION['logged_in'])): ?>
				&nbsp;<a href="<?php echo BASEURL; ?>login/logout.php" class="btn btn-danger order-4">Logout</a>
				<?php endif;?>
            </ul>
      </div>
    </nav>
<main class="container" style="margin-top: 20px;">