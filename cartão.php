<?php
include "BancoDados.php";
class cartão {

 	public static function pagcartao($codigoPag, $tipo) {
		try {
			// Criar uma conexão
			$conexao = BancoDados::getInstance()->getConnection();
			// Criar a SQL para executar
			$stmt = $conexao->prepare("INSERT INTO cartão (codigoPag, tipo) VALUES (?, ?)");

			 // Executar a SQL
			$stmt->execute([$codigoPag, $tipo]);

			 // Checar resultado
			$linhas_alteradas = $stmt->rowCount();
			} catch(Exception $e) {
			echo $e->getMessage();
			exit;
			}

			if($linhas_alteradas > 0) {
			return true;
			} 
			else {
			return false;
			}
 	}
 	public static function deletarcartao($codigoPag) {
        try {​​​​
            $stmt = $conexao->prepare("DELETE FROM cartao WHERE codigoPag= ?");    
            $stmt->execute([$codigoPag ]);
                
            if($stmt->rowCount() > 0){​​​​
                //REMOVEU
            }​​​​
         }​​​​ catch(Exception $e) {​​​​    
              echo $e->getMessage();    
            exit;
        }
    }


}
?>