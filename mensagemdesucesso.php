<?php 
session_start();
session_destroy();
 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
	<link rel="sortcut icon" href="https://images.vexels.com/media/users/3/135675/isolated/preview/16f4c29c562be3910fca66d182d42f04---cone-azul-do-tempo-da-nuvem-by-vexels.png" type="image/png" />
	<title></title>
	<style type="text/css">
		#texto{
			text-align: center;
			font-family: 'Lobster', cursive;
			color: white ;
			background-color: #ccccff;
		}
		#texto2{
			text-align: center;
			font-family: 'Lobster', cursive;
			color: white ;
		}
		
		#filtrar{
			background-color: pink;
			border-color: pink;
			margin-left:1200px;
		}
		#menu{
			background-color: pink;
			border-color: pink;
			margin-left:80px;
		}
		#imagem{
			background-image: url("https://image.freepik.com/fotos-gratis/ceu-colorido-com-nuvens-ao-por-do-sol_87498-692.jpg");
			margin-top: 10px;
		}
		#carouselExampleIndicators{
			text-align: center;
		}
		body{
			background-color: #e6e6ff;
		}
		.barra{
			border: none;
			color: white;
			background-color: #e6e6ff;
		}
		.icone{
			width: 36px;
			height: 30px;
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
	<h1 id ="texto">CELL-Sapatos e Bolsas</h1>
<br>
<br>
<br>
<div class="alert alert-success" role="alert" style="background-color: green; text-align: center; font-size: 30px;">
  		Obrigada pela compra!
</div>
<br>
<h3 id="texto2"><a href="paginainicial.html"><button class="barra" style="background-color: pink;">Home</button></a>	
</h3>


<!--<?php 
	//$id=$_GET["id"];
	//include 'produto.php';
	//$produto=produto::mostrarUmProd($id);
	//print_r($produto);
	//array_push($_SESSION["produto"], $produto);	
	//$cod=$_SESSION["produto"][$id][0]['codigoProduto'];	

	//session_destroy($cod);

 ?>-->

 

</body>
</html>




