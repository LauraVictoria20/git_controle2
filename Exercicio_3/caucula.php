<!--Lógica de Verificação-->

<?php


$nome = $_POST['nome'];
$tarefas = $_POST['tarefas'];
$atrasos = $_POST['atrasos'];
$setor = $_POST['setor'];

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