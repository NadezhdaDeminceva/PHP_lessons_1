<?php

session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/dbConnect.php';
include $_SERVER['DOCUMENT_ROOT'] . '/authorization.php';
include $_SERVER['DOCUMENT_ROOT'] . '/arraySort.php';
include $_SERVER['DOCUMENT_ROOT'] . '/returnMenu.php';
include $_SERVER['DOCUMENT_ROOT'] . '/cropString.php';
include $_SERVER['DOCUMENT_ROOT'] . '/main_menu.php';
include $_SERVER['DOCUMENT_ROOT'] . '/returnHeadline.php';
include $_SERVER['DOCUMENT_ROOT'] . '/search.php';
isAuthorized();
$form = false;

if (($_GET['login'] ?? 0) && ($_GET['login'] = 'yes')) {
    $form = true;
};

$success = false;
$error = false;

if (! empty($_POST)) {
    if (empty($_POST['login']) || empty($_POST['password'])) {
        $error = true;
    } else {
        if (search($_POST['login'], $_POST['password'])) {
            $success = true;
            $form = false;
            $_SESSION['isAuth'] = true;
            $_SESSION['login'] = $_POST['login'];
            setcookie('login', $_POST['login'], time() + 60*60*24*31, '/');
        } else {
            $error = true;
        }
    }
};

?>    

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="/styles.css" rel="stylesheet">
    <title>Project - ведение списков</title>
</head>

<body>

    <div class="header">
    	<div class="logo"><img src="/i/logo.png" width="68" height="23" alt="Project"></div>
        <div class="clearfix"></div>
    </div>
    <?=($_SESSION['isAuth'] ?? '') ? '<a style="color: white" href="/logout.php">Выйти</a>' : '<a style="color: white" href="/?login=yes">Авторизоваться</a>'?>
    
    <?php
    returnMenu($menu, SORT_ASC, 'main-menu');
    ?>
