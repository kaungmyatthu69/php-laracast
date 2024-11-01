<?php

class Database {

    public $connection ;
    public $statement;

    public function __construct($config,$username='root',$password='') {
       
        $dsn ='mysql:' . http_build_query($config,'',';');

        $this->connection= new PDO($dsn,$username,$password);

    }
    public function query($query,$params=[]){
    
        
        $this->statement = $this->connection->prepare($query);
        
        $this->statement->execute($params);
        
        return $this;
    }

    public function findAll(){
        return $this->statement->fetchAll();
    }
    public function find(){
        return $this->statement->fetch();

    }

    public function findOrFail(){
        $result =$this->find();
        if(! $result){
            abort();
        }
        return $result;
    }
}
