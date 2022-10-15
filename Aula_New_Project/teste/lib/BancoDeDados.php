<?php
class BancoDeDados{
    private PDO $conexao;
    private PDOStatement $resultado;
    
    public function abrirConexao() : bool {
        try{
            $endereco = "mysql:host=localhost;dbname=teste";
            $configuracao = array(
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
            );
            
            $this->conexao = new PDO($endereco, "root", "", $configuracao);
            return true;
        }catch (Exception $e){
            echo "Falha ao conectar " . $e->getMessage();
            exit(0);
        }
        
        return false;
    }
    
    public function fecharConexao() : bool {
        $this->conexao = null;
        return true;
    }
    
    public function executarSQL(string $sql) : bool {
        try{
             $this->conexao->beginTransaction();
             $this->resultado = $this->conexao->prepare($sql);
             $this->resultado->execute();
             $this->conexao->commit();
             return true;
        } catch (Exception $e){
            return false;
        }
    }
    
    public function lerResultados(string $classe) : array {
        return $this->resultado->fetchAll(PDO::FETCH_CLASS, $classe);
    }
}