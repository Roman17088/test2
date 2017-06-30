<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed:400,400i,500,700&subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css"
          type="text/css">

    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
<? require_once __DIR__ . '/_topPanel.php'; ?>
<header class="site container between-row align-middle">
    <a id="logo" href="/"></a>
    <div class="widgetBitcoin">
        <? require_once __DIR__ . '/widget-bitcoin.htm'; ?>
    </div>
</header>
<? require_once __DIR__ . '/_topMenu.php'; ?>

<!-- только для внутренних -->
<? if (!preg_match('/\/main\.php/ui', $_SERVER['REQUEST_URI'])): ?>
    <div class="titleSite">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <nav>
                        <ul class="breadcrumbs">
                            <li><a href="#">Home</a>&nbsp;/&nbsp;</li>
                            <li><a href="#">News</a>&nbsp;/&nbsp;</li>
                            <li><span>Post Single</span></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-xs-12">
                    <h1>Post Single SideBar</h1>
                </div>
            </div>
        </div>
    </div>
<? endif; ?>
<!-- end только для внутренних -->

<div id="page">
    <div class="container">