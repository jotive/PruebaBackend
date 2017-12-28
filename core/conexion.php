<?php 

require_once('config.bd');

class conexion extends PDO{

	private $host;
	private $user;
	private $pass;
	private $daba;
	
	function __construct(){

		$dat = new datos();

		$this->host = $dat->getHost();
		$this->user = $dat->getUser();
		$this->pass = $dat->getPass();
		$this->daba = $dat->getDaba();

		try {
			parent::__construct('mysql:host='.$this->host.';dbname='.$this->daba.'', $this->user, $this->pass);
		} catch (PDOException $e) {
			echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
			exit;
		}
	}

	function __destruct(){
		$con = null;
	}

}

/*
$conn = new conexion();
$sentencia = $conn->prepare("INSERT INTO usuario (usuario, clave, correo) VALUES (:us, :cl, :co)");
$user = "jose";
$sentencia->bindParam(':us', $user);
$sentencia->bindParam(':cl', $user);
$sentencia->bindParam(':co', $user);

$sentencia->execute();
*/


?>