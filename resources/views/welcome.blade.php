<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Simulador Redes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <style type="text/css">
        .preview {
        margin-bottom: 20px;
        }
        .questionsBox {
            display: block;
            border: solid 1px #e3e3e3;
            padding: 10px 20px 0px;
            box-shadow: inset 0 0 30px rgba(000,000,000,0.1), inset 0 0 4px rgba(255,255,255,1);
            border-radius: 3px;
            margin: 0 10px;
        }.questions {
            background: #007fbe;
            color: #FFF;
            font-size: 22px;
            padding: 8px 30px;
            font-weight: 300;
            margin: 0 -30px 10px;
            position: relative;
        }
        .questions:after {
            background: url(../img/icon.png) no-repeat left 0;
            display: block;
            position: absolute;
            top: 100%;
            width: 9px;
            height: 7px;
            content: '.';
            left: 0;
            text-align: left;
            font-size: 0;
        }
        .questions:after {
            left: auto;
            right: 0;
            background-position: -10px 0;
        }
        .questions:before, .questions:after {
            background: black;
            display: block;
            position: absolute;
            top: 100%;
            width: 9px;
            height: 7px;
            content: '.';
            left: 0;
            text-align: left;
            font-size: 0;
        }
        .answerList {
            margin-bottom: 15px;
        }


        ol, ul {
            list-style: none;
        }
        .answerList li:first-child {
            border-top-width: 0;
        }

        .answerList li {
            padding: 3px 0;
        }
        .answerList label {
            display: block;
            padding: 6px;
            border-radius: 6px;
            border: solid 1px #dde7e8;
            font-weight: 400;
            font-size: 13px;
            cursor: pointer;
            font-family: Arial, sans-serif;
        }
        input[type=checkbox], input[type=radio] {
            margin: 4px 0 0;
            margin-top: 1px;
            line-height: normal;
        }
        .questionsRow {
            background: #dee3e6;
            margin: 0 -20px;
            padding: 10px 20px;
            border-radius: 0 0 3px 3px;
        }
        .button, .greyButton {
            background-color: #f2f2f2;
            color: #888888;
            display: inline-block;
            border: solid 3px #cccccc;
            vertical-align: middle;
            text-shadow: 0 1px 0 #ffffff;
            line-height: 27px;
            min-width: 160px;
            text-align: center;
            padding: 5px 20px;
            text-decoration: none;
            border-radius: 0px;
            text-transform: capitalize;
        }
        .questionsRow span {
            float: right;
            display: inline-block;
            line-height: 30px;
            border: solid 1px #aeb9c0;
            padding: 0 10px;
            background: #FFF;
            color: #007fbe;
        }
    </style>
</head>
<body>
<div id="mute"></div>
<div class="container">
    <div class="col-md-12">
        <div id="app"></div>
    </div>
</div>
<div class="container">
    <div class="col-md-12 text-center">
        <a class="github-button" href="https://github.com/milardovich/simulador-redes" data-icon="octicon-star" data-show-count="true" aria-label="Star milardovich/simulador-redes on GitHub">Me gusta</a>
    </div>
</div>
<script src="js/app.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>    
</body>
</html>