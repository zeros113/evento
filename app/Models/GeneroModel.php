<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class GeneroModel extends Model
{
  	protected $table="genero";
  	protected $primarykey="id";
 	protected $allowedFields = ["id","genero","descripcion"];

 	 public function opciones() {
	    $genero = $this->asArray()->findAll();

	    $lista[""] = "Seleccionar el Genero";
	    foreach ($genero as $row) {
	     	$lista[ $row['id']  ]= $row['genero'];
	    }

	    return $lista;
	 }
}
?>