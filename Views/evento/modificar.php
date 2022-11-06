<?php
use App\Models\GeneroModel;
use App\Models\TemporadaModel;
?>
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
  <div class="row">
      <div class="col-lg-11">
          <h2>Modificar un Anime <?=$result->id?></h2>
      </div>
      <div class="col-lg-1">
          <a class="btn btn-primary" href="/evento"> Regresar</a>
      </div>
  </div>
</div>

<div class="container py-2">
<form method="post" id="add_modify" name="add_modify" action="<?php echo base_url('/evento/update');?>">
  <input type="hidden" name="id" id="id" value="<?=$result->id?>">
  <div class="form-group">
    <?=form_label('nombre','for_nombre',['class'=>'control-label']);?>
    <?=form_input(['id'=>'nombre','name'=>'nombre','value'=>$result->nombre,'class'=>'form-control','placeholder'=>'Nombre']);?>
  </div>

  <div class="form-group">
    <?=form_label('Episodios','for_episodios',['class'=>'control-label']);?>
    <?=form_input(['id'=>'episodios','name'=>'episodios','value'=>$result->episodios,'class'=>'form-control','placeholder'=>'Episodios']);?>
  </div>

  <div class="form-group">
    <?=form_label('Sinopsis','for_sinopsis',['class'=>'control-label']);?>
    <?=form_input(['id'=>'sinopsis','name'=>'sinopsis','value'=>$result->sinopsis,'class'=>'form-control','placeholder'=>'Sinopsis']);?>
  </div>

  <?php
    $temporada = [];

    $temporada = (new TemporadaModel)->opciones();
  ?>
  <div class="form-group">
    <?=form_label('Temporada','for_temporada',['class'=>'control-label']);?>
    <?=form_dropdown('temporada',$temporada,0,['class'=>'form-control']);?>
  </div>


  <div class="form-group">
    <?=form_label('Lanzamiento','for_lanzamiento',['class'=>'control-label']);?>
    <?=form_input(['id'=>'lanzamiento','name'=>'lanzamiento','value'=>$result->lanzamiento,'class'=>'form-control',
  'placeholder'=>'Lanzamiento']);?>
  </div>

  <?php
    $genero = [];

    $genero = (new GeneroModel)->opciones();
  ?>
  <div class="form-group">
    <?=form_label('Genero','for_genero',['class'=>'control-label']);?>
    <?=form_dropdown('genero',$genero,0,['class'=>'form-control']);?>
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
  if ($("#add_create").length > 0) {
    $("#add_create").validate({
      rules: {
        nombre: {
          required: true,
        },       
        episodios: {
          required: true,
        },
        sinopsis: {
          required: true,
        },
        temporada: {
          required: true,
        },
        lanzamiento: {
          required: true,
        },
        genero: {
          required: true,
        },
      },
      messages: {
        nombre: {
          required: "El nombre del anime es requerido.",
        },
        episodios: {
          required: "La cantidad de Episodios es requerido.",
        },
        sinopsis: {
          required: "La sinopsis es requerido.",
        },
        temporada: {
          required: "La temporada es requerido.",
        },
        lanzamiento: {
          required: "El Lanzamiento es requerido.",
        },
        genero: {
          required: "El genero es requerido.",
        },
    
      },
    })
  }
</script>
</div>
</body>
</html>
