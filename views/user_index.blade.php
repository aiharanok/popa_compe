<!-- app/views/nerds/index.blade.php -->

@extends('layouts.default')

@section('content')

<div class="container">
{{ HTML::style('css/login_page.css', array('media'=>'screen')); }}


<!-- will be used to show any messages -->
@if (Session::has('message'))
    @if(Session::get('message') == "LOGIN_FAILURE")
        <div class="alert alert-warning">メールアドレスまたはパスワードが誤っています</div>
        {{ HTML::ul($errors->all()) }}
    @elseif((Session::get('message') == "MAIL_ACTIVATION_SUCCESS"))
        <div class="row"> <div class="col-md-12">
                <div class="row popa-login-row popa-login-row-color-success"> <div class="col-md-12">
                        <div class="row"> <div class="col-md-12 login-category-title login-category-title-color-success">
                                メール認証完了
                        </div> </div>
                        <div class="row"> <div class="col-md-12 register-account-introduction">
                                <strong>メール認証が成功しました。作成したアカウントでログインしてください</strong>
                        </div> </div>
                </div> </div>
        </div> </div>
    @else
        <div class="alert alert-warning">{{ Session::get('message') }}</div>
        {{ HTML::ul($errors->all()) }}
    @endif
@endif


<div class="row">
    <!------------------ POPAアカウント/SNSログイン --------------------->
    <div class="col-md-6">

        <!-- POPAアカウントログイン -------------- -->
        <div class="row popa-login-row popa-login-row-color-success">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 login-category-title login-category-title-color-success">
                        POPAアカウントログイン
                    </div>
                </div>

                {{ Form::open(array('url'=>'user/login', 'class'=>'form-vertical')) }}
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group has-feedback animated fadeInLeft delayp1">
                            メールアドレス
                            {{ Form::text('email', null, array('class'=>'form-control' . " {$errors->first('', 'error')}" , 'placeholder'=>'メールアドレスを入力して下さい')) }}
                            <i class="icon-users form-control-feedback"></i>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group has-feedback  animated fadeInRight delayp1">
                            パスワード
                            {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'パスワードを入力して下さい')) }}
                            <i class="icon-lock form-control-feedback"></i>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-sm btn-block" >ログイン</button>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </div>

        <!-- SMSログイン -------------- -->
        <div class="row sns-login-row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 login-category-title login-category-title-color-success">
                        SNSアカウントで簡単ログイン
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-2">
                        <a href="{{URL::to('/oauthfacebook')}}"><img src={{asset('system/images/system_logo_facebook.png')}} alt="Facebook" class="auth-sns-logos"></a>
                    </div>
                    <div class="col-md-2">
                        <a href="{{URL::to('/oauthtwitter')}}"> <img src={{asset('system/images/system_logo_twitter.png')}}  alt="Twitter"  class="auth-sns-logos"></a>
                    </div>
                    <div class="col-md-2">
                        <a href="{{URL::to('/oauthmixi')}}">    <img src={{asset('system/images/system_logo_mixi.png')}}     alt="Mixi"     class="auth-sns-logos"></a>
                    </div>
                    <div class="col-md-2">
                        <a href="{{URL::to('/oauthline')}}">    <img src={{asset('')}}     alt="line"     class="auth-sns-logos"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!------------------ 新規アカウント登録 --------------------->
    <div class="col-md-6">
        <div class="row register-account-row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 register-account-introduction">
                       アカウントをお持ちでない方は登録してみませんか？<br>
                       あなたのPOPが採用されれば<span class="strong-message">ポイントをゲット</span>できます
                    </div>
                </div>
                <div class="row">
                    {{ Form::open(array('url'=>'user/create', 'method'=>'get', 'class'=>'form-vertical')) }}
                    {{-- <a href="{{URL::to('/user/create')}}", class="register-account-link"> --}}
                        <button class="btn btn-primary center-block btn-danger register-account-btn">
                            新規アカウント登録はこちら
                        </button>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

</div>

</div>

@stop

{{-- <!--
</body>
</html>
--> --}}

