@extends('layouts.base')
@section('title','株式会社５')
@section('main')

<div class="photo-under bg-light">
  <img class="h-550" src="../img/top-photo.jpg" alt="">

  <div class="text-in">
  
  <!-- <img class="toumei" src="..\img\image0.png" alt="会社ロゴ" width="150" height="200"> -->
  <p></p>
    <div class="d-flex justify-content-center title-paddind toumei">
      <h1 class="tx-tooblue">IT</h1>
      <div class="align-self-end"><h4>で夢の解像度を上げよう。</h4></div>
    </div>
    
  </div>
</div>

<div class="container mb-3 title-padding" >
  <ul class="flex-list">
    <!-- 記事 -->
    <li>
      <div class="" width=40%>
          <h5 class=" title-padding">地方のスマートシティ都市計画を牽引する企業へ</h5>
          <p class="">超高齢化社会へと突き進むこの国でITをどう活かそうか</p>
          
          <h5 class="">株式会社５</h5><h6 class="aline-self-end">は考えます。<br></h6>


          <p class=""><small class="text-body-secondary">シンプルで見やすい画面を目指したい</small></p>
          
        </div>
        <div class="d-grid gap-2 col-5 mx-auto title-padding">
          <a href="/five/recruit" class="btn btn-outline-success">企業情報へ＞＞</a>
          </div>
      
    </li>
    <!-- 画像 -->
    <li width=40%>
    <img  src=".\img\smart-city.png" alt="smartcity" height="400" width="400" >
        
    </li>
  </ul>
 

<div class=" body-img-dark " style="width: 100%;"> 
  <div class="d-flex justify-content-center text-white toumei-dark font-utukusi"><h1>寄</h1>
    <div class="align-self-end"><h4>り</h4>
    </div>
    <div class="align-self-end"><h2>添</h2></div>
    <div class="align-self-end"><h4>うって</h4></div>
  </div>
  <p class="text-margin"></p>
  <div class="d-flex justify-content-center text-white toumei-dark font-utukusi">
  <h2>何</h2>
  <div class="align-self-end"><h4>だろう？</h4></div>
  </div>
<p class="text-margin">

</p>

<p class="text-white text-center toumei-dark ">お客様に寄り添ったサービスが提供できるよう、とことん誠実なサービスの提供と製品づくりを目指しています。<br>納得いくまで相手のことを考えつくすのが私たちの誠実さ。<br>理念を抱え、事業拡大を目指して日々邁進しております。</p>
  
  <div class="d-grid gap-2 col-3 mx-auto last-padding">
      <a href="/five/recruit" class="btn btn-outline-dark">事業のご案内</a>
    </div>
</div>

<h1 class="title-padding font text-center">INFOMATION</h1>
<ul class="flex-list list-margin" >
    <!-- 記事 -->
    <li>
    <h4 class="fst-italic">お知らせ</h4>
    <hr class="last-padding">
    <ol class="list-unstyled ">
            <li><a class="list-darkitem" href="#">【映画サークル】サークル発足上映会開催</a></li><hr>
            <li><a class="list-darkitem" href="#">【キャンプ部】金比羅山で登山飯！</a></li><hr>
            <li><a class="list-darkitem" href="#">【システム部】社内用勤怠管理システムの新機能を追加しました。</a></li><hr>
            <li><a class="list-darkitem" href="#">【SNS部】株式会社５のXアカウント発行！</a></li><hr>
            <li><a class="list-darkitem" href="#">【写真部】琵琶湖写真合宿</a></li><hr>
            <li><a class="list-darkitem" href="#">【釣り部】夏だ！海だ！アジ釣りだ！</a></li><hr>
          </ol>
      
    </li>
    <li>
    <h4 class="fst-italic">社員インタビュー</h4>
    <hr class="last-padding">
    <ol class="list-unstyled">
            <li><a class="list-darkitem" href="#">社長の気まぐれ日記</a></li><hr>
            <li><a class="list-darkitem" href="#">【入社３年目】Nさん：私にとってのコンサルタントとは</a></li><hr>
            <li><a class="list-darkitem" href="#">【入社２年目】Iさん：独壇場！販路を広げる営業手腕</a></li><hr>
          </ol>
    </li>
  </ul>
  <div class="d-grid gap-2 col-3 mx-auto last-padding">
      <a href="#" class="btn btn-outline-dark">一覧情報へ</a>
    </div>
@endsection