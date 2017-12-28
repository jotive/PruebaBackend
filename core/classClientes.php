<?php
require_once("conexion.php");


class Vendedores{


	function todos(){
		$conn = new conexion();
		$consulta = $conn->prepare('SELECT id, nombres, apellidos, identidad, correo, genero, ingreso FROM vendedores');
		$consulta->execute();
		$registro = $consulta->fetchAll(PDO::FETCH_ASSOC);
		return $registro;
	}

	function add($no, $ap, $id, $co, $ge, $in){
		$conn = new conexion();
		$consulta = $conn->prepare('INSERT INTO VENDEDORES (nombres, apellidos, identidad, correo, genero, ingreso) VALUES (:vno, :vap, :vid, :vco, :vge, :vin)');
		$consulta->bindParam(':vno', $no, PDO::PARAM_STR);
		$consulta->bindParam(':vap', $ap);
		$consulta->bindParam(':vid', $id);
		$consulta->bindParam(':vco', $co);
		$consulta->bindParam(':vge', $ge);
		$consulta->bindParam(':vin', $in);
		$consulta->execute();

	}

	function del($id){
		$conn = new conexion();
		$consulta = $conn->prepare('DELETE FROM VENDEDORES WHERE id ='.$id.'');
		$consulta->execute();
	}

	function info($id){
		$conn = new conexion();
		$consulta = $conn->prepare('SELECT id, nombres, apellidos, identidad, correo, genero, ingreso FROM VENDEDORES WHERE id = :id');
		$consulta->bindParam(':id', $id);
		$consulta->execute();
		$registro = $consulta->fetch(PDO::FETCH_ASSOC);
		if($registro){
			return $registro;
		}else{
			return false;
		}
	}

	function upd($idv, $no, $ap, $id, $co, $ge, $in){
		$conn = new conexion();
		$consulta = $conn->prepare('UPDATE VENDEDORES SET nombres = :vno, apellidos = :vap, identidad = :vid, correo = :vco, genero = :vge, ingreso = :vin WHERE id = :id');
		$consulta->bindParam(':vno', $no, PDO::PARAM_STR);
		$consulta->bindParam(':vap', $ap, PDO::PARAM_STR);
		$consulta->bindParam(':vid', $id, PDO::PARAM_STR);
		$consulta->bindParam(':vco', $co, PDO::PARAM_STR);
		$consulta->bindParam(':vge', $ge, PDO::PARAM_STR);
		$consulta->bindParam(':vin', $in, PDO::PARAM_STR);
		$consulta->bindParam(':id', $idv, PDO::PARAM_STR);
		$consulta->execute();

	}

}

?>
