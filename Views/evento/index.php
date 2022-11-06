<?php
use App\Models\GeneroModel;
use App\Models\TemporadaModel;
?>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<div class="container py-2 h-100">
<p text-color="green">
    <center><span><h3>Sistema de registro de Anime - Isla 1 Grupo 403</h3></span></center>
</p>

<table class="table">
<form method="post" action="<?php echo base_url('/evento/busqueda');?>">
<tr>
    <td colspan="2">
        <input type="text" name="criterio" class="form-control" placeholder="Evento a consultar">
    </td>
    <td>
        <a href="/evento/restaurar"><img src="<?=base_url('/images/arrow-repeat.svg')?>" title="Restaurar"></a>&nbsp;
        <input type="image" src="<?=base_url('/images/search.svg')?>" title="Buscar">
    </td>
</tr>
</form>
</table>


<p>
<a href="<?php echo base_url('/evento/registrar');?>" class="btn btn-success">Registrar nuevo Anime </a>
&nbsp;&nbsp;&nbsp;
<a href="<?php echo base_url('/home/menu');?>" class="btn btn-primary">Regresar</a>
</p>
<table class="table table-striped">
    <tr>
      <td><b>ID</b></td>
      <td><b>Anime</b>
      <a href="<?php echo base_url('/evento/ascendente'); ?>"><img src="<?=base_url('/images/sort-alpha-down.svg')?>"></a>
      <a href="<?php echo base_url('/evento/descendente'); ?>"><img src="<?=base_url('/images/sort-alpha-up.svg')?>"></a>
      </td>
      <td><b>Episodios</b></td>
      <td><b>Sinopsis</b></td>
      <td><b>Temporada</b></td>
      <td><b>Lanzamiento</b></td>
      <td><b>Genero</b></td>
      <td></td>
    </tr>
    <?php
    foreach ($result as $row) {
    ?>
    <tr>
      <td><?=$row->id?></td>
      <td><span title='<?=$row->nombre?>'><?=$row->nombre?></span></td>
      <td><span title='<?=$row->episodios?>'><?=$row->episodios?></span></td>
      <td><span title='<?=$row->sinopsis?>'><?=$row->sinopsis?></span></td>
      <td><span title='<?=$row->temporada?>'><?=(new TemporadaModel)->asObject()->find($row->temporada)->temporada;?></span></td>
      <td><span title='<?=$row->lanzamiento?>'><?=$row->lanzamiento?></span></td>
      <td><span title='<?=$row->genero?>'><?=(new GeneroModel)->asObject()->find($row->genero)->genero;?></span></td>
      <td><a href="<?php echo base_url('/evento/modificar/'.$row->id);?>" title='Editar evento'><img src="<?=base_url('/images/pencil.svg')?>"></a></a>&nbsp;<a href="<?php echo base_url('/evento/delete/'.$row->id);?>" title='Eliminar evento'><img src="<?=base_url('/images/trash.svg')?>"></a></td>
        </tr>
        <?php
    }
    ?>
</table>
</div>
</div>
</body>
</html>