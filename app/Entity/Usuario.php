<?php 
namespace App\Entity;

require_once 'app/Db/Database.php';
use app\Db\Database;
use \PDO;

class Usuario{
	public $id_pessoa;

	public $nome;

	public $usuario;

	public $senha;

	public static function getUsuarioPorUsuario($usuario){
		return (new Database(' pessoas '))->select('usuario = "'.$usuario.'"')->fetchObject(self::class);
	}


}
 ?>