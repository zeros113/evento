<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class OrganizadoresModel extends Model
{
  	protected $table="organizadores";
  	protected $primarykey="id";
 	protected $allowedFields = ["id","temporada","estado"];

 	 public function opciones() {
	    $organizadores = $this->asArray()->findAll();

	    $lista[""] = "Seleccionar la temporada";
	    foreach ($organizadores as $row) {
	     	$lista[ $row['id']  ]= $row['temporada'];
	    }

	    return $lista;
	 }
}
?>