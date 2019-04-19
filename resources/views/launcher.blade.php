<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

@php
$v = mt_rand(1, 99);
@endphp

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge;" />
<title>吞噬蒼穹 Launcher</title>

<meta name="keywords" content="吞噬蒼穹,仙俠,修仙,空戰,寒單,MMORPG" />
<meta name="description" content="改編自同名知名網路小說，由遊戲綠洲代理，中國知名大廠靈石網絡科技開發，玄幻修真大型多人線上遊戲《吞噬蒼穹Online》，以一流的畫面和全空間飛行戰鬥為核心特色，打造原創端遊高水準大作，再現原汁原味的仙俠大世界。" />
<meta name="distribution" content="global" />
<meta name="revisit-after" content="1 days" />
<meta name="rating" content="general" />
<meta name="classification" content="entertainment,game" />
<meta name="viewport" content="width=device-width">

<link rel="shortcut icon" href="/favicon.ico">

<link rel="stylesheet" href="css/launcher/unslider.css">
<link rel="stylesheet" href="css/launcher/core.css?v{{ $v }}">

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/unslider-min.js"></script>


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

</head>

<body oncontextmenu="return false" ondragstart="return false" onselectstart="return false">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PC6W3PM"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="wrap" >
    <div class="nav">
        <a href="/" target="_blank">官方網站</a>
        <a href="https://www.oasisgames.com.tw/users/sign_up" target="_blank">帳號註冊</a>
        <a href="https://www.oasisgames.com.tw/shop" target="_blank">帳號儲值</a>
        <a href="https://tscq.oasisgames.com.tw/bulletin/info/29" target="_blank">新手指南</a>
        <a href="https://www.oasisgames.com.tw/issue_tickets/new" target="_blank">客服中心</a>
    </div>
    <div class="col-l unslider">
		<div class="banner">
			<ul id="bannerList">
				@foreach($banner as $val)
				<li>
					<a href="{{ $val->url }}" target="_blank">
						<img src="{{ $val->img }}">
					</a>
				</li>
				@endforeach
			</ul>
		</div>
		<div class="unslider-nav"><div id="bannerIndex"></div></div>
	</div>
	<div class="col-r notice">

		@php
			$len = count($list);
		@endphp
		@foreach($list as $k => $val)
	        @if($k == 0)
		    <a class="notice-top" href="/bulletin/info/{{ $val->id }}" target="_blank">{{ $val->title }}</a>
		    @else
			    @if($k == 1)
				<ul class="clearfix">
				@endif
				<li>
						<a href="/bulletin/info/{{ $val->id }}" target="_blank" class="important">
							<span class="label">
								【{{ $type_list[$val->type_id] }}】</span>
							<span class="tit" >{{ $val->title }}</span>
							<span class="time">{{ substr($val->date, 5, 10) }}</span>
						</a>
				</li>
				@if($k == $len-1)
				</ul>
				@endif
			@endif
		@endforeach
	</div>
	<!--/notice-->
</div>

<script>
	  $(document).ready(function($) {
		  $('.banner').unslider({
			  keys: false,
			  speed: 1500,
			  delay: 5000,
			  autoplay: true,
			  animation: 'fade',
			  //
				//
			  	arrows: false,
			  //
		  });
	  });
</script>

</body>

</html>
