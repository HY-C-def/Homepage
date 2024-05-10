@extends('layouts.base')
@section('title','株式会社５')
@section('main')

<div class="body-img">
<h1 class="text-center title-padding">SERVISE</h1>

<div class="d-flex justify-content-end text-margin"><h1>寄</h1>
<div class="align-self-end"><h4>り</h4>
</div>
<div class="align-self-end"><h2>添</h2></div>
<div class="align-self-end"><h4>うって</h4></div>
</div>
<div class="d-flex justify-content-end">
<h2>何</h2>
<div class="align-self-end"><h4>だろう？</h4></div>
</div>

<h5 class="text-margin">その疑問に私たちは<br>３つのサービス理念と<br>5つの事業でお答えします。</h5>


<div class="container cord-margin">
<h4 class="">３つのサービス理念</h4>
<div class="row row-cols-md-3 g-4">
  <div class="col">
    <div class="card toumei">
      <img src="../img/coworking_space.png" class="card-img-top" alt="..." >
      <div class="card-body">
        <h5 class="card-title">明るいオフィス</h5>
        <p class="card-text">働くうえで環境が持つ力は絶大です。明るいオフィスで社員同士快い距離感で仕事をすることで無駄なストレスを削減し業務の効率化を助けます。まずは自分たちから、そしてお客様にも働きやすい空間づくりを広めてまいります。</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card toumei">
      <img src="../img/robot_house.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">あなた限定製品</h5>
        <p class="card-text">お客様の業務内容、生活リズム、細かいカスタマイズまでとことん寄り添った製品づくりを突き詰め、完全パーソナライズ製品をお届けしてまいります。<br>ここにあるのはどれも「あなた限定」製品です。</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card toumei">
      <img src="../img/video_kaigi.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">会議会議会議！</h5>
        <p class="card-text">気が付くと半日以上会議してしまってる。そんな日々とはおさらばしましょう。ここにいるのは熟練のエンジニアばかりです。適切なコミュニケーションでお客様の意図をくみ取り最適解に導きます。</p>
      </div>
    </div>
  </div>
  </div>
  </div>

  </div>

  <div class="container cord-margin">
  <h4 class="">５つの事業</h4>
  <div class="row row-cols-md-3 g-4">
    <div class="col">
      <div class="card border-light mb-3" style="max-width: 18rem;">
        <div class="card-header">IoT事業</div>
        <div class="card-body">
          <h5 class="card-title">事業開拓中</h5>
          <p class="card-text">家具とか家電とかを遠隔で動かす技術。スマートシティ都市開発とかスマートハウスとかに発展させていけるよう邁進中。</p>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card border-light mb-3" style="max-width: 18rem;">
        <div class="card-header">Webマーケティング</div>
        <div class="card-body">
          <h5 class="card-title">事業開拓中</h5>
          <p class="card-text">インターネット上の情報取集やプログラミングによるビックデータの解析などにより製品の売り方や作り方を考えるスペシャリスト。特に製造業では必要不可欠な存在。</p>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card border-light mb-3" style="max-width: 18rem;">
        <div class="card-header">ITコンサルタント</div>
        <div class="card-body">
          <h5 class="card-title">企業をITで導く仕事人</h5>
          <p class="card-text">経営状況の安定化もしくは売り上げを延ばすために的確なアドバイスを行う改革役。安心して進められるプロジェクトの数々を生み出し業界を席捲しよう。</p>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card border-light mb-3" style="max-width: 18rem;">
        <div class="card-header">VR・AR事業</div>
        <div class="card-body">
          <h5 class="card-title">事業開拓中</h5>
          <p class="card-text">仮想現実や拡張現実といわれる夢の技術。全人類アバター化もそう遠くない未来。新しい世界で楽しく生き残るためにどんどんかかわっていきたい注目の事業。</p>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card border-light mb-3" style="max-width: 18rem;">
        <div class="card-header">自社製品開発</div>
        <div class="card-body">
          <h5 class="card-title">事業開拓中</h5>
          <p class="card-text">2次受けも3次受けも存在しない自分たちの会社で行う自分たちのプロジェクト！間に何も挟まってないってことは意味不明な仲介料が発生しないので単純に利益が上がるしボーナスアップも夢ではない！SESにも利点は多いけど自社開発もあこがれるよね。</p>
        </div>
      </div>
    </div>

  </div> 
  </div>
  
  
  </div>

@endsection