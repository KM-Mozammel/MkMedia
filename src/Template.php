<?php

class Template{

    function view($template, $variables){
        include VIEW_PATH . 'layout/default.html';
    }
}