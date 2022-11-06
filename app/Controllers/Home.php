<?php

namespace App\Controllers;
use App\Models\LoginModel;
use App\Models\EventosModel;
use App\Models\UsuarioModel;

class Home extends BaseController
{
    public function index()
    {
        return view('pagina/index');
    }

    public function login(){
        return view('login/index');
    }

    public function menu(){
        return view('principal/index');
    }


    public function validar()
    {
        $loginModel = new LoginModel();

        $usuario = $_POST['usuario'];
        $password = $_POST['password'];

        $model = new UsuarioModel();
        $ousuario = $loginModel->asObject()->like('usuario',$usuario)->findAll();

        if($ousuario[0]->password==$password ) {
            //$modelo = new UsuarioModel();
            //$datos['result'] = $modelo->asObject()->orderBy('id', 'ASC')->findAll();

            echo view('principal/index' );    
        }
        else{
            echo view('login/index');
        }
    }

    
}
