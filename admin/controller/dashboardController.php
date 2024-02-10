<?php 

class DashboardController extends Controller{  

    // public function runBeforeAction(){
    //     if(isset($_SESSION['loged_in'])){
    //         return true;
    //     } return false;
    // }
    public function default($section){
        $Tempalte = new Template();
        $Tempalte->view("add_product");
    }
    // Get the form data;
    // put them into database;

}