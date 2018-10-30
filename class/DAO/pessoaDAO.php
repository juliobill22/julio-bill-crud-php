<?php
/**
 * Description DAO of client
 * @author julioenglish
 */

require './conection/database.php';

class pessoaDAO implements CRUDInterface{

    public function __construct() {}

    public function insert() {
        try {
            $conn = database::openConection();
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO TABLE (fields) VALUES ('')";
            $conn->exec($sql);
            echo "Novo registro criado com sucesso!";
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        database::closeConection();
    }
    
    public function edit() {
        try {
            $conn = database::openConection();
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE INTO TABLE (fields) VALUES ('')";
            $conn->exec($sql);
            echo "Registro alterado com sucesso!";
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        database::closeConection();        
    }
    
    public function delete() {
        try {
            $conn = database::openConection();
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "DELETE FROM TABLE WHERE ''";
            $conn->exec($sql);
            echo "Registro excluído com sucesso!";
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        database::closeConection();        
    }
    
    public function lists() {
        try {
            $conn = database::openConection();
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT * FROM TABLE WHERE ''";
            $conn->exec($sql);
            echo "Registro excluído com sucesso!";
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        database::closeConection();                
    }

}