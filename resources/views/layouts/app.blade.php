<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
@php
$v = mt_rand(1, 99);
@endphp
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1200">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>《吞噬蒼穹》官方網站</title>
    <meta name="keywords" content="吞噬蒼穹,仙俠,修仙,空戰,寒單,MMORPG" />
    <meta name="description" content="改編自同名知名網路小說，由遊戲綠洲代理，中國知名大廠靈石網絡科技開發，玄幻修真大型多人線上遊戲《吞噬蒼穹Online》，以一流的畫面和全空間飛行戰鬥為核心特色，打造原創端遊高水準大作，再現原汁原味的仙俠大世界。" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <link rel="shortcut icon" href="/favicon.ico">

    <link rel="stylesheet" href="{{ URL::asset('/css/swiper.min.css?v'. $v) }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/liteaccordion.css?v'. $v) }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/tscq.css?v'. $v) }}">
    <!--[if lt IE 9]>
        <script src="http://res.ixinyou.com/js/html5shiv/html5.min.js"></script>
        <style>
            .welfare-front, .media-rotate-front{
                display:none;
            }
    </style>
    <![endif]-->

    <!-- Global site tag (gtag.js) - Google Ads: 775856302 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-775856302"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-775856302');
    </script>
    <!-- End Global site tag (gtag.js) - Google Ads: 775856302 -->

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PC6W3PM');</script>
    <!-- End Google Tag Manager -->


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
    fbq('init', '369162300520170');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=369162300520170&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->


    @yield('css')
</head>
<body>
    <h1 class="hide">吞噬蒼穹</h1>

    <!--[if lt IE 10]>
    <div style="position:absoulute;left:0;top:0;width:100%;height:50px;background:rgb(255,255,233);color:rgb(30,84,148);border-bottom:1px solid rgb(230,230,198);text-align:center;line-height:50px;font-size:12px;">您使用的瀏覽器版本過低，可能會影響到您瀏覽本網頁，建議您升級您的瀏覽器。</div>
    <![endif]-->

        @yield('content')


        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="{{ URL::asset('/js/jquery.easing.1.3.js?v'. $v) }}"></script>
        <script src="{{ URL::asset('/js/swiper.min.js?v'. $v) }}"></script>
        <script src="{{ URL::asset('/js/tscq.js?v'. $v) }}"></script>
        <script src="{{ URL::asset('/js/liteaccordion.jquery.js?v'. $v) }}"></script>


        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PC6W3PM"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        @yield('js')

<!-- buttom tools  -->
@include('layouts.footer')

</div>
</body>
</html>
