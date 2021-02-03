<?php 
/*include 'Usuario.php';
	$nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $CEP = $_POST['cep'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $pais = $_POST['pais'];

    usuario::cadastrarUsuario($nome, $email, $senha, $rua, $numero, $bairro, $CEP, $cidade, $estado, $pais);*/

    


//Pegar os produtos do banco e colocar no site
    //include 'produto.php';
   // $nome = $_GET['nome'];
    //$preço = $_GET['preço'];
    //produto:: mostrarProduto();

//usar no sacola session_destroy()

//fazer uma sessão (lista de compras)

//Frete vai para o BD em pagamento

//Valor total é frete + preço(produtos)

//Colocar os dados de pagamento
  include_once 'pagamento.php';
    $valor_total= $_GET['valor'];
    Pagamento::FazerPagamento($valor_total);

//Login
//echo " a href=oioi.php?valor={$soma} <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal' style='background-color: pink; border-color: pink;'>Finalizar Compras</button></a>";
       

 ?>