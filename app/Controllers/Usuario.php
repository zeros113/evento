<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UsuarioModel;

class Usuario extends BaseController
{
	public function index()
	{
		$model = new UsuarioModel();
		$datos['result'] = $model->asObject()->orderBy('id', 'ASC')->findAll();

		echo view('usuario/index', $datos);
  	}
	
	public function ascendente()
	{
		$model = new UsuarioModel();
		$datos['result'] = $model->asObject()->orderBy('nombre', 'ASC')->findAll();

		echo view('usuario/index', $datos);
	}  

	public function descendente()
	{
		$model = new UsuarioModel();
		$datos['result'] = $model->asObject()->orderBy('nombre', 'DESC')->findAll();

		echo view('usuario/index', $datos);
	}  

	public function busqueda()
	{
	    $busqueda = $_POST['criterio'];

	    $model = new UsuarioModel();
	    $datos["result"] = $model->asObject()->like('nombre', "%".$busqueda."%")->findAll();

		echo view('usuario/index', $datos );
	}

	public function restaurar()
	{
		$model = new UsuarioModel();
		$datos['result'] = $model->asObject()->orderBy('id', 'ASC')->findAll();

		echo view('usuario/index', $datos);
	}

	public function registrar()
	{
		echo view('usuario/registrar');
  	}

  	public function insert()
	{
		$model = new UsuarioModel();

		$data = [
			'username' => $this->request->getVar('username'),
			'password' => $this->request->getVar('password'),
			'nombre' => $this->request->getVar('nombre'),
			'apellido_paterno' => $this->request->getVar('apellido_paterno'),
			'apellido_materno' => $this->request->getVar('apellido_materno'),
			'correo' => $this->request->getVar('correo'),
			'celular' => $this->request->getVar('celular'),
			'telefono' => $this->request->getVar('telefono'),
		];

		$model->insert($data);
			
		return $this->response->redirect(base_url('/usuario/index'));
  	}

	public function modificar($id=null)
	{
		$model = new UsuarioModel();
		$datos['result'] = $model->asObject()->asObject()->find($id);

		echo view('usuario/modificar', $datos);
  	}

  	public function update()
	{
		$model = new UsuarioModel();

		$id = $this->request->getVar("id");
		$data = [
			'password' => $this->request->getVar('password'),
			'nombre' => $this->request->getVar('nombre'),
			'apellido_paterno' => $this->request->getVar('apellido_paterno'),
			'apellido_materno' => $this->request->getVar('apellido_materno'),
			'correo' => $this->request->getVar('correo'),
			'celular' => $this->request->getVar('celular'),
			'telefono' => $this->request->getVar('telefono'),
		];

		$model->update($id, $data);
			
		return $this->response->redirect(base_url('/usuario/index'));
  	}

    public function delete($id = null){
        $model = new UsuarioModel();
        $model->where('id', $id)->delete($id);
        return $this->response->redirect(base_url('/usuario/index'));
    } 
}