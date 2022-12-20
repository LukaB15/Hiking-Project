<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./header.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Like a Hike</title>
</head>
<body>
<header>
    <nav>
        <ul class="nav_home">
            <li><a href="/"><span class="material-symbols-outlined">hiking</span></a></li>
        </ul>
        <ul class="nav_login">
            <?php if (empty($_SESSION['user'])): ?>
                <li><a href="/login">Login</a></li>
                <li><a href="/registration">Register</a></li>
            <?php else: ?>
            <ul class="nav_logout">
                <li><a href="/logout">Logout</a></li>
            </ul>
            <?php endif; ?>
        </ul>
    </nav>

    <!-- <?php if (!empty($_SESSION['user'])): ?>
        <span>Hello <?= $_SESSION['user']['username'] ?></span>
    <?php endif; ?> -->
</header>

<!-- <div class="headerbck">
<div class="content">
    <div class="visible">
        <p>
            Like a
        </p>
        <ul class="ul">
            <li>Hike</li>
            <li>Walk</li>
            <li>Family</li>
        </ul>
    </div>
</div>
</div> -->