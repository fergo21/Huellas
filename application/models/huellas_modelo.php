<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Huellas_modelo extends CI_Model {
	function __construct() {
		parent::__construct();
		$this->load->database();
	}


	/* Busca la persona que le corresponde el usuario y le devuelve el id */
public function buscarmisdatos($id)
	{	
		$consulta = $this->db->query("select persona.*, login.* from persona, login where persona.idPersona = login.idPersona and persona.idPersona = $id");
		return $consulta;
	}
	/* Busca los usuarios registrados con los valores que le pasamos a los input en la base de datos*/
public function buscarusuario($datos)
	{
		$valor=array(
				'usuario' => $datos['usuario'],
				'clave' => $datos['clave'],
		);
		
		return $this->db->get_where('login', $valor);
	}
	/* Busca las personas cargadas en la base de datos y las muestra en la vista */
public function buscarpersonas()
	{
		$consulta = $this->db->query("select * from persona");
		return $consulta;
	}
	/*Busca los eventos cargados en la base de datos*/
public function traer_eventos()
	{
		$consulta = $this->db->get('evento');
		return $consulta;
	}
	/* Inserta los datos de las personas a la base de datos*/
public function agregar_persona($dato)
	{
		$this->db->insert('persona', $dato);
	}
	/* Elimina la persona de la tabla 'persona' de la base de datos
		utilizando un where para especificar que persona elimnar usando el parametro id 
	 */
public function bajar_persona($id)
	{
		$this->db->where('idPersona', $id);
		$this->db->delete('persona');
	}
public function trae_usuario($id)
	{
		$this->db->where('idPersona', $id);
		$consulta = $this->db->get('persona');
		return $consulta->row();
	}
public function modificar_usuario($id, $dato)
	{
		$this->db->where('idPersona', $id);
		$this->db->update('persona', $dato);	
	}
	/*Alta animal*/
public function traer_tipoanimal()
	{
		$consulta= $this->db->get('tipo_animal');
		return $consulta;
	}
public function traer_estado()
	{
		$consulta= $this->db->get('estado');
		return $consulta;
	}
public function cargar_animal($datos_insertar)
	{
		$this->db->insert('animal', $datos_insertar);
	}
public function bajar_animal($id)
	{
		$this->db->where('idAnimal', $id);
		$this->db->delete('animal');
	}
public function buscar_animales()
	{
		$consulta = $this->db->get('animal');
		return $consulta;
	}
public function trae_animal($id)
	{
		$this->db->where('idAnimal', $id);
		$consulta = $this->db->get('animal');
		return $consulta->row();
	}
public function modificar_animal($id, $dato)
	{
		$this->db->where('idAnimal', $id);
		$this->db->update('animal', $dato);	
	}
	
public function registrar($datos)
	{
		$valor=array(
			'nombre'				=> $datos['nombre'],
			'apellido'				=> $datos['apellido'],
			'fecha_de_nacimiento' 	=> $datos['fechadenacimiento'],
			'sexo' 					=> $datos['sexo'],
			'correo' 					=> $datos['correo'],
			'idtipo' 				=> 1,
		);
		$this->db->insert('persona', $valor);
		
		//Acabamos de insertar un nuevo usuario pero necesitamos el id que obtuvo al insertarse para poder relacionarse con la tabla login
		
		$resultado=$this->db->query("select * from persona where correo ='".$valor['correo']."'");
		
		$id = $resultado->row()->idusuario;
		
		$valor=array(
		'usuario' => $datos['usuario'],
		'clave' => $datos['clave'],
		'idusuario' => $id,
		);
		
		$this->db->insert('login', $valor);
	}

/*

public function registrar($datos)
	{
		$valor=array(
		'nombre' => $datos['nombre'],
		'apellido' => $datos['apellido'],
		'fecha_de_nacimiento' => $datos['fechadenacimiento'],
		'sexo' => $datos['sexo'],
		'dni' => $datos['dni'],
		'mail' => $datos['email'],
		'idtipo' => 1,
		);
		$this->db->insert('usuario', $valor);
		
		//Acabamos de insertar un nuevo usuario pero necesitamos el id que obtuvo al insertarse para poder relacionarse con la tabla login
		
		$resultado=$this->db->query("select * from usuario where dni ='".$valor['dni']."'");
		
		$id=$resultado->row()->idusuario;
		
		$valor=array(
		'usuario' => $datos['usuario'],
		'clave' => $datos['clave'],
		'idusuario' => $id,
		);
		
		$this->db->insert('login', $valor);
	}
	public function actualizarperfil($datos)
	{
		$valor=array(
		'nombre' => $datos['nombre'],
		'apellido' => $datos['apellido'],
		'fecha_de_nacimiento' => $datos['fechadenacimiento'],
		'sexo' => $datos['sexo'],
		'dni' => $datos['dni'],
		'mail' => $datos['email'],
		'idtipo' => 1,
		);
		$donde=array(
		'idusuario'=>$this->session->userdata['idusuario'],
		);
		$this->db->where($donde);
		$this->db->update('usuario', $valor);
		
		//Acabamos de insertar un nuevo usuario pero necesitamos el id que obtuvo al insertarse para poder relacionarse con la tabla login
		
		$resultado=$this->db->query("select * from usuario where dni ='".$valor['dni']."'");
		
		$id=$resultado->row()->idusuario;
		
		$valor=array(
		'clave' => $datos['clave'],
		);
		$this->db->where($donde);
		$this->db->update('login', $valor);
	}
public function registrarcontenido($datos)
	{
		$valor=array(
					'titulo'=>$datos['titulo'],
					'fecha'=>$datos['fecha'],
					'descripcion'=>$datos['descripcion'],
					'idusuario'=>$datos['idusuario'],
		);
		$this->db->insert('contenido', $valor);
	}
public function buscarcontenido()
	{
		$consulta = $this->db->query("select * from contenido");
		return $consulta;
	}*/
}
?>