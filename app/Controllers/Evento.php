<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\EventosModel;

//Clase principal Evento que herada los componentes de la clase BaseController
class Evento extends BaseController
{
	public function index()
	{
		$modelo = new EventosModel();
		$datos['result'] = $modelo->asObject()->orderBy('id', 'ASC')->findAll();	
		echo view('evento/index', $datos);
	}
	
	//Ordena los datos de la lista de manera ascendente
	public function ascendente()
	{
		$modelo = new EventosModel();
		$datos['result'] = $modelo->asObject()->orderBy('nombre', 'ASC')->findAll();
		echo view('evento/index', $datos);
	}  

	//Ordena los datos de la lista de manera descendente
	public function descendente()
	{
		//Se crea un objeto llamado modelo de la clase EventosModel
		$modelo = new EventosModel();
		$datos['result'] = $modelo->asObject()->orderBy('nombre', 'DESC')->findAll();
		echo view('evento/index', $datos);
	}  

	//Realiza la búsqueda de los datos de acuerdo a la actividad
	//Si requieres otro criterio de búsqueda cambia actividad por otro campo de la tabla
	public function busqueda()
	{
	    $busqueda = $_POST['criterio'];

	    $model = new EventosModel();
	    $datos["result"] = $model->asObject()->like('nombre',$busqueda)->findAll();
		echo view('evento/index', $datos );
	}

	//Se activa este evento cuando se da clic en el icono de restaurar
	public function restaurar()
	{
		$modelo = new EventosModel();
		$datos['result'] = $modelo->asObject()->orderBy('id', 'ASC')->findAll();
		echo view('evento/index', $datos);
	}

	//Registra los datos a la tabla llamando a la clase registrar (Carpeta View)
	public function registrar()
	{
		echo view('evento/registrar');
  	}

	//Inserta los datos a la BD
  	public function insert()
	{
		$modelo = new EventosModel();
		//Se escribe el nombre del atributo y el nombre del objeto en el formulario
		$data = [
			'nombre' => $this->request->getVar('nombre'),
			'episodios' => $this->request->getVar('episodios'),
			'sinopsis' => $this->request->getVar('sinopsis'),
			'temporada' => $this->request->getVar('temporada'),
			'lanzamiento' => $this->request->getVar('lanzamiento'),
			'genero' => $this->request->getVar('genero'),			
		];
		//Se insertan los datos
		$modelo->insert($data);
		//Regresa el control a la vista de los eventos	
		return $this->response->redirect(base_url('/evento/index'));
  	}

	//Realiza la actualización de datos cuando se solicita esta acción (View)
	public function modificar($id=null)
	{
		$modelo = new EventosModel();
		$datos['result'] = $modelo->asObject()->find($id);
		//Se muestra la vista del formulario para modificar los datos
		echo view('evento/modificar', $datos);
  	}

	//Método para actualizar la información de la tabla
	//Se colocan los nombres de los campos y del formulario
  	public function update()
	{
		$modelo = new EventosModel();

		$id = $this->request->getVar("id");
		$data = [
			'nombre' => $this->request->getVar('nombre'),
			'episodios' => $this->request->getVar('episodios'),
			'sinoppsis' => $this->request->getVar('sinopsis'),
			'temporada' => $this->request->getVar('temporada'),
			'lanzamiento' => $this->request->getVar('lanzamiento'),
			'genero' => $this->request->getVar('genero'),			
		];
		//Se actualiza la información de la tabla
		$modelo->update($id, $data);
			
		return $this->response->redirect(base_url('/evento/index'));
  	}

	//Elimina un registro de la BD se coloca la PK de la tabla
    public function delete($id = null){
        $model = new EventosModel();
        $model->where('id', $id)->delete($id);
        return $this->response->redirect(base_url('/evento/index'));
    }	
}
