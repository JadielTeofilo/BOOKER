<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Info_usuario extends CI_Controller {
    
    function __construct() {
        parent:: __construct();
        $this->load->model('model_info');
    }
        function listar(){
        $this->load->model("model_info");
        $dados['infos_usuario']=$this->model_info->buscar_dados();
        $this->load->view('view_listar', $dados);
    }
    
        
}