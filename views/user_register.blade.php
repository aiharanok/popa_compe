<!-- app/views/user/create.blade.php -->

@extends('layouts.default')

@section('content')

<div class="container">


{{ HTML::style('css/login_page.css', array('media'=>'screen')) }}


<div class="row">
    <div class="col-md-12">
        <div class="row popa-login-row popa-login-row-color-success">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 login-category-title login-category-title-color-success">
                        登録メールを送信しました
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        ご登録ありがとうございます。<br>
                        {{ Config::get('constants.POPA_EMAIL') }}からご本人様確認のメールが届きますので、<br />
                        30分以内にメール内のリンクをクリックし、登録を行ってください。<br />
                        <br />
                        メールが届かない場合は、スパムフォルダや迷惑メールに届いている場合がありますので、ご確認ください。<br />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</div>

@stop
