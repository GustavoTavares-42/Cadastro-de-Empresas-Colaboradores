<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;

class Colaboradores extends BaseController
{
    public function viewColaborador($id)
    {
        $empresaModel = new \App\Models\Empresa;
        $colaboradorModel = new \App\Models\Colaboradores;
        $empresa = $empresaModel->consultarId($id);
        $colaborador = $colaboradorModel->consultarEmpresa($id);
        $dados = ['pagina' => 'colaboradores', 'colaborador' => $colaborador, 'empresa'=>$empresa];
        return view('index', $dados);
    }
    public function viewCadastro($id)
    {
        $empresaModel = new \App\Models\Empresa;
        $empresa = $empresaModel->consultarId($id);
        $dados = ['pagina' => 'cadastro_colaboradores', 'empresa' => $empresa];
        return view ('index', $dados);
    }

    public function cadastra($id)
    {
        $colaboradoresModel = new \App\Models\Colaboradores;
        $request = service('request');
        $nome = $request->getPost('nome');
        $fone = $request->getPost('fone');
        $email = $request->getPost('email');
        $data = $request->getPost('data');
        $empresa_id = $id;
        $dados = [ 
                    'nome' => $nome,
                    'fone' => $fone,
                    'email' => $email,
                    'data' => $data,
                    'empresa_id' => $empresa_id
                ];
        $colaboradoresModel->cadastraColaboradores($dados);
        return redirect()->to(site_url("Colaboradores/viewColaborador/".$empresa_id));
    }
    
    public function editar($idColab)
    {
        $colaboradorModel = new \App\Models\Colaboradores;
        $colaborador = $colaboradorModel->find($idColab);
        

        if($this->request->getMethod() === 'post')
        {
            $request = service('request');
            $nome = $request->getPost('nome');
            $fone = $request->getPost('fone');
            $email = $request->getPost('email');
            $data = $request->getPost('data');
            $colaborador = [ 
                        'nome' => $nome,
                        'fone' => $fone,
                        'email' => $email,
                        'data' => $data,
                    ];
            if($colaboradorModel->update($idColab, $colaborador)) {
                return redirect()->to(site_url("Colaboradores/viewColaborador/"));
            }
            else{
                echo "Que a força esteja com você!";
            }
        }
        $dados = ['pagina' => 'editar_colaborador', 'colaborador' => $colaborador, 'acao' => 'Editar' ];
        return view('index', $dados);
    }

    public function excluir($id)
    {
        $colaboradorModel = new \App\Models\Colaboradores;
        $colaboradorModel->delete($id);
        return redirect()->to(site_url("Colaboradores/viewColaborador/".$id));
    }
}
