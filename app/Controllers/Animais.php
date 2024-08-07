<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AnimalModel;
use CodeIgniter\Config\View;
use CodeIgniter\HTTP\ResponseInterface;

class Animais extends BaseController
{
    public function listar()
    {
        $animal_model = new AnimalModel();

        $animais = $animal_model->findAll();

        $data['animais'] = $animais;

        echo View('templates/header');
        echo View('animais/listar',$data);
        echo View('templates/footer');
    }

    public function cadastrar(){
        $dados = $this->request->getVar();

        $animal_model = new AnimalModel();
        
        $animal_model->insert($dados);

        return redirect()->to('/animais/listar?alert=successCreate');
    }

    public function excluir($id)
    {

        $animal_model = new AnimalModel();

        $animal_model->where('id', $id)->delete();

        return redirect()->to('/animais/listar?alert=successDelete');
    }

    public function editar()
    {
        $dados = $this->request->getVar();

        $animal_model = new AnimalModel();

        $animal_model
            ->where('id', $dados["id"])
            ->set($dados)
            ->update();

        return redirect()->to('/animais/listar?alert=successEdit');
    }
}
