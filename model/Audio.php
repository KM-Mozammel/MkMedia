<?php

class Audio{
    public $id;
    public $name;
    public $location;
    public $size;

    public $data;

    private $dbc;

    public function __construct($dbc)
    {
        $this->dbc = $dbc;
    }

    public function findById(){
        
        $sql = "SELECT * FROM audio";
        $stmt = $this->dbc->prepare($sql);
        $stmt->execute();
        $PageData = $stmt->fetchAll();

        $this->data = $PageData;

    }
}