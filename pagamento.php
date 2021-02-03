<?php 

include_once "BancoDados.php";

class Pagamento {
    
    public static function FazerPagamento( $valor_total) {

        try {
            // Criar uma conexão
            $conexao = BancoDados::getInstance()->getConnection();

            // Criar a SQL para executar
            $stmt = $conexao->prepare("INSERT INTO Pagamento( valor_total) VALUES (?)");
            
            // Executar a SQL
            $stmt->execute([ $valor_total]);
            
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
   

    /*public static function deletarPagamento($codigoPag) {
        try {​​​​
            $conexao = BancoDados::getInstance()->getConnection();
            $stmt = $conexao->prepare("DELETE FROM Pagamento WHERE codigoPag = ?");    
            $stmt->execute([$codigoPag]);
            if($stmt->rowCount() > 0){​​​​
                //REMOVEU
            }​​​​
         }​​​​ catch(Exception $e) {​​​​    
              echo $e->getMessage();    
            exit;
        }
    }*/

    /*public static function modificarPagamento($codigoProduto) {
        try {​​​​
            $conexao = BancoDados::getInstance()->getConnection();

            $stmt = $conexao->prepare("UPDATE Pagamento SET frete = '' WHERE codigoPag = ? "); 
           
            $stmt->execute([$codigoProduto]);

            if($stmt->rowCount() > 0){​​​​
                //ATUALIZOU
            }​​​​
            }​​​​ catch(PDOException $e) {​​​​    
                  echo $e->getMessage();    
                  exit;
                }
        }*/

    /*public static function mostrarPagamento($codigoProduto) {
        try {​​​​
            $conexao = BancoDados::getInstance()->getConnection(); 
            $stmt = $conexao->prepare("SELECT codigoPag, frete, valor_total FROM Pagamento WHERE codigoProduto = ?");     
            $stmt->execute([$codigoProduto]); 
         
            foreach ($stmt as $linha){​​​​
                echo $linha["codigoPag"] . '<br>' ;
                echo $linha["frete"]. '<br>' ;
                echo $linha["valor_total"]. '<br>' ;
            }​​​​
        }​​​​ catch(PDOException $e) {​​​​     
            echo $e->getMessage();     
            exit; 
        }
    }*/
}
?>
