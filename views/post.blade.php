@extends('layouts.default')

@section('content')

{{ HTML::style('css/quill.base.css', array('media'=>'screen')); }}
{{ HTML::style('css/quill.snow.css', array('media'=>'screen')); }}
{{ HTML::script('js/quill.js'); }}
{{ HTML::script('js/quill.min.js'); }}

<div class="container">

<!-- ここのスタイルは後で消す。わかり易くするため -->
<style>
  div {
    border: solid 1px;
    //margin: 10px;
  }
</style>

<h1>Post Page</h1>
  
  <!-- Order -->
  <div class="row">
    <div class="col-md-6">
      <div class="row">
        <div class="col-md-12">
          <!-- 画像スライド -->
          @include('orderImgCarousel', ['order'])
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row">
        <div class="col-md-12">
          <!-- タイトル -->
          タイトル：{{ $order->title }}
        </div>
        <div class="col-md-12">
          依頼者：{{-- $order->user->acc_name --}}
        </div>
        <div class="col-md-12">
          <!-- 期間 -->
          募集期間：あと{{ $order->term }}日
        </div>
        <div class="col-md-12">
          <!-- ポイント -->
          ポイント：{{ $order->point }}
        </div>
        <div class="col-md-12">
          <!-- 対象顧客の性別 -->
          対象顧客の性別：
          @if($order->target_customer_sex  == 0)
            All
          @endif
          @if( $order->target_customer_sex == 1)
            Male
          @endif
          @if( $order->target_customer_sex == 2)
            Female
          @endif
        </div>
        <div class="col-md-12">
          <!-- 対象顧客の年齢層 -->
          対象顧客の年齢層：
          @if($order->target_customer_age == 0)
            All
          @endif
          @if($order->target_customer_age == 1)
            ～20
          @endif
          @if($order->target_customer_age == 20)
            20～40
          @endif
          @if($order->target_customer_age == 40)
            40～65
          @endif
          @if($order->target_customer_age == 65)
            65～
          @endif
        </div>
        <div class="col-md-12">
          <!-- viewの数 -->
          View：{{ $order->num_view }}
        </div>
        <div class="col-md-12">
          <!-- タグ -->
          @foreach($order->categories as $category)
            <div class="col-md-6">
              <div class="btn btn-primary">
                {{ $category->name }}
              </div>
            </div>
          @endforeach
        </div>
        @if($order->store_name_publication == 1)
          <!-- お店情報 -->
          <div class="col-md-12">
            店舗名：{{ $order->store_name }}
          </div>
        @endif  

          <div class="col-md-12">
            <img src="{{ asset('images')}}/share_buttons.jpg" class="img-responsive" alt="Responsive image">
            @include('twitter_tweet_share', ['order'])

          </div>
      </div>
    </div>


    <div class="col-md-12">
      <div class="row">
        <div class="col-md-2">
          商品説明
        </div>
        <div class="col-md-12">
          {{ $order->description }}
        </div>
      </div>
    </div>
  </div>
   
  <div class="row">
    <div class="col-md-12">

      <div class="row">
        <div class="col-md-12">
          POPの雛形
        </div>
      </div>


      <form method="POST" action="/post/create" accept-charset="UTF-8" enctype="multipart/form-data">

      <div class="row">

        <div class="col-md-6">
          <div class="row">
            <div class="col-md-12">
              @include('wysiwyg')
            </div>
            <div class="col-md-12">
              <input type="button" class="btn btn-primary" value="投稿する" onClick="postUserPost( {{ $order->id }}, 'pop' )" >
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="row">
            <div class="col-md-12">
              <label for="upload_filename">自分で作ったPOPも投稿できます！</label>
              <input class="form-control" name="upload_filename" type="file">
            </div>
            <div class="col-md-12">
              <input type="hidden" value="{{ $order->id }}" name="order_id">

              <input type="submit" class="btn btn-primary" value="投稿する" name="upload">
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          {{-- 実際のPOST FormはJavascriptで作成する --}}
          <div class="row">
            <div class="col-md-12">
              コメント {{ Form::text('user_post', Input::old('user_post'), ['class' => 'form-control', 'id' => 'user_post']) }}
            </div>
          </div>
        </div>
      </div>

      </form>


    </div>
  </div>



  {{-- <!-- Old Post --> --}}
  <div class="row">

  <div class="col-md-12">
      <img src="{{ asset('images')}}/adv.png" class="img-responsive center-block" alt="Responsive image"> 
  </div>

    <div class="col-md-1">
    </div>

    <div class="col-md-10">

      <div class="row">
        <div class="col-md-8">
           過去のPOP
        </div>
      </div>
 
      @foreach($pop_posts as $post)
        <div class="row">
          <div class="col-md-8">
            @if(empty($post->upload_filename))
              img：{{ $post->pop_filename }}
              {{-- HTML::image('post_images/'.$post->pop_filename, '', array('class' => 'img-responsive')) --}}
            @else
              img：{{ $post->upload_filename }}
              {{ HTML::image('post_images/'.$post->upload_filename, '', array('class' => 'img-responsive')) }}
            @endif
          </div>
          <div class="col-md-4">
            <div class="row">
              <div class="col-md-12">
                コメント：{{ $post->post }}
              </div>
              <div class="col-md-12">
                作者：{{ $post->user->acc_name }}
              </div>
              <div class="col-md-12">
                作成日時：{{ $post->created_at }}
              </div>
            </div>
          </div>
        </div>

        <!-- レスの表示 -->
        @foreach($post->relative_posts as $res_post)
          <div class="row">
            <div class="col-md-7 col-md-offset-2">
              {{ $res_post->post }}
            </div>
            <div class="col-md-3">
              <div class="row">
                <div class="col-md-12">
                  {{ $res_post->user->acc_name }}
                </div>
                <div class="col-md-12">
                  {{ $res_post->created_at }}
                </div>
              </div>
            </div>
          </div>
        @endforeach

        <!-- レスの投稿 -->
        <div class="row">
          <form method="POST" action="/post/create" accept-charset="UTF-8" enctype="multipart/form-data">
          <input type="hidden" value="{{ $post->id }}" name="relative_post_id">
          <input type="hidden" value="{{ $order->id }}" name="order_id">
          <div class="col-md-7 col-md-offset-2">
            <textarea rows="2" cols="70" name="user_post" placeholder="コメント"></textarea>
          </div>
          <div class="col-md-3">
            <input type="submit" class="btn btn-sm btn-primary" value="投稿する" name="response">
          </div>
          </form>
        </div>
      @endforeach

    </div>

    <div class="col-md-1">
    </div>

  </div>


</div>


<script type="text/javascript">
function postUserPost(order_id, name) {
  var user_pop= editor.getText();
  console.log(user_pop);

  var form = document.createElement('form');
  document.body.appendChild(form);

  var input_pop = document.createElement('input');
  input_pop.setAttribute('type', 'hidden');
  input_pop.setAttribute('name', 'user_pop');
  input_pop.setAttribute('value', user_pop);
  form.appendChild(input_pop);

  var input_text = document.createElement('input');
  input_text.setAttribute('type', 'hidden');
  input_text.setAttribute('name', 'user_post');
  input_text.setAttribute('value', document.getElementById('user_post').value);
  form.appendChild(input_text);

  var input_order_id = document.createElement('input');
  input_order_id.setAttribute('type', 'hidden');
  input_order_id.setAttribute('name', 'order_id');
  input_order_id.setAttribute('value', order_id);
  form.appendChild(input_order_id);

  var hidden = document.createElement('input');
  hidden.setAttribute('type', 'hidden');
  hidden.setAttribute('name', name);
  hidden.setAttribute('value', name);
  form.appendChild(hidden);

  form.setAttribute('action', '/post/create');
  form.setAttribute('method', 'post');
  form.submit();
}


</script>

@stop

