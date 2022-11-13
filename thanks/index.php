<?php
    header("refresh: 3; url = ".$_COOKIE['cabinet']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon-32x32.png" type="image/x-icon">
    <title>Спасибо!</title>
    <link rel="stylesheet" href="css/normalize.min.css" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Facebook Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '<?=$_GET['p']?>');
      fbq('track', 'Lead');
    </script>
    <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=<?=$_GET['p']?>&ev=Lead&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->

</head>

<body>
    <div class="main">
        <div class="container">
            <div class="order-info">

                <h2>Спасибо</h2>
                <p>
                    Ваша заявка успешно принята!
                </p>
                


            </div>
        </div>
    </div>
    <style>
        body {
            background-image: url('images/photo-1560264280-88b68371db39.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }

        .main {
            width: 100%;
            height: 100vh;
            background-color: rgba(195, 195, 195, 0.7);
            padding: 10%;
        }


        .order-info {
            padding: 20px;
            background-color: whitesmoke;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            /* background: linear-gradient(to left, #015EFF 0%, #003CA3 100%); */
        }

        .order-info h2 {
            font-weight: 700;
            margin-bottom: 30px;
            color: #0d6efd;
            font-size: 44px;
        }

        .order-info a {
            margin-top: 40px;

        }

        .order-info p {
            color: #0d6efd;
            font-size: 28px;

        }

        .sale_text {
            font-weight: 700;
            margin: 30px 0px 10px;
            color: white;
        }

        .sale_link {
            text-decoration: none;
            text-transform: uppercase;
            font-weight: 900;
            font-size: 20px;
            color: #0d6efd;
        }
    </style>

    <script src="js/jquery.min.js"></script>


</body>

</html>