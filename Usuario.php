<?php 
include "BancoDados.php";

class usuario {
    
    public static function cadastrarUsuario($nome, $email, $senha, $rua, $numero, $bairro, $CEP, $cidade, $estado, $pais) {

        try {
            // Criar uma conexão
            $conexao = BancoDados::getInstance()->getConnection();
             

            // Criar a SQL para executar
            $stmt = $conexao->prepare("INSERT INTO usuario( nome, email, senha, rua, numero, bairro, CEP, cidade, estado, pais) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            
            // Executar a SQL
            $stmt->execute([$nome, $email, $senha, $rua, $numero, $bairro, $CEP, $cidade, $estado, $pais]);

            
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

    public static function deletarUsuario($id_usuario) {

        try {
            $conexao = BancoDados::getInstance()->getConnection();

            $stmt = $conexao->prepare("DELETE FROM usuario WHERE id_usuario= ?");

            $stmt->execute([$id_usuario]);

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

    public static function modificarUsuario($id_usuario,$nome) {
        try {
            echo 'olá mundo';
            $conexao = BancoDados::getInstance()->getConnection();
            $stmt = $conexao->prepare("UPDATE usuario SET nome = ? WHERE id_usuario = ?");
            $stmt->execute([$nome,$id_usuario]);
            //if($stmt->rowCount() > 0){
                //ATUALIZOU
               // echo 'ATUALIZOU';
           // }

        } catch(PDOException $e) {    
            echo $e->getMessage();    
            exit;
        }
     }


     public static function mostrarUsuario($id_usuario) {
        try {
            $conexao = BancoDados::getInstance()->getConnection();
            $stmt = $conexao->prepare("SELECT id_usuario, nome, email, senha, rua, numero, bairro, CEP, cidade, estado, pais FROM usuario WHERE id_usuario = ?");
            $stmt->execute([$id_usuario]);

            foreach ($stmt as $linha){
                echo $linha["id_usuario"] .  '<br>' ;
                echo $linha["nome"].  '<br>' ;
                echo $linha["email"].  '<br>' ;
                echo $linha["senha"].  '<br>' ;
                echo $linha["rua"].  '<br>' ; 
                echo $linha["numero"].  '<br>' ; 
                echo $linha["bairro"].  '<br>' ;  
                echo $linha["CEP"].  '<br>' ; 
                echo $linha["cidade"].  '<br>' ; 
                echo $linha["estado"].  '<br>' ; 
                echo $linha["pais"].  '<br>' ;
            }
            } catch(Exception $e) {    
                echo $e->getMessage();    
                exit;
            }
            
    }

 
}
?>