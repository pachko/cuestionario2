<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Master extends CI_Controller {


	/*
	 * Constructor
	 * 
	 * Inicializa y carga todas las librerias como URL, Form, BBDD y por ultimo
	 * carga el modelo que contiene todas las interacciones con la BBDD principal.
	 * 
	 */ 
	function __construct(){
      parent::__construct();
		if( !$this->session->userdata( 'logged_in' ) ){
			redirect( 'login', 'refresh' );
		}
		$session_data = $this->session->userdata( 'logged_in' );

		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->database();
		$this->load->model( 'master_model' );

		/*
		$pr['menu'] = $menu;
		$pr['mi_menu'] 	= $this->master_model->get_menu( $session_data['menu'] );
		$this->load->vars( $pr );
		*/
   }


	/*
	 * 	Muestra el area privada
	 *		@return 		view
	 */
	public function index(){
		$this->load->view( 'header' );
		$this->load->view( 'nav_menu' );
		$this->load->view( 'cpanel' );
		$this->load->view( 'footer' );
	}


	/*
	 * 	Catalogo de usuarios
	 *
	 *		Muestra los usuarios registrados en el sistema. Existen 2 nuveles de
	 *		usuario, usuario administrador (agrega preguntas, ordena y agregas 
	 *		usuarios), Usuario encuestado (solo puede responder el cuestionario).
	 *
	 *		@return 		view
	 */
	public function usuarios(){
		$data['usuarios'] = $this->master_model->get_users();
		$footer[ 'libs' ] = TRUE;
		$footer[ 'lib_js' ] = array( '<script src=" ' . base_url() . 'libs/js/usuarios.js"></script>' );
		$this->load->view( 'header' );
		$this->load->view( 'nav_menu' );
		$this->load->view( 'usuarios', $data );
		$this->load->view( 'footer', $footer );
	}
	
	
	/*
	 *	Guarda la informacion del nuevo usuario
	 *
	 *	Registra todo el contenido de los usuarios.
	 * 
	 *	@param			$_POST
	 *	@return 		bool
	 */
	public function usuario_save(){
		if( count( $_POST ) > 0 ){
			if( $this->master_model->save_new_user() ){
				redirect( 'master/usuarios/', 'refresh' );
			}else{
				redirect( 'master/info/ko', 'refresh' );
			}
		}else{
			redirect( 'master/info/ko', 'refresh' );
		}
	}
	
	
	/*
	 * 	Muestra landing page
	 * 
	 * 	Pagina informativa, solo muestra mensaje de error o de ok
	 * 
	 * 	@param		String 		$var		Recibe el nombre del tipo de mensaje
	 * 	@return 	view
	 */
	public function info( $var = '' ){
		$this->load->view( 'header' );
		$this->load->view( 'nav_menu' );
		switch( $var ){
			case 'ko':
				$datos['div'] 	= 'danger';
				$datos['msj1'] 	= 'Error!';
				$datos['msj2'] 	= 'Parece que ha habido un error con tu solicitud';
			break;
		}
		$this->load->view( 'landing', $datos );
		$this->load->view( 'footer' );
	}
}