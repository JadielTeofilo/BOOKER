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

    function buscar_professor_has_livro($id){
        $this->db->where('professor_usuario_id', $id);
        return $this->db->get('professor_has_livro')->result();
    }
    

    function buscar_usuario_like($nome){
        $this->db->like('nome', $nome);
        return $this->db->get('usuario')->result();
    }

            
    function edita($usuario){
        $this->db->where('id', $usuario['id']);
        return $this->db->update('usuario',$usuario); 
    }

    function adicionarLivro($idLivro, $idUser){
        $array = array('livro_id' => $idLivro, 'professor_usuario_id' => $idUser);
        return $this->db->insert('professor_has_livro',$array);
    }
    
}