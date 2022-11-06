<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class LoginModel extends Model
{
  	protected $table="usuarios";
  	protected $primarykey="idUsario";
 	protected $allowedFields = ["idUsuario","usuario","password","status"]; 	
}
?>
