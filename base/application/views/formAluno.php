<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view('cabecalho'); ?>
<body>
<div class="row">
<div class="col">
 <?php echo '<p>' . $this->session->userdata('idUsuario') .'</p>' ?>
</div>
<div class="col">
<?php 
      if($formError):?>
        <div class="alert alert-danger" role="alert">
        <?php echo '<p>' .$formError . '</p>'; ?>
        </div>
     <?php
       endif; ?>
     
      
     
     
      
<?php
    $options = [''=>'--Informe o genero do aluno--',
      'masculino' => 'Masculino', 'feminino' =>'Feminino', 
    ];

      echo form_open('formAluno',['class'=>'form-group"']);
      echo form_label('Nome do Aluno', 'nomeAluno');      
      echo form_input('nomeAluno',set_value('nomeAluno'),['class'=>'form-control']);
    ?>
    <div class="form-group">

      <?php 
        echo form_label('Genero', 'genAluno');
        echo form_dropdown('genAluno', $options,' ' ,['class'=>'form-control']);
            
      ?>
    </div>
      <?php 
        echo form_submit('btnAvc2','Avançar',['class'=>'btn btn-primary mb-2']);
      ?>
</div>
<div class="col"></div>
</div>




</body>
</html>