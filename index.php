<?php
session_start();

define('ROOT_PATH', dirname(__FILE__) . DIRECTORY_SEPARATOR);
define('VIEW_PATH', ROOT_PATH . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR);

require_once ROOT_PATH . 'src/Controller.php';
require_once ROOT_PATH . 'src/Template.php';
require_once ROOT_PATH . 'src/DatabaseConnection.php';
require_once ROOT_PATH . 'model/Pages.php';
require_once ROOT_PATH . 'model/Audio.php';
require_once ROOT_PATH . 'model/Videos.php';


DatabaseConnection::connect('localhost', 'darwin_cms', 'root', '');


$section = $_POST['section'] ?? $_GET['section'] ?? 'default';
$action = $_POST['action'] ?? 'default';

if($section == 'audio'){

    include ROOT_PATH . 'controller/AudioController.php';
    $aboutController = new AudioController();
    $aboutController->runAction($action);

} else if($section == 'video'){

    include ROOT_PATH . 'controller/VideoController.php';
    $contactController = new VideoController();
    $contactController->runAction($action);

}else if($section == 'blog'){

    include ROOT_PATH . 'controller/BlogController.php';
    $contactController = new BlogController();
    $contactController->runAction($action);

} else{

    include ROOT_PATH . 'controller/homePage.php';
    $homeController = new HomePageController();
    $homeController->runAction($section);

}
