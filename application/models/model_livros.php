<?php

    class model_livros extends CI_model{
        function buscar_livros(){
            $query=$this->db->query("SELECT * FROM livro");
            return $query->result();
        }
        function deletar_livro($id){
            $this->db->where('id', $id);
            return $this->db->delete('livro');
        }
        function cadastrar_livro($dados){
            $this->db->insert('livro', $dados);
        }
        function busca_livro($id){
            $this->db->where('id', $id);
            return $this->db->get('livro')->row();
        }
        function update($livro){
            $this->db->where('id', $livro['id']);
            return $this->db->update('livro',$livro);
        }

        function busca_livro_array($id){
            $this->db->where('id', $id);
            return $this->db->get('livro')->result_array()[0];  
        }
        
    }
