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
      echo form_open('formLogin',['class'=>'form-group"']);
      echo form_label('Email', 'emailUser');      
      echo form_input('emailUser',set_value('emailUser'),['class'=>'form-control']);
    ?>
    <div class="form-group">

      <?php 
        echo form_label('Senha', 'senhaUser');
        echo form_dropdown('senhaUser', set_value('senhaUser') ,['class'=>'form-control']);
            
      ?>
    </div>
      <?php 
        echo form_submit('btnAvc2','Logar',['class'=>'btn btn-primary mb-2']);
      ?>
</div>
<div class="col"></div>
</div>




</body>
</html>