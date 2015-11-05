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
    // margin: 10px;
  }

  .plan{
    color:red;

    margin-left: 250px;
    background:url('/images/star.png');
    background-size: 80px; 
    background-repeat: no-repeat;
  }

  /*.use_point{
    display: none;
  }*/


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
          <!-- ポイント -->
          ポイント：{{ $order->point }}
        </div>
      </div>
    </div>
  </div>
   
  {{-- <!-- Old Post --> --}}
  <div class="row">
    <div class="col-md-12">
      過去のPOP
    </div>
  </div>


  <div class="row">
    <div class="col-md-12">
      @foreach($prized_posts as $post)
        <div class="row">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-8" style="margin-top:40px; margin-bottom:40px; text-align:center;">
                <!-- <p id="p_type{{ $post->id }}" class="plan">hoge</p><br/><br/> -->
                <!-- <img src="{{ asset('images')}}/pop (1).jpg" class="img-responsive select_plan" alt="Responsive image" id="post_{{ $post->id }}" width="304" height="236"> -->
                @if ($post->got_prize === 1)
                  <!-- <p>Gold</p> --> {{$post->pop_filename}}
                  {{ HTML::image('system/images/medal_1.jpg', '', array('style' => 'position:absolute; margin-top:-40px; margin-left:-40px; width:90; height:110px; z-index:1')) }}
                @elseif ($post->got_prize === 2)
                  <!-- <p>Silver</p> --> {{$post->pop_filename}}
                  {{ HTML::image('system/images/medal_2.jpg', '', array('style' => 'position:absolute; margin-top:-40px; margin-left:-40px; width:90; height:110px; z-index:1')) }}
                @elseif ($post->got_prize === 3)
                  <!-- <p>Bronze</p> --> {{$post->pop_filename}}
                  {{ HTML::image('system/images/medal_3.jpg', '', array('style' => 'position:absolute; margin-top:-40px; margin-left:-40px; width:90; height:110px; z-index:1')) }}
                @else
                  <p>Other</p> ---{{$post->pop_filename}}
                @endif
                <img src="{{ asset('images')}}/pop (1).jpg" class="select_plan" alt="image" id="post_{{ $post->id }}" width="304" height="236" style="position:relative">
              </div>
              <div class="col-md-2"></div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="row">
              <div class="col-md-12"> 作者：{{$post->user->acc_name}} </div>
              <div class="col-md-12"> 作成日時：{{ $post->created_at }} </div>
              <div class="col-md-12"> ？？？： </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
 
  <div class="row">
    <div class="col-md-12">

      @foreach($posts as $post)
        <div class="row">
          <div class="col-md-8">
            <p id="p_type{{ $post->id }}" class="plan"></p><br/><br/>
            <img src="{{ asset('images')}}/pop (1).jpg" class="img-responsive select_plan" alt="Responsive image" id="post_{{ $post->id }}" width="304" height="236"><br/><br/>
          </div>
          <div class="col-md-4">
            <div class="row">
              <div class="col-md-12"> 作者：{{$post->user->acc_name}} </div>
              <div class="col-md-12"> 作成日時：{{ $post->created_at }} </div>
              <div class="col-md-12"> ？？？： </div>
            </div>
          </div>
        </div>
      @endforeach

    </div>

  </div>


</div>


<script src="{{ asset('js')}}/jquery.js"></script>
<script src="{{ asset('js')}}/jquery.min.js"></script>

<script>

$(document).ready(function(){


    $(".select_plan").click(function(){


        var click_id = this.id;

        var click_id = click_id.substring(click_id.indexOf('_') +1);
        


        if ($('#gg').is(':visible') && $('#ss').is(':visible') && $('#bb').is(':visible')) {  
            $("#gg").hide();

            $("#p_type"+click_id).text($('#gg').text());
            $("#post_id_"+click_id).val('1');


        }

        else if ($("#gg").is(":hidden") && $('#ss').is(':visible') && $('#bb').is(':visible')) {  
            $("#ss").hide();

            $("#p_type"+click_id).text($('#ss').text());
            $("#post_id_"+click_id).val('2');

        }
        else if ($("#gg").is(":hidden") && $('#ss').is(':hidden') && $('#bb').is(':visible')){
            $("#bb").hide();
            
            $("#p_type"+click_id).text($('#bb').text());
            $("#post_id_"+click_id).val('3');
            

        }



        });



    $("#cancel").click(function(){

      var ids = [];

      $('.select_plan').each( function(i,e) {
        /* you can use e.id instead of $(e).attr('id') */
        ids.push($(e).attr('id'));
      });

      //alert(id.length);

      for (i=0 ; i<ids.length; i++)
      {
          var id = ids[i];
          var p_type_id = id.replace('post_', 'p_type');
          var post_id = id.replace('post_', 'post_id_');

          $("#"+p_type_id).text('');
          $("#"+post_id).val('');
      }


          $(".use_point").hide();

          $("#gg").show();
          $("#ss").show();
          $("#bb").show();



    });

});
</script>

@stop

