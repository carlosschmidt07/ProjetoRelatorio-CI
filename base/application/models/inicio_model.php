<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class inicio_model extends CI_Model {

    function __construct(){
        parent::__construct();
        


    }
	
	public function salva_user($nomeUser, $cargoUser, $email, $senha){

        $dados = array('nome_usuario' => $nomeUser,
            'funcao_usuario' => $cargoUser, 'email'=>$email, 'senha'=> $senha,
        );
        $this->db->insert('usuario', $dados);
        
        return $this->db->insert_id();
        
    }
    public function salva_aluno($nomeAluno, $genAluno, $idUsuario){

        $dados = array('nome_aluno' => $nomeAluno,
            'genero_aluno' => $genAluno, 'id_professor' => $idUsuario,
        );
        $this->db->insert('aluno1', $dados);
        return $this->db->insert_id();
    }
    public function salva_relatorio_motor($idAluno, $idProfessor, $loc, $equi, $postura, $outro){

        $dados = array('Id_aluno' => $idAluno,
            'Id_usuario' => $idProfessor, 'locomocao' => $loc, 'equilibrio' => $equi, 'postura' => $postura, 'outro' => $outro,
        );
        $this->db->insert('opcao_motora', $dados);
        return $this->db->insert_id();
    }

    public function get_idUser($userName){
        $this->db->where('nome_usuario', $userName);
        $query = $this->db->get('usuario',1);
        if($query->num_rows()==1){
            $row = $query->row();
            return $row->Id;
        }else{
            return NULL;
        }
    }

    public function resgata_info($idAluno){
        $this->db->where('Id_aluno', $idAluno);
        $query = $this->db->get('opcao_motora',1);
        if($query->num_rows()==1){
            $row = $query->row();
            return $row;
        }else{
            return NULL;
        }

    }
    public function resgata_nome_usuario($idUsuario){
        $this->db->where('Id', $idUsuario);
        $query = $this->db->get('usuario',1);
        if($query->num_rows()==1){
            $row = $query->row();
            
            return $row->nome_usuario;
        }else{
            return NULL;
        }

    } 
    public function resgata_nome_aluno($idAluno){
        $this->db->where('id', $idAluno);
        $query = $this->db->get('aluno1',1);
        if($query->num_rows()==1){
            $row = $query->row();
            return $row->nome_aluno;
        }else{
            return NULL;
        }

    }       
         

    
    
}