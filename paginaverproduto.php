<?php 
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);




?>

<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,600&display=swap" rel="stylesheet">
	<link rel="sortcut icon" href="https://images.vexels.com/media/users/3/135675/isolated/preview/16f4c29c562be3910fca66d182d42f04---cone-azul-do-tempo-da-nuvem-by-vexels.png" type="image/png" />
	<title>Página ver produtos</title>
	<style type="text/css">
		.textos{
			text-align: center;
			font-family: 'Lobster', cursive;
			color: white ;
			background-color: #ccccff;
		}

		#textos2{
			text-align: center;
			font-family: 'Lobster', cursive;
			color: white ;
		}
		body{
			background-color: #e6e6ff;
		}
		.barra{
			border: none;
			background-color: #ccccff;
			color: white;
		}
		.produto{
			margin-left: 285px;
		}
		.info{
			margin-left: 800px;
			font-family: 'Josefin Sans', sans-serif;
			color: pink;
		}
		#produtos{
			width: 50vw;
			height: 50vh;
			flex-direction: row;
			align-items: center;
		}
		#rodape{
			background-color: #ccccff;
			height: 56px;
			color: white;
			margin-top: 30px;
			text-align: center;
			font-family: 'Lobster', cursive;
			font-size: 30px;
		}
	</style>
</head>
<body>
	
		<h1 class ="textos">CELL-Sapatos e Bolsas</h1>
		<h3 class="textos"><a href="paginainicial.html"><button class="barra">Home</button></a>|  <button class="barra">Produtos</button> | <a href="sacolaPag.php"><button class="barra">Sacola</button></a> | <a href="cadastro.html"><button class="barra">Conta</button></a></h3>	
	<div class="container">	
		<div class="row">
		<?php

		  	include 'produto.php';
		  	$listaProdutos=produto::mostrarProduto();
		  	//print_r($listaProdutos);
		  	

		  	for($i=0; $i < count($listaProdutos); $i++){

		  		$n=$listaProdutos[$i]["codigoProduto"];
		  		$nome=$listaProdutos[$i]['nome'];
		  		$preço=$listaProdutos[$i]['preço'];

		  		//echo $n;
		  		echo "<div class='col-3' style='margin-bottom: 15px;'> <div class='card'> <img class='card-img-top' src='Imagens/imagem{$n}.jpg'> <div class='card-body'><h5 class='card-title' name='nome'> {$nome} </h5> <h5 class='card-text' name='preço'>Preço: {$preço} </h5> <a href='paginavizualizarprodutos.php?id={$n} 'class='btn btn-primary' style='background-color: pink; border-color: pink;''>Visualizar</a> </div> </div> </div> ";
		  	}
	  	?>

	  		
	
	</div>
</div>
<footer class="fixed-bottom"><div id="rodape">Site desenlvolvido por Camily, Esther, Léa e Lorena</div>
</footer>
</body>
</html>