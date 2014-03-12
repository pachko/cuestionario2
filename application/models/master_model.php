<?php
Class Master_model extends CI_Model{
   

   /*
    *    Recupera todos los usuarios de la db
    *
    *    @return     array
    */
	function get_users(){
      $this->db->select( 'users.id, users.`user`, users.pass, users.nombre' );
      $this->db->select( 'users.email, users.menu_id, users.activo' );
      $this->db->select( 'users_tipo.id AS tipo_ID, users_tipo.nombre AS tipo' );
		$this->db->from( 'users' );
      $this->db->join( 'users_tipo', 'users.id_users_tipo = users_tipo.id');
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


   /*
    * Recuerpa la informacion del usuario en la db
    *
    * @param      int      $id
    * @return     array
    */
   function get_info_user_by_id( $id ){
      $tabla = "users";
      $this->db->from( $tabla );
      $this->db->where( 'id', $id );
      $data = $this->db->get();
      if( $data->num_rows > 0 ){
         return $data->result();
      }else{
         return false;
      }
   }


   /*
    * Verifica si el password no ha sido modificado
    *
    * @param      POST     $_POST
    * @return     bool
    */
   function check_password(){
      $tabla = "users";
      $this->db->select( 'id' );
      $this->db->from( $tabla );
      $this->db->where( 'id', $this->encrypt->decode( $_POST['id'] ) );
      $this->db->where( 'pass', $_POST['pass'] );
      $data = $this->db->get();
      if( $data->num_rows > 0 ){
         return false;
      }else{
         return true;
      }
   }


   /*
    * Actualiza registro
    *
    * @param      POST     $_POST
    * @return     bool
    */
   function update_user(){
      $this->db->where( 'id', $this->encrypt->decode( $_POST['id'] ) );
      unset( $_POST['id'] );
      $this->db->update( 'users', $_POST );
      return true;
   }


   /*
    * Elimina registro de la tabla usuarios
    *
    * @param      POST     $_POST
    * @return     bool
    */
   function remove_user(){
      if( $this->db->delete( 'users', array( 'id' =>  $this->encrypt->decode( $_POST['id'] ) ) ) )
         return true;
      else
         return false;
   }
}
?>