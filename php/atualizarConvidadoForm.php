<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" http-equiv="X-UA-Compatible" content="width = device-width, initial-scale = 1">
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
		<script src="../bootstrap/js/jquery-3.1.0.js"></script>
		<script src="../bootstrap/js/bootstrap.js"></script>
		<title>atualizarConvidadoForm</title>
	</head>
	<body>
		<div class="page-header text-center">
			<h2>Atualizar Convidado</h2>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label for="selconvidados">Selecione um convidado:</label>
						<select class="form-control input-sm" id="selconvidados">
							<option>Amanda</option>
							<option>Bruna</option>
							<option>Cláudia</option>
						</select>
					</div>
				</div>	
				<div class="col-sm-6">
					<form action="../php/inserirConvidado.php" method="post">
						<fieldset>
							<legend>Informação Pessoal</legend>
							<div class="form-group">
								<label class=" control-label" for="nome">Nome:</label>
								<input type="text" class="form-control input-sm" id="nome">	
							</div>	
							<div class="form-group">
								<label class=" control-label" for="sobrenome">Sobrenome:</label>
								<input type="text" class="form-control input-sm" id="sobrenome">	
							</div>	
							<div class="form-group">
								<label class=" control-label" for="email">Email:</label>
								<input type="email" class="form-control input-sm" id="email">	
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary">Atualizar Convidado</button>	
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
