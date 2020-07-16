
<!doctype html>
<html lang="zh">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <title>三段、學期成績試算神器</title>
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
        <div class="ts top fixed basic menu">
            <div class="ts container">
                <a class="item active" href="index.php">三段、學期成績試算神器</a>
                <a class="item" href="//portal.sw.imych.one">Sch Webs</a>
            </div>
        </div>
		<header class="ts fluid padded heading slate" style="padding:70px;">
			<div class="ts narrow container">
				<h1 class="ts header">算成績</h1>
				<div class="ts huge sub header">
				    你可以在這裡算算看你三段要考多少，<br>
				    或算看看你需不需要補修，需不需要補考（我就懶）。
				</div>
			</div>
		</header>
		<div class="ts container container-index">
            <div class="ts info segment">
                <div class="ts stackable grid">
                    <div class="eight wide column">
                        <div class="ts big header">計算區</div>
                                <form id="demo">
                                    <div class="ts vertical inputs">
                                        一段成績(必填)
                                        <div class="ts labeled input">
                                            <div class="ts label">
                                                第一次段考
                                            </div>
                                            <input type="number"min="0" max="100" id="sc1" placeholder="一段成績(必填)">
                                        </div>
                                        二段成績(必填)
                                        <div class="ts labeled input">
                                            <div class="ts label">
                                                第二次段考
                                            </div>
                                            <input type="number"min="0" max="100" id="sc2" placeholder="二段成績(必填)">
                                        </div>
                                        預測能補考及重修的三段成績，留空即可<br>
                                        不留空則是算需不需要補考與重修
                                        <div class="ts labeled input">
                                            <div class="ts label">
                                                第三次段考
                                            </div>
                                            <input type="number"min="0" max="100" id="sc3" placeholder="可預測三段成績(留空)">
                                        </div>
                                        平時成績(必填)
                                        <div class="ts labeled input">
                                            <div class="ts label">
                                                平時成績
                                            </div>
                                            <input type="number"min="0" max="100" id="tc1" placeholder="平時成績(必填)">
                                        </div>
                                    </div>
                                    <!--一段：<input type="number"min="0" max="100" id="sc1">-->
                                    <!--二段：<input type="number"min="0" max="100" id="sc2">-->
                                    <!--三段：<input type="number"min="0" max="100" id="sc3">-->
                                    <!--平時：<input type="number"min="0" max="100" id="tc1">-->
                                    <!--測資-->
                                    <!--一段：<input type="number"min="0" max="100" id="sc1" value="49">-->
                                    <!--二段：<input type="number"min="0" max="100" id="sc2" value="42">-->
                                    <!--三段：<input type="number"min="0" max="100" id="sc3" placeholder="預設空白">-->
                                    <!--平時：<input type="number"min="0" max="100" id="tc1" value="84">-->
                                    <button type="button" id="submitExample" class="ts info button">試算</button>
                                </form>
                    </div>
                    <div class="eight wide column">
                        <div class="ts big header">計算結果</div>
                                <p id="result">開始試算吧！</p> <!-- 顯示回傳資料 -->
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
                                                            $("#rs2").html('<font color="#007500">你三段至少要考「<font color="#0000ff">' + data.sc3out + '</font>」才會有60歐趴</font>');
                                                        }else{
                                                            $("#rs2").html('<font color="#007500">基本上你三段不管怎麼考都不會有歐趴的問題安啦</font>');
                                                        }
                                                        if (data.sc3out2 >=0) {
                                                            $("#rs3").html('<font color="#007500">你三段至少要考「<font color="#0000ff">' + data.sc3out2 + '</font>」才能有補考資格</font>');
                                                        }
                                                    }
                                                    if (data.rc1) {
                                                        $("#result").html('<font color="#007500">你這樣「<font color="#0000ff">' + data.rc1 + '</font>」不用重補修(學期成績達60)的門檻！<br>而且你的學期成績為「<font color="#0000ff">' + data.rc2 + '</font>」(四捨五入)，<sk id="result2"></sk>');
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
            </div>
            <div class="ts positive segment">
                <div class="ts stackable grid">
                    <div class="twelve wide column">
                        <div class="ts big header">使用回饋、預測不準回報系統</div>
                        <div class="ts container">
                            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScu-FxjNCcf6RSbGW8ZLnxRE8TSiyzydrlE3fXfd416rTnxew/viewform?embedded=true" width="100%" height="1000" frameborder="0" marginheight="0" marginwidth="0">載入中…</iframe>
                            <iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTxTHp_sg7skofky443iSEiRCYVFXMT_iLL5uW0TrU4SYeqYjRS-Zr2kgv_NQ5V6YCIzhfkQOghf4bB/pubhtml?gid=807600740&amp;single=true&amp;widget=true&amp;headers=false" width="100%" height="1000" frameborder="0" marginheight="0" marginwidth="0"></iframe>
                        </div>
                    </div>
                    <!--<div class="eight wide column">-->
                    <!--    <div class="ts big header">操作</div>-->
                        
                    <!--</div>-->
                </div>
            </div>
		</div>
		</div>
		 
        <div class="ts snackbar">
            <div class="content"></div>
            <a class="action"></a>
        </div>
        <footer>
        	<center>
        		<p>由三民高中 111級 <a target="_blank" href="https://me.imych.one/">黃猷珵</a> 開發設計<br />
        	</center>
        </footer>
    </body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>學期成績試算神器</title>
    </head>
    <body>

    </body>
</html>
