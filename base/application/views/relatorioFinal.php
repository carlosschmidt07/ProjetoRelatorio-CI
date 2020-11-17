<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view('cabecalho'); ?>
<body>
<h1>Relatório Final</h1>
<?php 
      
        echo '<p> Bem Vindo ' .$nomes['nomeUsuario']. '</p>';
        echo '<p>O Aluno ' .$nomes['nomeAluno']. ' apresentou a seguinte avaliação: </p>';

    if($info['locomocao']== '2')
        echo '<p>No quesito Locomoção ele apresentou um bom rendimento</p>';
    else
        if($info['locomocao']== '3') 
            echo '<p>No quesito Locomoção ele apresentou um otimo rendimento</p>';  
            else
                if($info['locomocao']== '1')
                    echo '<p>No quesito Locomoção ele apresentou um rendimento regular</p>';
                    else
                        '<p>ERRO</p>';
    
    if($info['equilibrio']== '2')
        echo '<p>No quesito Equilibrio ele apresentou um bom rendimento</p>';
    else
        if($info['equilibrio']== '3') 
            echo '<p>No quesito Equilibrio ele apresentou um otimo rendimento</p>';  
            else
                if($info['equilibrio']== '1')
                    echo '<p>No quesito Equilibrio ele apresentou um rendimento regular</p>';
                    else
                        '<p>ERRO</p>';
    if($info['postura']== '2')
        echo '<p>No quesito Postura ele apresentou um bom rendimento</p>';
    else
        if($info['postura']== '3') 
            echo '<p>No quesito Postura ele apresentou um otimo rendimento</p>';  
            else
                if($info['postura']== '1')
                    echo '<p>No quesito Postura ele apresentou um rendimento regular</p>';
                    else
                        '<p>ERRO</p>';   
    if($info['outro']== '2')
        echo '<p>No quesito Outro ele apresentou um bom rendimento</p>';
    else
        if($info['outro']== '3') 
            echo '<p>No quesito Outro ele apresentou um otimo rendimento</p>';  
            else
                if($info['outro']== '1')
                    echo '<p>No quesito Outro ele apresentou um rendimento regular</p>';
                    else
                        '<p>ERRO</p>';                                     
      ?>


</body>
</html>