<!-- app/views/user/create.blade.php -->
@extends('layouts.default')

@section('content')
<div class="container">

{{ HTML::style('css/order_page.css', array('media'=>'screen')); }}

<div class="row page-message">
  <div class="col-md-12 page-message-top">
    <h1>お値段と募集期限を選択</h1>
  </div>
  <div class="col-md-12 page-message-middle">
    (500円、800円のご依頼だと柔軟に期限を選択できます)
  </div>
  <div class="col-md-12 page-message-bottom">
  </div>
</div>

<!-- if there are creation errors, they will show here -->
{{-- コメントアウト
  {{ HTML::ul($errors->all()) }}
  フォームの色を変えて知らせるため、最上段表示はしない
--}}


{{ Form::open(array('url' => 'orderPayment')) }}

    <!-- -------------------- お値段 ----------------------- -->
    <div class="row input-row">
        <div class="col-md-2 input-title-box">
            <div class="row input-title-row">
                <div class="col-md-12 input-title-box-title">
                    <label for="service stage">お値段</label>
                </div>
            </div>
            <div class="row input-title-row">
                <div class="col-md-12">
                    <span class="mandatory">必須</span>
                </div>
            </div>
        </div>

        <div class="col-md-10 input-item-box">
            <div class="row input-item-row">
                <div class="radio-inline btn-group" data-toggle="buttons">
                    @foreach($service_stages as $ss)
                       <label class="btn btn-default" id="money_select">
                         {{ Form::radio('money', $ss->money, ($ss->money == $smallestValue) ? true : false , ['id' => 'money', 'onclick' => 'generateDate()']) }}{{$ss->money}}
                       </label>
                    @endforeach
                </div>
            </div>
            <div class="row input-item-row">
                <div class="col-md-12 input-item-example">
                    なぜだかJSがうごかない！！！あとで解析
                </div>
            </div>
            <div class="row input-item-row">
                <div class="col-md-12">
                </div>
            </div>
        </div>
    </div>
    

    <!-- -------------------- 期限選択 ----------------------- -->
    <div class="row input-row">
        <div class="col-md-2 input-title-box">
            <div class="row input-title-row">
                <div class="col-md-12 input-title-box-title">
                    <label for="service stage">期限選択</label>
                </div>
            </div>
            <div class="row input-title-row">
                <div class="col-md-12">
                    <span class="mandatory">必須</span>
                </div>
            </div>
        </div>

        <div class="col-md-10 input-item-box">
            <div class="row input-item-row">
                <div class="col-md-12">
                     <select name="sdate" id="sdate">
                     </select>
                </div>
            </div>
            <div class="row input-item-row">
                <div class="col-md-12 input-item-example">
                    なぜだかJSがうごかない！！！あとで解析
                </div>
            </div>
            <div class="row input-item-row">
                <div class="col-md-12">
                </div>
            </div>
        </div>
    </div>


    
    <input type="hidden" id="order_low_term" name="order_low_term" value="0">
    <input type="hidden" id="order_high_term" name="order_high_term" value="0">
    <input type="hidden" name="acc_name" value="{{ Auth::user()->acc_name }}">
    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
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

    <input type="hidden" name="category_news_name" value="{{$orders['category_news_name']}}" />


    <div class="row">
        <div class="col-md-6 free-order-btn-box">
             <a href="{{URL::to('/order')}}">
                {{ Form::button('　　　戻る　　　', ['class' => 'btn btn-primary', 'name' =>'back']) }}
             </a>
        </div>
        <div class="col-md-6 payment-order-btn-box">
           {{ Form::submit('　　　お支払い　　　', array('class' => 'btn btn-primary', 'name' =>'credit')) }}
        </div>
    </div>



{{ Form::close() }}

</div>


<script src="{{ asset('js')}}/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        generateDate();
    });

    $(document).on('click', 'label[id="money"]', function(event) {
        console.log('hello');
        console.log('data=' + $('#money:checked').val());
    })
</script>

<script>
    
    function generateDate()
    {
        $.ajax({
            type: "GET",
            dataType: "json",
            url: 'orderDate',
            data:'money='+$('#money:checked').val(),

            beforeSend: function(){
            },
            success: function (data) 
            {      
                $('#sdate').empty();

                $.each(data, function(index, item_data){
                    $('#sdate').append('<option value='+item_data.select_date+'>'+item_data.select_date+'</option>')
                });
            },
            complete: function(){
                // do the following after success is done.
            },
            error: function(){
                // do the following if there is error. 
            }
        });
    }
</script>

@stop

