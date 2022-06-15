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
        $empresa = $empresaModel->find($id);
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
        return redirect()->to(site_url('Empresa/empresas'));
    }
    
    public function editar($id)
    {
        $colaboradorModel = new \App\Models\Colaboradores;
<<<<<<< HEAD
        $empresa_id = $colaboradorModel->empresaId($id);
=======
>>>>>>> parent of 81a3932 (Estilo e Cadastro)
        $colaborador = $colaboradorModel->find($id);

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
            if($colaboradorModel->update($id, $colaborador)) {
<<<<<<< HEAD
                return redirect()->to(site_url("Colaboradores/viewColaborador/".$empresa_id['empresa_id']));
=======
                return redirect()->to(site_url("Empresa/empresas"));
>>>>>>> parent of 81a3932 (Estilo e Cadastro)
            }
            else{
                echo "Que a força esteja com você!";
            }
        }
        $dados = ['pagina' => 'editar_colaborador', 'colaborador' => $colaborador, 'acao' => 'Editar', 'empresa' => $empresa_id ];
        return view('index', $dados);
    }

    public function excluir($id)
    {
        $colaboradorModel = new \App\Models\Colaboradores;
<<<<<<< HEAD
        $empresa_id = $colaboradorModel->empresaId($id);
        $colaboradorModel->delete($id);
        return redirect()->to(site_url("Colaboradores/viewColaborador/".$empresa_id['empresa_id']));
=======
        $colaboradorModel->find($id);
        $colaboradorModel->delete($id);
        return redirect()->to(site_url("Empresa/empresas"));
>>>>>>> parent of 81a3932 (Estilo e Cadastro)
    }
}
