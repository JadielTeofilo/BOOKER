<?php

    class Sugestao extends CI_Controller{

        function enviar(){
            $this->load->view('sugestoes/enviar_sugestao');
        }

        function enviar1(){
            if($this->input->post('descricao')!=NULL){
                $this->load->helper('date');
                $datestring = "%d/%m/%Y";
                $time = time();
                $sugestao= array(
                  'descricao'=>$this->input->post('descricao'),
                  'data'=>  mdate($datestring, $time),
                );
                $this->load->model('model_sugestao');
                $this->model_sugestao->guardar($sugestao);
                $variavel["variavel"]="Enviado com sucesso!!";
                $this->load->view('sugestoes/enviar_sugestao', $variavel);
            }
            else{
                $variavel["variavel"]="Hmmm, acho que algo está errado!!1!!1!!";
                $this->load->view('sugestoes/enviar_sugestao', $variavel);
            }
        }
        function ver(){
            $this->load->model('model_sugestao');
            $dados['sugestao']=$this->model_sugestao->buscar();
            $this->load->view('admin/view_ver_sugestoes', $dados);
        }

        function delete(){
            $id = $this->input->get('id');
            $this->load->model("model_sugestao");
            $this->model_sugestao->delete($id);
            $this->ver();
        }
        
        
    }