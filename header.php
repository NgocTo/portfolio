<?php
\define('DS', DIRECTORY_SEPARATOR);
\define('ROOT', \dirname(\dirname(__DIR__)));
\define('ROOT_URI', '/portfolio/');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#A52A2A" />
    <meta name="author" content="Ngoc To">
    <meta name="author" href="https://plus.google.com/+NgocTo-jade">
    <meta name="description" content="A logic enthusiast wanting to be a Full-Stack Developer.">    
    <meta name="keywords" content="HTML,CSS,JavaScript,PHP,C#,ASP.NET,Oracle,MSSQL,MySQL">
    <meta name="copyright" content="2019" />

    <!-- for Facebook -->
    <meta property="og:title" content="Ngoc To" />
    <meta property="og:url" content="http://www.ngocto.com" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="A Web Developer who has a strong passion for Front-End Development and a background in Art." />
    <meta property="og:image" content="http://ngocto.com/images/facebook.jpg" /> <!-- Facebook recommended: 1200 x 630 - ideal: 1200 x 1200 square image -->

    <!-- for Twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="Ngoc To" />
    <meta name="twitter:description" content="A Web Developer who has a strong passion for Front-End Development and a background in Art." />
    <meta name="twitter:url" content="http://www.ngocto.com" />
    <meta name="twitter:image" content="http://ngocto.com/images/twitter.jpg" />
    <meta name="twitter:image:alt" content="profile" />

    <title>Ngoc To</title>
    <link rel="icon" href="<?=ROOT_URI?>images/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?=ROOT_URI?>css/reset.css" />
    <link rel="stylesheet" type="text/css" href="<?=ROOT_URI?>css/style.css" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">

    <!--  Images for the Twitter Card should be at least 280px in width, and at least 150px in height. Image must be less than 1MB in size. Ideal is 1,024 x 512 -->
    <!-- html5.js for IE less than 9 -->
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- css3-mediaqueries.js for IE less than 9 -->
    <!--[if lt IE 9]>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
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
                <i class="fas fa-bars"></i>
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
