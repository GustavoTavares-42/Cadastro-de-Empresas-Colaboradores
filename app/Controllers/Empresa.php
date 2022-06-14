<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;



class Empresa extends BaseController
{
    public function index()
    {
        $data= ['pagina' => 'cadastro_empresas'];
        return view('index', $data);
    }
    
    public function empresas()
    {
        $empresaModel = new \App\Models\Empresa();
        $empresa = $empresaModel->consultarEmpresa();
        $data= ['pagina' => 'empresas', 'empresa' => $empresa];
        return view('index', $data);
    }
    
    public function editar($id)
    {
        $empresaModel = new \App\Models\Empresa;
        $empresa = $empresaModel->find($id);

        if($this->request->getMethod() === 'post')
        {
            $request = service('request');
            $razao = $request->getPost('razaosocial');
            $cnpj = $request->getPost('cnpj');
            $fone = $request->getPost('fone');
            $email = $request->getPost('email');
            $endereco = $request->getPost('endereco');
            $empresa = [ 
                        'razaosocial' => $razao,
                        'cnpj' => $cnpj,
                        'fone' => $fone,
                        'email' => $email,
                        'endereco' => $endereco
                    ];
            if($empresaModel->update($id, $empresa)) {
                return redirect()->to(site_url('Empresa/empresas'));
            }
            else{
                echo "Que a força esteja com você!";
            }
        }
        $dados = ['pagina' => 'editar_empresa', 'empresa' => $empresa, 'acao' => 'Editar' ];
        return view('index', $dados);
    }
    
    public function cadastrar()
    {
        $empresaModel = new \App\Models\Empresa;
        $request = service('request');
        $razao = $request->getPost('razaosocial');
        $cnpj = $request->getPost('cnpj');
        $fone = $request->getPost('fone');
        $email = $request->getPost('email');
        $endereco = $request->getPost('endereco');
        $dados = [ 
                    'razaosocial' => $razao,
                    'cnpj' => $cnpj,
                    'fone' => $fone,
                    'email' => $email,
                    'endereco' => $endereco
                ];
        $empresaModel->cadastraEmpresa($dados);
        return redirect()->to(site_url('Empresa/empresas'));
    }    
    
    public function excluir($id)
    {
        $empresaModel = new \App\Models\Empresa;
        $empresaModel->consultarId($id);
        $empresaModel->excluir($id);
        return redirect()->to(site_url('Empresa/empresas'));
    }

}
