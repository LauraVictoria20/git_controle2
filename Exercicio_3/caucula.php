<!--Lógica de Verificação-->

<?php


$nome = $_POST['nome'];
$tarefas = $_POST['tarefas'];
$atrasos = $_POST['atrasos'];
$setor = $_POST['setor'];

//data de avaliação hoje


if(isset($_POST['tarefas'])){
    if($_POST['tarefas'] >=  20 && $_POST['atrasos'] <= 1 ){
     echo "Desempenho Excelente";
    }
    else if($_POST['tarefas'] == 10 || $_POST['tarefas'] >=19 && $_POST['atrasos'] >= 2 || $_POST['atrasos'] == 3){
     echo "Desempenho Regular!" ;
    }
    else{
     echo "Desempenho Insatisfatório!";
  }
}

?>
<!--data de avaliação hoje-->
<h2><?php echo "Data de Avaliação: " . date('d/m/Y') ?> </h2>