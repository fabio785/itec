<?php 

namespace app\Db;

use \PDO;

class Database{
	const HOST = 'localhost:3306';
	const NAME = 'itec';
	const USER = 'root';
	const PASS = '5510';

	private $table;

	private $connection;

	public function __construct($table = null){
		$this->table = $table;
		$this->setConnection();
	}


	private function setConnection(){
		try{
			$this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME, self::USER, self::PASS);
		}catch(PDOException $e){
			die('Error:'.$e->getMessage());
		}
	}



	public function execute($query, $params=[]){
		 try{
		 	$statement = $this->connection->prepare($query);
		 	// print_r($this->connection->prepare($query));exit;
		 	$statement->execute($params);

		 	return $statement;
		 }catch(PDOException $e){
		 	die('Error: '.$e->getMessage());
		 }
	}




	public function select($where = null, $order = null, $limit=null, $fields = '*'){

		$where = strlen($where) ? 'where '.$where: '';
		$order = strlen($order) ? 'order by '.$order: '';
		$limit = strlen($limit) ? 'limit '.$limit: '';

		$query = 'select '.$fields.' from '.$this->table.' '.$where.' '.$order.' '.$limit;    

		// echo $query;exit;
		return $this->execute($query);
	}


	public function insert($values){

		$fields = array_keys($values);
		$binds = array_pad([], count($fields), '?' );

		$query = 'insert into '.$this->table.' ('.implode(', ', $fields).') values ('.implode(', ', $binds).')';

		// echo $query; exit;

		$this->execute($query, array_values($values));

		return $this->connection->lastInsertId();
	}

	public function update($where, $values){

		$query = 'update '.$this->table.' set '.implode('=?, ', array_keys($values)).'=? where '.$where;

		// echo $query; exit;
		$this->execute($query, array_values($values));
		return true;
	}

	public function delete($where){
		$query = 'delete from '.$this->table.' where '.$where;
		// echo $query;exit;
		$this->execute($query);
	}
	
}
 ?>