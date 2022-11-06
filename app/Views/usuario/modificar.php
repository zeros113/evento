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
<div class="container py-2">
<h1>Modificar datos de usuario</h1>
<form method="post" id="frm_edit" name="frm_edit" action="<?php echo base_url('/usuario/update');?>">
  <input type="hidden" name="id" id="id" value="<?=$result->id?>">
        
  <div class="form-group">
    <?=form_label('Usuario','for_username',['class'=>'control-label']);?>
    <?=form_input(['id'=>'username','name'=>'username','value'=>$result->username,'class'=>'form-control','placeholder'=>'Usuario','readonly'=>'true']);?>
  </div>

  <div class="form-group">
    <?=form_label('Contraseña','for_password',['class'=>'control-label']);?>
    <?=form_input(['id'=>'password','name'=>'password','value'=>$result->password,'type'=>'password','class'=>'form-control','placeholder'=>'Contraseña']);?>
  </div>

  <div class="form-group">
    <?=form_label('Nombre','for_nombre',['class'=>'control-label']);?>
    <?=form_input(['id'=>'nombre','name'=>'nombre','value'=>$result->nombre,'class'=>'form-control','rows'=>'3','placeholder'=>'Nombre']);?>
  </div>

  <div class="form-group">
    <?=form_label('Apellido paterno','for_apellido_paterno',['class'=>'control-label']);?>
    <?=form_input(['id'=>'apellido_paterno','name'=>'apellido_paterno','value'=>$result->apellido_paterno,'class'=>'form-control','placeholder'=>'Apellido paterno']);?>
  </div>

  <div class="form-group">
    <?=form_label('Apellido materno','for_apellido_materno',['class'=>'control-label']);?>
    <?=form_input(['id'=>'apellido_materno','name'=>'apellido_materno','value'=>$result->apellido_materno,'class'=>'form-control','placeholder'=>'Apellido materno']);?>
  </div>

  <div class="form-group">
    <?=form_label('Correo electr&oacutenico','for_correo',['class'=>'control-label']);?>
    <?=form_input(['id'=>'correo','name'=>'correo','value'=>$result->correo,'class'=>'form-control','placeholder'=>'Corro electrónico']);?>
  </div>

  <div class="form-group">
    <?=form_label('Celular','for_celular',['class'=>'control-label']);?>
    <?=form_input(['id'=>'celular','name'=>'celular','value'=>$result->celular,'class'=>'form-control','placeholder'=>'Celular']);?>
  </div>

  <div class="form-group">
    <?=form_label('Tel&eacutefono','for_telefono',['class'=>'control-label']);?>
    <?=form_input(['id'=>'telefono','name'=>'telefono','value'=>$result->telefono,'class'=>'form-control','placeholder'=>'Teléfono']);?>
  </div>

  <div class="form-group">
    <?=form_label('Rol','for_rol',['class'=>'control-label']);?>
    <?=form_input(['id'=>'rol','name'=>'rol','class'=>'form-control','placeholder'=>'Rol']);?>
  </div>

  <div class="form-group">
    <input type="submit" value='Guardar' class="btn btn-primary">
  </div>
        
</form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
<script>
  if ($("#frm_edit").length > 0) {
    $("#frm_edit").validate({
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