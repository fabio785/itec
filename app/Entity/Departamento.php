<?php 	
namespace app\Entity;

require_once 'app/Db/Database.php';
use app\Db\Database;
use \PDO;



class Departamento{
		public $id_departamento;
		public $departamento;
		public $operação;
		public $localização;


		public static function getDeps($where = null, $order = null, $limit = null, $fields = '*'){
			return (new Database(' departamento '))->select($where, $order, $limit, $fields)->fetchAll(PDO::FETCH_CLASS, self::class)/**/;
		}

		public static function getDep($where){
			return (new Database(' departamento '))->select($where)->fetchObject(self::class)/**/;
		}

		public function cadastrar(){
			return (new Database(' departamento '))->insert([
														"departamento"=>$this->departamento,
														"operação"=>$this->operação,
														"localização"=>$this->localização
															]);
		}

		public function atualiza(){
			return (new Database(' departamento '))->update('id_departamento = '.$this->id_departamento,
															[
														"departamento"=>$this->departamento,
														"operação"=>$this->operação,
														"localização"=>$this->localização
															]);
		}

		public function excluir(){
			return (new Database(' departamento '))->delete('id_departamento = '.$this->id_departamento);
		}
}

 ?>