<?php
/*
	CRUD creado por Oscar Amado
	Contacto: oscarfamado@gmail.com
*/
class Administrator extends db
{

	private function view_envios()
	{
		try {
			$SQL = "SELECT * FROM guia_de_envio";
			$result = $this->connect()->prepare($SQL);
			$result->execute();
			return $result->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die('Error Administrator(view_envios) ' . $e->getMessage());
		} finally {
			$result = null;
		}
	}

	function get_view_envios()
	{
		return $this->view_envios();
	}

	private function register_envios($data)
	{
		try {
			$SQL = 'INSERT INTO guia_de_envio (id_producto, n_telefono, direccion, correo, nombres, id_usuario, precio_de_envio) VALUES (?,?,?,?,?,?,?)';
			$result = $this->connect()->prepare($SQL);
			$result->execute(
				array(
					$data['id_producto'],
					$data['n_telefono'],
					$data['direccion'],
					$data['correo'],
					$data['nombres'],
					$data['id_usuario'],
					$data['precio_de_envio']
				)
			);
		} catch (Exception $e) {
			die('Error Administrator(register_envios) ' . $e->getMessage());
		} finally {
			$result = null;
		}
	}

	function set_register_envio($data)
	{
		$this->register_envios($data);
	}

	private function update_envio($data)
	{
		try {
			$SQL = 'UPDATE bd_aecostreet.guia_de_envio SET id_producto = ?, n_telefono = ?, direccion = ?, correo = ?, nombres = ?, id_usuario = ?, precio_de_envio = ? WHERE id_envio = ?';
			$result = $this->connect()->prepare($SQL);
			$result->execute(
				array(
					$data['id_producto'],
					$data['n_telefono'],
					$data['direccion'],
					$data['correo'],
					$data['nombres'],
					$data['id_usuario'],
					$data['precio_de_envio'],
					$data['id_envio']
				)
			);
		} catch (Exception $e) {
			die('Error Administrator(update_envio) ' . $e->getMessage());
		} finally {
			$result = null;
		}
	}

	function set_update_envio($data)
	{
		$this->update_envio($data);
	}


	private function delete_envio($id)
	{
		try {
			$SQL = 'DELETE FROM guia_de_envio WHERE id_envio = ?';
			$result = $this->connect()->prepare($SQL);
			$result->execute(array($id));
		} catch (Exception $e) {
			die('Error Administrator(delete_envio) ' . $e->getMessage());
		} finally {
			$result = null;
		}
	}

	function set_delete_envio($id)
	{
		$this->delete_envio($id);
	}
}
?>