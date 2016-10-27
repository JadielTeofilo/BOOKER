<?php
    
class Emprestimo_model extends CI_Model{

	public function adicionar_emprestimo($emprestimo){
		$this->db->insert('emprestimo',$emprestimo);
	}

	function buscar_emprestimos(){
        /*$query=$this->db->query("SELECT * FROM livro");*/
       	$query = $this->db->query("SELECT * FROM emprestimo");
       	return $query->result();
    }
    
    function buscar_emprestimos1($id){
       	$this->db->where('livro_id', $id);
        return $this->db->get('emprestimo')->row();
    }

    function buscar_emprestimos2($id){
        $this->db->where('usuario_id', $id);
        return $this->db->get('emprestimo')->row();
    }

    function deleta($id){
        $this->db->where('id', $id);
        return $this->db->delete('emprestimo');
    }

}

