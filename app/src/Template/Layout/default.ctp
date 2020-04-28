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

$cakeDescription = 'CakePHP: the rapid development php framework';
?>

<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->fetch('title') ?></title>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>newCreator.net - 子ども向けプログラミング学習の総合教材</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://newcreator.net/static/base.css">
    <link rel="stylesheet" type="text/css" href="https://newcreator.net/console-script/css/slick.css">
    <link rel="stylesheet" type="text/css" href="https://newcreator.net/console-script/css/slick-theme.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>

    <link href="https://newcreator.net/static/favicon.ico" type="image/x-icon" rel="icon"/><link href="https://newcreator.net/static/favicon.ico" type="image/x-icon" rel="shortcut icon"/>
    <?//<?= $this->Html->meta('icon') ?>
    <?// <?= $this->Html->css('base.css') ?>
    <?// <?= $this->Html->css('cake.css') ?>
    <?//<?= $this->Html->css('home.css') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
</head>
<body style="z-index:0;">

    <!-- Header Version b8dca30a9a82c71207511cca96317d6fa13f73d5 / 29Nov2017 -->
    <section class="header">
      <nav class="header-nav">
        <a href="https://newcreator.net/app/"><img src="https://hack.blob.core.windows.net/newcreator/newcreator-logo-gray.png"></a>
        <ul>
          <li><a href="https://newcreator.net/app/">教材一覧</a></li>
          <li><a href="https://newcreator.net/app/pages/q_a/">Ｑ＆Ａ</a></li>
          <li><a href="https://newcreator.net/app/pages/copyright/">著作権について</a></li>
          <li><a href="https://hack.or.jp/contact/">お問い合わせ</a></li>
          <li><a href="https://newcreator.net/app/pages/company/">運営会社</a></li>
        </ul>
      </nav>
    </section>

<!--                <h1><a href=""><?= $this->fetch('title') ?></a></h1> -->

<section class="main" style="">

    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>

</section>

    <div class="clear"></div>

    <section class="footer">
      <div class="col-footer">
      </div>
    </section>



</body>
</html>
