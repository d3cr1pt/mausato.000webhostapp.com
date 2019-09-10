<?php
require_once('../config.php');
require_once(DBAPI);
$customers = null;
$customer = null;
/**
 *  Listagem de Clientes
 */
function index() {
	global $customers;
	$customers = find_all('produto');
}

/**
 * 	Cadastro de Clientes
 */

function add() {
	if (!empty($_POST['customer'])) {
	  
	  $today = 
		date_create('now', new DateTimeZone('America/Sao_Paulo'));
	  $customer = $_POST['customer'];
	  $customer['modified'] = $customer['created'] = $today->format("Y-m-d H:i:s");
	  //var_dump($customer);
	  save('produto', $customer);
	  header('location: index.php');
	}
  }

  /**
 *	Atualizacao/Edicao de Cliente
 */
function edit() {
	$now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
	if (isset($_GET['id'])) {
	  $id = $_GET['id'];
	  if (isset($_POST['customer'])) {
		$customer = $_POST['customer'];
		$customer['modified'] = $now->format("Y-m-d H:i:s");
		update('produto', $id, $customer);
		header('location: index.php');
	  } else {
		global $customer;
		$customer = find('produto', $id);
	  } 
	} else {
	  header('location: index.php');
	}
  }

/**
 *  Visualização de um Cliente
 */
function view($id = null) {
	global $customer;
	$customer = find('produto', $id);
	}
	
	/**
 *  Exclusão de um Cliente
 */
function delete($id = null) {
  global $customer;
  $customer = remove('produto', $id);
  header('location: index.php');
}

function formatNumber($value) {
	return number_format($value,0,',','.');
}

function formatMoney($value) {
	return "R$".number_format($value,2,',','.');
}

function formatDate($date) {
	$date = new DateTime($date,  new DateTimeZone( 'UTC' ));
	return $date->format('d/m/Y');
}