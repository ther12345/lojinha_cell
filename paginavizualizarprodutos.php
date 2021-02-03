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
	<title>Página visualizar produto</title>
	<style type="text/css">
		.textos{
			text-align: center;
			font-family: 'Lobster', cursive;
			color: white ;
			background-color: #ccccff;
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
		.descrip{
			text-align: center;
			margin-top: 1900px;
		}
		.info{
			margin-top: 30px;
			font-family: 'Josefin Sans', sans-serif;
			color: pink;
			text-align: center;
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
		<h3 class="textos"><a href="paginainicial.html"><button class="barra">Home</button></a>|  <a href="paginaverproduto.php"><button class="barra">Produtos</button></a> | <a href="sacolaPag.php"><button class="barra">Sacola</button></a> | <button class="barra">Conta</button></h3>


		<div style="background-color: pink; border-color: pink; margin-right:800px; margin-left: 200px; margin-top: 20px;">
			<h1 style="text-align: center;">Dados do produto</h1>
			
			
				<?php  

			  		$id=$_GET["id"];
			  		//print_r($produto);
			  		//$_SESSION["produto"];
			  		$n=$id;
			  		if ($id<=3){
			  			include 'sapato.php';
				  		$sapato=sapato::mostrarUmsapato($id);
				  		//print_r($sapato);
				  		$tipo=$sapato[0]['tipo'];
				  		$numeração=$sapato[0]['numeração'];
				  		  echo "<div class='col-3' style='margin-bottom: 15px;'> <div class='card'> <img class='card-img-top' src='Imagens/imagem{$n}.jpg'> <div class='card-body'><h5 class='card-title'> Tipo: {$tipo} </h5> <h5 class='card-text'>Numeração: {$numeração} </h5> </div> </div> </div> ";
					 		
			  		}
				  		
			  		else{
				  		include 'bolsa.php';
				  		$bolsa=bolsa::mostrarUmabolsa($id);
				  		//print_r($bolsa);
				  		$marca=$bolsa[0]['marca'];
				  		$Largura=$bolsa[0]['Largura'];
				  		$Altura=$bolsa[0]['Altura'];
				  		echo "<div class='col-3' style='margin-bottom: 15px;'> <div class='card'> <img class='card-img-top' src='Imagens/imagem{$n}.jpg'> <div class='card-body'><h5 class='card-title'> Marca: {$marca} </h5> <h5 class='card-text'>Largura: {$Largura} </h5> <h5 class='card-text'>Altura: {$Altura} </h5> </div> </div> </div> ";
			  		}
			  		
			  		 
			  		?>
			  			
						
					  		<!--<h2>Tipo: <?php //echo $sapato[$id]["tipo"];?></h2>
					 		<br>	
					  		<h2>Numeração: <?php //echo $sapato[$id]["numeração"];?></h2>
					  		
					  	
							<h2>Marca: <?php //echo $bolsa[$id]["marca"];?></h2>
					 		<br>	
					  		<h2>Largura: <?php //echo $bolsa[$id]["Largura"];?></h2>
					  		<br>
			  				<h2>Altura: <?php //echo $bolsa[$id]["Altura"];?></h2>-->
		</div>


		<button type="button" class="btn btn-primary" style="background-color: #ccccff; border-color: #ccccff; margin-left:450px; margin-top: -500px; font-family: 'Lobster', cursive;" >Comentários</button>

		<img src="https://image.flaticon.com/icons/png/512/126/126495.png" style="width: 30px; height: 30px; margin-left:10px; margin-top: -500px; ">

		<?php
			
			$id=$_GET["id"];
			include 'produto.php';
			$listaProdutos=produto::mostrarUmProd($id);
			
			$cod=$listaProdutos[0]["codigoProduto"];
			
			echo "<a href='sacolaPag.php?id={$cod}' <button type='button' name='addsacola' class='btn btn-primary' style='background-color: #ccccff; border-color: pink; margin-left:800px; margin-top: -100px;' >Adicionar á sacola</button> </a>";	
		?>
		
	<footer class="fixed-bottom"><div id="rodape">Site desenlvolvido por Camily, Esther, Léa e Lorena</div>
	</footer>
 
</body>
</html>