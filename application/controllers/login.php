<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller{
	function __construct(){
   	parent::__construct();
   	$pr['debug'] = FALSE;
		$this->load->vars( $pr );
 	}

 	function index(){
   	$this->load->helper( array( 'form' ) );
   	$data['css'] = TRUE;
		$data['lib_css'] = array( '<link href="' . base_url() . 'libs/css/signin.css" rel="stylesheet">' );
   	$this->load->view( 'header', $data );
   	$this->load->view( 'login_view' );
   	$this->load->view( 'footer' );
 	}
}
?>