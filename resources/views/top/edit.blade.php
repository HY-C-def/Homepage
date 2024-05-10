@extends('layouts.base')
@section('title','株式会社５')
@section('main')
<div class="body-color">
<h1 class="text-center title-padding">CONTACT</h1>

<p class="confirm_text text-center">内容に誤りがないか再度ご確認ください。</p>
<form action="/five/mail" method="post">
  @csrf
<div class="container">
  <div class="row justify-content-center">
    <div class="col-3">
    <p class="text-left" >お名前</p>
    </div>
    <div class="col-3">
      <input type="hidden" name="name" value="{{ $date['name'] }}" readonly>
    <p>{{ $date['name'] }}</p>
    </div>
  </div>
</div>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-3">
    <p class="" >フリガナ</p>
    </div>
    <div class="col-3">
    <input type="hidden" name="kana" value="{{ $date['kana'] }}" readonly>
    <p>{{ $date['kana'] }}</p>
    </div>
  </div>
</div>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-3">
    <p class="" >電話番号</p>
    </div>
    <div class="col-3">
    <input type="hidden" name="phone" value="{{ $date['phone'] }}" readonly>
    <p>{{ $date['phone'] }}</p>
    </div>
  </div>
</div>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-3">
    <p class="" >会社名</p>
    </div>
    <div class="col-3">
    <input type="hidden" name="company" value="{{ $date['company'] }}" readonly>
    <p>{{ $date['company'] }}</p>
    </div>
  </div>
</div>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-3">
    <p class="" >メールアドレス</p>
    </div>
    <div class="col-3">
    <input type="hidden" name="mail" value="{{ $date['mail'] }}" readonly>
    <p>{{ $date['mail'] }}</p>
    </div>
  </div>
</div>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-3">
    <p class="" >メールアドレス確認</p>
    </div>
    <div class="col-3">
    <input type="hidden" name="remail" value="{{ $date['remail'] }}" readonly>
    <p>{{ $date['remail'] }}</p>
    </div>
  </div>
</div>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-3">
    <p class="" >相談内容</p>
    </div>
    <div class="col-3">
    <input type="hidden" name="comment" value="{{ $date['comment'] }}" readonly>
    <p>{{ $date['comment'] }}</p>
    </div>
  </div>
</div>

<div class="d-grid gap-2 col-1 mx-auto last-padding">
  <input type="submit" class="btn btnSubmit btn-outline-dark" name="submitConfirm" value="送信">
  <!-- <a href="/five/mail" class="btn btn-outline-dark">送信</a> -->
</div>  
              
</form>          
</div>





@endsection