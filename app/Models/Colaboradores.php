<?php
namespace App\Models;
use CodeIgniter\Model;

class Colaboradores extends Model
{
        protected $table      = 'colaboradores';
        protected $primaryKey = 'id';
        protected $returnType     = 'object';
        protected $allowedFields = ['nome', 'fone', 'email', 'data', 'empresa_id'];
       
        public function cadastraColaboradores($dados)
        {
             $this->insert($dados);
        }

        public function consultarColaborador()
    {
        $db = db_connect();
        $query = $db->query("SELECT * FROM colaboradores");
        return $query->getResult();
    }

    public function consultarEmpresa($id)
    {
        $db = db_connect();
        $query = $db->query("SELECT * FROM colaboradores WHERE $id = empresa_id");
        return $query->getResult();
    }

    public function consultarId($id)
    {
        $db = db_connect();
        $query = $db->query("SELECT * FROM empresa WHERE id = $id");
        return $query->getRowArray();
    }
}
