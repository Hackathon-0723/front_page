<!DOCTYPE html>
<html lang="ja" class="no-js">
<head>
    <!--
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
    <link href="./main.css" rel="stylesheet" />
    <title>Document</title>
    <link href="./main.css" rel="stylesheet" />
    <title>Document</title>
    <link href="./css/main.css" rel="stylesheet" />
    <title>Document</title>
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="icon" href="./images/logo_e.png">
    <link rel="stylesheet" type="text/css" href="./css/main.css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>手洗いアプリ | て AR/AI</title>

    <script src="js/modernizr.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

</head>

<body>
    <div class="page">
        <!--<div class="v6_1"></div>-->
        <div class="logo"><img src="./images/logo.png" alt="logo" /></div>
        <div class="v6_4">
            <video id="video" autoplay playsinline></video>
            <!--<div class="v6_0"></div>
            <div class="v5_1"></div>-->
        </div>
        <div class="start" id="start">
            <button class="start_btn" id="start_btn"><span class="btn_style"></span>タップしてスタート</button>
        </div>
        <div class="big_timer">
            <span class="big_sec"><!--10--></span>
        </div>
        <div class="timer">
            <span class="sec"></span>
        </div>
        <!--<div class="v6_9"></div><span class="v6_10">ログイン</span>-->
        <div class="login">
            <form action="login.php" method="POST">
                <button href="./login.php" class="btn" name="login">ログイン</button>
            </form>
        </div>
    </div>

    <!--<script src=".js/main.js"></script>-->
    <script src='js/main.js'></script>
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/jquery.fitvids.js"></script>
    <script src="js/jquery.imagesloaded.min.js"></script>
</body>

</html>