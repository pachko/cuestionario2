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
		$this->load->library('encrypt');

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
	 *	Actualiza el usuario
	 *
	 *	revisa si la contraseña es distinta, de no se la deja tal cual.
	 *
	 *	@param 		POST 		$_POST
	 *	@return 		redirect
	 */
	public function usuario_edit(){
		if( count( $_POST ) > 0 ){
			#	Verifica si la pass no fue modificada
			if( !$this->master_model->check_password() ){
				unset( $_POST['pass'] );
			}else{
				$_POST['pass'] = md5( $_POST['pass'] );
			}
			if( $this->master_model->update_user() ){
				redirect( 'master/usuarios/', 'refresh' );
			}else{
				redirect( 'master/info/ko', 'refresh' );	
			}
		}else{
			redirect( 'master/info/ko', 'refresh' );
		}
	}


	/*
	 *	Elimina de la db el usuario
	 *	
	 *	@param 		POST 		$_POST
	 * @return 		redirect
	 */
	public function usuario_delete(){
		if( count( $_POST ) > 0 ){
			if( $this->encrypt->decode( $_POST['id'] ) != 1 ){
				if( $this->master_model->remove_user() ){
					redirect( 'master/usuarios/', 'refresh' );
				}
			}
		}
		redirect( 'master/info/ko', 'refresh' );
	}



	/*
	 *	Recupera toda la informacion del usuario
	 *
	 *	Devuelve la informacion via Ajax, Este controlador no debe ser accedido
	 * por  web solo ajax y devolver informcion en JSON.
	 *
	 *	@param 		int 		$id
	 *	@return 		JSON
	 */
	public function usuario_get_by_id_JSON( $id = 0 ){
		if( $id == '' ){ 
			$id = 0;
			echo json_encode( array( 'exito'=>'0' ) );
			die;
		}else{
			$id = $this->encrypt->decode( $id );
		}		
		if( $id > 0 ){
			$respuesta = $this->master_model->get_info_user_by_id( $id );
			if( $respuesta ){
				echo json_encode( 
						array( 
							'exito' 		=>'1', 
							'id' 			=> $respuesta[0]->id, 
							'user' 		=> $respuesta[0]->user,
							'pass'		=> $respuesta[0]->pass,
							'nombre' 	=> $respuesta[0]->nombre,
							'email'		=> $respuesta[0]->email,
							'menu_id'	=> $respuesta[0]->menu_id,
							'activo'		=>  $respuesta[0]->activo
						) 
					);
			}else{
				echo json_encode( array( 'exito'=>'0' ) );
			}			
			die;
		}else{
			echo json_encode( array( 'exito'=>'0' ) );
			die;
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