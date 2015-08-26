<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Huellas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('image_lib');
		$this->load->helper(array('captcha'));
	}
public function index()
	{
		$this->load->view('homeapa');
	}
public function muestraregistro()
	{
		$data = array(
			'img_path' => './captcha/',
			'img_url' => 'http://localhost/apa/captcha/',
			'img_width' => '150',
			'img_height' => '30'
			);
			$captcha = create_captcha($data);
			$this->load->view('registro', $captcha);
	}
public function muestranosotros()
	{
		$this->load->view('nosotros');
	}
	/*
public function index()
	{
		$misdatos=array(
					'informacion'=>$this->huellas_modelo->buscarmisdatos(950),
					);
					$this->load->view('login', $misdatos);
	}
public function muestradefault()
	{
		
		$miscontenidos=array(
					'contenidos'=>$this->huellas_modelo->buscarcontenido(),
					);
		$this->load->view('home', $miscontenidos);
	}
public function muestraabout()
	{
		$this->load->view('about');
	}
public function regexito()
	{
		$this->load->view('regexit');
	}
public function muestraservices()
	{
		$this->load->view('gcont');
	}
public function muestraregistro()
	{
	
		if($_POST)
		{
			$misdatos=array(
					'nombre'=>$this->input->post('nombre'),
					'apellido'=>$this->input->post('apellido'),
					'fechadenacimiento'=>$this->input->post('fechadenacimiento'),
					'sexo'=>$this->input->post('sexo'),
					'dni'=>$this->input->post('dni'),
					'email'=>$this->input->post('email'),
					'usuario'=>$this->input->post('user'),
					'clave'=>$this->input->post('password'),
					);
			$this->form_validation->set_rules('nombre', 'Nombre', 'required');
			$this->form_validation->set_rules('apellido', 'Apellido', 'required');
			$this->form_validation->set_rules('fechadenacimiento', 'Fecha de Nacimiento', 'required');
			$this->form_validation->set_radio('sexo', 'Sexo');
			$this->form_validation->set_rules('dni', 'DNI', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			if ($this->form_validation->run()=== FALSE)
			{
				//no hay accion por que carga el registro de nuevo abajo
			}
			else
			{
				$this->huellas_modelo->registrar($misdatos);
				redirect("index.php/Sym/regexito");
			}
			
		}
			
		$this->load->view('registrar');	
	}
public function muestracontacto()
	{
		$this->load->view('contact');
	}
public function validar()
	{
		if($_POST)
		{
			if(isset($_POST['btn_validar']))
			{
				$datos=array(
				'usuario' => $this->input->post('usuario'),
				'clave' => $this->input->post('clave'),
				);
				$datos_usuario=$this->huellas_modelo->buscarusuario($datos);
				//La funcion si encuentra el ussuario trae resultado
				if($datos_usuario->result())
				{
					$this->session->set_userdata('idusuario', $datos_usuario->row()->idusuario);
					$misdatos=array(
					'informacion' =>$this->huellas_modelo->buscarmisdatos($datos_usuario->row()->idusuario),
					);
					$this->load->view('login', $misdatos);
				}
				
				else
				{
					$misdatos=array(
					'informacion'=>$this->huellas_modelo->buscarmisdatos(950),
					);
					$this->load->view('login', $misdatos);
				}
				
			}
		}
	
	}
public function muestraperfil()
	{
		$id=$this->session->userdata['idusuario'];
		if($_POST)
		{
			$misdatos=array(
					'nombre'=>$this->input->post('nombre'),
					'apellido'=>$this->input->post('apellido'),
					'fechadenacimiento'=>$this->input->post('fechadenacimiento'),
					'sexo'=>$this->input->post('sexo'),
					'dni'=>$this->input->post('dni'),
					'email'=>$this->input->post('email'),
					'clave'=>$this->input->post('password'),
					);
			$this->huellas_modelo->actualizarperfil($misdatos);
		}
		$misdatos=array(
					'informacion'=>$this->huellas_modelo->buscarmisdatos($id),
					);
		$this->load->view('perfil', $misdatos);
	}
public function cerrar_sesion()
	{
		$this->session->unset_userdata('idusuario');
		redirect('index.php');
	}
public function muestracontenido()
	{
	
		if($_POST)
		{
			$misdatos=array(
					'titulo'=>$this->input->post('titulo'),
					'fecha'=>$this->input->post('fecha'),
					'descripcion'=>$this->input->post('contenido'),
					'idusuario'=>1,
					);
			$this->huellas_modelo->registrarcontenido($misdatos);
			//redirect("index.php/Sym/regexito");
		}
		$miscontenidos=array(
					'contenidos'=>$this->huellas_modelo->buscarcontenido(),
					);
		$this->load->view('home', $miscontenidos);
		
		
	}
public function validaradmin()
	{
		if($_POST)
		{
			if(isset($_POST['btn_validar']))
			{
				$datos=array(
				'usuario' => $this->input->post('usuario'),
				'clave' => $this->input->post('clave'),
				);
				$datos_usuario=$this->huellas_modelo->buscarusuario($datos);
				//La funcion si encuentra el ussuario trae resultado
				if($datos_usuario->result())
				{
					$this->session->set_userdata('idusuario', $datos_usuario->row()->idusuario);
					$misdatos=array(
					'informacion' =>$this->huellas_modelo->buscarmisdatos($datos_usuario->row()->idusuario),
					);
					$this->load->view('login', $misdatos);
				}
				
				else
				{
					$misdatos=array(
					'informacion'=>$this->huellas_modelo->buscarmisdatos(950),
					);
					$this->load->view('login', $misdatos);
				}
				
			}
		}	
	}*/
}
?>