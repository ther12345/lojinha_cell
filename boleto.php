<?php 

include_once "BancoDados.php";

class boleto {
    
    public static function cadastrarBoleto($codigoPag, $codigoBarras) {

        try {
            // Criar uma conexão
            $conexao = BancoDados::getInstance()->getConnection();

            // Criar a SQL para executar
            $stmt = $conexao->prepare("INSERT INTO boleto (codigoPag, codigoBarras) VALUES  (?, ?)");
            
            // Executar a SQL
            $stmt->execute([$codigoPag, $codigoBarras]);
            
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

    public static function deletarBoleto($codigoPag) {
        try {​​​​
            /*$conexao = BancoDados::getInstance()->getConnection();
            $stmt = $conexao->prepare("DELETE FROM boleto WHERE codigoPag=?");    
            $stmt->execute([$codigoPag]);
               
            if($stmt->rowCount() > 0){​​​​
                //REMOVEU
            }​​​​*/
         }​​​​ catch(Exception $e) {​​​​    
              echo $e->getMessage();    
            exit;
        }
    }

}
?>
