<?php 

namespace app\Entity;
require_once 'app/Db/Database.php';
use app\Db\Database;

use \PDO;

class Funcionario{
	public $id_pessoa;
	public $nome;
	public $sexo;
	public $nasc;
	public $celular;
	public $telefone;
	public $id_cargo;

	public static function getFuncs($where = null, $order = null, $limit = null, $fields = '*'){
		return(new Database(' pessoas as p inner join cargo as c inner join departamento as d '))->select($where, $order, $limit, $fields)->fetchAll(PDO::FETCH_CLASS, self::class)/**/;
	}

	public static function getFunc($id){
		return (new Database(' pessoas '))->select('id_pessoa = '.$id)->fetchObject(self::class)/**/;
	}

	public function cadastrar(){
		$db = new Database('pessoas');
		$this->id_pessoa = $db->insert([
			'nome'=> $this->nome,
			'sexo'=> $this->sexo,
			'nasc'=> $this->nasc,
			'celular'=> $this->celular,
			'telefone'=> $this->telefone,
			'id_cargo'=> $this->id_cargo	
		]);

		return true;
	}

	public function atualizar(){
		return (new Database('pessoas'))->update('id_pessoa = '.$this->id_pessoa,[
			'nome'=> $this->nome,
			'sexo'=> $this->sexo,
			'nasc'=> $this->nasc,
			'celular'=> $this->celular,
			'telefone'=> $this->telefone,
			'id_cargo'=> $this->id_cargo	
		]);
	}

	public function excluir(){
		
		return (new Database(' pessoas '))->delete(' id_pessoa = '.$this->id_pessoa);
	}
}

 ?>