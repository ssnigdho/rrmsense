<?php
	require_once 'helper.php';
?>

<!DOCTYPE html>
<html>

<!-- Mirrored from wp.hostlin.com/penza/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Apr 2017 07:04:54 GMT -->
<head>
<meta charset="utf-8">
<title>RRMSENSE</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/slider-setting.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Open+Sans);
.skillbar {
  font-family: 'Open Sans', 'sans-serif';
    position:relative;
    display:block;
    margin-bottom:15px;
    width:100%;
    background:#eee;
    height:35px;
    border-radius:3px;
    -moz-border-radius:3px;
    -webkit-border-radius:3px;
    -webkit-transition:0.4s linear;
    -moz-transition:0.4s linear;
    -ms-transition:0.4s linear;
    -o-transition:0.4s linear;
    transition:0.4s linear;
    -webkit-transition-property:width, background-color;
    -moz-transition-property:width, background-color;
    -ms-transition-property:width, background-color;
    -o-transition-property:width, background-color;
    transition-property:width, background-color;
}

.skillbar-title {
    position:absolute;
    top:0;
    left:0;
    font-weight:bold;
    font-size:13px;
    color:#fff;
    background:#6adcfa;
    -webkit-border-top-left-radius:3px;
    -webkit-border-bottom-left-radius:4px;
    -moz-border-radius-topleft:3px;
    -moz-border-radius-bottomleft:3px;
    border-top-left-radius:3px;
    border-bottom-left-radius:3px;
}

.skillbar-title span {
    display:block;
    background:rgba(0, 0, 0, 0.1);
    padding:0 20px;
    height:35px;
    line-height:35px;
    -webkit-border-top-left-radius:3px;
    -webkit-border-bottom-left-radius:3px;
    -moz-border-radius-topleft:3px;
    -moz-border-radius-bottomleft:3px;
    border-top-left-radius:3px;
    border-bottom-left-radius:3px;
}

.skillbar-bar {
    height:35px;
    width:0px;
    background:#6adcfa;
    border-radius:3px;
    -moz-border-radius:3px;
    -webkit-border-radius:3px;
}

.skill-bar-percent {
    position:absolute;
    right:10px;
    top:0;
    font-size:11px;
    height:35px;
    line-height:35px;
    color:#444;
    color:rgba(0, 0, 0, 0.4);
}
</style>
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>
        <?php include '_menu.php' ?>