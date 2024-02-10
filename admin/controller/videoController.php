<?php 

class VideoController extends Controller{  
    public function runBeforeAction(){
        if(isset($_SESSION['loged_in'])){
            return true;
        } return false;
    }
    public function video($section){
        $Tempalte = new Template();
        $Tempalte->view($section);
    }
    // Get the form data;
    // put them into database;
    // Get the form data;
    // put them into database;

}