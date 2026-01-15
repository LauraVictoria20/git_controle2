<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!--Formulário de Verificação de nota-->
<div class="Controle">
    <h2>Controle de Desempenho Mensal dos funcionários!</h2>

  <form action="calcula.php" method="post">
        <!--Nome-->
         <label for="nome">Nome</label>
         <input type="text" name="nome" placeholder="Digite seu nome">
<br>    <!--Tarefas entregues-->
         <label for="nome"> Tarefas entregues</label>
         <input type="number" name="tarefas" placeholder="Digite a quantidade de tarefas entregues no mês">
<br>    <!--Quantidade de atrasos-->
         <label for="nome">Atrasos</label>
         <input type="number" name="atrasos" placeholder="Digite o número de atrasos por mês">
<br>
        <!--Botão-->
         <button class="btn btn-warning">Submeter</button>
  </form>
    
</div>
</body>    
</html>
