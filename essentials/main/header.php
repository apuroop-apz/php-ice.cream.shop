<?php include($_SERVER['DOCUMENT_ROOT'].'/icecreamshop/essentials/core/arrays.php'); ?>

<!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo TITLE; ?></title>
        <link rel="stylesheet" href="/icecreamshop/styles.css">
        
        <style>
            hr{
            border: none;
            height: 18px;
            width: 114px;
            background: url('/icecreamshop/images/hr.png') center center no-repeat;
            margin: 20px auto;
            }
        </style>
    </head>
    <body id="final-example">
        <div class="wrapper">
            <div id="banner">
                <img src="/icecreamshop/images/banner.jpg" alt="My Famous Restaurant">
            </div>
            <div id="nav">
                <?php include('nav.php');?>
            </div>
            <div class="content">