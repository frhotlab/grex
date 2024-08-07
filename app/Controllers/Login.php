<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LoginModel;
use CodeIgniter\HTTP\ResponseInterface;

class Login extends BaseController
{
    public function index()
    {
        //echo View('login/index');    
        return view('login');
    }

    public function autenticar()
    {
        $dados = $this->request->getVar();
        $login_model = new LoginModel();

        $login = $login_model
            ->where('usuario', $dados['Usuario'])
            ->where('senha', $dados['Senha'])
            ->first();

        if(!empty($login)){
            return redirect()->to('/animais/listar');
        }
        return redirect()->to('/login?alert=erroLogin');

    }
}
