<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Livros extends CI_Controller{
    
    function __construct() {
        parent:: __construct();
        $this->load->model('model_livros');
        $this->load->model('emprestimo_model');
        $this->load->model('model_login');
        $this->load->model('model_info');
        $this->load->helper('myDirectory');

    }
           
            
    
    function visualizar (){
        $dados['livro']=$this->model_livros->buscar_livros();
        $this->load->view('livros/listar', $dados);
    }

    function visualizar_meus_livros (){
        $dados['usuario']=$this->model_info->buscar_dados();
        $dados['livros']=$this->model_livros->buscar_livros();
        $dados['emprestimo']=$this->emprestimo_model->buscar_emprestimos();
        $this->load->view('livros/meus_livros', $dados);
    }

    function visualizar_livros_retirados(){
        $dados['usuario']=$this->model_info->buscar_dados();
        $dados['livros']=$this->model_livros->buscar_livros();
        $dados['emprestimo']=$this->emprestimo_model->buscar_emprestimos();
        $this->load->view('admin/livros_retirados', $dados);
    }
    
    function deletar(){
        $id=$this->input->get('id');
        if ($this->model_livros->deletar_livro($id))
            $this->visualizar ();
        else 
            echo 'Deu merda!';
    }
    function cadastro(){
        $this->load->view('livros/cadastrar');
    }
    function cadastro1($variavel){
        $dados["variavel"]=$variavel;
        $this->load->view('livros/cadastrar',$dados);
    }
    function cadastrar(){
        //Pdf upload
        $fileName = $this->input->post('pdffile');
        $fileConfig = getUploadConfig($fileName);
        $this->load->library('upload', $fileConfig);
        $ok = $this->upload->do_upload('pdffile');

        if(($this->input->post('nome')!=NULL)&&($this->input->post('autor')!=NULL)&&($this->input->post('editora')!=NULL)){
            $dados= array(
                'nome'=>$this->input->post('nome'),
                'editora'=>$this->input->post('editora'),
                'autor'=>$this->input->post('autor'),
                'edicao'=>$this->input->post('edicao'),
            );
            $this->model_livros->cadastrar_livro($dados);
            $variavel="Cadastrado com sucesso!!!!!";
            $this->cadastro1($variavel);
            $this->session->set_userdata('mensagem', '=)');
            $this->session->set_userdata('subtitulo_mensagem', 'Cadastrado com Sucesso');
            $this->session->set_userdata('tipo_mensagem', 'success');
        }
        else{
            $dados="Os campos minimos não foram preenxidos!!!";
            $this->cadastro1($dados);

        }
    }
    function atualizacao1($id1){//é para que quando a pessoa deixe um campo em branco seja redirecionado a uma pagina diferente
        if ($this->input->get('id')==NULL){//gambiarra que não funciona, quando recarrega a pagina fica zoado
            $id=$id1;
        }
        else{
            $id=$this->input->get('id');
        }
        $dados["variavel"]="Acho que voce esqueceu de algo!!";
        $dados['livro']= $this->model_livros->busca_livro($id);
        if(empty($dados)){
            $this->session->set_userdata('mensagem', 'Problema ao tentar buscar dados');
            $this->visualizar();
        }else{
            
            $this->load->view('livros/atualizar', $dados);
        }
    }
    function atualizacao(){
        $id=$this->input->get('id');
        $dados['livro']= $this->model_livros->busca_livro($id);
        if(empty($dados)){
            $this->session->set_userdata('mensagem', 'Problema ao tentar buscar dados');
            $this->visualizar();
        }else{
            $this->load->view('livros/atualizar', $dados);
        }
    }
    function atualizar(){
        if (($this->input->post('id')!=NULL)&&($this->input->post('nome')!=NULL)&&($this->input->post('autor')!=NULL)&&($this->input->post('editora')!=NULL)&&($this->input->post('edicao')!=NULL)){
            $livro= array(
                'id'=>$this->input->post('id'),
                'nome'=>  $this->input->post('nome'),
                'autor'=> $this->input->post('autor'),
                'editora'=>  $this->input->post('editora'),
                'edicao'=>  $this->input->post('edicao'),
            );
            $this->model_livros->update($livro); 
            $this->visualizar();
        }
        else{            
            $id=$this->input->post('id');
            $this->atualizacao1($id);
        }
        
        
    }
    function info_livro(){
        $id=$this->input->get('id');
        $emprestimo=$dados['emprestimo']=$this->emprestimo_model->buscar_emprestimos1($id);
        if(isset($emprestimo->usuario_id)){
            $dados['usuario']=$this->model_login->achar_usuario($emprestimo->usuario_id);
        }
        $dados['livro']= $this->model_livros->busca_livro($id);
        $this->load->view('livros/info_livro', $dados);
    }
   
    /*function reservar_livro(){

        $livro_id = $this->input->get('id');
        $usuario_id = $this->session->userdata['id'];
        $data_inicio=date('d/m/Y');
        $data_devolucao = date('d/m/Y', strtotime(' + 2 weeks'));

        $emprestimo = array(
            'livro_id' => $livro_id, 
            'usuario_id' => $usuario_id, 
            'data_inicio' => $data_inicio, 
            'data_devolucao' => $data_devolucao, 
            );

        $this->emprestimo_model->adicionar_emprestimo($emprestimo);

        $this->model_livros->busca_livro_array($livro_id);


        $livro = $this->model_livros->busca_livro_array($livro_id);


        $this->model_livros->update($livro);

        redirect('index.php/livros/visualizar');                               
       

    }*/
  
    
}
