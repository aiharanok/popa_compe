@extends('layouts.default')

@section('content')

<div class="container">

    {{ HTML::style('css/order_confirm_page.css', array('media'=>'screen')); }}

    <div class="row page-message">
        <div class="col-md-12 page-message-top">
            <h1>ご依頼ありがとうございます</h1>
        </div>
   　   <div class="col-md-12 page-message-middle">
            (下記の内容で承りました)
        </div>
        <div class="col-md-12 page-message-bottom">
        </div>
    </div>

    @include('orderConfirm', ['orders'])

    <div class="row">
        <div class="col-md-12">
            <a href="{{URL::to('user/home')}}">
                {{ Form::button('　　　ホーム画面へ　　　', ['class' => 'btn btn-info center-block', 'name' =>'back']) }}
            </a>
        </div>
    </div>

</div>


@stop

