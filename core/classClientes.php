<?php
require_once("conexion.php");


class Clientes{


	function todos(){
		$conn = new conexion();
		$consulta = $conn->prepare('SELECT id, nombres, apellidos, correo, telefono, direccion, idVendedor FROM clientes');
		$consulta->execute();
		$registro = $consulta->fetchAll(PDO::FETCH_ASSOC);
		return $registro;
	}

	function add($no, $ap, $ma, $te, $di, $ve){
		$conn = new conexion();
		$consulta = $conn->prepare('INSERT INTO CLIENTES (nombres, apellidos, correo, telefono, direccion, idVendedor) VALUES (:cno, :cap, :cma, :cte, :cdi, :cve)');
		$consulta->bindParam(':cno', $no, PDO::PARAM_STR);
		$consulta->bindParam(':cap', $ap, PDO::PARAM_STR);
		$consulta->bindParam(':cma', $ma, PDO::PARAM_STR);
		$consulta->bindParam(':cte', $te, PDO::PARAM_STR);
		$consulta->bindParam(':cdi', $di, PDO::PARAM_STR);
		$consulta->bindParam(':cve', $ve, PDO::PARAM_STR);
		$consulta->execute();

	}

	function del($id){
		$conn = new conexion();
		$consulta = $conn->prepare('DELETE FROM CLIENTES WHERE id ='.$id.'');
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

	function infoVendedor($id){
		$conn = new conexion();
		$consulta = $conn->prepare('SELECT nombres, apellidos FROM VENDEDORES WHERE id = :id');
		$consulta->bindParam(':id', $id, PDO::PARAM_STR);
		$consulta->execute();
		$registro = $consulta->fetch(PDO::FETCH_ASSOC);
		return $registro;
	}

	function listaVendedor(){
		$conn = new conexion();
		$consulta = $conn->prepare('SELECT id, nombres, apellidos FROM vendedores');
		$consulta->execute();
		$registro = $consulta->fetchAll(PDO::FETCH_ASSOC);
		return $registro;
	}

}

?>
