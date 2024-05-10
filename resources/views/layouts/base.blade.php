<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') </title>
    <link rel="icon" href="..\img\image0.png">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('style.css')}}">

  </head>
<body>
<div class="sticky-top">  
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
  <a class="navbar-brand font" href="/five"><img src="..\img\image0.png" alt="会社ロゴ" width="70" height="80">株式会社５</a>
  
    
    <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/five">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/five/service">事業内容</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/five/company">企業情報</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/five/recruit">求人</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/five/contact">お問い合わせ</a>
        </li>
      </ul>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" >
    <span class="navbar-toggler-icon"></span>
    </button>

<div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel">目次</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <hr>
  <div class="offcanvas-body ">
  <ul>
  <li class="list-margin oncolor"><a class="list-item" href="/five">HOME</a></li>
  <li class="list-margin oncolor"><a class="list-item" href="/five/service">事業内容</a></li>
  <li class="list-margin oncolor"><a class="list-item" href="/five/service">事業内容</a></li>
  <li class="list-margin oncolor"><a class="list-item" href="/five/company">企業情報</a></li>
  <li class="list-margin oncolor"><a class="list-item" href="/five/recruit">求人</a></li>
  <li class="list-margin oncolor"><a class="list-item" href="/five/contact">お問い合わせ</a></li>
</ul>
  </div>
</div>  
  </div>
</nav>
</div>

    @section('main')
    @show

    
</body>
<footer id="footer">
 
<div class="d-flex position-relative bg-dark bg-gradient py-4">
  <div class="card-body">
    <h4 class="card-title text-center text-white">採用情報</h4>
    <p class="en _cormorant text-center text-white">RECRUIT</p>
    <img class="d-block mx-auto" src="../img/lantern.png" alt="ランタン" height="100" weigth="70">
    <h5 class="card-text text-center text-white">次の誰かの道を灯す</h5>
    <p class="text-center text-white">５の採用特設ページはこちら。<br>「なんかいい仕事」をより明確に。鮮明に。<br>それが私たちの仕事です。</p>
    <div class="d-grid gap-2 col-6 mx-auto">
      <a href="/five/recruit" class="btn btn-outline-warning">採用情報へ＞＞</a>
    </div>
  </div>
</div>


<div class="container-fluid py-4 color-three">
<div class="d-flex position-relative"> 
  <div class="card-body">
    <h5 class="card-title text-center">お問い合わせ</h5>
    <p class="card-text text-center">お仕事のご相談や、採用に関するご質問などお気軽にこちらからお問い合わせください。</p>
    
    <div class="d-flex justify-content-center last-padding">
    <div class="align-self-end"><h6>TEL.</h6></div>
  <h4>0120-XXXX-XXXX</h4>
  </div>
    
    <div class="d-grid gap-2 col-6 mx-auto">
      <a href="/five/contact" class="btn btn-info">お問い合わせフォーム</a>
    </div>
  </div>
</div>
</div>

    

<ul class="nav justify-content-center bg-dark">
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="/five" >HOME</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/five/service" style="coler: #96aed1;">事業内容</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/five/company">企業情報</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/five/recruit">求人</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/five/contact">お問い合わせ</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/five/privacy">プライバシーポリシー</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/five/info">情報セキュリティポリシー</a>
  </li>
</ul>
<div class="d-flex position-relative bg-dark py-4">
         <!-- <div class="licence"><img src="./assets/img/common/licence.png" srcset="./assets/img/common/licence.png 1x, ./assets/img/common/licence@2x.png 2x" alt=""></div> -->
          <h7 class="copy bg-dark text-white">© 20xx.five, All Rights Reserved. </h7>
        </div>
</div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
 
      </footer>
</html>