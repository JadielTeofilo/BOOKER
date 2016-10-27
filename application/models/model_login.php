<?php

class Model_login extends CI_Model{
    
    function logar($login, $senha){
        /*$query=$this->db->query("SELECT * FROM usuario WHERE nome= $login AND senha= $senha");
        $asdf=$query->result();
        var_dump($asdf);
        return $query->result();*/
        $this->db->where('usuario', $login);
        $this->db->where('senha', $senha);
        return $this->db->get('usuario')->row();    
        
    }
    function achar_usuario($id){
        $this->db->where('id', $id);
        return $this->db->get('usuario')->row();
    }
    
    
    
}