<?php
//Conexão com banco de dados
namespace App\Persistence;

class ConnectionFactory{

    private $_conn; //conexão
    private $_user = "root"; //username
    private $_pass = "1234"; //senha
    private $_dbname = "chamadasonline"; //nome do banco
    private $_host = "localhost"; //localhost

    function __construct(){

    }

    public function getInstance(){
        try{
            if(!isset($this->_conn)){
                $this->_conn = new \PDO("mysql:host=localhost; dbname=chamadasonline; charset=UTF8", "root", "1234");
                return $this->_conn;
            }else{
                return $this->_conn;
            }
        } catch (\PDOException $e) {
            $e->getMessage();
        }
    }
}