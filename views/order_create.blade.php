<!-- app/views/user/create.blade.php -->

@extends('layouts.default')

@section('content')

<div class="container">

    {{ HTML::style('css/order_page.css', array('media'=>'screen')); }}


    <div class="row page-message">
      <div class="col-md-12 page-message-top">
        <h1>新しくＰＯＰを募集</h1>
    </div>
    <div class="col-md-12 page-message-middle">
        (5分で完了します)
    </div>
    <div class="col-md-12 page-message-bottom">
    </div>
</div>


<!-- if there are creation errors, they will show here -->

{{-- コメントアウト
  フォームの色を変えて知らせるため、最上段表示はしない
  {{ HTML::ul($errors->all()) }}
  --}}


  {{ Form::open(array('url' => 'order', 'files'=>true)) }}

  <input type="hidden" name="acc_name" value="{{ Auth::user()->acc_name }}">
  <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">


  <!-- -------------------- タイトル ----------------------- -->
  <div class="row input-row">
    <div class="col-md-2 input-title-box">
        <div class="row input-title-row">
            <div class="col-md-12 input-title-box-title">
                <label for="store_name">タイトル</label>
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
                <input class="form-control {{ $errors->first('title', 'error') }}" name="title" type="text" id="title" value="{{ $input_data['title'] }}">
            </div>
        </div>
        <div class="row input-item-row">
            <div class="col-md-12 input-item-example">
                例) 「栄養バツグンの豆乳ドリンクを仕入れました。上手いＰＯＰをお願いします」
            </div>
        </div>
        <div class="row input-item-row">
            <div class="col-md-12">
            </div>
        </div>
    </div>
</div>


<!-- -------------------- ご説明 ----------------------- -->
<div class="row input-row">
    <div class="col-md-2 input-title-box">
        <div class="row input-title-row">
            <div class="col-md-12 input-title-box-title">
                <label for="store_name">ご説明</label>
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
                <textarea rows="8" class="form-control {{ $errors->first('description', 'error') }}" name="description" id="description">{{ $input_data['description'] }}</textarea>
            </div>
        </div>
        <div class="row input-item-row">
            <div class="col-md-12 input-item-example">
                例) 「栄養バツグンの豆乳ドリンクを仕入れました。上手いＰＯＰをお願いします」
            </div>
        </div>
        <div class="row input-item-row">
            <div class="col-md-12">
                エラーメッセージが入る
            </div>
        </div>
    </div>
</div>



<!-- -------------------- 商品・陳列画像 ----------------------- -->
<div class="row input-row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-4 input-title-box">
                <div class="row input-title-row">
                    <div class="col-md-6 input-title-box-title">
                        <label for="store_name">商品、陳列画像</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <label for="list_image_filename1">前から</label>
                    <span class="mandatory">必須</span>
                    @if(isset($input_data['list_image_filename1']))
                        <label id="lbl_img1" for="list_image_filename1" class="form-control  {{ $errors->first('list_image_filename1', 'error') }}">{{ $input_data['list_image_filename1'] }}</label>
                        <input id="list_image_filename1" type="hidden" name="list_image_filename1" value="{{ $input_data['list_image_filename1'] }}">
                        <span class="btn btn-danger glyphicon glyphicon-remove" id="del_img_1"></span>
                    @else
                        <input class="form-control {{ $errors->first('list_image_filename1', 'error') }}" name="list_image_filename1" type="file" id="list_image_filename1">
                    @endif
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                   <label for="list_image_filename2">ちょっと離れたところから</label>
                   <span class="optional">任意</span>
                   @if(isset($input_data['list_image_filename2']))
                       <label id="lbl_img2" for="list_image_filename2" class="form-control">{{ $input_data['list_image_filename2'] }}</label>
                       <input id="list_image_filename2" type="hidden" name="list_image_filename2" value="{{ $input_data['list_image_filename2'] }}">
                       <span class="btn btn-danger glyphicon glyphicon-remove" id="del_img_2"></span>
                   @else
                       <input class="form-control" name="list_image_filename2" type="file" id="list_image_filename2">
                   @endif
               </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-5">
                <div class="form-group">
                   <label for="list_image_filename3">遠くから棚全体を</label>
                   <span class="optional">任意</span>
                   @if(isset($input_data['list_image_filename3']))
                       <label id="lbl_img3" for="list_image_filename3" class="form-control">{{ $input_data['list_image_filename3'] }}</label>
                       <input id="list_image_filename3" type="hidden" name="list_image_filename3" value="{{ $input_data['list_image_filename3'] }}">
                       <span class="btn btn-danger glyphicon glyphicon-remove" id="del_img_3"></span>
                   @else
                       <input class="form-control" name="list_image_filename3" type="file" id="list_image_filename3">
                   @endif
                </div>
             </div>
             <div class="col-md-5">
                 <div class="form-group">
                     <label for="list_image_filename4">お店の雰囲気が分かるように</label>
                     <span class="optional">任意</span>
                     @if(isset($input_data['list_image_filename4']))
                         <label id="lbl_img4" for="list_image_filename4" class="form-control">{{ $input_data['list_image_filename4'] }}</label>
                         <input id="list_image_filename4" type="hidden" name="list_image_filename4" value="{{ $input_data['list_image_filename4'] }}">
                         <span class="btn btn-danger glyphicon glyphicon-remove" id="del_img_4"></span>
                     @else
                         <input class="form-control" name="list_image_filename4" type="file" id="list_image_filename4">
                     @endif
                 </div>
             </div>
         </div>

         <div class="row">
              <div class="col-md-2">
              </div>
              <div class="col-md-5">
                  <div class="form-group">
                      <label for="list_image_filename5">その他</label>
                      <span class="optional">任意</span>
                      @if(isset($input_data['list_image_filename5']))
                          <label id="lbl_img5" for="list_image_filename5" class="form-control">{{ $input_data['list_image_filename5'] }}</label>
                          <input id="list_image_filename5" type="hidden" name="list_image_filename5" value="{{ $input_data['list_image_filename5'] }}">
                          <span class="btn btn-danger glyphicon glyphicon-remove" id="del_img_5"></span>
                      @else
                          <input class="form-control" name="list_image_filename5" type="file" id="list_image_filename5">
                      @endif
                  </div>
              </div>
              <div class="col-md-5">
              </div>
          </div>
     </div>
</div>


<!-- -------------------- カテゴリ ----------------------- -->
<div class="row input-row">
    <div class="col-md-2 input-title-box">
        <div class="row input-title-row">
            <div class="col-md-12 input-title-box-title">
                <label for="store_name">カテゴリ</label>
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
            <div class="col-md-6 {{ $errors->first('category_id', 'error') }}">
                @foreach($categories as $category)
                    <label class="checkbox-inline">
                        <input name="category_id[]" type="checkbox" value="{{ $category->id }}">

                        {{ $category->name }}
                    </label>
                @endforeach
            </div>
        </div>

        <div class="row input-item-row">
            <div class="col-md-12 input-item-example">
                <div class="row" id='TextBoxesGroup'>
                    <div class="col-md-6" id="TextBoxDiv1">
                        <label>追加 1 : </label><input class="form-control" name="category_new[]" type='text' id='textbox1' value="">
                    </div>
                </div>

                <input class="btn btn-info glyphicon glyphicon-plus" type='button' value='add' id='addButton'>
                <input class="btn btn-danger glyphicon glyphicon-remove" type='button' value='remove' id='removeButton'>
            </div>
        </div>


        <div class="row input-item-row">
            <div class="col-md-12 input-item-example">
            </div>
        </div>
        <div class="row input-item-row">
            <div class="col-md-12">
            </div>
        </div>
    </div>
</div>





<!-- -------------------- 商品のターゲット性別・年代 ----------------------- -->
<div class="row input-row">
    <div class="col-md-2 input-title-box">
        <div class="row input-title-row">
            <div class="col-md-12 input-title-box-title">
                <label for="store_name">商品のターゲット性別・年代 </label>
            </div>
        </div>
        <div class="row input-title-row">
            <div class="col-md-12">
                <span class="optional">任意</span>
            </div>
        </div>
    </div>

    <div class="col-md-10 input-item-box">
        <div class="row input-item-row">
            <div class="radio-inline btn-group" data-toggle="buttons">
                <?php
                $checked_data = [0 => '', 1 => '', 2 => ''];
                $checked_data[$input_data['target_customer_sex']] = 'checked=""';
                $css_active_data = [0 => '', 1 => '', 2 => ''];
                $css_active_data[$input_data['target_customer_sex']] = 'active';
                ?>
                <label class="btn btn-default {{ $css_active_data[0] }} ">
                    <input class="" name="target_customer_sex" type="radio" id="target_customer_sex" value="0" {{ $checked_data[0] }} >
                    全て
                </label>
                <label class="btn btn-default {{ $css_active_data[1] }} ">
                    <input class="" name="target_customer_sex" type="radio" id="target_customer_sex" value="2" {{ $checked_data[2] }} >
                    女性
                </label>
                <label class="btn btn-default {{ $css_active_data[2] }} ">
                    <input class="" name="target_customer_sex" type="radio" id="target_customer_sex" value="1" {{ $checked_data[1] }} >
                    男性
                </label>
            </div>
        </div>
    </div>


    <div class="col-md-10 input-item-box">
        <div class="row input-item-row">
            <div class="radio-inline btn-group" data-toggle="buttons">
                <?php 
                $checked_data = [0 => '', 1 => '', 20 => '', 40 => '', 65 => ''];
                $checked_data[$input_data['target_customer_age']] = 'checked=""';
                $css_active_data = [0 => '', 1 => '', 20 => '', 40 => '', 65 => ''];
                $css_active_data[$input_data['target_customer_age']] = 'active';
                ?>
                <label class="btn btn-default {{ $css_active_data[0] }} ">
                    <input class="" name="target_customer_age" type="radio" id="target_customer_age" value="0"  {{ $checked_data[0] }} >
                    　全て　
                </label>
                <label class="btn btn-default {{ $css_active_data[1] }} ">
                    <input class="" name="target_customer_age" type="radio" id="target_customer_age" value="1"  {{ $checked_data[1] }} >
                    1 ～ 20歳
                </label>
                <label class="btn btn-default {{ $css_active_data[20] }} ">
                    <input class="" name="target_customer_age" type="radio" id="target_customer_age" value="20" {{ $checked_data[20] }}>
                    20 ～ 30 歳
                </label>
                <label class="btn btn-default {{ $css_active_data[40] }} ">
                    <input class="" name="target_customer_age" type="radio" id="target_customer_age" value="40" {{ $checked_data[40] }}>
                    40 ～ 65 歳
                </label>
                <label class="btn btn-default {{ $css_active_data[65] }} ">
                    <input class="" name="target_customer_age" type="radio" id="target_customer_age" value="65" {{ $checked_data[65] }}>
                    65歳 ～
                </label>
            </div>
        </div>
    </div>




</div>



<!-- -------------------- お店のなまえ / 公開・非公開 ----------------------- -->
<div class="row input-row">
    <div class="col-md-2 input-title-box">
        <div class="row input-title-row">
            <div class="col-md-12 input-title-box-title">
                <label for="store_name">お店の名前</label>
            </div>
        </div>
        <div class="row input-title-row">
            <div class="col-md-12">
                <span class="mandatory">必須</span>
            </div>
        </div>
    </div>

    <div class="col-md-8 input-item-box">
        <div class="row input-item-row">
            <div class="col-md-12">
                <input class="form-control {{ $errors->first('store_name', 'error') }}" name="store_name" type="text" id="store_name" value="{{ $input_data['store_name'] }}">
            </div>
        </div>
        <div class="row input-item-row">
            <div class="col-md-12 input-item-example">
                例) 「ＰＯＰＡ秋葉原店」
            </div>
        </div>
        <div class="row input-item-row">
            <div class="col-md-12">
                エラーメッセージが入る
            </div>
        </div>
    </div>

    <div class="col-md-2 input-item-box">
        <div class="row input-item-row">
            <div class="radio-inline btn-group" data-toggle="buttons">
                <?php
                $checked_data = [0 => '', 1 => ''];
                $checked_data[$input_data['store_name_publication']] = 'checked=""';
                        //$checked_data[0] = 'checked="1"';
                $css_active_data = [0 => '', 1 => ''];
                $css_active_data[$input_data['store_name_publication']] = 'active';
                ?>
                <label class="btn btn-default {{ $css_active_data[0] }} ">
                    <input class="" name="store_name_publication" type="radio" id="store_name_publication" value="0" {{ $checked_data[0] }} >
                    非公開
                </label>
                <label class="btn btn-default {{ $css_active_data[1] }} ">
                    <input class="" name="store_name_publication" type="radio" id="store_name_publication" value="1" {{ $checked_data[1] }} >
                    公開 
                </label>
            </div>
        </div>
    </div>
</div>


<!-- -------------------- 郵便番号 ----------------------- -->
<div class="row input-row">
    <div class="col-md-2 input-title-box">
        <div class="row input-title-row">
            <div class="col-md-12 input-title-box-title">
                <label for="store_name">郵便番号</label>
            </div>
        </div>
        <div class="row input-title-row">
            <div class="col-md-12">
                <span class="optional">任意</span>
            </div>
        </div>
    </div>

    <div class="col-md-10 input-item-box">
        <div class="row input-item-row">
            <div class="col-md-4">
                <input class="form-control" name="postal_code" type="text" id="postal_code" value="{{ $input_data['postal_code'] }}">
            </div>
        </div>
        <div class="row input-item-row">
            <div class="col-md-12 input-item-example">
                例) 「001-0001」
            </div>
        </div>
        <div class="row input-item-row">
            <div class="col-md-12">
                エラーメッセージが入る
            </div>
        </div>
    </div>
</div>


<!-- -------------------- 電話番号 ----------------------- -->
<div class="row input-row">
    <div class="col-md-2 input-title-box">
        <div class="row input-title-row">
            <div class="col-md-12 input-title-box-title">
                <label for="store_name">電話番号</label>
            </div>
        </div>
        <div class="row input-title-row">
            <div class="col-md-12">
                <span class="optional">任意</span>
            </div>
        </div>
    </div>

    <div class="col-md-10 input-item-box">
        <div class="row input-item-row">
            <div class="col-md-6">
                <input class="form-control" name="phone_number" type="text" id="phone_number" value="{{ $input_data['phone_number'] }}">
            </div>
        </div>
        <div class="row input-item-row">
            <div class="col-md-12 input-item-example">
                例) 「03-0000-0000」
            </div>
        </div>
        <div class="row input-item-row">
            <div class="col-md-12">
                エラーメッセージが入る
            </div>
        </div>
    </div>
</div>


<div class="row">
 <div class="col-md-6 free-order-btn-box">
  {{ Form::submit('　　無料でお申し込み　　', array('class' => 'btn btn-primary btn-success btn-free-order',                              'name' =>'free')) }}
</div>
<div class="col-md-6 payment-order-btn-box">
  {{ Form::submit('　　有料でお申し込み　　', array('class' => 'btn btn-primary btn-primary btn-payment-order', 'name' => 'pay')) }}
</div>
</div>

{{ Form::close() }}
</div>


<script type="text/javascript">
    $(document).ready(function(){
        var counter = 1;
    
        $("#addButton").click(function () {
            if(counter >= 4){
                return false;
            }   

            counter++;
        
            var newTextBoxDiv = $(document.createElement('div')).attr(
                {id: 'TextBoxDiv' + counter}
            ).addClass('col-md-6');

            var genHtml = '<label>追加 ' + counter + ' : </label>' +
                          '<input class="form-control" name="category_new[]"' +
                              'name="textbox' + counter + '" ' +
                              'id="textbox'   + counter + '" ' +
                              'value="" >';
                    
            console.log(genHtml);
            newTextBoxDiv.after().html(genHtml);
            newTextBoxDiv.appendTo("#TextBoxesGroup");
        });

        $("#removeButton").click(function () {
            if (counter == 1) {
                return false;
            }   
            
            $("#TextBoxDiv" + counter).remove();
            counter--;
          
        });
    
        $("#getButtonValue").click(function () {
            var msg = '';
            for(i = 1; i < counter; i++){
                msg += "\n 新しいカテゴリー #" + i + " : " + $('#textbox' + i).val();
            }
            alert(msg);
        });
    });


    $(document).ready(function(){
        $("#del_img_1").click(function(){
            $(this).hide();
            $('#lbl_img1').hide();
            $('#list_image_filename1').attr('type', 'file').attr('class','form-control').attr('value','');
        });

        $("#del_img_2").click(function(){
            $(this).hide();
            $('#lbl_img2').hide();
            $('#list_image_filename2').attr('type', 'file').attr('class','form-control').attr('value','');
        });

        $("#del_img_3").click(function(){
            $(this).hide();
            $('#lbl_img3').hide();
            $('#list_image_filename3').attr('type', 'file').attr('class','form-control').attr('value','');
        });

        $("#del_img_4").click(function(){
            $(this).hide();
            $('#lbl_img4').hide();
            $('#list_image_filename4').attr('type', 'file').attr('class','form-control').attr('value','');
        });

        $("#del_img_5").click(function(){
            $(this).hide();
            $('#lbl_img5').hide();
            $('#list_image_filename5').attr('type', 'file').attr('class','form-control').attr('value','');
        });
    });
</script>

@stop
