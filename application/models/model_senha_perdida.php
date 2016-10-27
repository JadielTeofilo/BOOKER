<?php

Class Model_senha_perdida extends CI_Model{
    function busca_usuario($usuario){
        $this->db->where('usuario', $usuario);
        return $this->db->get('usuario')->row();   
    }
}
