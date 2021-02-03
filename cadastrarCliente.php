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
    include 'produto.php';
    $nome = $_GET['nome'];
    $preço = $_GET['preço'];
    produto:: mostrarProduto($nome, $preço);






//Colocar os dados de pagamento
    //include 'pagamento.php';





/*if (isset($_GET['codigoProduto']) && !empty(isset(($_GET['codigoProduto'])))) {
      $mensagem = produto::mostrarProduto($_GET[1]);
      $string = "data:".$mensagem->tipo.";base64,";
      $retorno = array ("image" => $string.base64_encode($mensagem->produto));

    }else{
      $retorno = array('status' => "parametro não encontrado" );
    }
    echo json_encode($retorno);
*/


    /*$connect = mysql_connect('localhost','root','');
    $db = mysql_select_db('lojinha_ceel');
    $query_select = "SELECT nome FROM usuario WHERE nome = '$nome'";
    $select = mysql_query($query_select,$connect);
    $array = mysql_fetch_array($select);
    $nomarray = $array['nome'];

      if($nome == "" || $nome == null){
        echo"<script language='javascript' type='text/javascript'>
        alert('O campo nome deve ser preenchido');window.location.href='
        cadastro.html';</script>";

        }else{
          if($nomarray == $nome){

            echo"<script language='javascript' type='text/javascript'>
            alert('Esse login já existe');window.location.href='
            cadastro.html';</script>";
            die();

          }else{
            $cadastrarUsuario = "INSERT INTO usuario (nome, email, senha, rua, numero, bairro, CEP, cidade, estado, pais) VALUES ('$nome', '$email', '$senha', '$rua', '$numero', '$bairro', '$CEP', '$cidade', '$estado', '$pais')";
            $cadastrarUsuario = mysql_query($cadastrarUsuario,$connect);

            if($cadastrarUsuario){
              echo"<script language='javascript' type='text/javascript'>
              alert('Usuário cadastrado com sucesso!');window.location.
              href='login.html'</script>";
            }else{
              echo"<script language='javascript' type='text/javascript'>
              alert('Não foi possível cadastrar esse usuário');window.location
              .href='cadastro.html'</script>";
            }
          }
        }*/
    













 ?>