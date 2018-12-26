<html xmlns="http://www.w3.org/1999/xhtml">

@php
$v = mt_rand(1, 99);
@endphp

<head>
<meta charset="utf-8">
<title>吞噬蒼穹</title>
<meta http-equiv="pragma" content="no-cache"><!-- 禁止瀏覽器從本地機的緩存中調閱頁面內容 -->
<meta http-equiv="Cache-Control" content= "no-cache, must-revalidate" /><!-- no-cache 指示請求或相互不能緩存 -->
<meta http-equiv="expires" content= "Wed, 26 Feb 1997 08:21:57 GMT" /><!-- 設置過期的時間 -->
<style>
 body,div,dl,dt,dd,ul,li,h1,h2,h3,h4,h5,h6,pre,code,form,fieldset,legend,input,button,textarea,blockquote,img{margin:0;padding:0;border:0;}
body{font-family:"微軟正黑體";color:#000;font-size:12px;background:#000;background-color:transparent;overflow:hidden;}
body a{outline:0}
a{color:#ededed;text-decoration:none}
li{list-style: none;}
img{display:block;border:0}

.content{width:910px;height:200px;overflow:hidden;}
.wrapslider{width:910px;height:200px;position:absolute;top:2px;overflow:hidden;/*border:1px solid #000*/}
#slides{margin:0;width:100%;height:100%;position:absolute;top:0;left:0;}
.slidesjs-previous{position:absolute;top:0;left:0;z-index:10;display:none}
.slidesjs-pagination{list-style:none;position:absolute;bottom:10px;right:25px;z-index:999}
.slidesjs-pagination li{float:left;text-indent:-999px;margin:0 2px}
.slidesjs-pagination li{float:left;text-indent:-999px;margin:0 2px}
.slidesjs-pagination li a{display:block;width:12px;height:12px;overflow:hidden;background:url(/images/ingameEvent/sprite.png) -17px -33px;}
.slidesjs-pagination li a.active,.slidesjs-pagination li a:hover.active{background-position:0 -33px}
.slidesjs-pagination li a:hover{background-position:0 -33px}
</style>
<base target="_blank" />
</head>
<body scroll="no" style="margin:0px;border-top:#000 1px solid;border-bottom:#000 1px solid;border-left:#000 1px solid;border-right:#000 1px solid;background-color:#000">
<div class="content">
    <div class="wrapslider">
        <div id="slides">

			@foreach($banner as $val)
				<a href="{{ $val->url }}" target="_blank">
					<img src="{{ $val->img }}" width="910" height="205">
				</a>
			@endforeach
        </div>
    </div>
</div>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/jquery.slides.min.js?v{{ $v }}"></script>
<script>
// 屏蔽鼠標右鍵
function stop()
{
	return false;
}

document.oncontextmenu=stop;

	var len = $('#slides').children().length;

	if(len == 1){
		$("#slides").children().first().clone().appendTo("#slides");
	}

	$('#slides').slidesjs({
	    width: 910,
	    height: 205,
	    play: {
	        interval: 4500,//滾動間隔
	        auto: true,//是否自動播放
	        pauseOnHover: true,//劃上是否停止滾動
	        restartDelay: 3000//重新滾動啟動時間間隔
	    }
	});

</script>
    </body>
</html>
