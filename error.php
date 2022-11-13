<?php
header("refresh: 5; url=" . $_SERVER['HTTP_REFERER'] . '"');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Ошибка</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        *,
        *:before,
        *:after {
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }
        
        body {
            padding: 0;
            margin: 0;
            font-family: 'Montserrat', sans-serif;
            font-style: normal;
            min-width: 320px;
            position: relative;
            line-height: 1.65;
            overflow-x: hidden;
            font-size: 1.112vw
        }
        
        p {
            margin: 0;
            padding: 0;
        }
        
        .container {
            margin: 0 auto;
            max-width: 80em;
            width: 100%;
            padding: 0;
        }
        
        .header {
            background: linear-gradient(270deg, #FFFFFF 40.83%, rgba(255, 255, 255, 0) 74.58%), #E5F7FF;
            display: flex;
            align-items: center;
        }
        
        .header__title {
            padding: 1.375em 0;
            margin: 0;
            font-weight: 600;
            font-size: 0.875em;
            line-height: 1.22em;
            letter-spacing: 0.16em;
            text-transform: uppercase;
            color: #292929;
        }
        
        .main {
            padding-top: 4em;
            background-image: url('https://afcnt.com/affconfirm/stars-1.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 40% 0%;
            background-size: 29.37em 9.375em;
        }
        
        .main__title {
            text-transform: uppercase;
            text-align: center;
            font-size: 2.25em;
            line-height: 1.23em;
            font-weight: 700;
            color: #000000;
            margin: 0 auto;
        }
        
        .main__content {
            padding-top: 2.5em;
        }
        
        .main__top {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .main__top-item {
            font-weight: 600;
            font-size: 1.25em;
            line-height: 1.2em;
            color: #000000;
            display: flex;
        }
        
        .main__top-item span {
            margin-left: 0.5em;
        }
        
        .main__top-item:not(:last-child) {
            margin-bottom: 0.9em;
        }
        
        .main__top-image {
            max-width: 42.16em;
            width: 100%;
        }
        
        .main__bottom {
            padding-top: 4.69em;
        }
        
        .main__bottom-items {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 0 1.56em;
        }
        
        .main__bottom-item {
            background: linear-gradient(0deg, #FFD6A0 -33999%, #FFDEB4 -31572.02%);
            border-radius: 5%/20%;
            max-width: 20.31em;
            min-height: 16.37em;
            padding: 4.63em 5.81em 1.94em 1.56em;
            position: relative;
        }
        
        .main__bottom-text {
            font-size: 1em;
            line-height: 1.25em;
            color: #000000;
            max-width: 12.93em;
        }
        
        .main__bottom-image {
            position: absolute;
            top: -1.875em;
            right: -1.875em;
            max-width: 10.44em;
        }
        
        .footer {
            padding: 4.38em 0 3.88em;
            background-image: url('https://afcnt.com/affconfirm/stars-2.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 56% 50%;
            background-size: 18.75em 5.94em;
        }
        
        .footer__title {
            font-weight: bold;
            font-size: 1.5em;
            line-height: 1.21em;
            color: #000000;
            text-transform: uppercase;
            margin: 0 auto;
            text-align: center;
        }
        
        @media (max-width: 480px) {
            .header__title {
                font-size: 3em;
                text-align: center;
            }
            .main {
                padding-top: 9.93em;
                background-image: url('https://afcnt.com/affconfirm/stars-1-small.png');
                background-size: 59.96em 33.73em;
            }
            .main__title {
                font-size: 6.03em;
                max-width: 8.21em;
            }
            .main__content {
                padding-top: 14.99em;
            }
            .main__top {
                flex-direction: column;
                align-items: flex-start;
            }
            .main__top-items {
                order: 2;
                margin-top: 9.74em;
            }
            .main__top-item {
                font-size: 4.13em;
            }
            .main__top-item span {
                margin-left: 0.23em;
            }
            .main__top-text {
                width: 6.5em;
            }
            .main__top-image {
                max-width: 100%;
            }
            .main__bottom {
                padding-top: 20.23em;
            }
            .main__bottom-items {
                flex-direction: column;
                margin: 0;
            }
            .main__bottom-item {
                max-width: 100%;
                min-height: 42.15em;
                padding: 15.55em 12.37em 7.87em 6.37em;
                width: 100%;
            }
            .main__bottom-item:not(:last-child) {
                margin-bottom: 8.81em;
            }
            .main__bottom-text {
                font-size: 3.39em;
                max-width: 100%;
            }
            .main__bottom-image {
                max-width: 31.28em;
                top: -8.81em;
                right: -2.81em;
            }
            .footer {
                padding: 13.49em 0 11.62em;
                background-image: url('https://afcnt.com/affconfirm/stars-2-small.png');
                background-size: 18.75em 5.94em;
            }
            .footer__title {
                font-size: 4.88em;
                max-width: 8.60em;
            }
        }
    </style>

</head>

<body>

    <main class="main">
        <div class="container">
            <h1 class="main__title">Что-то пошло не так</h1>
            <h3 style="text-align: center; font-size: 18px;"><a href="javascript:void(0);" onclick="history.back()">Попробуйте оставить заявку еще раз</a></h3>
            <p style="text-align: center;"><?=$_GET['err']?></p>
        </div>
    </main>

</body>

</html>