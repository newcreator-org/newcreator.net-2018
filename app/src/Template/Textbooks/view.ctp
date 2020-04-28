<link rel="stylesheet" href="https://newcreator.net/static/console.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
  $('.slide-image').slick({
    autoplay: false,
    arrows: true,
    nfinite: false,
    draggable: true,
    infinite: false,
    swipe: true,
    accessibility: true,
    swipeToSlide: true
  });
});
</script>


<section class="console-toolbar">
  <div class="toolbar">
    <div class="toolbar-wrap">
    <a href="#" onclick="javascript:window.history.back(-1);return false;" class="back-to-menu">＜ 教材一覧に戻る</a>
    <div class="worksheet-title"><h1><?= h($textbook->title) ?></h1></div>
    </div>
  </div>
</section>

<section class="console">

<?php echo ($textbook->body) ?>

</section>

<!-- Footer Version 8bd33cb7cdfa9f9bbd8e36e3c937d7a28590a561 / 29Nov2017 -->
<section class="footer">
  <div class="col-footer">
  </div>
</section>
<script src="https://hack.blob.core.windows.net/newcreator/console-script/js/slick.min.js" type="text/javascript" charset="utf-8"></script>
