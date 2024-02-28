<?php

class conquer{
    private $pdo_data;
    private $pdo_conn;
    private $pdo_quer;
    private $pdo_resp;


    public function __construct($construct_data){
        $this->pdo_data =  $construct_data;
        $this->pdo_conn = new PDO($this->pdo_data);
    }

    public function send_query($request){
        $this->pdo_quer = $this->pdo_conn->prepare($request);
        $this->pdo_quer->execute();
        $this->pdo_resp = $this->pdo_quer->fetchAll();
    }

    public function dump_table($table){
        $this->send_query("SELECT * FROM ".$table);
        $this->dump();
    }

    public function dump(){
        echo "<pre>";
        var_dump($this->pdo_resp);
        echo "</pre>";
    }

    public function __destruct(){
        die();
    }

}



function dd($query){
    echo "<pre>";
    var_dump($query);
    echo "</pre>";
    die();
}