<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>刺刺星 xSTAR Studio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<base target="_blank">
	<meta name="description" content="刺刺星（XSTAR）在2006年誕生，是一個提供網站設計、多媒體設計、程式設計、影視傳播音樂娛樂及整合行銷的品牌，致力於付出自己小小的力量，讓這個世界可以更好一點。">
	<meta name="og:image" content="http://i.imgur.com/4JSUcGK.png">
	<meta name="og:title" content="刺刺星 XSTAR">
	<meta name="theme-color" content="#02111E">
	<link rel="shortcut icon" type="image/png" href="img/logo-xstar-mini-300-20160213.png"/>


	<meta http-equiv="cache-control" content="max-age=0" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta http-equiv="expires" content="0" />
	<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
	<meta http-equiv="pragma" content="no-cache" />

	<link rel="stylesheet" href="bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
	
	<script type="application/ld+json">
	{
	  "@context": "https://schema.org",
	  "@type": "Organization",
	  "url": "https://xstar.me",
	  "name": "刺刺星",
	  "logo": "https://xstar.me/img/xstar_logo_googlesearch.png",
	  "contactPoint": {
	    "@type": "ContactPoint",
	    "telephone": "+886-976-121-727",
	    "contactType": "Customer service",
	    "availableLanguage": "Chinese"
	  },
	  "sameAs": [
	    "https://www.facebook.com/starweb",
	    "https://www.youtube.com/channel/UCIkePhX9ibBDHNr5CVYJfXw"
	  ]
	}
	</script>

	<!-- AdSense -->
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
	  (adsbygoogle = window.adsbygoogle || []).push({
	    google_ad_client: "ca-pub-7395502012964240",
	    enable_page_level_ads: true
	  });
	</script>
	<!-- AdSense -->

	<style>
		@import url(//fonts.googleapis.com/earlyaccess/notosanstc.css);
		html, body{
			font-family: 'Noto Sans TC', sans-serif;
		}
		body{
			animation-name: bg-main;
			animation-duration: 3s;
			animation-timing-function: linear;
			animation-iteration-count: infinite;
			/*animation-direction: alternate;*/
			color: rgba(255,255,255,1);
			/*font-family: 'Gloria Hallelujah', cursive;*/
			margin: 0;
			cursor: default;
			font-size: 14px;

		}
		::selection{
			background: #00F6FF;
			color: white;
		}
		@keyframes bg-main {
			 0% {background: rgba(0,0,0,1);  }
			40% {background: rgba(0,0,0,1);  }
			60% {background: rgba(2, 17, 30, 1)  }
			80% {background: rgba(2, 17, 30, 1)  }
			100%{background: rgba(0,0,0,1);  }
		}
		.dialog-alert{
			display: none;
		}
		[class|=section]{
			width: 100%;
			display: block;

		}
		.section-a{
			height: 100vh;
			display: flex;
			align-items: center;
			justify-content: center;
		}
		.section-b{
			
			/*display: flex;*/
			/*align-items: center;*/
			/*justify-content: center;*/
			background: rgba(255,255,255,.1);
			padding-top: 5em;
			padding-bottom: 10em;
		}
		.section-e{
			background: #1D1D1D;
			padding: 5em 0;

		}

		button:focus, button:active, .btn:focus, textarea:focus, input:focus{
		    outline: solid rgba(0,0,0,0) 1px;
		}
		
		.btn-go{
			border: 2px rgba(255,255,255,1) solid;
			border-radius: 30px;
			background: rgba(255,255,255,0);
			color: white;
			padding: 1em 2em;
			
			transition-property: padding, background, border;
			transition-duration: .3s;
			transition-delay: 0s, .5s, .5s;
			transition-timing-function: cubic-bezier(1,.05,.04,.94);

		}
		.btn-go:hover{
			color: white;
			padding: 1em 8em;
			background: rgba(255,255,255,.1);
			border: 2px rgba(255,255,255,0) solid;
			cursor: pointer;
		}
		.theboard{
			background: rgba(255,255,255,.87);
			width: 100%;
			margin-bottom: 2em;
			color: rgba(0,0,0,.87);
			padding: 1em 2em 2.2em 2em;

		}
		.theboard > h3{
			text-align: center;
		}
		.theboard > hr{
			width: 60%;
			border-width: 5px;
			margin-top: -10px;
		}
		.theboard a:link, .theboard a:visited{
			text-decoration: underline;
			color: rgba(0,0,0,.87);
		}
		.theboard a:hover{
			text-decoration: none;
			color: rgba(2, 17, 30, 1);

		}
		.theboard ul{
			padding-left: 1em;
		}
		.theboard li{
			line-height: 2em;
		}
		.text-alert{
			border: 2px solid #FF2156; 
			border-radius: 10px;
			color: #FF2156;
			padding: 5px 10px;
			margin-bottom: 2em;
		}
	</style>
</head>
<body>
	<div class="section-a">
		<div class="dialog-alert">
			<h4>公告</h4>
			<p>刺刺星旗下資訊部門（負責範圍包含網站架設、網頁設計、網路程式、網路社群等）目前因為主要伺服器大規模整修中，暫時停止服務，部分網站（如刺刺星首頁、龍龍資訊站、N刺果園、張龍轉址等）聯結將暫時失效，而連帶需要部分使用伺服器檔案的影視製作部門，也將暫時停止歷史影視畫面的整理與製作，我們深表歉意，並將加強資訊部門技術資源。</p>
			<p>刺刺星 XSTAR</p>
			<p>2016-11-06</p>
		</div>

		<div>
			<p align="center"><img src="img/xstar_logo_text.svg" alt="logo"></p>
			<p align="center" style="font-size: .95em; text-shadow: 0 0 5px #00F6FF; margin-bottom: 2em">付出自己小小的力量，讓這個世界可以更好一點。</p>
			<p align="center"><button class="btn btn-go" onclick="scrollToB()">Go</button></p>
		</div>
	</div>

	<div class="section-b">
		<div class="container">

		<h2 align="center" id="welcome">歡迎來到刺刺星世界</h2>
		<p align="center" style="margin-bottom: 2em">Welcome xSTAR Studio</p>
		<div class="row">
		<div class="col-md-6 col-md-offset-3">
		<p style="letter-spacing: 0.2em; line-height: 2em;" class="wow flipInX" data-wow-delay=".2s">&emsp;刺刺星（xSTAR Studio），一顆長著15根刺刺、表面呈現出可愛活潑橘黃色的小小星球，在西元2006年秋誕生。生長在這個地球正面臨資訊爆炸、人們為了生存而做著沒有興趣的工作的時代，雖然存在感低、過程中遭遇到不少挫折，但刺刺星依然藉著自己小小的刺刺力量，用充滿天真、活力、創意、溫暖、熱情與堅毅不拔的特色試著讓這個世界可以更好一點，旅程就此展開…</p>
		</div>
		</div>
		<hr style="margin-top: 4em; margin-bottom: 4em">

		<h2 align="center" id="works">我們參與製作的小星星</h2>
		<p align="center" style="margin-bottom: 2em">Our Works</p>
		<div class="text-alert invisible" data-wow-delay="1s"><i class="material-icons" style="vertical-align: middle;">&#xE88F;</i><strong style="margin:0 0.8em; vertical-align: middle;">道歉啟事</strong><span style="vertical-align: middle;">因刺刺星暨旗下服務主伺服器維修，大部分作品目前無法呈現，詳情請見<a href="https://www.facebook.com/starweb/posts/1145619148862542">刺刺星Facebook</a>。</span>
		</div>

		<div class="row">
			<div class="col-md-3">
				<div class="theboard wow fadeInUp" data-wow-delay="0s">
					<h3>網站程式</h3>
					<hr style="border-color: #D50420">
					<ul>
						<li><a href="6platform/">六度月台</a></li>
						<li><a href="https://max-liu.org/">劉其偉網路美術館</a></li>
						<li><a href="https://long.xstar.me">龍龍資訊站</a></li>
						<li><a href="https://redfacefruit.com">N刺果園</a></li>
						<li><a href="http://www.milingan.org/buy/">米靈案購物</a></li>
						<li><a href="https://xstar.azurewebsites.net/tkuomg/v3">刺刺星淡江選課小幫手</a></li>
						<li><a href="https://github.com/yc5/OneClick">一鍵服務</a></li>
						<li><a href="http://xstar.me/tkuomg/">TKUOMG淡江歐買尬</a></li>
						<li><a href="http://codepen.io/xstar/">CODEPEN</a></li>
						<li><a href="https://github.com/yc5">GitHub</a></li>
						<li><a href="http://fbstarweb.blogspot.tw/">星世界（舊）</a></li>
						<li><a href="logoutfb">快速登出FB享受人生</a></li>
						<li><a href="https://m.me/talktopassed">亡者對話</a></li>
						<li><a href="http://tw.class.uschoolnet.com/class/?csid=css000000080639">正德916班網</a></li>
						<li><a href="https://xstar.azurewebsites.net/xstar/tkuclassroom/">淡江找教室</a></li>
						<li><a href="whataplan/">有個計畫 Make a Plan</a></li>
						<li><a href="thegreatestlove/">初戀那件天大的事 The Greatest Love</a></li>
						<li><a href="https://codepen.io/xstar/full/jKoerB">SRT字幕製作工具(BETA)</a></li>
						<li><a href="https://codepen.io/xstar/full/RBJoXJ/">悠遊卡載具隱碼轉換器</a></li>
						<li><a href="say/">XSTAR SAY</a></li>
						<li><a href="baby/">保母阿娟行事曆</a></li>
					</ul>
					<h3>開發中</h3>
					<ul>
						<li>檢舉魔人 Magic Reporter</li>
						<li>可以說的秘密 Secrets Can Tell</li>
						<li>刺刺星兌換券</li>
					</ul>
					<h3>因遭駭暫時關閉</h3>
					<ul>
						<li><a href="ethan/">關於許以誠</a></li>
						<li>刺刺星先報（自製新聞）</li>
						<li>Mac Infinite</li>						
						<li>春季北區大學聯合愛心義賣官網</li>
					</ul>
				</div>
			</div>
			<div class="col-md-3">
				<div class="theboard wow fadeInUp" data-wow-delay="0.2s">
					<h3>影音視頻</h3>
					<hr style="border-color: #FF8811">
					<p></p>
					<ul>
						<li><a href="https://www.youtube.com/playlist?list=PLiCGGZb9wevANvfXo9r4B4ZsFe0cKAnmM">剪輯類</a></li>
						<li><a href="https://www.youtube.com/playlist?list=PLiCGGZb9wevDkAeAqgYAZzk8rl611STuN">綜合迷你短片類</a></li>
						<li><a href="https://www.youtube.com/playlist?list=PLiCGGZb9wevCbwYrh_78O2qte3F1uEI5N">音樂錄影帶類</a></li>
						<li><a href="https://www.youtube.com/playlist?list=PLiCGGZb9wevBJ4gRvwayHZjUTXLl43N1_">電視節目類</a></li>
						<li><a href="https://www.youtube.com/playlist?list=PLiCGGZb9wevBJUttIz64RWctVw0_0DhPC">中正美食節目吃吃星</a></li>
						<li><a href="https://www.facebook.com/paulzhanglong/videos/1481451838547968/">LIVE直播導播</a></li>
					</ul>
				</div>
				<div class="theboard wow fadeInUp" data-wow-delay="0.5s">
					<h3>資料數據分析處理</h3>
					<hr style="border-color: #D50420">
					<p></p>
					<ul>
						<li><a href="fiba/">FIBA數據分析</a></li>
						<li><a href="https://codepen.io/xstar/full/varVvW/">中華郵政交易紀錄轉換器</a></li>
						<li><a href="https://codepen.io/xstar/full/NBExYK/">捷運悠遊卡搭乘紀錄轉換器</a></li>
						<li><a href="https://codepen.io/xstar/full/RYBNWK/">雙清單比較</a></li>
					</ul>
				</div>
				<div class="theboard wow fadeInUp" data-wow-delay="0.5s">
					<h3>開放資料</h3>
					<hr style="border-color: #D50420">
					<p></p>
					<ul>
						<li><a href="opendata/tku_buildings.json">淡江大學建築物代號</a></li>
					</ul>
				</div>
				<div class="theboard wow fadeInUp" data-wow-delay="0.5s">
					<h3>資訊安全維護</h3>
					<hr style="border-color: #D50420">
					<p></p>
					<ul>
						<li><a href="http://www.ic.tku.edu.tw/">淡江大學資訊傳播學系</a></li>
						<li>財團法人劉其偉文化藝術基金會</li>
					</ul>
				</div>
			</div>
			<div class="col-md-3">
				<div class="theboard wow fadeInUp" data-wow-delay="0.3s">
					<h3>音樂聲音</h3>
					<hr style="border-color: #04D5C7">
					<p></p>
					<ul>
						<li><a href="https://www.youtube.com/playlist?list=PLiCGGZb9wevCiloJj22J8f1VDCVURVyIZ">旁白配音類</a></li>
						<li><a href="https://www.youtube.com/playlist?list=PLpILuwOTFdy0p05CWM5OzrWy0FxKscbaD">編曲創作類</a></li>
						<li><a href="https://www.youtube.com/playlist?list=PLiCGGZb9wevCr6NxI9J1Vb2NRUkRd3vMG">混音類</a></li>
						<li><a href="https://soundcloud.com/xstarme">SoundCloud</a></li>
						<li><a href="https://www.facebook.com/RehabGame/videos/407375116270363/">「不平凡之路」旁白</a></li>
						<li><a href="https://www.youtube.com/watch?v=m3joAwEFGgc">滬里滬外2016-2017北海岸石滬計畫紀錄片旁白</a></li>
						<li><a href="https://www.facebook.com/twins.tkuet18/videos/vb.1814900715426520/2061565837426672/">淡江教科18屆畢展旁白</a></li>
					</ul>
				</div>
				<div class="theboard wow fadeInUp" data-wow-delay="0.5s">
					<h3>虛擬實境</h3>
					<hr style="border-color: #D50420">
					<p></p>
					<ul>
						<li><a href="unity-game/">壯壯歷險</a></li>
						<li><a href="http://bit.ly/2Qhxj00">自由時報廣場360˚環景</a></li>
						<li><a href="http://bit.ly/2DHDwAT">淡水慈玄宮360˚環景</a></li>
					</ul>
				</div>
				<div class="theboard wow fadeInUp" data-wow-delay="0.5s">
					<h3>合作夥伴</h3>
					<hr style="border-color: #333">
					<p></p>
					<ul>
						<li><a href="https://jyery30120.github.io/" target="_blank">張杰暄的小宇宙</a></li>
						<li><a href="https://www.facebook.com/%E7%B9%AA%E5%9C%96%E5%B8%AB%E6%9D%8E%E5%90%9B-Li-Jun-1714146615575294/" target="_blank">繪圖師李君 Li Jun</a></li>
					</ul>
				</div>
				<div class="theboard wow fadeInUp" data-wow-delay="0.5s">
					<h3>知識共享</h3>
					<hr style="border-color: #333">
					<p></p>
					<ul>
						<li><a href="https://medium.com/@ethanhsu/%E8%87%AA%E5%B7%B1%E7%9A%84cover%E8%87%AA%E5%B7%B1%E9%8C%84-de9087f9256d" target="_blank">自己的Cover自己錄(NMC基礎錄音教學)</a></li>
						<li><a href="https://www.youtube.com/watch?v=a_M93X7WWUM" target="_blank">刺刺星淡江選課小幫手 3.0 操作方式</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3">
				<div class="theboard wow fadeInUp" data-wow-delay="0.1s">
					<h3>社群行銷</h3>
					<hr style="border-color: #04D587">
					<p></p>
					<ul>
						<li><a href="http://youtube.com/ZhangLong0603?sub_confirmation=1">張龍 YouTube</a></li>
						<li><a href="https://www.facebook.com/paulzhanglong/">張龍 Zhang Long</a></li>
						<li><a href="https://www.youtube.com/channel/UCaLTXOBbSdVzZG2hH5BtZuw/featured">媽媽砸摳 Mama Ten Dollar</a></li>
						<li><a href="https://www.facebook.com/longlonginfo/">龍龍資訊站</a></li>
						<li><a href="https://www.facebook.com/broqueartschool">淡水巴洛克藝術學苑音樂教室</a></li>
						<li><a href="https://www.facebook.com/%E5%90%8C%E6%98%A5%E5%93%A5%E5%9A%B4%E9%81%B8%E6%B5%B7%E7%94%A2-1004509699720454/">同春哥嚴選海產</a></li>
						<li><a href="https://www.facebook.com/%E6%99%BA%E6%85%A7%E9%9B%B2%E7%AB%AF%E6%96%B0%E7%94%9F%E6%B4%BB-Fun-Cloud-799686726775905/">智慧雲端新生活 Fun Cloud</a></li>
						<li><a href="https://www.facebook.com/jdjhs/">新北市立正德國民中學</a></li>
						<li><a href="https://line.me/R/ti/p/%40iqt6410z">資管4C活動報報</a></li>
						<li><a href="https://line.me/R/ti/p/%40nqn4289o">龍龍資訊站LINE@</a></li>
						<li><a href="https://zh.wikipedia.org/wiki/Special:%E7%94%A8%E6%88%B7%E8%B4%A1%E7%8C%AE/Ethanhsu">維基百科貢獻</a></li>
						<li><a href="https://www.facebook.com/charity.tkbm/">春季北區大學聯合愛心義賣</a></li>
						<li><a href="https://medium.com/@ethanhsu">Medium</a></li>
						<li><a href="https://stackoverflow.com/users/7834090/ethan?tab=activity">Stack Overflow Contribution</a></li>
						<li>Google Translate Community Contribution</li>
						<li>Facebook Translations Contribution</li>
						<li>YouTube Videos Closed Caption Translations Contribution</li>
						<li>Google Map Contribution</li>
					</ul>
				</div>
			</div>
			
		</div>
		</div>
	</div>

	<div class="section-e" id="contacts">
		<div class="container">
			<p align="center">
				<span><img src="img/xstar_logo_text.svg" alt="logo" height="30"></span>
				<span style="padding: 0 10px;">&copy;</span>
				<span>2018 xSTAR Studio.</span>
			</p>
			<p align="center">
				<a href="privacy">隱私政策</a>
				<a href="https://www.facebook.com/starweb/">Facebook專頁</a>
				<a href="https://line.me/R/ti/p/%40hzi5224b">LINE官方帳號</a>
				<span>E-mail : cs@xstar.me</span>
			</p>
		</div>
	</div>
</body>
</html>




<script>
$(document).ready(function(){
  $(function(){
  $('a').each(function() {
          $(this).attr('href', '/r.php?u=' + encodeURIComponent(this.href));
      });
  }); // do not add hrefs with percent.
});

//window.location = 'https://www.facebook.com/starweb/posts/1145619148862542';
new WOW({
	offset:       150,
	mobile:       false,
}).init();
var body = $("html, body");
function scrollToB(){
	body.animate({scrollTop: $(".section-b").offset().top}, 800, 'easeInOutQuart');
}	
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-24449663-7', 'auto');
  ga('send', 'pageview');

</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-7395502012964240",
    enable_page_level_ads: true
  });
</script>