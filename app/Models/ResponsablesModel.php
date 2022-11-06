<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class ResponsablesModel extends Model
{
  	protected $table="responsables";
  	protected $primarykey="id";
 	protected $allowedFields = ["id","responsable","coordinador","evidencia"];

 	public function opciones() {
	    $responsables = $this->asArray()->findAll();

	    $lista[""] = "Seleccionar al responsable del evento";
	    foreach ($responsables as $row) {
	    	$lista[ $row['id']  ]= $row['responsable'];
	    }

	    return $lista;
	 }
}
?>
