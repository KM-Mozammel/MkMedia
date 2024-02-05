<?php

class Video{
    public $id;
    public $name;
    public $location;
    public $size;

    private $dbc;

    public function __construct($dbc)
    {
        $this->dbc = $dbc;
    }

    public function findById($id){
        
        $sql = "SELECT * FROM videos WHERE id = :id";
        $stmt = $this->dbc->prepare($sql);
        $stmt->execute(['id' => $id]);
        $PageData = $stmt->fetch();

        $this->id = $PageData['id'];
        $this->name = $PageData['name'];
        $this->location = $PageData['location'];
        $this->size = $PageData['size'];

    }
}