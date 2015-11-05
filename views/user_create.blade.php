<!-- app/views/user/create.blade.php -->

@extends('layouts.default')

@section('content')

<div class="container">



{{ HTML::style('css/login_page.css', array('media'=>'screen')); }}



@if (Session::has('message'))
    @if (Session::get('message') == 'MAIL_ACTIVATION_EXPIRED')
        <div class="row">
            <div class="col-md-12">
                <div class="row popa-login-row alert-danger">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12 login-category-title alert-danger">
                                メール認証タイムアウト
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 register-account-introduction">
                                <strong>メール認証がタイムアウトしました。もう一度ご登録をお願いします</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endif




<div class="row">
    <!-- ---------------- POPAアカウント登録 ------------------- -->
    <div class="col-md-12">

        <div class="row popa-login-row popa-login-row-color-success">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 login-category-title login-category-title-color-success">
                        POPAアカウント登録
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 register-account-introduction">
                        ※ <a
                        <a href="{{URL::to('#')}}"> 利用規約</a>、 <a href="{{URL::to('#')}}">個人情報の取り扱い</a>について確認、同意
                    </div>
                </div>

                {{ Form::open(array('url' => 'user')) }}
                <!-- ------------- ユーザ名 --------------- -->
                <div class="row">
                    <div class="col-md-12">
                            <div class="form-group">
                                {{ Form::label('acc_name', 'ユーザ名') }}
                                {{ Form::text('acc_name', Input::old('acc_name'), array('class' => ('form-control ' . $errors->first('acc_name', 'error'))  )) }}
                            </div>
                    </div>
                </div>
                @if ($errors->first('acc_name'))
                    <div class="row"> <div class="col-md-12 error-message"> {{ $errors->first('acc_name') }} </div> </div>
                @endif


                <!--------------- メールアドレス ----------------->
                <div class="row">
                    <div class="col-md-12">
                            <div class="form-group">
                                {{ Form::label('email', 'メールアドレス') }}
                                {{ Form::email('email', Input::old('email'), array('class' => ('form-control ' . $errors->first('email', 'error')) )) }}
                            </div>
                    </div>
                </div>
                @if ($errors->first('email'))
                    <div class="row"> <div class="col-md-12 error-message"> {{ $errors->first('email') }} </div> </div>
                @endif

                <!--------------- パスワード ---------------->
                <div class="row">
                    <div class="col-md-12">
                            <div class="form-group">
                                {{ Form::label('password', '登録パスワード') }}
                                {{ Form::password('password', array('class' => 'form-control')) }}
                            </div>
                    </div>
                </div>
                @if ($errors->first('password'))
                    <div class="row"> <div class="col-md-12 error-message"> {{ $errors->first('password') }} </div> </div>
                @endif
                
                <div class="row">
                    <div class="col-md-12">
                            <div class="form-group">
                                {{ Form::label('confirm_password', '登録パスワード(確認)') }}
                                {{ Form::password('confirm_password', array('class' => 'form-control')) }}
                            </div>
                    </div>
                </div>
                @if ($errors->first('confirm_password'))
                    <div class="row"> <div class="col-md-12 error-message"> {{ $errors->first('confirm_password') }} </div> </div>
                @endif

                <div class="row">
                    <div class="col-md-12">
                        {{ Form::submit('登録する', array('class' => 'btn btn-primary center-block')) }}
                    </div>
                </div>
                {{ Form::close() }}

            </div>
        </div>
    </div>
</div>



</div>

@stop
