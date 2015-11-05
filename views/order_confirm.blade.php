<!-- app/views/user/create.blade.php -->
@extends('layouts.default')

@section('content')

<div class="container">



{{ Form::open(array('url' => 'orderConfirm')) }}

    <input type="hidden" name="acc_name" value="{{ Auth::user()->acc_name }}">
    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

    <input type="hidden" name="money" value="">
    
    <input type="hidden" name="store_name" value="{{$orders['store_name']}}" />
    <input type="hidden" name="store_name_publication" value="{{$orders['store_name_publication']}}" />
    <input type="hidden" name="postal_code" value="{{$orders['postal_code']}}" />
    <input type="hidden" name="phone_number" value="{{$orders['phone_number']}}" />
    <input type="hidden" name="title" value="{{$orders['title']}}" />
    <input type="hidden" name="description" value="{{$orders['description']}}" />
    <input type="hidden" name="category_id" value="{{$orders['category_id']}}" />
    <input type="hidden" name="target_customer_sex" value="{{$orders['target_customer_sex']}}" />
    <input type="hidden" name="target_customer_age" value="{{$orders['target_customer_age']}}" />

    <input type="hidden" name="list_image_filename1" value="{{$orders['list_image_filename1']}}"/>

    <input type="hidden" name="list_image_filename2" value="{{$orders['list_image_filename2']}}"/>
    <input type="hidden" name="list_image_filename3" value="{{$orders['list_image_filename3']}}"/>
    <input type="hidden" name="list_image_filename4" value="{{$orders['list_image_filename4']}}"/>
    <input type="hidden" name="list_image_filename5" value="{{$orders['list_image_filename5']}}"/> 

    <input type="hidden" name="money" value="{{$orders['money']}}"/>
    <input type="hidden" name="point" value="{{$orders['point']}}"/>
    <input type="hidden" name="term" value="{{$orders['term']}}"/>

    {{ HTML::style('css/order_confirm_page.css', array('media'=>'screen')); }}

    <div class="row page-message">
        <div class="col-md-12 page-message-top">
            <h1>依頼内容のご確認</h1>
        </div>
        <div class="col-md-12 page-message-bottom">
        </div>
    </div>

    @include('orderConfirm', ['orders'])

    <div class="row">
        <div class="col-md-6">
            <a href="{{URL::to('/order')}}">
              {{ Form::button('　　戻る　　', ['class' => 'btn btn-primary center-block', 'name' =>'back']) }}
           </a>
        </div>
        <div class="col-md-6">
            {{ Form::submit('　　確認　　', array('class' => 'btn btn-primary center-block', 'name' =>'confirm')) }}
        </div>
    </div>

{{ Form::close() }}


</div>

@stop

