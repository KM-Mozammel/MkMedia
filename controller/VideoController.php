<?php

class VideoController extends Controller{
    function default(){
        
        $dbh = DatabaseConnection::getInstance();
        $dbc = $dbh->getConnection();

        $PageObj = new Video($dbc);
        $PageObj->findById(1);
        $variable['pageObj'] = $PageObj;

        $template = new Template();
        $template->view('video', $variable);
    }
}
