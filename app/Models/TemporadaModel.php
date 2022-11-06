<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class TemporadaModel extends Model
{
  	protected $table="temporada";
  	protected $primarykey="id";
 	protected $allowedFields = ["id","temporada"];

 	 public function opciones() {
	    $temporada = $this->asArray()->findAll();

	    $lista[""] = "Seleccionar la Temporada";
	    foreach ($temporada as $row) {
	     	$lista[ $row['id']  ]= $row['temporada'];
	    }

	    return $lista;
	 }
}
?>