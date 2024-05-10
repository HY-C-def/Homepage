@extends('layouts.base')
@section('title', '株式会社５')
@section('main')
<div class="body-color">
<h1 class="text-center title-padding">CONTACT</h1>


   
<form action="/five/edit" method="post">
    @csrf
        <div class="confirm_text text-center">
         <p>ご入力内容をご確認の上、<br>「送信」ボタンを押してください</p>
        </div>  

        <div class="input-group mb-3 justify-content-center">
            <label class="" style="width: 150px;">お名前</label>
            <input type="text" name="name" style="width: 400px;" placeholder="名前を入力してください" value="">
        </div>
        <div class="input-group mb-3 justify-content-center">
            <label class="" style="width: 150px;">フリガナ</label>
            <input type="text" name="kana" style="width: 400px;" placeholder="フリガナを入力してください" value="">
        </div>
        <div class="input-group mb-3 justify-content-center">
            <label class="" style="width: 150px;">電話番号</label>
            <input type="number" name="phone" style="width: 400px;" placeholder="電話番号を入力してください" value="">
        </div>
        <div class="input-group mb-3 justify-content-center">
            <label class="" style="width: 150px;">会社名</label>
            <input type="text" name="company" style="width: 400px;" placeholder="会社名を入力してください" value="">
        </div>
        <div class="input-group mb-3 justify-content-center">
            <label class="" style="width: 150px;">メールアドレス</label>
            <input type="text" name="mail" style="width: 400px;" placeholder="例）xxxxxxx@ooo.com" value="">
        </div>
        <div class="input-group mb-3 justify-content-center">
            <label class="" style="width: 150px;">メールアドレス確認</label>
            <input type="text" name="remail" style="width: 400px;" placeholder="例）xxxxxxx@ooo.com" value="">
            
        </div>
        
        <!-- コメントの入力位置 -->
        <div class="input-group mb-3 justify-content-center">
            <label class="" style="width: 150px;">相談内容</label>
             <textarea  aria-label="With textarea" name="comment" style="width: 400px; height: 200px;"></textarea>    
        </div>
        
        <div class="d-grid gap-2 col-1 mx-auto last-padding">
            <input type="submit" class="btn btnSubmit btn-outline-dark" name="submitConfirm" value="確認">
              
            </div>    
 </form>  

 </div>
@endsection