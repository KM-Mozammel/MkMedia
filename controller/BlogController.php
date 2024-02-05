<?php

class BlogController extends Controller{
    function default(){
        
        $dbh = DatabaseConnection::getInstance();
        $dbc = $dbh->getConnection();

        $PageObj = new Pages($dbc);
        $PageObj->findById(1);
        $variable['pageObj'] = $PageObj;

        $template = new Template();
        $template->view('blog', $variable);
    }
}
