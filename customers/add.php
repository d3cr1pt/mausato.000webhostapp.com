<?php 
session_start();
  require_once('functions.php'); 
  add();
  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
  $now = date_format($now,"d/m/Y H:i");
  
?>

<?php include(HEADER_TEMPLATE); ?>
<script>
  
  $(function(){
    //Dia do aniversario
    $('#birthday').datetimepicker({
      timepicker: false,
      dateFormat: 'dd/mm/yy',
      locale: 'br'
    });
    //CEP
    $("#cep").inputmask({"mask": "99999-999", "autoUnmask": "true"})
    //Telefone
    $("#phone").inputmask({"mask": "(99) 9999-9999", "autoUnmask": "true"});
    //Celular
    $("#mobile").inputmask({"mask":"(99) 99999-9999","autoUnmask":"true"});
    //Estado
    $("#state").inputmask({"mask":"AA","autoUnmask":"true"})
    //CPF
    $('#cpfcnpj').inputmask({"mask":"999.999.999-99","autoUnmask":"true"});
    //Inscrição Estadual
    $("#ie").inputmask({"mask":"999.999.999","autoUnmask":"true"})
  });
</script>
<h2>Novo Cliente</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name="customer['name']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo2">CPF</label>
      <input type="text" class="form-control" name="customer['cpf_cnpj']" id="cpfcnpj">
    </div>

    <div class="form-group col-md-3">
      <label for="campo3">Data de Nascimento</label>
      <input type="text" class="form-control" name="customer['birthdate']" id="birthday">
    </div>
  </div>
  
  <div class="row">
    <div class="form-group col-md-5">
      <label for="campo1">Endereço</label>
      <input type="text" class="form-control" name="customer['address']">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Bairro</label>
      <input type="text" class="form-control" name="customer['hood']">
    </div>
    
    <div class="form-group col-md-2">
      <label for="campo3">CEP</label>
      <input type="text" class="form-control" name="customer['zip_code']" id="cep">
    </div>
    
    <div class="form-group col-md-2">
      <label for="campo3">Data de Cadastro</label>
      <input type="text" class="form-control" name="customer['created']" value='<?php echo $now; ?>' disabled>
    </div>
  </div>
  
  <div class="row">
    <div class="form-group col-md-3">
      <label for="campo1">Município</label>
      <input type="text" class="form-control" name="customer['city']">
    </div>
    
    <div class="form-group col-md-2">
      <label for="campo2">Telefone</label>
      <input type="text" class="form-control" name="customer['phone']" id="phone">
    </div>
    
    <div class="form-group col-md-2">
      <label for="campo3">Celular</label>
      <input type="text" class="form-control" name="customer['mobile']" id="mobile">
    </div>
    
    <div class="form-group col-md-1">
      <label for="campo3">UF</label>
      <input type="text" class="form-control" name="customer['state']" maxlength="2" id="state">
    </div>
    
    <div class="form-group col-md-2">
      <label for="campo3">Inscrição Estadual</label>
      <input type="text" class="form-control" name="customer['ie']" id="ie">
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