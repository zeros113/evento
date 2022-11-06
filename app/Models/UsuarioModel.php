<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class UsuarioModel extends Model
{
  protected $table="usseres";
  protected $primarykey="id";
  protected $allowedFields = ["username","password", "nombre","apellido_paterno","apellido_materno","correo","celular","telefono","rol","estatus"];
}
?>