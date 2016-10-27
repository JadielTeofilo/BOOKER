<?php

class Model_sugestao extends CI_Controller{

    function guardar($sugestao){
        return $this->db->insert('sugestao', $sugestao);
        
    }

    function buscar(){
        $query=$this->db->query('SELECT * FROM sugestao');
        return $query->result();
    }
    function delete($id){
        $this->db->where('id', $id);
        return $this->db->delete('sugestao');
    }

    
    function buscar_emprestimos2($id){
        $this->db->where('usuario_id', $id);
        return $this->db->get('emprestimo')->row();
    }
}
