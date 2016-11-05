<?php
	
class Admin_model extends CI_Model{


        public function atualizar_usuario($usuario){
		$this->db->where('id',$usuario['id']);
		return  $this->db->update('usuario', $usuario);
	}

	public function cadastrar_admin($admin){
		$this->db->insert('usuario',$admin);
	}

	function deleta($id){
        $this->db->where('id', $id);
        return $this->db->delete('usuario');
    }

    function buscar_usuario($id){
    	$this->db->where('id', $id);
        return $this->db->get('usuario')->result()[0];
    }

            
    function edita($usuario){
        $this->db->where('id', $usuario['id']);
        return $this->db->update('usuario',$usuario); 
    }

}