<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Waifus</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="shortcut icon" type="image/png" href="https://saliesbox.com/exp.png"/>
    <meta property="og:url" content="https://exp.saliesbox.com/waifus">
    <meta property="og:title" content="Salies Waifu Generator">
    <meta property="og:site_name" content="Salies Experiments">
    <meta property="og:description" content="A glorious waifu generator, made with love by Salies-san.">
    <meta property="og:image" content="http://imgur.com/MAd0FNH.png">
    <style>
        *{
            margin:0;
        }

        body{
            background:#1a1a1a;
            color:#fff;
            font-family:Arial, Helvetica, sans-serif;
        }

        header{
            display:none;
        }

        footer{
            display:none;
        }

        a{
            text-decoration:none;
            color:DarkOrange;
            font-weight:bold;
        }

        .wrap{
            background:#2a2a2a;
            width:300px;
            display:none;
            position:absolute;
            left:50%;
            top:50%;
            transform:translate(-50%, -50%);
        }

        .pic{
            margin-bottom:10px;
        }

        .name{
            font-weight: bold;
            font-size:24px;
        }

        .game{
            font-size:14px;
        }

        .header{
            margin-top:15px;
            font-size:35px;
            font-weight:bold;
            position:absolute;
            left:50%;
            transform:translate(-50%);
        }

        .footer{
            position:absolute;
            bottom:15px;
            left:15px;
            font-size:10px;
        }
    </style>
</head>
<body>

<section class="header">Glorious Waifu Randomizer</section>

<div class="wrap" style="padding: 20px;">
    <img src="#" class="pic">
    <hr>
    <span class="name"></span><br>
    <span class="game"></span>
</div>

<section class="footer">Made with ❤️ by <a href="https://github.com/Salies" target="_blank">Salies</a> using the <a href="https://mywaifulist.moe" target="_blank">MyWaifuList</a> database.</section>

<?php
//get and insert page
header("Access-Control-Allow-Origin: *");
$string = file_get_contents('https://mywaifulist.moe/random');
echo $string;
?>

<script>
const waifu = document.querySelector("waifucore");
const info = waifu.getAttribute("waifu-json");
var j = JSON.parse(info);
var pic = j.display_picture, name = j.name, game = j.series.name;

$(".pic").attr("src",pic);
$(".name").text(name);
$(".game").text(game);
//show waifu and clean up page
window.onload = function() {
    $(".wrap").fadeIn("medium");
};
</script>
</body>
</html>