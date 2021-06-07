
	<!doctype html>
	<html lang="zh">
		<head>
			<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-187527701-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-187527701-1');
		</script>
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-NCFVKWR');</script>
		<!-- End Google Tag Manager -->
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		  <meta name="description" content="你可以在這裡算算看你三段要考多少，或算看看你需不需要補修，需不需要補考（我就懶）。">
		  <title>三段、學期成績試算神器</title>
		  <!-- Facebook Opengraph -->
		<meta property="og:url" content="http://score.dabo.xyz/" />
		<meta property="og:locale" content="zh_TW" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="三段、學期成績計算神器" />
		<meta property="og:description" content="你可以在這裡算算看你三段要考多少，或算看看你需不需要補修，需不需要補考（我就懶）。"/>
		<meta property="og:image" content="http://score.dabo.xyz/img/banner.jpg" />
		<meta property="og:image:alt" content="三段、學期成績計算神器e" />
		<meta property="og:image:type" content="http://score.dabo.xyz/img/banner.jpg" />
		<meta property="og:image:width" content="1280" />
		<meta property="og:image:height" content="640" />
		<meta property="fb:app_id" content="505091216864192" />
	<!-- End Facebook Opengraph -->
		  <!-- Tocas UI：CSS 與元件 -->
		  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tocas-ui/2.3.3/tocas.css">
		  <!--<link rel="stylesheet" href="/assets/style.css">-->
		  <!-- Tocas JS：模塊與 JavaScript 函式 -->
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/tocas-ui/2.3.3/tocas.js"></script>
		  <style>
			footer {
				padding: 10px 0;
				background-color: #f5f5f5;
				border-top: 1px solid #ddd;
				width: 100%;
				bottom: 0;
			}
			.container-index {
				margin-top:8px;
				margin-bottom:8px;
			}
			.lists-section {
				margin:9px 0;
			}
			.lists-section #message {
				border-radius:0 0 5px 5px;
			}
		  </style>

		</head>
		<body>
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NCFVKWR"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
			<header class="ts fluid center aligned padded heading slate" style="padding:150px;">
				<div class="image">
					<img src="/img/banner.jpg">
				</div>
				<div class="ts narrow container">
					<h1 style="white-space:nowrap" class="ts header">成績試算神器</h1>
					<div class="tablet or large device only ts medium header">
						你可以在這裡算算看你三段要考多少，<br>
						或算看看你需不需要補修，需不需要補考（我就懶）。
					</div>
				</div>
			</header>
			<!-- form start -->
	<div class="ts grid">
	<div class="four wide computer one wide mobile column"></div>
	<div class="eight wide computer fourteen wide mobile column">
		<br>
		<div class="ts secondary negative message">
			<div class="header">使用說明：</div>
				<p>請輸入本學期一段、二段成績及平時成績。若未填寫三段成績，系統將幫您算出三段要考多少分才會通過。<br>若填寫三段成績，系統將會計算本學期是否需要補考。<br><strong>免責聲明：本系統僅提供成績試算，因各校成績計算方式有些微差異，最終成績以學校公告為主。</strong>
		</div>
		<br>
	</div>
	<div class="four wide computer one wide mobile column"></div>
	</div>
	<div class="ts stackable grid">
		<div class="four wide computer one wide mobile column"></div>
		<div class="five wide computer fourteen wide mobile column">
			<form>
			<div class="ts primary segment">
				<div class="ts horizontal form">
					<div class="required field">
						<label>一段成績</label>
						<input type="number" min="0" max="100" id="sc1" placeholder="一段成績(必填)"><p class="tablet or large device only">&nbsp&nbsp&nbsp </p><kbd class="tablet or large device only"><p>系統預設占比為20%</p></kbd><p class="tablet or large device only">&nbsp&nbsp&nbsp</p>
					</div>
					<div class="required field">
						<label>二段成績</label>
						<input type="number" min="0" max="100" id="sc2" placeholder="二段成績(必填)"><p class="tablet or large device only">&nbsp&nbsp&nbsp </p><kbd class="tablet or large device only"><p>系統預設占比為20%</p></kbd><p class="tablet or large device only">&nbsp&nbsp&nbsp</p>
					</div>
					<div class="field">
						<label>三段成績</label>
						<input type="number" min="0" max="100" id="sc3" placeholder="三段成績"><p class="tablet or large device only">&nbsp&nbsp&nbsp </p><kbd class="tablet or large device only"><p>系統預設占比為30%</p></kbd><p class="tablet or large device only">&nbsp&nbsp&nbsp</p>
					</div>
					<div class="required field">
						<label>平時成績</label>
						<input type="number" min="0" max="100" id="tc1" placeholder="平時成績(必填)"><p class="tablet or large device only">&nbsp&nbsp&nbsp </p><kbd class="tablet or large device only"><p>系統預設占比為30%</p></kbd><p class="tablet or large device only">&nbsp&nbsp&nbsp</p>
					</div>
					<br>
				</div>
				<div class="ts fluid separated vertical buttons">
					<button class="ts inverted button" onClick="sent()" type="button" id="submitExample">開始計算吧！</button>
					<br>
				</div>
				</form>
			</div>
		</div>
		<div class="three wide computer fourteen wide mobile column">
			<div class="ts negative segment" style="height:100%">
				<h2 class="ts dividing header">計算結果</h2>
				<p id="result">來算算看吧！</p> <!-- 顯示回傳資料 -->
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> <!-- 引入 jQuery -->
				<script type="text/javascript">
					$(document).ready(function() {
						$("#submitExample").click(function() { //ID 為 submitExample 的按鈕被點擊時
							$.ajax({
								type: "POST", //傳送方式
								url: "api.php?asd="+Math.random(), //傳送目的地
								dataType: "json", //資料格式
								data: { //傳送資料
									sc1: $("#sc1").val(), //表單欄位 ID nickname
									sc2: $("#sc2").val(), //表單欄位 ID nickname
									sc3: $("#sc3").val(), //表單欄位 ID nickname
									tc1: $("#tc1").val() //表單欄位 ID nickname
								},
								success: function(data) {
									if (data.rsc) { //如果後端回傳 json 資料有 nickname
										// $("#demo")[0].reset(); //重設 ID 為 demo 的 form (表單)
										if (data.sc3out) {
											$("#result").html('<font color="#007500">你目前學期成績是「<font color="#0000ff">' + data.sc3out3 + '</font>」分</font><br><sk id="rs2"></sk><br><sk id="rs3"></sk>');
											if (data.sc3out3 <60) {
												$("#rs2").html('<font color="#007500">你三段至少要考「<font color="#0000ff">' + data.sc3out + '</font>」這一科才會趴斯</font>');
											}else{
												$("#rs2").html('<font color="#007500">基本上你三段不管怎麼考都不會有被當的問題安啦</font>');
											}
											if (data.sc3out2 >=0) {
												$("#rs3").html('<font color="#007500">你三段至少要考「<font color="#0000ff">' + data.sc3out2 + '</font>」才能有補考資格</font>');
											}
										}
										if (data.rc1) {
											$("#result").html('<font color="#007500">你這學期成績「<font color="#0000ff">' + data.rc1 + '</font>」！<br>而且你的學期成績為「<font color="#0000ff">' + data.rc2 + '</font>」(四捨五入)，<sk id="result2"></sk>');
											 if (data.rc2 >= 60) {
												 $("#result2").html('恭喜🎉🎉');
											 }else{
												 $("#result2").html('幫你QQ<br><sk id="result3"></sk>');
												 if (data.rc2 >= 40) {
													$("#result3").html('不過你學期成績有達補考標準(40)，<font color="#0000ff">記得要注意時間去補考！</font>');
												}else{
													$("#result3").html('你連補考門檻都不到欸，我也幫不了你了，<font color="#0000ff">乖乖重補修吧！</font>');
												}
											 }
										}
										
										// $("#result").html('<font color="#007500">你三段至少要考「<font color="#0000ff">' + data.sc3out + '</font>」，你這樣「<font color="#0000ff">' + data.rc1 + '</font>」！</font>');
									} else { //否則讀取後端回傳 json 資料 errorMsg 顯示錯誤訊息
									// $("#demo")[0].reset(); //重設 ID 為 demo 的 form (表單)
										$("#result").html('<font color="#ff0000">' + data.errorMsg + '</font>');
									}
								},
								error: function(jqXHR) {
									// $("#demo")[0].reset(); //重設 ID 為 demo 的 form (表單)
									$("#result").html('<font color="#ff0000">發生錯誤：' + jqXHR.status + '</font>');
								}
							})
						})
					});
				</script>                    
			</div>
		</div>
		<div class="four wide computer one wide mobile column"></div>
	</div>
	<br><br>
	<footer>
		<center>
			<p>本系統由 <a target="_blank" href="https://me.imych.one/">黃猷珵</a> 及 <a target="_blank" href="https://dabo.xyz/">黃柏諭</a> 開發設計<br>
			</p>
		</center>
	</footer>