<?php 
include_once "BancoDados.php";

 class bolsa {
    
    public static function cadastrarBolsa($codigoProd,$marca, $largura, $altura) {

        try {
            // Criar uma conexão
            $conexao = BancoDados::getInstance()->getConnection();
 

            // Criar a SQL para executar
            $stmt = $conexao->prepare(" INSERT INTO bolsa (codigoProd, marca, largura, altura) VALUES (?, ?, ?, ?)");
            
            // Executar a SQL
            $stmt->execute([$codigoProd, $marca, $largura, $altura]);
            
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
    public static function deletarBolsa($codigoProd) {
        try {
            $conexao = BancoDados::getInstance()->getConnection();
             $stmt = $conexao->prepare("DELETE FROM bolsa WHERE codigoProd = ?");    
                $stmt->execute([$codigoProd]);
                    
                if($stmt->rowCount() > 0){
                    //REMOVEU
                }
            } catch(Exception $e) {    
                echo $e->getMessage();    
                exit;
            }   
     }
     public static function mostrarUmabolsa($id) {
        $resultado=null;
        try { 
            $conexao = BancoDados::getInstance()->getConnection();
            $stmt = $conexao->prepare("SELECT * FROM bolsa WHERE codigoProd=?");     
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