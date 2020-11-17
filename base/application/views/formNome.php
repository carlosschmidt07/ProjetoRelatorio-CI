<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view('cabecalho'); ?>
<body>
<div class="row">
    <div class="col"></div>
    <div class="col">
    <h2>Cadastro usuário</h2>
    <?php 
      if($formError):?>
        <div class="alert alert-danger" role="alert">
        <?php echo '<p>' .$formError . '</p>'; ?>
        </div>
     <?php
       endif; ?>
     
      <?php
    $options = [''=>'--Informe seu Cargo--',
      'professor' => 'Professor', 'pedagogo' =>'Pedagogo', 'diretor' => 'Diretor',
      'auxiliar sala'=> 'Auxiliar de sala', 'auxiliar diretor' => 'Auxiliar da direção',
    ];

      echo form_open('formNome',['class'=>'form-group"']);
      echo form_label('Qual o seu nome?', 'nomeUsuario');      
      echo form_input('nomeUsuario',set_value('nomeUsuario'),['class'=>'form-control']);
    ?>
    <div class="form-group">

    <?php 
      echo form_label('Qual o seu Email?', 'emailUsuario');
      echo form_input('emailUsuario', set_value('emailUsuario'),['class'=>'form-control']);
      
    ?>
</div>
      <div class="form-group">

    <?php 
      echo form_label('Escolha uma senha', 'senhaUsuario');
      echo form_input('senhaUsuario', set_value('senhaUsuario'),['class'=>'form-control']);
      
    ?>
    </div>
    <div class="form-group">

    <?php 
      echo form_label('Repita a senha', 'senhaUsuario1');
      echo form_input('senhaUsuario1', set_value('senhaUsuario1'),['class'=>'form-control']);
  
    ?>
    </div>
    <div class="form-group">

      <?php 
        echo form_label('Qual o seu cargo?', 'cargoUsuario');
        echo form_dropdown('cargoUsuario', $options, 'Professor',['class'=>'form-control', 'id'=>'nomeUser']);
            
      ?>
    </div>
      <?php 
        echo form_submit('btnAvc1','Cadastrar',['class'=>'btn btn-primary mb-2']);
      ?> 
  
  

    </div>
    <div class="col"></div>
</div>




</body>
</html>