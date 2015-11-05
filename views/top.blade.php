@extends('layouts.default')


@section('content')


<div class="container">


<!-- ここのスタイルは後で消す。わかり易くするため -->
<style>
  div {
    // border: solid 1px;
    // margin: 10px;
  }


.top-catchcopy-logo{
    //position: relative;
    width: 1100px;
    height: 200px;
    //border: 3px solid gray;
    margin: 20px;
}

.top-catchcopy-label-01 {
    position: absolute;
    
    width:        80%;
    top:           20px;
    left:           0px;
    
    color:       black;
    font-size:   1.0em;
    
    // background-color: rgba(0, 0, 0, 0.5);
    padding: 10px;

    -webkit-box-sizing: border-box; -moz-box-sizing: border-box; -o-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
}

.top-catchcopy-label-02 {
    position: absolute;
    
    width:        80%;
    top:           80px;
    left:           0px;
    
    color:       black;
    font-size:   0.7em;
    
    // background-color: rgba(0, 0, 0, 0.5);
    padding: 10px;

    -webkit-box-sizing: border-box; -moz-box-sizing: border-box; -o-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
}

.top-catchcopy-label-03 {
    position: absolute;
    
    width:        80%;
    top:          150px;
    left:        0px;
    
    color:       black;
    font-size:   1.3em;
    
    // background-color: rgba(0, 0, 0, 0.5);
    padding: 10px;

    -webkit-box-sizing: border-box; -moz-box-sizing: border-box; -o-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
}


.top-catchcopy-label-04 {
    position: absolute;
    
    width:        80%;
    top:            0px;
    left:        0px;
    
    color:       black;
    font-size:   1.2em;
    
    // background-color: rgba(0, 0, 0, 0.5);
    padding: 10px;

    -webkit-box-sizing: border-box; -moz-box-sizing: border-box; -o-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
}


.top-catchcopy-label-05 {
    position: absolute;
    
    width:        80%;
    top:           30px;
    left:        0px;
    
    color:       black;
    font-size:   1.4em;
    
    // background-color: rgba(0, 0, 0, 0.5);
    padding: 10px;

    -webkit-box-sizing: border-box; -moz-box-sizing: border-box; -o-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
}


.top-catchcopy-label-06 {
    position: absolute;
    
    width:        80%;
    top:           130px;
    left:        0px;
    
    color:       black;
    font-size:   1.6em;
    
    // background-color: rgba(0, 0, 0, 0.5);
    padding: 10px;

    -webkit-box-sizing: border-box; -moz-box-sizing: border-box; -o-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
}


.top-catchcopy-label-07 {
    position: absolute;
    
    width:        80%;
    top:          100px;
    left:        0px;
    
    color:       black;
    font-size:   2.0em;
    
    // background-color: rgba(0, 0, 0, 0.5);
    padding: 10px;

    -webkit-box-sizing: border-box; -moz-box-sizing: border-box; -o-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
}


.top-catchcopy-label-08 {
    position: absolute;
    
    width:        80%;
    top:           10px;
    left:        0px;
    
    color:       black;
    font-size:   1.8em;
    
    // background-color: rgba(0, 0, 0, 0.5);
    padding: 10px;

    -webkit-box-sizing: border-box; -moz-box-sizing: border-box; -o-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
}


.top-catchcopy-label-09 {
    position: absolute;
    
    width:        80%;
    top:          140px;
    left:        0px;
    
    color:       black;
    font-size:   1.7em;
    
    // background-color: rgba(0, 0, 0, 0.5);
    padding: 10px;

    -webkit-box-sizing: border-box; -moz-box-sizing: border-box; -o-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
}



.top-catchcopy-label-10 {
    position: absolute;
    
    width:        80%;
    top:          100px;
    left:        0px;
    
    color:       black;
    font-size:   0.9em;
    
    // background-color: rgba(0, 0, 0, 0.5);
    padding: 10px;

    -webkit-box-sizing: border-box; -moz-box-sizing: border-box; -o-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
}


.top-catchcopy-label-11 {
    position: absolute;
    
    width:        80%;
    top:           50px;
    left:        0px;
    
    color:       black;
    font-size:   1.4em;
    
    // background-color: rgba(0, 0, 0, 0.5);
    padding: 10px;

    -webkit-box-sizing: border-box; -moz-box-sizing: border-box; -o-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
}

.top-catchcopy-image {
    margin: 0 auto;  
    display: inline;
}

.top-catchcopy-introduction {
}

.top-catchcopy-description {
  padding: 20px;
}
.top-catchcopy-description-wide {
  font-size: 3em;
}

.top-catchcopy-login {
  padding: 30px;
}

.top-catchcopy-register-sns {
  font-size: 24px;
  color: #328acd;
  text-shadow: 0 1px 1px #fff;
  text-align: center;
}

.top-catchcopy-register-link {
  margin-top: 20px;
  margin-bottom: 20px;

  font-size: 30px;
  color: #328acd;
  text-shadow: 0 1px 1px #fff;
  text-align: center;
}

.advertisement-box-sidebar {
  padding-top:    20px;
  padding-bottom: 20px;
}

.advertisement {
  padding-bottom: 20px;
}

.attention-call-box {
  padding: 2px;
  text-align: center;
  border-radius: 3px 3px;
  background-color: #FF4500;
  font-size: 16px;
  font-weight: bold;
  color: white;
  overflow: hidden;
}


.attemtion-order-box {
  margin-top: 10px;
  margin-bottom: 20px;
  text-align: center;
}
.attemtion-order-box-title {
  font-size: 14px;
}
.attemtion-order-box-image {
  text-align: center;
  margin-bottom: 10px;
}
.attemtion-order-box-num-view {
  margin-bottom: 10px;
}

.order-box-row {
}

.order-box-col{
  // margin-bottom: 20px;
  border: solid 2px #cccccc;
}

.order-box-innner-ad {
  margin-top: 10px;
  margin-bottom: 20px;
}


.order-box-title {
    font-size:   1.5em;
}

.order-box-description {
  padding: 8px;
  word-wrap: break-word;
}

.order-box-attributes {
  padding: 8px;
  display: table;
  width: 100%;
}
.order-box-num-view {
  padding: 8px;
  display: table-cell;
  height: 100%;
  border-left: 1px dotted gray;
}
.order-box-num-comment {
  padding: 8px;
  display: table-cell;
  height: 100%;
  border-left: 1px dotted gray;
}
.order-box-num-pop {
  padding: 8px;
  display: table-cell;
  height: 100%;
  border-left: 1px dotted gray;
}


</style>

<script src="{{ asset('js')}}/topvirticalorder.js"></script>
<script src="{{ asset('js')}}/jquery.marquee.js"></script>
<script>
    $(function () {
       var marquee_classname_part = '.top-catchcopy-label-';
       for (i = 1; ; i++) {
           var marquee_classname = marquee_classname_part + ("00" + i).substr(-2)
           console.log(marquee_classname);
           var marquee_item = $(marquee_classname);
           if ( ! marquee_item[0] )
               break;

           var duration         = 5000 + Math.floor(Math.random()*5000);
           var delayBeforeStart = Math.floor(Math.random()*2000);
           console.log(duration);
           console.log(delayBeforeStart);
           marquee_item.marquee({
               direction:        'left',
               duration:         duration,
               delayBeforeStart: delayBeforeStart
           });
       }
    });

</script>


<!--
<h1>Top Page</h1>
-->

  @if(! UserController::is_logined())

      <div class="row">
        <div class="col-md-12">
    
          <div class="row">
            <div class="col-md-12 top-catchcopy-logo">
               <div class="row">
                    <div class="col-md-12 top-catchcopy-label-01">知ってた？こんな使いかた</div>
                    <div class="col-md-12 top-catchcopy-label-02">ＰＯＰで楽しいお買い物</div>
                    <div class="col-md-12 top-catchcopy-label-03">あなたのアイディア、役に立つ</div>
                    <div class="col-md-12 top-catchcopy-label-04">選ぶの楽しい、でもちょっとたいへん</div>
                    <div class="col-md-12 top-catchcopy-label-05">クスッと笑えるＰＯＰを書こう</div>
                    <div class="col-md-12 top-catchcopy-label-06">「安い！」だけじゃもの足りない</div>
                    <div class="col-md-12 top-catchcopy-label-07">こだわりのオススメ</div>
                    <div class="col-md-12 top-catchcopy-label-08">私のＰＯＰが載っちゃうの？</div>
                    <div class="col-md-12 top-catchcopy-label-09">あなたしか知らない良いところ</div>
                    <div class="col-md-12 top-catchcopy-label-10">今日はなに食べよ</div>
                    <div class="col-md-12 top-catchcopy-label-11">本日超特価！だからどうした！</div>
                    <div class="col-md-12 top-catchcopy-image">
                      {{HTML::image('system/images/popa_logo_top.png', 'logo', ['class' => 'img-responsive center-block']) }}
                    </div>
               </div>
            </div>
          </div>
    
          <div class="row top-catchcopy-introduction">
            <div class="col-md-5 top-catchcopy-description">
              <div class="row">
                <div class="col-md-12 top-catchcopy-description-wide">
                  お店のＰＯＰをみんなで作ろう！
                </div>
                <div class="col-md-12 top-catchcopy-normal">
                  ＰＯＰＡはみなさんのお買い物経験を生かしてＰＯＰを作るサービスです。採用されればポイントゲット！
                </div>
              </div>
            </div>
            <div class="col-md-7 top-catchcopy-login">
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-12 top-catchcopy-register-sns">
                      ＳＮＳアカウントで簡単に始めよう
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-2">
                      <a href="{{URL::to('/oauthtwitter')}}"> <img src={{asset('system/images/system_logo_twitter.png')}}  alt="Twitter"  class="auth-sns-logos"></a>
                    </div>
                    <div class="col-md-2">
                      <a href="{{URL::to('/oauthfacebook')}}"><img src={{asset('system/images/system_logo_facebook.png')}} alt="Facebook" class="auth-sns-logos"></a>
                    </div>
                    <div class="col-md-2">
                      <a href="{{URL::to('/oauthmixi')}}">    <img src={{asset('system/images/system_logo_mixi.png')}}     alt="Mixi"     class="auth-sns-logos"></a>
                    </div>
                    <div class="col-md-2">
                      LINE
                    </div>
                    <div class="col-md-2">
                    </div>
                  </div>
                </div>
              </div>
                      
              <div class="row">
                <div class="col-md-12 top-catchcopy-register-link">
                  <a href="{{ URL::to('user/create') }}"> 【新規登録はこちら】 </a>
                </div>
              </div>
            </div>
          </div>
    
        </div>
      </div>
  @endif

  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-8">
          ここには認証やタグ、その他のコンテンツが入る<br>
          <div class="row">
            <div class="col-md-12">
              <h3>公式アカウントをフォロー</h3>
              <a href="https://twitter.com/intent/follow?screen_name={{ Config::get('constants.SCREEN_NAME') }}">
                <img src={{asset('system/images/system_logo_twitter.png')}} alt="Twitter" width="30" height="30">
              </a>
            </div>
          </div>
          いまはダミー<br>
          いまはダミー<br>
        </div>
        <div class="col-md-3">
          いまはダミー<br>
          いまはダミー
        </div>
      </div>
    </div>
  </div>


  @if(!empty($orders))
    <div class="row">
      <div class="col-md-8">
        <?php $count = 0; ?>
        @foreach($orders as $order)
		  <?php $virt_num = $count + 1; $virt_id = "virt_id_{$virt_num}"; ?>
          <div class = "col-md-6 order-box-col" id="{{ $virt_id }}">
            <div class="row">
              <div class="col-md-12">
                <a href="post/{{ $order->id }}">
                  {{HTML::image('order_images/'.$order->list_image_filename1, $order->title, array('class' => 'img-responsive center-block')) }}
                </a>
                
                @foreach($order->categories as $category)
                  <div class="col-md-6">
                    <a href="/?c={{ $category->id }}" class="btn btn-sm btn-primary">{{ $category->name }}</a>
                  </div>
                @endforeach
                
              </div>
            </div>
            
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-12 order-box-title">{{ $order->title }}</div>
                </div>
                <div class="row">
                  <div class="col-md-6 order-box-description">{{ $order->description }}</div>
                  <div class="col-md-6">
                    <div class="row order-box-attributes">
                      <div class="col-md-4 order-box-num-view">ビュー {{ $order->num_view }}</div>
                      <div class="col-md-4 order-box-num-comment">コメント{{ $order->num_comment }}</div>
                      <div class="col-md-4 order-box-num-pop">ＰＯＰ {{ $order->num_pop }}</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php $count++; ?>
        @endforeach
      </div>

      <div class="col-md-4">
        <div class="row">
          <div class="col-md-11">
            @include('select_categories_top',[$categories])
          </div>
        </div>

        <div class="row advertisement-box-sidebar">
          <div class="col-md-11">
            {{HTML::image('temporary/dummy_ad_box_normal_01.jpg', 'ad', ['class' => 'img-responsive center-block advertisement']) }}
            {{HTML::image('temporary/dummy_ad_box_normal_02.jpg', 'ad', ['class' => 'img-responsive center-block advertisement']) }}
            <ul>
              <li>今はダミー</li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-11">
            <div class="row">
              <div class="col-md-12 attention-call-box">注目のネタ</div>
              <div class="col-md-12">
                @foreach($attentionOrders as $attentionOrder)
                  <div class="row attemtion-order-box">
                    <div class="row">
                      <div class="col-md-12 attemtion-order-box-title">
                        <a href="post/{{ $attentionOrder->id }}">{{ $attentionOrder->title }}</a>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 attemtion-order-box-image">
                        <a href="post/{{ $attentionOrder->id }}">
                          {{HTML::image('order_images/'.$attentionOrder->list_image_filename1, $attentionOrder->title, array('class' => 'img-responsive center-block')) }}
                        </a>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 attemtion-order-box-num-view">
                        {{ $attentionOrder->num_view }} 人がこの記事を見ています
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  @else
    <div class="row">
      <div class="col-md-12"><h1>募集中の依頼はありません</h1></div>
    </div>
  @endif

  {{-- 広告枠を最下段へ移したことによる処理削除 --}}
  {{-- @if($count == 6)                         --}}
    <div class="row order-box-innner-ad">
      <div class = "col-md-12">
        <div class="row">
          <div class="col-md-4">
            <a href="#">
              ダミー広告
              {{HTML::image('temporary/dummy_ad_box_small_01.jpg', 'ad', ['class' => 'img-responsive center-block advertisement']) }}
            </a>
          </div>
          <div class="col-md-4">
            <a href="#">
              ダミー広告
              {{HTML::image('temporary/dummy_ad_box_small_02.jpg', 'ad', ['class' => 'img-responsive center-block advertisement']) }}
            </a>
          </div>
          <div class="col-md-4">
            <a href="#">
              ダミー広告
              {{HTML::image('temporary/dummy_ad_box_small_03.jpg', 'ad', ['class' => 'img-responsive center-block advertisement']) }}
            </a>
          </div>
        </div>
      </div>
    </div>
  {{-- @endif --}}

{{ $orders->appends(Request::only('q','c'))->links() }}

</div>


@stop

