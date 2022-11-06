<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class EventosModel extends Model
{
  	protected $table="eventos";
  	protected $primarykey="id";
 	protected $allowedFields = ["id","nombre","episodios","sinopsis","temporada","lanzamiento","genero"];
}
?>
