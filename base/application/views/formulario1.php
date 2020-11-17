<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view('cabecalho'); ?>
<body>
<div class="container">
<div class="row">
    <div class="col" ></div>
    <div class="col-8" style="background-color:blue;" >
    <?php 
      if($formError):?>
        <div class="alert alert-danger" role="alert">
        <?php echo '<p>' .$formError . '</p>'; ?>
        </div>
     <?php
       endif; ?>


        <?php echo form_open('formulario1',['class'=>'form-group"']); ?>  
        <h2>Havaliação Motora</h2>
        
        <label>Locomoção?</label>
        <input type="radio" name="locomocao" value="3" <?php echo  set_radio('locomocao', '3'); ?> > Otimo</input>
        <input type="radio" name="locomocao" value="2" <?php echo  set_radio('locomocao', '2'); ?> > Bom</input>
        <input type="radio" name="locomocao" value="1" <?php echo  set_radio('locomocao', '1'); ?> > Regular</input>
        <br>
        <label>Equilibrio?</label>
        <input type="radio" name="equi" value="3" <?php echo  set_radio('equi', '3'); ?> > Otimo</input>
        <input type="radio" name="equi" value="2" <?php echo  set_radio('equi', '2'); ?> > Bom</input>
        <input type="radio" name="equi" value="1" <?php echo  set_radio('equi', '1'); ?> > Regular</input>
        <br>
        <label>Postura?</label>
        <input type="radio" name="postura" value="3" <?php echo  set_radio('postura', '3'); ?> > Otimo</input>
        <input type="radio" name="postura" value="2" <?php echo  set_radio('postura', '2'); ?> > Bom</input>
        <input type="radio" name="postura" value="1" <?php echo  set_radio('postura', '1'); ?> > Regular</input>
        <br>
        <label>Outro?</label>
        <input type="radio" name="outro" value="3" <?php echo  set_radio('outro', '3'); ?> > Otimo</input>
        <input type="radio" name="outro" value="2" <?php echo  set_radio('outro', '2'); ?> > Bom</input>
        <input type="radio" name="outro" value="1" <?php echo  set_radio('outro', '1'); ?> > Regular</input>
        <br>
        <?php echo form_submit('btnAvc1','Avançar',['class'=>'btn btn-primary mb-2']); ?>


    </div>
    <div class="col" ></div>
    
</div>
   
  

</div>

        
        
    
</body>
</html>