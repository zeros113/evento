<?php 
helper('form'); 
?>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
  .container 
    max-width: 500px;
  .error 
    display: block;
    padding-top: 5px;
    font-size: 14px;
    color: red;
  </style>
</head>
<body>
<?= $this->section('content') ?>
<?= $this->section('content') ?>
<div class="container py-2 ">
  <h1>Registrar un nuevo Usuario</h1>
</div>

<div class="container py-2h-100">
<form method="post" id="frm_create" name="frm_create" action="<?php echo base_url('/usuario/insert');?>">

  <div class="form-group">
    <?=form_label('Usuario','for_username',['class'=>'control-label']);?>
    <?=form_input(['id'=>'username','name'=>'username','class'=>'form-control','placeholder'=>'Usuario']);?>
  </div>

  <div class="form-group">
    <?=form_label('Contraseña','for_password',['class'=>'control-label']);?>
    <?=form_input(['id'=>'password','name'=>'password','type'=>'password','class'=>'form-control','placeholder'=>'Contraseña']);?>
  </div>

  <div class="form-group">
    <?=form_label('Nombre','for_nombre',['class'=>'control-label']);?>
    <?=form_input(['id'=>'nombre','name'=>'nombre','class'=>'form-control','rows'=>'3','placeholder'=>'Nombre']);?>
  </div>

  <div class="form-group">
    <?=form_label('Apellido paterno','for_apellido_paterno',['class'=>'control-label']);?>
    <?=form_input(['id'=>'apellido_paterno','name'=>'apellido_paterno','class'=>'form-control','placeholder'=>'Apellido paterno']);?>
  </div>

  <div class="form-group">
    <?=form_label('Apellido materno','for_apellido_materno',['class'=>'control-label']);?>
    <?=form_input(['id'=>'apellido_materno','name'=>'apellido_materno','class'=>'form-control','placeholder'=>'Apellido materno']);?>
  </div>

  <div class="form-group">
    <?=form_label('Correo electr&oacutenico','for_correo',['class'=>'control-label']);?>
    <?=form_input(['id'=>'correo','name'=>'correo','class'=>'form-control','placeholder'=>'Corro electrónico']);?>
  </div>

  <div class="form-group">
    <?=form_label('Celular','for_celular',['class'=>'control-label']);?>
    <?=form_input(['id'=>'celular','name'=>'celular','class'=>'form-control','placeholder'=>'Celular']);?>
  </div>

  <div class="form-group">
    <?=form_label('Tel&eacutefono','for_telefono',['class'=>'control-label']);?>
    <?=form_input(['id'=>'telefono','name'=>'telefono','class'=>'form-control','placeholder'=>'Teléfono']);?>
  </div>
  <div class="form-group">
    <?=form_label('Rol','for_rol',['class'=>'control-label']);?>
    <?=form_input(['id'=>'rol','name'=>'rol','class'=>'form-control','placeholder'=>'Rol']);?>
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-primary">Guardar</button>
  </div>
        
</form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
<script>
  if ($("#frm_create").length > 0) {
    $("#frm_create").validate({
      rules: {
        username: {
          required: true,
        },
        password: {
          required: true,
        },
        nombre: {
          required: true,
        },
        apellido_paterno: {
          required: true,
        },
        correo: {
          required: true,
        },
        celular: {
          required: true,
          number: true,
          min: 18
        },
        telefono: {
          number: true,
          min: 18
        },
      },
      messages: {
        username: {
          required: "El usuario es requerido.",
        },
        password: {
          required: "La contraseña es requerida .",
        },
        nombre: {
          required: "El nombre es requerido.",
        },
        apellido_paterno: {
          required: "Los apellidos son requeridos.",
        },
        correo: {
          required: "El correo electr$oacute es requerido",
        },
        celular: {
          required: "El número de celular es requerido",
        },
        telefono: {
          required: "El número de teléfono es requerido",
        },
      },
    })
  }  
</script>
</div>
</body>
</html>