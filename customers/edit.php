<?php 
session_start();
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>
<script>
  $(function(){
    //CPF
    $("#cpf").inputmask({"mask":"999.999.999-99","autoUnmask":"true"})
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
  })
</script>
<h2>Atualizar Cliente</h2>

<form action="edit.php?id=<?php echo $customer['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Nome / Razão Social</label>
      <input type="text" class="form-control" name="customer['name']" value="<?php echo $customer['name']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">CNPJ / CPF</label>
      <input type="text" class="form-control" name="customer['cpf_cnpj']" value="<?php echo $customer['cpf_cnpj']; ?>" id="cpf">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data de Nascimento</label>
      <input type="text" class="form-control" name="customer['birthdate']" value="<?php echo $customer['birthdate']; ?>" disabled>
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-5">
      <label for="campo1">Endereço</label>
      <input type="text" class="form-control" name="customer['address']" value="<?php echo $customer['address']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Bairro</label>
      <input type="text" class="form-control" name="customer['hood']" value="<?php echo $customer['hood']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">CEP</label>
      <input type="text" class="form-control" name="customer['zip_code']" value="<?php echo $customer['zip_code']; ?>" id="cep">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data de Cadastro</label>
      <input type="text" class="form-control" name="customer['created']" disabled value="<?php echo $customer['created']; ?>">
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-3">
      <label for="campo1">Município</label>
      <input type="text" class="form-control" name="customer['city']" value="<?php echo $customer['city']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo2">Telefone</label>
      <input type="text" class="form-control" name="customer['phone']" value="<?php echo $customer['phone']; ?>" id="phone">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Celular</label>
      <input type="text" class="form-control" name="customer['mobile']" value="<?php echo $customer['mobile']; ?>" id="mobile">
    </div>

    <div class="form-group col-md-1">
      <label for="campo3">UF</label>
      <input type="text" class="form-control" name="customer['state']" value="<?php echo $customer['state']; ?>" id="state">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Inscrição Estadual</label>
      <input type="text" class="form-control" name="customer['ie']" value="<?php echo $customer['ie']; ?>" id="ie">
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