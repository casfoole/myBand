<?php

//configuration settings
require 'includes/config.php';

//initialisation
require 'includes/bootstrap.php';

// head
$templateParser->assign('myTitle',$title);
$templateParser->display('head.tpl');

// header
$templateParser->display('header.tpl');
// menu
$templateParser->display('menu.tpl');

$action = isset($_GET['url']) ? $_GET['url'] : 'home';

switch ($action) {
    case 'home':
//        require_once 'model/gethome.php';
//        $templateParser->assign('home_list',$result_list);
//        $templateParser->display('home.tpl');
        include 'model/get_pagination.php';
        $templateParser->assign('page',$page);
        include 'model/get_data.php';
        $templateParser->assign('number_of_pages',$number_of_pages);
        $templateParser->assign('result',$result);
        $templateParser->display('home.tpl');
        break;

    case 'articles':
        require_once 'model/getalbum.php';
        $templateParser->assign('result_list',$result_list);
        $templateParser->display('album.tpl');
        break;

    case 'about':
        require_once 'model/getabout.php';
        $templateParser->assign('about_list',$result_list);
        $templateParser->display('about.tpl');
        break;
    case 'tourschema':
        $templateParser->display('tourschema.tpl');
        break;
    case 'view':
        $templateParser->display('view.tpl');
        break;
    case 'viewpablo':
        $templateParser->display('viewpablo.tpl');
        break;
    case 'viewjesus':
        $templateParser->display('viewjesus.tpl');
        break;
    case 'viewdarkfantasy':
        $templateParser->display('viewdarkfantasy.tpl');
        break;
    case 'viewheartbreak':
        $templateParser->display('viewheartbreak.tpl');
        break;
    case 'viewgraduation':
        $templateParser->display('viewgraduation.tpl');
        break;
    case 'vieworchestration':
        $templateParser->display('vieworchestration.tpl');
        break;
    case 'viewregistration':
        $templateParser->display('viewregistration.tpl');
        break;
    case 'viewdropout':
        $templateParser->display('viewdropout.tpl');
        break;
    case 'login':
        require_once 'model/inlog.php';
        $templateParser->display('login.tpl');
        break;
    case 'registration':
        require_once 'model/registration.php';
        $templateParser->display('registration.tpl');
        break;
}

// footer
$templateParser->assign('myFoot',$footer);
$templateParser->display('footer.tpl');

?>