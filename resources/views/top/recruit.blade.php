@extends('layouts.base')
@section('title','株式会社５')
@section('main')
<h1 class="text-center title-padding">RECRUIT</h1>

<!-- カルーセル -->

  <div id="carouselExampleIndicators" class="carousel carousel-dark slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDarks" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDarks" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDarks" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="..\img\foto-kaigi.webp" class="d-block h-550" alt="..." >
      <div class="carousel-caption d-none d-md-block text-white "style="top: 30%;">
        <h5>とことん誠実に。</h5>
        <p>どこまでも寄り添い続ける仕事をしよう。</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="..\img\cat.jpg" class="d-block h-550" alt="..." >
      <div class="carousel-caption d-none d-md-block"style="top: 10%; left: 10%;">
      <h4 class="display-6 mb-1 title-padding">自分らしい働き方を実現しよう</h4>
      </div>
    </div>
    <div class="carousel-item">
      <img src="..\img\fun.jpg" class="d-block h-550" alt="...">
      <div class="carousel-caption d-none d-md-block"style="top: 30%; left: 40%;">
        <h2 class="title-padding">もっと！もっと！！</h2>
        <h4>楽しい仕事</h4>
        <h4>楽しい人生</h4>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>
<!-- ここまで -->
  
<div class="container">
  <!-- ブートストラップからそのまま持ってきたやつ -->
  <div class="row g-5">
    <!-- メインの記事 -->
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom title-padding">
        採用情報
      </h3>

      <article class="blog-post">
        <h4 class="display-6 mb-1 title-padding">採用担当者からのメッセージ</h4>
        

        <p>株式会社５では経験豊かで笑顔の素敵な方を募集しております。</p>
        <p>採用に関するお問い合わせは、お問い合わせフォームもしくはお電話にて採用担当者までご連絡ください。</p>
        <hr>
        
        <h4 class="display-6 mb-1 title-padding">先輩社員から皆さんへのメッセージ</h4>

        <div class="row">
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle bg-info" src="../img/shacho.png" alt="" width="140" height="140">
        <h2 class="fw-normal">社長</h2>
        <p>まじめにやるときはとことん真面目に、遊ぶときはしっかり遊ぶ。日常を充実させることで仕事に本気で取り組めるようになると思いますし、周りにもどんどん影響与えてみんなが働きやすい会社になるように努めています。</p>
        
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img class="bd-placeholder-img rounded-circle bg-dark" src="../img/staff1.png" alt="" width="140" height="140">
        <h2 class="fw-normal">Tさん</h2>
        <p>毎日いろんなアイデアが飛び交っていて、とても刺激的な職場です。人生まだまだこれから。仕事もプライベートももっと楽しんでいきたいですね。</p>
        
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img class="bd-placeholder-img rounded-circle bg-light" src="../img/staff2.png" alt="" width="140" height="140">
        <h2 class="fw-normal">Sさん</h2>
        <p>駆け出しなのでやることはたくさんあります。その分活かせる経験も多いです。みんながそれぞれ何かのエキスパートなのでアドバイスしあえる人が来てくれると嬉しいです。</p>
        
</div>
<hr>

        <h3>募集要項</h3>
        <p>待遇</p>
        <ul>
          <li>職種：ITコンサルタント、SE・PG、Webマーケティングアナリスト</li>
          <li>給与：300万~1000万（残業代を除く）</li>
          <li>就業場所：大阪、東京、福岡</li>
          <li>退職金：なし</li>
          <li>保険：雇用、厚生、労災、健康</li>
        </ul>

          <p>求める人物像</p>
        <ul>
          <li>リーダー経験あり</li>
          <li>・SE・PG歴5年以上</li>
          <li>・PM経験あり</li>
        </ul>
        

        <p>応募などについて</p>
        <ol>
          <li>履歴書、職務敬礼所を送ってください。</li>
          <li>書類精査後、面談の有無をお知らせします。</li>
          <li>面談➀：採用担当者との面談を行います。</li>
          <li>面談➁：役員との面談を行います。</li>
          <li>一週間以内に合否を電話にてお伝えいたします。</li>
        </ol>
        
       </article>

      <article class="blog-post">

        <p>上記の条件に該当しない場合でも、ご興味のある方はお気軽にご連絡ください。</p>
      </article>



    </div>

    <!-- サイドの記事 -->
    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-body-tertiary rounded">
          <h4 class="fst-italic">現在下記の職種で募集を行っています。</h4>
          <p class="mb-0">応募定員あり。<br>定員になり次第、掲載を終了いたします。</p>
        </div>

        <div>
          <h4 class="fst-italic">中途採用</h4>
          <ul class="list-unstyled">
            <li>
              <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                <img src="..\img\consal.png" alt="" width="100%" height="96">
                <div class="col-lg-8">
                  <h6 class="mb-0">ITコンサルタント</h6>
                  <small class="text-body-secondary">年収500万～1000万</small>
                </div>
              </a>
            </li>
            <li>
              <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
              <img src="..\img\PG-SE.png" alt="" width="100%" height="96">
                <div class="col-lg-8">
                  <h6 class="mb-0">プログラマー・システムエンジニア</h6>
                  <small class="text-body-secondary">年収300万～800万</small>
                </div>
              </a>
            </li>
            <li>
              <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
              <img src="..\img\glaf.png" alt="" width="100%" height="96">
                <div class="col-lg-8">
                  <h6 class="mb-0">Webマーケティングアナリスト</h6>
                  <small class="text-body-secondary">年収500万～1000万</small>
                </div>
              </a>
            </li>
          </ul>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Elsewhere</h4>
          <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

</div>




@endsection