<?php
session_start();

    define('ROOT_PATH', dirname(__FILE__) . DIRECTORY_SEPARATOR);
    require_once(ROOT_PATH.'src/Controller.php');
    require_once(ROOT_PATH.'src/DatabaseConnection.php');
    require_once(ROOT_PATH.'src/Template.php');

//     Getting Database Connection;
    DatabaseConnection::connect('localhost', "darwin_cms", "root", "");

    $section = $_GET['section'] ?? 'default';

    if($section == "audio"){
        include ROOT_PATH. 'controller/audioController.php';
        $audio = new AudioController();
        $audio->runAction($section);

    } else if($section == "video"){
        include ROOT_PATH. 'controller/videoController.php';
        $video = new VideoController();
        $video->runAction($section);

    } else if($section == "blog"){
        include ROOT_PATH. 'controller/blogController.php';
        $blog = new BlogController();
        $blog->runAction($section);

    } else{
        include ROOT_PATH. 'controller/dashboardController.php';
        $dashboard = new DashboardController();
        $dashboard->runAction($section);
    }