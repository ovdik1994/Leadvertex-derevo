<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link rel="stylesheet" href="./bootstrap.min.css" />
    <style>
      .wrapper {
        min-height: 100vh;
        width: 100%;
      }
      .slick-prev {
        position: absolute;
        left: 0;
        top: 50%;
        z-index: 100;
      }
      .slick-next {
        position: absolute;
        right: 0;
        top: 50%;
        z-index: 100;
      }
      .card-product {
        position: relative;
      }
      .card-product .btn-link {
        position: absolute;
        z-index: 2;
        left: 50%;
        bottom: 50%;
        color: rgb(201, 26, 134);
      }
    </style>
  </head>
  <body>

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
    fbq('init', '<?php echo $_POST['pixel'] ?>');
    fbq('track', 'PageView');
    fbq('track', 'Lead');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=<?php echo $_POST['pixel'] ?>&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->
    <div
      class="wrapper container text-center d-flex flex-column justify-content-around"
    >
      <div
        class="row d-flex flex-column align-items-center justify-content-center flex-grow-1"
      >
        <h1 class="display-5 text-success">
          <strong>Спасибо за заказ!</strong>
          <img width="30" height="30" src="./success.svg" alt="" />
        </h1>
        <h3>Наш оператор свяжется с вами для подтверждения заказа.</h3>
      </div>
    </div>
  </body>
</html>