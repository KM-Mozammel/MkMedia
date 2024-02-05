<?php

class Pages{
    public $id;
    public $title;
    public $content;
    public $image;

    private $dbc;

    public function __construct($dbc)
    {
        $this->dbc = $dbc;
    }

    public function findById($id){

        $sql = "SELECT * FROM blog WHERE id = :id";
        $stmt = $this->dbc->prepare($sql);
        $stmt->execute(['id' => $id]);
        $PageData = $stmt->fetch();

        $this->id = $PageData['id'];
        $this->title = $PageData['title'];
        $this->content = $PageData['content'];
        $this->image = $PageData['image'];

    }
}