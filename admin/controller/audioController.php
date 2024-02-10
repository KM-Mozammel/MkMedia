<?php 

class AudioController extends Controller{ 

    public function runBeforeAction(){
        if(isset($_SESSION['loged_in'])){
            return true;
        } return false;
    }
    public function audio($section){
        $Tempalte = new Template();
        $Tempalte->view($section);
    }
    // Get the form data;
    // put them into database;


}