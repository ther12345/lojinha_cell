<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
	<link rel="sortcut icon" href="https://images.vexels.com/media/users/3/135675/isolated/preview/16f4c29c562be3910fca66d182d42f04---cone-azul-do-tempo-da-nuvem-by-vexels.png" type="image/png" />
	<title>
		sacola
	</title>
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
		#inp{
			width: 500px;
			display: block; 
			margin-left: auto; 
			margin-right: auto;
		}
		#cadastra{
			background-color: pink;
			border-color: pink;
			display: block; 
			margin-left: auto; 
			margin-right: auto;
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
	<h1 class ="textos">CELL - Sapatos e Bolsas</h1>
		<h3 class="textos"><a href="paginainicial.html"><button class="barra">Home</button></a> | <a href="paginaverproduto.php"><button class="barra">Produtos</button></a> | <a href="sacolaPag.html"><button class="barra">Sacola</button></a> | <a href="PaginaLogin.html"><button class="barra">Conta</button></a></h3>

		<div id="inp" type="submit" action="Usuario.php" method="get">
			

			<h1 style="text-align: center; font-family:Georgia, 'Times New Roman', Times, serif; color:  #ccccff; margin-top: 30px;">Compras</h1>
			<?php 
				session_start();
				
				if (!isset($_SESSION["produto"])) {
					$_SESSION["produto"]=[];
				}
				if (isset($_GET["id"])) {
					$id=$_GET["id"];
					include 'produto.php';
					$produto=produto::mostrarUmProd($id);
					//print_r($produto);
					array_push($_SESSION["produto"], $produto);
				}

				//echo("<pre>");
				//print_r($_SESSION);
				//echo("</pre>");

			?>
 
		
			  <table class="table">
					  <thead>
					    <tr>
					      <th scope="col" name="codigoProduto" >Codigo do Produto</th>
					      <th scope="col" name="nome" >Nome</th>
					       <th scope="col" name="preço" >Preço</th>
					    </tr>
					  </thead>
					  <tbody>
					 <?php
					  $soma=0;
					  	for($i=0; $i < count($_SESSION["produto"]); $i++){
					  		$cod=$_SESSION["produto"][$i][0]['codigoProduto'];
					  		$nome=$_SESSION["produto"][$i][0]['nome'];
					  		$preço=$_SESSION["produto"][$i][0]['preço'];
					  		$soma+= floatval($preço);
					  		echo " <tr>
						      <th scope='row' name='codigoProduto'>{$cod}</th><td name='nome'>{$nome}</td>
						      <td name='preço'>{$preço}</td> </tr>"; 			
	  	
	  					}
	  				
	  				?>

					 </tbody>
					   
					 </table>     
			<br>


			 

			<br>
			<!-- Button trigger modal -->
			<?php 
				echo "<a href='oioi.php?valor={$soma}' <button type='button'  class='btn btn-primary' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'style='background-color: pink; border-color: pink; ' >Finalizar Compras</button> </a>"
			 ?>
				 
				
			
			<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Pagamento</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <table class="table">
					  <thead>
					    <tr>
					      <th scope="col">Valor total</th>
					      <th scope="col">Tipo de Pagamento</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <td name="valor_total"><?php 
					      	echo $soma;
					       ?></td>
					      <td><select>
					      	<option>Cartão</option>
					      	<option>Boleto</option>
					      </select></td>
					    </tr>
					 
					  </tbody>
					</table>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

			        <a href='mensagemdesucesso.php' button type='button'  class='btn btn-primary'>Pagamento</button></a>

				<?php
				 	//include 'produto.php';
					//$produto=produto::mostrarUmProd($id);
					///$n=$listaProdutos[$id][0]["codigoProduto"];
					//echo "<a href='mensagemdesucesso.php' button type='button'  class='btn btn-primary'>Pagamento</button></a>";

				 ?>
        			
						
						 
        			
    		
			      </div>
			    </div>
			  </div>
			</div>
	<footer class="fixed-bottom"><div id="rodape">Site desenlvolvido por Camily, Esther, Léa e Lorena</div>
	</footer>
</body>
</html>