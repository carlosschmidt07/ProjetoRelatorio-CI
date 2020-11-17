<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class inicio extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation', 'session');
        $this->load->model('inicio_model');
        


    }
	
	public function index()
	{
    $this->load->view('inicio');
    $this->session->sess_destroy();
    }
  
  public function formNome()
	{
    $this->form_validation->set_rules('nomeUsuario', 'Nome', 'trim|required');
    $this->form_validation->set_rules('cargoUsuario', 'Cargo', 'trim|required');
    $this->form_validation->set_rules('emailUsuario', 'Email', 'required|valid_email|is_unique[usuario.email]');
    $this->form_validation->set_rules('senhaUsuario', 'Senha', 'required');
    $this->form_validation->set_rules('senhaUsuario1', 'Confirmar Senha', 'required|matches[senhaUsuario]');
    if($this->form_validation->run() == FALSE):
      $dados['formError'] = validation_errors();      
    else:
      $dados['formError'] = NULL; 
      $dados_form = $this->input->post();
      
       
      
      $this->session->set_userdata( 'idUsuario',$this->inicio_model->
      salva_user($dados_form['nomeUsuario'], $dados_form['cargoUsuario'], $dados_form['emailUsuario'], $dados_form['senhaUsuario']));
      
      redirect('formAluno','refresh');  
    endif;      
    $this->load->view('formNome', $dados);    
    }
  public function formAluno()
	{  $this->form_validation->set_rules('nomeAluno', 'Nome', 'trim|required');
    $this->form_validation->set_rules('genAluno', 'Genero', 'trim|required');
    if($this->form_validation->run() == FALSE):
      $dados['formError'] = validation_errors();      
    else:
      $dados['formError'] = NULL; 
      $dados_form = $this->input->post();
      $this->session->set_userdata('idAluno',$this->inicio_model->salva_aluno($dados_form['nomeAluno'], $dados_form['genAluno'], $this->session->userdata('idUsuario')));
      
      redirect('formulario1','refresh');     
    endif;
		$this->load->view('formAluno', $dados);
    }
  public function formulario1(){
    $this->form_validation->set_rules('locomocao','Locomoção?', 'required' );
    $this->form_validation->set_rules('equi','Equilibrio?', 'required' );
    $this->form_validation->set_rules('postura','Postura?', 'required' );
    $this->form_validation->set_rules('outro','Outro?', 'required' );
      if($this->form_validation->run() == FALSE):
        $dados['formError'] = validation_errors();      
      else:
       $dados['formError'] = NULL; 
        $dados_form = $this->input->post();
         $this->inicio_model->salva_relatorio_motor( $this->session->userdata('idAluno'),$this->session->userdata('idUsuario'), $dados_form['locomocao'], $dados_form['equi'],$dados_form['postura'],$dados_form['outro']);
         
        redirect('relatorioFinal','refresh');     
    endif;
    $this->load->view('formulario1', $dados);
  }  

    public function relatorioFinal()
	{
    $dados1 =(array)$this->inicio_model->resgata_info($this->session->userdata('idAluno'));   
     $nomeUser = $this->inicio_model->resgata_nome_usuario($dados1['Id_usuario']);     
     $nomeAluno = $this->inicio_model->resgata_nome_aluno($dados1['Id_aluno']);     
     $dados['nomes'] = ['nomeUsuario' => $nomeUser,'nomeAluno' => $nomeAluno];
     $dados['info']  = $dados1;
     // var_dump($dados);
		$this->load->view('relatorioFinal', $dados);
	}
}