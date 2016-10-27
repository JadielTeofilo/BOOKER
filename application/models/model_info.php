<?php

class Model_info extends CI_Model{
    
    function buscar_dados(){
        $query = $this->db->query("SELECT * FROM usuario");
        return $query->result();
        
    }
    
    function buscar_endereco(){
        $query = $this->db->query("SELECT * FROM endereco");
        return $query->result();
        
    }
       
}

