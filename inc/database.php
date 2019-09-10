<?php

mysqli_report(MYSQLI_REPORT_STRICT);

function open_database() {
    try{
        $conn = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
        return $conn;
    } catch(Exception $e) {
        echo $e->getMessage();
        return null;
    }
}

function close_database($conn) {
    try {
        mysqli_close($conn);
    } catch(Exception $e) {
        echo $e->getMessage();
    }
}

/**
 * 	Encontra um registro no BD
 */

function find( $table = null, $id = null ) {
  
	$database = open_database();
	$found = null;
	try {
	  if ($id) {
	    $sql = "SELECT * FROM " . $table . " WHERE id = " . $id;
	    $result = mysqli_query($database,$sql);
	    echo mysqli_error($database);
	    if(mysqli_num_rows($result) > 0) {
	      $found = $result->fetch_assoc();
	    }
	    
	  } else {
	    
	    $sql = "SELECT * FROM " . $table;
	    $result = mysqli_query($database,$sql);
	    if (mysqli_num_rows($result) > 0) {
	      // $found = mysqli_fetch_assoc($result);
        
        // Metodo alternativo
        $found = array();
        while ($row = $result->fetch_assoc()) {
          array_push($found, $row);
        } 
	    }
	  }
	} catch (Exception $e) {
	  $_SESSION['message'] = $e->GetMessage();
	  $_SESSION['type'] = 'danger';
  }
	
	close_database($database);
	return $found;
}

/**
 * 	Encontra todos os registro de uma tabela no BD
 */

function find_all( $table ) {
	return find($table);
}

/**
*  Insere um registro no BD
*/
function save($table = null, $data = null) {
  $database = open_database();
  $columns = null;
  $values = null;
  //print_r($data);
  foreach ($data as $key => $value) {
    $columns .= trim($key, "'") . ",";
    $values .= "'$value',";
  }
  // remove a ultima virgula
  $columns = rtrim($columns, ',');
  $values = rtrim($values, ',');
  
  $sql = "INSERT INTO " . $table . "($columns)" . " VALUES " . "($values);";
  try {
    $database->query($sql);
    echo mysqli_error($database);
    $_SESSION['message'] = 'Registro cadastrado com sucesso.';
    $_SESSION['type'] = 'success';
  
  } catch (Exception $e) { 
  
    $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
    $_SESSION['type'] = 'danger';
  } 
  close_database($database);
}

/**
 *  Atualiza um registro em uma tabela, por ID
 */
function update($table = null, $id = 0, $data = null) {
  $database = open_database();
  $items = null;
  foreach ($data as $key => $value) {
    $items .= trim($key, "'") . "='$value',";
  }
  // remove a ultima virgula
  $items = rtrim($items, ',');
  $sql  = "UPDATE " . $table;
  $sql .= " SET $items";
  $sql .= " WHERE id=" . $id . ";";
  try {
    $database->query($sql);
    $_SESSION['message'] = 'Registro atualizado com sucesso.';
    $_SESSION['type'] = 'success';
  } catch (Exception $e) { 
    $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
    $_SESSION['type'] = 'danger';
  } 
  close_database($database);
}

/**
 *  Remove uma linha de uma tabela pelo ID do registro
 */
function remove( $table = null, $id = null ) {
  $database = open_database();
	
  try {
    if ($id) {
      $sql = "DELETE FROM " . $table . " WHERE id = " . $id;
      $result = $database->query($sql);
      if ($result = $database->query($sql)) {   	
        $_SESSION['message'] = "Registro Removido com Sucesso.";
        $_SESSION['type'] = 'success';
      }
    }
  } catch (Exception $e) { 
    $_SESSION['message'] = $e->GetMessage();
    $_SESSION['type'] = 'danger';
  }
  close_database($database);
}