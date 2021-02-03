<?php 
include_once "BancoDados.php";

class sapato {
    public static function cadastrarSapato($codigoProd, $tipo, $numeracao) {
        try {
            $conexao = BancoDados::getInstance()->getConnection();
            $stmt = $conexao->prepare("INSERT INTO sapato(codigoProd, tipo, numeração) VALUES(?,?,?)");
            $stmt->execute([$codigoProd, $tipo, $numeracao]);
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
    public static function deletarSapato($codigoProd) {
        try {
            $conexao = BancoDados::getInstance()->getConnection();
             $stmt = $conexao->prepare("DELETE FROM sapato WHERE codigoProd = ?");    
                $stmt->execute([$codigoProd]);
                    
                if($stmt->rowCount() > 0){
                    //REMOVEU
                }
            } catch(Exception $e) {    
                echo $e->getMessage();    
                exit;
            }   
     }

     public static function mostrarUmsapato($id) {
        $resultado=null;
        try { 
            $conexao = BancoDados::getInstance()->getConnection();
            $stmt = $conexao->prepare("SELECT * FROM sapato WHERE codigoProd=?");     
            $stmt->execute([$id]); 
            $resultado = $stmt->fetchAll();
        } catch(Exception $e) {     
            echo $e->getMessage();     
            exit; 
        }
        return $resultado;
    }
}
