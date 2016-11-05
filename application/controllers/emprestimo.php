<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Emprestimo extends CI_controller {

	function __construct() {
        parent:: __construct();
        $this->load->model('admin_model');
        $this->load->model('emprestimo_model');
        $this->load->model('model_livros');
    }


    function reservar_livro(){

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

        /* atualizar o status do livro de id 'id' */

        $livro = $this->model_livros->busca_livro_array($livro_id);


        $this->model_livros->update($livro);

        redirect('index.php/livros/visualizar');                                 
    }
       
	function devolver_livro() {
        $id_emprestimo = $this->input->get('id');
        $livro_id = $this->input->get('livro_id');

        $livro = $this->model_livros->busca_livro_array($livro_id);


        $this->model_livros->update($livro);

        /*deleta o campo do emprestipo de id "id_emprestimo"*/
        $this->emprestimo_model->deleta($id_emprestimo);

        redirect('index.php/livros/visualizar_meus_livros');                                 

    }    

}	