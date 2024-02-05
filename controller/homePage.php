<?php

class HomePageController extends Controller{
    function default(){

        // fetch the SEO
        // get the page data
        // $title
        // $content
        // $variable


        $dbh = DatabaseConnection::getInstance();
        $dbc = $dbh->getConnection();

        $PageObj = new Pages($dbc);
        $PageObj->findById(1);
        $variable['pageObj'] = $PageObj;

        $template = new Template();
        $template->view('static-page', $variable);
    }
}
