<?php

require_once '..\model\Aluno.php';

$aluno  = new Aluno();

$aluno->setNome($_POST['nome']);
$aluno->setNota1($_POST['nota1']);
$aluno->setNota2($_POST['nota2']);
$aluno->setNota3($_POST['nota3']);
$aluno->setFaltas($_POST['faltas']);

$aluno->calcularMedia();



?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<div class="container">
    <div class="row">
        <div class="col"><?php echo "Aluno: ".$aluno->getNome()."<br/>"; ?></div>
        <div class="col"><?php echo "Presença: ".$aluno->calcularPresenca()."%<br/>"; ?></div>
        <div class="col"><?php echo "Média: ".  (floor($aluno->getMedia()*100)/100)."<br/>"; ?></div>
        <div class="col"><?php echo "Resultado: ".$aluno->mostrarResultado()."<br/>"; ?></div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
