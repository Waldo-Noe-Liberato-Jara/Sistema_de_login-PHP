<?php 
	class Db{
		//La variable y la clase son estaticas para ya no instanciarlas como objetos en otros archivos.php solo uso ::
		private static $conexion=null;
		private function __construct(){}

		public static function conectar(){
			$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
			//Uso self:: porque la variable $conexion es estatica y quiero darle un valor:
			self::$conexion=new PDO('mysql:host=127.0.0.1:3308;dbname=dblogin','root','',$pdo_options);
			return self::$conexion;
		}
	}
?>