<?php

class AudioController extends Controller{
    function default(){
        
        $dbh = DatabaseConnection::getInstance();
        $dbc = $dbh->getConnection();

        $PageObj = new Audio($dbc);
        $PageObj->findById(1);
        $variable['pageObj'] = $PageObj;

        $template = new Template();
        $template->view('audio', $variable);
    }
}
