<?php 

namespace app\Entity;
require_once 'app/Db/Database.php';
use app\Db\Database;
use \PDO;

class Cargo{
	public $id_cargo;
    public $cargo;
	public $salario;
	public $id_departamento;

	public static function getCargos($where = null, $order = null, $limit = null, $fields = '*'){
		return(new Database('cargo as c 
inner join departamento as d '))->select($where, $order, $limit, $fields)->fetchAll(PDO::FETCH_CLASS, self::class)/**/;
	}

	public static function getCargo($where){
		return (new Database(' cargo '))->select($where)->fetchObject(self::class)/**/;
	}

	public function cadastrar(){
		return (new Database(' cargo '))->insert(['cargo'=>$this->cargo, 'salario'=>$this->salario, 'id_departamento'=>$this->id_departamento]);
	}

	public function atualiza($where, $values ){
		return (new Database(' cargo '))->update($where, $values);
	}

	public function excluir($where){
		return (new Database(' cargo '))->delete($where);
	}
}
 ?>