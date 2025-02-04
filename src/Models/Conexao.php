<?php

namespace App\Models;

use PDOException;
use PDO;

class Conexao
{
    private static $conexao;

    //  criando a conexao com o banco de dados utilizando o PDO
    protected static function getConexao()
    {
        if (self::$conexao === null):
            $inf = "mysql:host=localhost;dbname=casaweb";
            try {
                self::$conexao = new PDO($inf, "root", "", [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]);
                self::$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die('Erro ao cenectar com o banco de dado ' . $e->getMessage());
            }
        endif;
        return self::$conexao;
    }
    //   metodo responsavel por encerrar a conexao com o banco de dados
    protected static function closeConexao()
    {
        self::$conexao = null;
    }

    protected function executarConsulta($sql, $valores = [])
    {
        try {
            $stmt = self::getConexao()->prepare($sql);
            foreach ($valores as $key => $valor):
                $stmt->bindValue($key + 1, $valor);
            endforeach;
            $stmt->execute();
            return $stmt;
        } catch (PDOException $e) {
            die('Erro ao executar consulta no banco de dados. ' . $e->getMessage());
        }
    }

    // CRIANDO FUNÇÃO RESPONSAVEL POR LISTAR UM OBJETO DO BANCO DE DADOS
    protected function listar($tabela, $condicao = "", $parametro = [])
    {
        $sql = "SELECT * FROM {$tabela} {$condicao} ORDER BY ID DESC ";
        $stmt = $this->executarConsulta($sql, $parametro);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    // metodo responsavel por listar o ultimo registro no banco
    protected function listarUltimoRegistro($tabela, $campo,  $condicao = "", $parametro = [])
    {
        $sql = "SELECT MAX($campo) AS ULTIMOVALOR FROM {$tabela} {$condicao} ORDER BY ID DESC ";
        $stmt = $this->executarConsulta($sql, $parametro);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    // CRIANDO A FUNÇÃO RESPONSAVEL POR INSERIR UM OBJETO NO BANCO DE DADOS
    protected function inserir($tabela, $atributos, $valores)
    {
        $sql = "INSERT INTO {$tabela} (" . implode(",", $atributos) . ")  VALUE(" . implode(",", array_fill(0, count($valores), "?")) . ")";
        $stmt = $this->executarConsulta($sql, $valores);
        return self::getConexao()->lastInsertId();
    }

    // METODO RESPONSAVEL POR ATUALIZAR OS OBJETOS NO BANCO DE DADOS
    protected function update($tabela, $campos, $valores, $id)
    {
        $set = implode(',', array_map(fn($campo) => "$campo = ?", $campos));
        $sql = "UPDATE {$tabela} SET {$set}  WHERE ID = ? ";
        $stmt = $this->executarConsulta($sql, array_merge($valores, [$id]));
        return $stmt->rowCount();
    }

    // METODO RESPONSAVEL POR EXCLUIR UM ITEM NO BANCO DE DADOS
    protected function deletar($tabela, $id)
    {
        $sql =  "DELETE FROM {$tabela} WHERE ID = ?  LIMIT 1";
        $stmt = $this->executarConsulta($sql, [$id]);
        return $stmt->rowCount();
    }
}
