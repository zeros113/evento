<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<div class="container py-2 h-100">
  <table class="table">
  <form method="post" action="<?php echo base_url('/usuario/busqueda');?>">
  <tr>
      <td colspan="2">
          <input type="text" name="criterio" class="form-control">
      </td>
      <td>
        <a href="<?php echo base_url('/usuario/restaurar');?>"><img src="<?=base_url('/images/arrow-repeat.svg')?>" title='Restablecer'></a>&nbsp;
        <input type="submit" value='Buscar' class="btn btn-primary">  
      </td>
  </tr>
  </form>
  </table>

  <p>
    <a href="<?php echo base_url('/usuario/registrar');?>" class="btn btn-success">Registrar nuevo usuario</a>&nbsp;&nbsp;&nbsp;
    <a href="<?php echo base_url('/home/menu');?>" class="btn btn-primary">Regresar</a>
  </p>

  <table class="table table-striped">
     	<tr>
         <td><b>ID</b></td>
        <td><b>Usuario</b></td>
        <td><b>Nombre</b><a href="<?php echo base_url('/usuario/ascendente'); ?>" title='Ordenar ascendente'><img src="<?=base_url('/images/sort-alpha-up.svg')?>"></a>
        <a href="<?php echo base_url('/usuario/descendente'); ?>" title='Ordenar descendente'><img src="<?=base_url('/images/sort-alpha-down.svg')?>"></a></td>
        <td><b>Apellido Paterno</b></td>
        <td><b>Telefono</b></td>
        <td></td>
      </tr>
      <?php
  		foreach ($result as $row) {
          ?>
  		<tr>
          <td><?=$row->id?></td>
  			<td><?=$row->username?></td>
              <td><span title='<?=$row->nombre?>'><?=$row->nombre?></span></td>
              <td><span title='<?=$row->apellido_paterno?>'><?=$row->apellido_paterno?></span></td>
              <td><span title='<?=$row->telefono?>'><?=$row->telefono?></span></td>
              <td><a href="<?php echo base_url('/usuario/modificar/'.$row->id);?>" title='Editar usuario'><img src="<?=base_url('/images/pencil.svg')?>"></a>&nbsp;<a href="<?php echo base_url('/usuario/delete/'.$row->id);?>" title='Eliminar usuario'><img src="<?=base_url('/images/trash.svg')?>"></a></td>
          </tr>
          <?php
  		}
      ?>
  </table>
    </div>
</body>
</html>