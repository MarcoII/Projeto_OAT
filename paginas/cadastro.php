<?php

$actionEditar = "";
$id = 0;
$nome = NULL;
$email = NULL;
$endereco = NULL;
$telefone = NULL;
$dia = NULL;
$horario = NULL;


?>


<h2>Faça o seu Agendamento</h2>


<div class="row"> 
	<div class="col-md-3"> </div>
	<div class="col-md-6">



		<form action="?pg=processar<?= $actionEditar ?>" method="POST">
		<div class="form-group">
		    <label for="inputNome">Nome</label>
		    <input type="text" class="form-control" id="inputNome" name="nome" aria-describedby="emailHelp" placeholder="Digite seu nome" value="<?= $nome ?>">		    
		 </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Digite seu e-mail" value="<?= $email ?>">		    
		  </div>
		  <div class="form-group">
		    <label for="inputNome">Endereço</label>
		    <input type="text" class="form-control" id="inputNome" name="endereco" aria-describedby="enderecoHelp" placeholder="Digite seu Endereço. E.: Rua, Número, Bairro" value="<?= $endereco ?>">		    
		 </div>
		 <div class="form-group">
		    <label for="inputNome">Telefone</label>
		    <input type="text" class="form-control" id="inputNome" name="telefone" aria-describedby="telefoneHelp" placeholder="Digite seu Telefone com DDD" value="<?= $telefone ?>">		    
		 </div>
		 <div class="form-group">
		    <label for="inputNome">Dia</label>
		    <input type="text" class="form-control" id="inputNome" name="dia" aria-describedby="diaHelp" placeholder="Digite o dia que quer o atendimento" value="<?= $dia ?>">		    
		 </div>
		 <div class="form-group">
		    <label for="inputNome">Horário</label>
		    <input type="text" class="form-control" id="inputNome" name="horario" aria-describedby="horarioHelp" placeholder="Digite o Horário" value="<?= $horario ?>">		    
		 </div>
		  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

	<div class="col-md-3"> </div>
</div>



