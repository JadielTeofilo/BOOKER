<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Usuario extends CI_Controller {
   
    function __construct() {
        parent:: __construct();
        $this->load->model('admin_model');  
        $this->load->model('model_login');  
        $this->load->model('model_sugestao');
      
    }
    
    public function index(){
        $this->session->set_userdata('mensagem', '=)');
            $this->session->set_userdata('subtitulo_mensagem', 'Cadastrado com Sucesso');
            $this->session->set_userdata('tipo_mensagem', 'success');
        $this->load->view("usuarios/index");
        
    }
    public function home_low_lv(){
        if ($this->session->userdata('prioridade')<3){
            $this->load->view("usuarios/view_home_low_lv");
        }
        else{
            $this->index();
        }
      
        
    }
    public function home_high_lv(){
        if ($this->session->userdata('prioridade')==3){
            $this->load->view("admin/view_home_high_lv");
        }
        else{
            $this->index();
        }
    }

    function mostrarlogar(){
        $this->load->view("usuarios/login");
    }


    function logar(){
        /*$this->load->library('session');
        $this->load->helper('url');*/
        $login= $this->input->post('login');
        
        $senha= $this->input->post('senha');
        $this->load->model('model_login');
        $usuario=$this->model_login->logar($login, $senha);

        if (($usuario==FALSE)||($login==NULL)){
            $var['msg']="Usuario ou senha incorretos";
            redirect('index.php');
        }else{
            $prioridade=$usuario->tipo_usuario_id;
            $newdata= array(
                'id'=>$usuario->id,
                'nome'=>$usuario->nome,
                'usuario'=>$usuario->usuario,
                'prioridade'=>$usuario->tipo_usuario_id,
                'logado'=>true               
            );
            $this->session->set_userdata($newdata);
            if($prioridade<3){
                redirect('index.php/usuario/home_low_lv');                                 
            }
            else{
                redirect ('index.php/usuario/home_high_lv');
            }
        }
    }

    function listar(){
        $this->load->model("model_info");
        $dados['infos_usuario']=$this->model_sugestao->model_info->buscar_dados();
        $this->load->view('usuarios/listar', $dados);
    }
    
    public function deslogar(){
        $this->load->helper('url');
        $this->load->library('session');
        $this->session->sess_destroy();
        redirect($this->index());
        
    }
    function senha_perdida1(){
        $this->load->view('usuarios/perdi_senha');
    }
    function senha_perdida(){
        $this->load->library('session');
        $this->load->library('email');
        $usuario= $this->input->post('usuario');
        $this->load->model('model_senha_perdida');
        $usuario=$this->model_senha_perdida->busca_usuario($usuario);
        $this->email->from('jadieloliveira@cjr.org.br', 'Biblioteca Cjr');
        $this->email->to($usuario->email);
        $this->email->subject('Senha Biblioteca');
        $this->email->message('Sua senha é: ', $usuario->senha, '.');
        $this->email->send();

        echo $this->email->print_debugger();
    }

    public function ver_perfil(){
        $id = $this->input->get('id');        
        $usuario = $dados['usuario'] = $this->admin_model->buscar_usuario($id);    
        //die(var_dump($this->session));       
        if(empty($dados)){
            $this->session->set_userdata('mensagem', 'Problema ao tentar buscar dados');
            $this->listar();
        }else{    
            $this->session->set_userdata('mensagem', 'Só sucesso');
            $this->load->view('usuarios/verPerfil', $dados);
        }
    }


    public function imprimir_dados(){
 
        redirect('index.php/admin/atualizacaoSeuPerfil');
    }
    
    public function imprimir_dados_meus(){
 
        redirect('index.php/admin/atualizacaoSeuPerfil');
    }
    

    function editar(){
        
        if(($this->input->post('id')!=NULL)&&($this->input->post('nome')!=NULL)&&($this->input->post('usuario')!=NULL)){
            $usuario = array(
                'id' => $this->input->post('id'),
                'nome' => $this->input->post('nome'),
                'email' => $this->input->post('email'),
            );


            $prioridade = $this->session->userdata('prioridade');



            if($this->admin_model->edita($usuario)){
                if ($prioridade<3) {
                                $this->load->view('usuarios/view_home_low_lv');
                            }  
                else {
                               $this->load->view('admin/view_home_high_lv'); 
                          }          
            }else{
                $this->session->set_userdata('mensagem', 'Problema ao tentar buscar dados');

                if ($prioridade<3) {
                                $this->load->view('usuarios/view_home_low_lv');
                            }  
                else {
                               $this->load->view('admin/view_home_high_lv'); 
                          }          
            }  
        }
        else{
            $this->editando1();
        }
        
    }
}