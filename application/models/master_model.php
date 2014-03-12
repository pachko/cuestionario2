<?php
Class Master_model extends CI_Model{
   

   	/*
     *    Recupera todos los usuarios de la db
     *
     *    @return     array
     */
	function get_users(){
		$this->db->from( 'users' );
		$datos = $this->db->get();
      	if( $datos->num_rows > 0 ){
        	return $datos->result();
      	}else{
        	return false;
		}
   	}
	
	
	/*
     * 	Registra el nuevo usuario
     *
     *	@return     bool
     */
   	function save_new_user(){
		$_POST['pass'] = md5( $_POST['pass'] );
		$tabla = "users";
		if( $this->db->insert( $tabla, $_POST ) ){
			return $this->db->insert_id();
		}else{
			return false;
		}
   	}
}
?>