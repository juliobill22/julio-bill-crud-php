<?php
/**
 * Description DAO of fornecedores
 * @author julioenglish
 */

require './conection/database.php';

class fornecedorDAO implements CRUDInterface{
    
    public function __construct() {}
    
    public function insert(){
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
    
    public function edit(){}
    public function delete(){}
    public function lists(){}
    
}
