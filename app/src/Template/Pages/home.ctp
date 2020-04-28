<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>new Creator - 子どものためのプログラミング教室</title>

    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index.php</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://newcreator.net/static/base.css">
    <link rel="stylesheet" type="text/css" href="https://hack.blob.core.windows.net/newcreator/console-script/css/slick.css">
    <link rel="stylesheet" type="text/css" href="https://hack.blob.core.windows.net/newcreator/console-script/css/slick-theme.css">


    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('home.css') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
</head>
<body style="z-index:0;">

    <!-- Header Version b8dca30a9a82c71207511cca96317d6fa13f73d5 / 29Nov2017 -->
    <section class="header">
      <nav class="header-nav">
        <a href="https://newcreator.net/app/"><img src="https://hack.blob.core.windows.net/newcreator/newcreator-logo-gray.png"></a>
        <ul>
          <li><a href="https://newcreator.net/app/">教材一覧</a></li>
          <li><a href="https://newcreator.net/app/pages/q_a/">フィードバック</a></li>
          <li><a href="https://newcreator.net/app/pages/typing/">タイピング練習</a></li>
          <li><a href="https://hack.or.jp/contact/">お問い合わせ</a></li>
          <li><a href="https://newcreator.net/app/pages/company/">運営会社</a></li>
        </ul>
      </nav>
    </section>

    <section class="main">

    <div class="container" style="margin-bottom:100px;">

    <div class="col col-md-3 col-xs-3" style="float: left; padding-top:60px; height:100%;">

      <p>教材へのリンク</p>
      <p><a href="https://newcreator.net/app/pages/typing/" target="_blank">タイピング練習</a></p>
      <p><a href="https://newcreator.net/app/pages/ozoblockly-ja/" target="_blank">Ozoblockly（日本語版）</a></p>
      <p><a href="https://scratch.mit.edu/projects/editor/" target="_blank">Scratch（日本語版）</a></p>
      <p><a href="https://prog-8.com/companies/135/invitation?auth_token=d27fffcc5a6eb9c5f3aac6609abbb1c8" target="_blank">Progate（日本語版）</a></p>
      <br>
      <p><a href="https://newcreator.net/app/pages/ozoblockly-en/" target="_blank">Ozoblockly（英語版）</a></p>
      <p><a href="https://scratch.mit.edu/projects/editor/" target="_blank">Scratch（英語版）</a></p>
      <p><a href="https://progate.com" target="_blank">Progate（英語版）</a></p>

    </div><!-- col-md-3 -->

<style>
h1 {
  position: relative;
  padding-bottom: .5em;
  border-bottom: 4px solid #ccc;
  font-size: 20px;
  clear: both;
}
h1::after {
  position: absolute;
  bottom: -4px;
  left: 0;
  z-index: 2;
  content: '';
  width: 20%;
  height: 4px;
  background-color: #3498db;
}
</style>

    <div class="col col-md-9 col-xs-9" style="float: right; padding-top:60px;">

      <h1>ウェブデザイン（サーバーを使った上級編）</h1>


      <a href="https://newcreator.net/app/textbooks/view/Special201805">
        <div class="cards">
          <div class="cards-photo" style="background-image:url(https://newcreator.net/static/webdesign.jpg);">
          </div>
          <div class="cards-discription">
          <h2>ウェブサイト制作にチャレンジ！</h2>
          <p class="details">Special201805</p>
          </div>
        </div>
      </a>

      <a href="https://github.com/hackjapan/webdesgin-tutorial">
        <div class="cards">
          <div class="cards-photo" style="background-image:url(https://newcreator.net/static/github.jpg);">
          </div>
          <div class="cards-discription">
          <h2>ウェブサイト制作教材をダウンロード</h2>
          <p class="details">Special201805-download</p>
          </div>
        </div>
      </a>

        <h1>初めてのOzobotならここから始めよう</h1>

        <a href="https://newcreator.net/app/textbooks/view/OzoPen001">
          <div class="cards">
            <div class="cards-photo" style="background-image:url(https://www.robotshop.com/media/files/images2/ozobot-evo-starter-pack-spider-man-desc3.jpg);">
            </div>
            <div class="cards-discription">
            <h2>色ペンでプログラムを書いてみよう</h2>
            <p class="details">OzoPen001</p>
            </div>
          </div>
        </a>

        <a href="https://newcreator.net/app/textbooks/view/Ozo003">
          <div class="cards">
            <div class="cards-photo">
            </div>
            <div class="cards-discription">
            <h2>Ozobotを自由に動かしてみよう</h2>
            <p class="details">Ozo003</p>
            </div>
          </div>
        </a>

        <a href="https://newcreator.net/app/textbooks/view/Ozo001">
          <div class="cards">
            <div class="cards-photo">
            </div>
            <div class="cards-discription">
            <h2>Ozobotを赤色に光らせてみよう</h2>
            <p class="details">Ozo001</p>
            </div>
          </div>
        </a>

        <h1>Ozobot 初級編シリーズ</h1>

        <a href="https://newcreator.net/app/textbooks/view/Ozo002">
          <div class="cards">
            <div class="cards-photo">
            </div>
            <div class="cards-discription">
            <h2>３つのスタートから同じゴールを目指そう</h2>
            <p class="details">Ozo002</p>
            </div>
          </div>
        </a>


        <a href="https://newcreator.net/app/textbooks/view/Ozo005">
          <div class="cards">
            <div class="cards-photo">
            </div>
            <div class="cards-discription">
            <h2>Ozobotを踊らせてみよう！</h2>
            <p class="details">Ozo005</p>
            </div>
          </div>
        </a>


        <a href="https://newcreator.net/app/textbooks/view/Ozo008">
          <div class="cards">
            <div class="cards-photo">
            </div>
            <div class="cards-discription">
            <h2>Ozobotで宝物を探そう</h2>
            <p class="details">Ozo008</p>
            </div>
          </div>
        </a>

        <h1>Ozobot 中級編シリーズ</h1>


        <a href="https://newcreator.net/app/textbooks/view/Ozo006">
          <div class="cards">
            <div class="cards-photo">
            </div>
            <div class="cards-discription">
            <h2>Ozobotとじゃんけんしよう</h2>
            <p class="details">Ozo006</p>
            </div>
          </div>
        </a>


        <a href="https://newcreator.net/app/textbooks/view/Ozo007">
          <div class="cards">
            <div class="cards-photo">
            </div>
            <div class="cards-discription">
            <h2>終了の処理を書こう</h2>
            <p class="details">Ozo007</p>
            </div>
          </div>
        </a>


        <a href="https://newcreator.net/app/textbooks/view/Ozo009">
          <div class="cards">
            <div class="cards-photo">
            </div>
            <div class="cards-discription">
            <h2>RGBを使ってOzobotを光らせてみよう</h2>
            <p class="details">Ozo009</p>
            </div>
          </div>
        </a>

<div style="clear:both;"></div>

<?php /*
$cond = $this->Auth->user('id');
$user = $this->User->findByid($cond);
$staff_info = $user['User']['staff_info'];
*/ ?>



      <?php if ($role == "staff") { ?>
        <?php // echo $username;?>
        <br></br>
          <h1>メンター専用 ログイン情報</h1>
          <div class="switchbox" style="margin:0;">
            <p>当日専用メールアドレス（Gmailアカウント名）： nc20180513@hack.or.jp</p>
            <input type="checkbox" id="label2" />
            <label for="label2">クリックしてパスワードを表示（このパスワードは生徒に教えるな！）</label>
            <div>
              <p>4Jpsoe692sF</p>
            </div>
            <p>ログインURL：<a href="https://mail.google.com">https://mail.google.com</a></p>
          </div>
          <hr>
          <p>2018年5月13日用 newcreator.net ゲストユーザー名： guest / sakura0513</p>
          <hr>

          <div class="switchbox" style="margin:0;">
            <p>さくらのレンタルサーバー　クーポンコードの管理</p>
            <input type="checkbox" id="label3" />
            <label for="label3">クーポンコード管理ページURLを表示</label>
            <div>
              <p><a href="https://docs.google.com/spreadsheets/d/1RncvvzplZE2LXAgBQivvoO1126ob-2iZIAxz3Tor8rk/edit?usp=sharing" target=”_blank”>ここからアクセス（別サイトに飛びます）</a></p>
            </div>
          </div>
          <p>※クーポンコードにアクセスするためには @hack.or.jp のメールアドレスまたは上記の nc20180513@hack.or.jp でGsuite(Google Drive)にログインしている必要があります。万一、権限が足りない場合は事務局にご連絡ください。</p>

          <hr>

          <div class="switchbox" style="margin:0;">
            <p>当日限定メンター用 newcreator.net アカウント（スタッフ向けの内容が表示）</p>
            <input type="checkbox" id="label4" />
            <label for="label4">IDとパスワードを表示</label>
            <div>
              <p>ID: nc20180513@hack.or.jp / Password: 4Jpsoe692sF</p>
            </div>
          </div>
          <p>※クーポンコードにアクセスするためには @hack.or.jp のメールアドレスまたは上記の nc20180513@hack.or.jp でGsuite(Google Drive)にログインしている必要があります。万一、権限が足りない場合は事務局にご連絡ください。</p>

<style>
/*ボックス全体*/
.switchbox {
    margin: 10px 0;
    padding: 0;
}
.switchbox p {
    margin: 0;
}
hr {
  border-bottom: 1px solid #383838;
}
/*ラベル*/
.switchbox label {
    display: block;
    font-weight: bold;
    cursor :pointer;
}
/*チェックボックスを非表示にする*/
.switchbox input {
    display: none;
}
/*中身を非表示にしておく*/
.switchbox div {
    height: 0;
    overflow-y: hidden;
    transition: 0.8s;/*ゆっくり表示させる*/
    opacity: 0;
}
/*クリックで中身を表示*/
.switchbox input:checked + label + div {
    height: auto;
    opacity: 1;
}
/*アイコン*/
.switchbox label::before {
    content: '\f067';
    font-family: 'FontAwesome';
    padding-right: 8px;
}
/*クリックでアイコン入れ替え*/
.switchbox input:checked + label::before {
    content: '\f068';
}
</style>

      <?php } else { ?>

        <?php } ?>




        <div class="clear"></div>




    </div><!-- col-md-9 -->



    </div><!-- container -->
    </section>

    <?php if ($username = "user") { ?>
      一般公開されている教材が表示されます。
    <?php } elseif ($username = "newcreator") { ?>
      ニュークリエイターに参加している子ども向けの教材が表示されます。
    <?php } elseif ($username = "paid") { ?>
      有料会員ユーザーありがとうございます。
    <?php } elseif ($username = "superadmin") { ?>
      あなたはスーパーアドミンです。無限の可能性を持っています。
    <?php } elseif ($username = "staff") { ?>
      あなたにはスタッフ専用の情報が表示されています。
    <?php } else { ?>
      あなたのアカウントの設定が間違っている可能性があります。サポートにお問い合わせ下さい。
    <?php } ?>


    <div class="clear"></div>

    <section class="footer">
      <div class="col-footer">
      </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>




</body>
</html>
