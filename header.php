<?php
\define('DS', DIRECTORY_SEPARATOR);
\define('ROOT', \dirname(\dirname(__DIR__)));
\define('ROOT_URI', '/');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#602020" />
    <meta name="author" content="Ngoc To">
    <meta name="description" content="Check out Ngoc's portfolio site full of projects!">
    <meta name="keywords" content="HTML,CSS,JavaScript,PHP,C#,ASP.NET,Oracle,MSSQL,MySQL">
    <title>Ngoc To - Welcome to my page!</title>
    <link rel="icon" href="<?=ROOT_URI?>images/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?=ROOT_URI?>css/style.css" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
</head>
<body>
<div class="wrapper">
    <header class="container">
        <h1 class="d-none">Ngoc To</h1>
        <nav role="navigation" class="navbar navbar-expand-md navbar-dark">
            <h2 class="d-none">Main Navigation</h2>
            <a class="navbar-brand align-items-center" href="<?=ROOT_URI?>index.php">
                <img id="logo" src="<?=ROOT_URI?>images/logo.svg" alt="logo" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navigation" aria-controls="main-navigation" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-ellipsis-h"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-end text-center hover-effect" id="main-navigation">
                <ul class="navbar-nav hover-effect">
                    <li class="nav-item"><a class="nav-link text-white" href="<?=ROOT_URI?>index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="<?=ROOT_URI?>index.php/#coding">Coding</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="<?=ROOT_URI?>index.php/#design">Design</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="<?=ROOT_URI?>index.php/#drawing">Drawing</a></li>
                </ul>
            </div>
        </nav>
    </header>
</div>
