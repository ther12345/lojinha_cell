<?php
include "BancoDados.php";
	class venda {

	public static function efetuarVenda($codigoPagV, $cod_Produtos, $id_Usuario) {
		try {
		// Criar uma conexão
		$conexao = BancoDados::getInstance()->getConnection();
		// Criar a SQL para executar
		$stmt = $conexao->prepare("INSERT INTO venda(codigoPagV, cod_Produtos, id_Usuario, datahora) VALUES (?, ?,?, NOW())");

		 // Executar a SQL
		$stmt->execute([$codigoPagV, $cod_Produtos, $id_Usuario]);

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

	public static function deletarVenda($id_Usuario) {

        try {
            $conexao = BancoDados::getInstance()->getConnection();

            $stmt = $conexao->prepare("DELETE FROM venda WHERE id_Usuario= ?");

            $stmt->execute([$id_Usuario]);

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
}
?>