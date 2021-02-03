<?php
include_once "BancoDados.php";
	class produto {

	 public static function cadastrarProduto($codigoProduto, $nome, $preço, $imagens) {
		try {
			// Criar uma conexão
			$conexao = BancoDados::getInstance()->getConnection();
			// Criar a SQL para executar
			$stmt = $conexao->prepare("INSERT INTO produto(codigoProduto, nome, preço, imagens) VALUES (?,?,?,?)");


			 // Executar a SQL
			$stmt->execute([$codigoProduto, $nome, $preço, $imagens]);

			 // Checar resultado
			$linhas_alteradas = $stmt->rowCount();
			} catch(Exception $e) {
			echo $e->getMessage();
			exit;
			}

			 if($linhas_alteradas > 0) {
			return true;
			} else {
			return false;
			}

	}
	 public static function deletarProduto($codigoProduto) {
	 	try {
	 		$conexao = BancoDados::getInstance()->getConnection();
			$stmt = $conexao->prepare("DELETE FROM produto WHERE codigoProduto = ?");    
			$stmt->execute([$codigoProduto]);
			    if($stmt->rowCount() > 0){
			        //REMOVEU
			    }
			} catch(Exception $e) {    
			    echo $e->getMessage();    
			    exit;
			}   
	 }

	 public static function modificarProduto($codigoProduto, $preço) {
		try {
			$conexao = BancoDados::getInstance()->getConnection();
		    $stmt = $conexao->prepare("UPDATE produto SET preço = ? WHERE codigoProduto = ?");    
		    $stmt->execute([$preço, $codigoProduto]);
		    if($stmt->rowCount() > 0){
		        //ATUALIZOU
		    }
		} catch(Exception $e) {    
		    echo $e->getMessage();    
		    exit;
		}
	 }

	public static function mostrarProduto() {
		$resultado=null;
		try { 
			$conexao = BancoDados::getInstance()->getConnection();
		    $stmt = $conexao->prepare("SELECT * FROM produto");     
		    $stmt->execute(); 
		    $resultado = $stmt->fetchAll();
		} catch(Exception $e) {     
		    echo $e->getMessage();     
		    exit; 
		}
		return $resultado;
	}

	public static function mostrarUmProd($id) {
		$resultado=null;
		try { 
			$conexao = BancoDados::getInstance()->getConnection();
		    $stmt = $conexao->prepare("SELECT * FROM produto WHERE codigoProduto=?");     
		    $stmt->execute([$id]); 
		    $resultado = $stmt->fetchAll();
		} catch(Exception $e) {     
		    echo $e->getMessage();     
		    exit; 
		}
		return $resultado;
	}

}
?>