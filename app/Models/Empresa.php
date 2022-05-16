<?php
namespace App\Models;
use CodeIgniter\Model;

class Empresa extends Model
{
        protected $table      = 'empresa';
        protected $primaryKey = 'id';
        protected $returnType     = 'object';
        protected $allowedFields = ['id', 'razaosocial', 'cnpj', 'fone', 'email', 'endereco'];
        protected $updatedField  = 'updated_at';
        
    public function cadastraEmpresa($dados)
    {
         $this->insert($dados);
    }

    public function consultarEmpresa()
    {
        $db = db_connect();
        $query = $db->query('SELECT * FROM empresa');
        return $query->getResult();
    }
    
    public function consultarId($id)
    {
        $db = db_connect();
        $query = $db->query("SELECT * FROM empresa WHERE id = $id");
        return $query->getRowArray();
    }
    
    public function excluir($id)
    {
        $db = db_connect();
        $query = $db->query("DELETE FROM colaboradores WHERE empresa_id = $id");
        $query = $db->query("DELETE FROM empresa WHERE id = $id");
    }

    
}
