<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {	

	function __construct() {
        parent:: __construct();
        $this->load->model('admin_model');
        $this->load->model('model_sugestao');
        $this->load->model('model_livros');
        $this->load->model('Emprestimo_model');

    }
    public function cadastrar(){
        $this->load->model('admin_model');
        $variavel="Cadastro realizado com sucesso!!";
        if(($this->input->post('bairro')!=NULL)&&($this->input->post('cidade')!=NULL)&&($this->input->post('estado')!=NULL)&&($this->input->post('complemento')!=NULL)&&($this->input->post('nome')!=NULL)&&($this->input->post('email')!=NULL)&&($this->input->post('cargo')!=NULL)&&($this->input->post('telefone')!=NULL)&&($this->input->post('senha')!=NULL)&&($this->input->post('tipo_usuario_id'))){
        $endereco_id = array(
            'bairro' => $this->input->post('bairro'),
            'cidade' => $this->input->post('cidade'),
            'estado' => $this->input->post('estado'),
            'complemento' => $this->input->post('complemento'),
            'cep' => $this->input->post('cep'),
        );
    	$admin = array(
                'nome' => $this->input->post('nome'),
                'email' => $this->input->post('email'),
                'cargo' => $this->input->post('cargo'),
                'telefone' => $this->input->post('telefone'),
                'usuario' => $this->input->post('usuario'),
                'senha' => ($this->input->post('senha')),
                'endereco_id' => '',
                'tipo_usuario_id' => $this->input->post('tipo_usuario_id')
    	); 
            $admin['endereco_id'] = $this->admin_model->cadastrar_endereco($endereco_id);
            $this->admin_model->cadastrar_admin($admin);
            $this->session->set_userdata('mensagem', 'GGWP');  
            $this->cadastro1($variavel);  
    }
    else{
        $variavel="Os dados não foram preenxidos corretamente!!!";
        $this->cadastro1($variavel);       
    }
}
    public function cadastro1($variavel){
        $dados["variavel"]=$variavel;
        $this->load->view('admin/cadastrar', $dados);
    }
    public function cadastro(){
        $dados["variavel"]=" ";
        $this->load->view('admin/cadastrar',$dados);
    }

    public function deletar(){
        $id = $this->input->get('id');
        $vinculo = $this->model_sugestao->buscar_emprestimos2($id);

        if(!empty($vinculo)){
            $this->session->set_userdata('mensagem', 'errodel1');
            $this->listar();
        }
        else{
            $this->admin_model->deleta($id);
            $this->listar();
        }

    }

    public function deletar1(){
        $id = $this->input->get('id');
        $vinculo = $this->model_sugestao->buscar_emprestimos2($id);

        if(!empty($vinculo)){
            $this->session->set_userdata('mensagem', 'errodel');
            redirect("index.php/Usuario/imprimir_dados");
        }
        else{
            $this->admin_model->deleta($id);
            redirect("index.php/Usuario/deslogar");
        }
    }

    function listar(){
        $this->load->model("model_info");
        $dados['infos_usuario']=$this->model_sugestao->model_info->buscar_dados();
        $dados['endereco']=$this->model_sugestao->model_info->buscar_endereco();
        $this->load->view('admin/listar', $dados);
    }

    function visualizar_sugestoes(){
        $dados['sugestao'] = $this->model_sugestao->buscar();
        $this->load->view('admin/view_ver_sugestoes',$dados);
    }
    


    public function atualizacaoSeuPerfil(){
        $id = $id=$this->session->userdata('id');        
        $usuario = $dados['usuario'] = $this->admin_model->buscar_usuario($id);    
        $dados['endereco'] = $this->admin_model->buscar_endereco($usuario->endereco_id); 
        //die(var_dump($id));       
        if(empty($dados)){
            $this->session->set_userdata('mensagem', 'Problema ao tentar buscar dados');
            $this->listar();
        }else{    
            $this->session->set_userdata('mensagem', 'Só sucesso');
            $this->load->view('usuarios/editar_cadastro', $dados);
        }
    }

    function atualizacao(){
        $id = $this->input->get('id');        
        $usuario = $dados['usuario'] = $this->admin_model->buscar_usuario($id);    
        $dados['endereco'] = $this->admin_model->buscar_endereco($usuario->endereco_id); 
        //die(var_dump($this->session));       
        if(empty($dados)){
            $this->session->set_userdata('mensagem', 'Problema ao tentar buscar dados');
            $this->listar();
        }else{    
            $this->session->set_userdata('mensagem', 'Só sucesso');
            $this->load->view('admin/atualizar', $dados);
        }
    }


    function atualizar(){
        $endereco = array(
            'id' => $this->input->post('id'),
            'bairro' => $this->input->post('bairro'),
            'cidade' => $this->input->post('cidade'),
            'estado' => $this->input->post('estado'),
            'complemento' => $this->input->post('complemento'),
            'cep' => $this->input->post('cep'),
            );

        $usuario = array(
            'id' => $this->input->post('id'),
            'nome' => $this->input->post('nome'),
            'usuario' => $this->input->post('usuario'),
            'senha' => $this->input->post('senha'),
            'email' => $this->input->post('email'),
            'cargo' => $this->input->post('cargo'),
            'telefone' => $this->input->post('telefone'),
            'endereco_id'=>$this->input->post('endereco_id')
        );

        $this->admin_model->atualizar_endereco($endereco);
 
        if($this->admin_model->atualizar_usuario($usuario)){
                redirect("/index.php/usuario/imprimir_dados");
            }

    }
    
 
    function atualizar1(){ 
        $endereco = array(
            'id' => $this->input->post('id_endereco'),
            'bairro' => $this->input->post('bairro'),
            'cidade' => $this->input->post('cidade'),
            'estado' => $this->input->post('estado'),
            'complemento' => $this->input->post('complemento'),
            'cep' => $this->input->post('cep'),
            );

        $usuario = array(
            'id' => $this->input->post('id'),
            'nome' => $this->input->post('nome'),
            'usuario' => $this->input->post('usuario'),
            'senha' => $this->input->post('senha'),
            'email' => $this->input->post('email'),
            'cargo' => $this->input->post('cargo'),
            'telefone' => $this->input->post('telefone'),
            'endereco_id'=>$this->input->post('endereco_id')
        );

        $this->admin_model->atualizar_endereco($endereco);
 
        if($this->admin_model->atualizar_usuario($usuario)){
                $this->listar();
            }
           
    }
}

