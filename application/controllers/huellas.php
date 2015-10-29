<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Huellas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('image_lib');
		$this->load->helper(array('captcha'));
	}
	/*Carga los datos los eventos y del usuario si inicio sesion*/
public function index()
	{	
		$misdatos=array(
					'informacion'=>$this->huellas_modelo->buscarmisdatos(950),
					'eventos'=>$this->huellas_modelo->traer_eventos(),
					);
		$this->load->view('homeapa', $misdatos);
	}
	/* Valida las datos del usuario una vez iniciada la sesion */
public function validar()
	{
		//if($_POST)
		//{
		//	if(isset($_POST['login']))
		//	{
				$datos=array(
							'usuario' => $this->input->post('usuario'),
							'clave' => $this->input->post('clave'),
				);
				$datos_usuario=$this->huellas_modelo->buscarusuario($datos);
				//Si La funcion encuentra el usuario trae el resultado
				if($datos_usuario->result())
				{
					//Inicia la sesion
					$this->session->set_userdata('idPersona', $datos_usuario->row()->idPersona);
					$misdatos=array(
									'informacion' =>$this->huellas_modelo->buscarmisdatos($datos_usuario->row()->idPersona),
									'eventos'=>$this->huellas_modelo->traer_eventos(),
									);
					$this->load->view('homeapa', $misdatos);
				}
				
				else
				{
					$misdatos=array(
					'informacion'=>$this->huellas_modelo->buscarmisdatos(950),
					'eventos'=>$this->huellas_modelo->traer_eventos(),
					);
				
				$this->load->view('homeapa', $misdatos);
				}
				
	//		}
	//	}
	
	}
public function validar_admin()
	{
		if($_POST['usuario'] && $_POST['clave'] == "admin")
		{
		if(isset($_POST['login']))
			{
				$datos=array(
					'usuario'	=> $this->input->post('usuario'),
					'clave' 	=> $this->input->post('clave'),
				);
				$traeadmin = $this->huellas_modelo->buscarusuario($datos);
				if($traeadmin->result())
				{
					$this->session->set_userdata('idPersona', $traeadmin->row()->idPersona);
					$misdatos=array(
									'informacion' =>$this->huellas_modelo->buscarmisdatos($traeadmin->row()->idPersona),
									);
						$this->load->view('bandejaHuellas', $misdatos);
				}
				
			}
		} else {
			echo "Usuario incorrecto";
		}
	}
	/* Destruye la sesion */
public function cerrar_sesion()
	{
		$this->session->sess_destroy();
		redirect('index.php');
	}
	/*Muestra el registro de las personas con el codigo captcha*/
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
		$this->load->view('quienes_somos');
	}
public function codigoqr()
	{
		$this->load->view('codigo_qr');
	}
public function admin()
	{
		$this->load->view('huellas');
	}
public function muestraperros()
	{
		$this->load->view('perros');
	}
public function muestragatos()
	{
		$this->load->view('gatos');
	}
public function muestraotrosanimales()
	{
		$this->load->view('otros_animales');
	}
public function muestrarefugio()
	{
		$this->load->view('refugio');
	}
public function muestraeventos()
	{
		$this->load->view('eventos');
	}
public function muestrabandejahuellas()
	{
		$this->load->view('bandejaHuellas');
	}
public function ABManimales()
	{
		$listaanimales=array(
					'animales'		=>$this->huellas_modelo->buscar_animales(),
					'tipo_animales'	=> $this->huellas_modelo->traer_tipoanimal(),
					'estados'		=> $this->huellas_modelo->traer_estado(),
					);
		$this->load->view('abmanimales', $listaanimales);
	}
public function ABMeventos()
	{
		$this->load->view('abmeventos');
	}
public function ABMadoptantes()
	{
		$this->load->view('abmadoptantes');
	}
public function ABMsocios()
	{	
		
		$this->load->view('abmsocios');
	}
	/*Muestra la vista ABM de los usuarios y carga en una lista los usuarios registrados en la base de datos*/
public function ABMusuarios()
	{		
		$listapersonas=array(
					'personas'=>$this->huellas_modelo->buscarpersonas(),
					);
		$this->load->view('abmusuarios', $listapersonas);
		
	}
public function Notificaciones()
	{
		$this->load->view('notificaciones');
	}
	/* Recibe los datos del usuario enviados por POST, los guarda en un array y los envia al modelo para insertarlos en la base de datos */
public function agregar_persona()
	{		
		$dato=array(
				'Nombre' 	=>$this->input->post('nombre'),
				'Apellido'	=>$this->input->post('apellido'),
				'Edad'		=>$this->input->post('edad'),
				'Sexo'		=>$this->input->post('sexo'),
				'Domicilio'	=>$this->input->post('domicilio'),
				'Correo'	=>$this->input->post('correo'),
				'Telefono'	=>$this->input->post('telefono'),
				'Foto'		=>$this->input->post('foto'),
		);
		$this->huellas_modelo->agregar_persona($dato);
		$this->load->view('abmusuarios');
		
	}
	/* Recibe el parametro id desde la vista abmusuarios y lo envia al modelo para eliminar una persona de la BD */
public function baja_persona($id)
	{
		$this->huellas_modelo->bajar_persona($id);
		$listapersonas=array(
					'personas'=>$this->huellas_modelo->buscarpersonas(),
					);
		$this->load->view('listadoPersonas', $listapersonas);
				
	}
public function muestra_modificar_personas($id)
	{
		$dato['personas'] = $this->huellas_modelo->trae_usuario($id);
		$this->load->view('modificarpersonas', $dato);
	}
public function modificar_personas()
	{
	if($_POST)
	{
		$id = $this->input->post('id');	
		
		$dato=array(
				'Nombre' 	=>$this->input->post('nombre'),
				'Apellido'	=>$this->input->post('apellido'),
				'Edad'		=>$this->input->post('edad'),
				'Sexo'		=>$this->input->post('sexo'),
				'Domicilio'	=>$this->input->post('domicilio'),
				'Correo'	=>$this->input->post('correo'),
				'Telefono'	=>$this->input->post('telefono'),
				'Foto'		=>$this->input->post('foto'),
		);
		$this->huellas_modelo->modificar_usuario($id, $dato);
	}
		
		$dato=array(
					'personas'=>$this->huellas_modelo->buscarpersonas(),
					);
		$this->load->view('listadoPersonas2', $dato);	
		
	}

public function ListadoPersonas()
	{	
		$listapersonas=array(
					'personas'=>$this->huellas_modelo->buscarpersonas(),
					);
		$this->load->view('listadoPersonas', $listapersonas);		
	}
public function ListadoPersonas2()
	{	
		$listapersonas=array(
					'personas'=>$this->huellas_modelo->buscarpersonas(),
					);
		$this->load->view('listadoPersonas2', $listapersonas);		
	}
public function ListadoAnimales()
	{
		$listaanimales=array(
					'animales'=>$this->huellas_modelo->buscar_animales(),
					);
		$this->load->view('listadoanimales', $listaanimales);
	}
public function ListadoAnimales2()
	{	
		$listaanimales=array(
					'animales'=>$this->huellas_modelo->buscar_animales(),
					);
		$this->load->view('listadoanimales2', $listaanimales);		
	}
public function alta_animal()
	{
		//si manejo formulario necesito al if_POST
		if($_POST)
		{
			//recibo las variables de post y las guardo en un array
			$dato=array(
				'Nombre'		=>$this->input->post('nombre'),
				'Edad'			=>$this->input->post('edad'),
				'Pelaje'		=>$this->input->post('pelaje'),
				'Medida'		=>$this->input->post('altura'),
				'Sexo'			=>$this->input->post('sexo'),	
				'Color'			=>$this->input->post('color'),	
				'Observacion'	=>$this->input->post('observacion'),	
				'Foto'			=>$this->input->post('foto'),	
				'Castracion'	=>$this->input->post('castracion'),	
				'idTipo_Animal'	=>$this->input->post('idtipo_animal'),
				'idEstado'		=>$this->input->post('idestado'),
				
			);
			//llamo a la funcion para insertar
			$this->huellas_modelo->cargar_animal($dato);
		}
		//cargamos la pagina de alta_animal
		$this->load->view('abmanimales');
	}
public function baja_animal($id)
	{
		$this->huellas_modelo->bajar_animal($id);
		$listaanimales=array(
					'animales'=>$this->huellas_modelo->buscar_animales(),
					);
		$this->load->view('listadoanimales', $listaanimales);
	}
public function muestra_modificar_animal($id)
	{
		$dato['animales'] = $this->huellas_modelo->trae_usuario($id);
		$this->load->view('modificaranimales', $dato);
	}
	

public function registrar()
	{
	
		if($_POST)
		{
			$misdatos=array(
					'nombre'	=>$this->input->post('nombre'),
					'apellido'	=>$this->input->post('apellido'),
					'fechadenacimiento'=>$this->input->post('fecha_nac'),
					'sexo'		=>$this->input->post('sexo'),
					'dni'		=>$this->input->post('dni'),
					'email'		=>$this->input->post('email'),
					'usuario'	=>$this->input->post('usuario'),
					'clave'		=>$this->input->post('clave'),
					);
				$this->huellas_modelo->registrar($misdatos);
				redirect("index.php/Sym/regexito");			
		}
			
		$this->load->view('registrar');	
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