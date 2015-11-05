
<!-- タイトル -->
<div class="row order-title-box">
    <div class="col-md-12 order-title">
       <h2> {{$orders['title']}} </h2>
    </div>
</div>

<div class="row">

    <!-- 左枠 ------------------------------------------------------------ -->
    <div class="col-md-8">
            <div class="row main-tiltle-row">
                <div class="col-md-12 main-title-box title-box-colorize">
                     お店情報
                </div>
            </div>
            <div class="row contents-row">
                <div class="col-md-12">
                    <table class="data-table"><tbody>
                        <tr>
                        <th class="sub-title-box title-box-colorize">お店の名前</th>
                            <td class="input-data-box">{{$orders['store_name']}}</td>
                            <th class="sub-title-box title-box-colorize">公開設定</th>
                            <td class="input-data-box"> {{ ['非公開', '公開'][$orders['store_name_publication']] }}</td>
                        </tr>
                        <tr>
                            <th class="sub-title-box title-box-colorize">郵便番号</th>
                            <td class="input-data-box">{{ $orders['postal_code'] }}</td>
                            <th class="sub-title-box title-box-colorize">電話番号</th>
                            <td class="input-data-box">{{$orders['phone_number']}}</td>
                        </tr>
                    </tbody></table>
                </div>
            </div>
            <div class="row main-tiltle-row">
                <div class="col-md-12 main-title-box title-box-colorize">
                     依頼情報
                </div>
            </div>
            <div class="row contents-row">
                <div class="col-md-12">
                    <table class="data-table"><tbody>
                        <tr>
                        <th class="sub-title-box title-box-colorize">ターゲット性別</th>
                            <td class="input-data-box"> {{ ['全て', '男性', '女性'][$orders['target_customer_sex']] }} </td>
                            <th class="sub-title-box title-box-colorize">ターゲット年齢</th>
                            <td class="input-data-box">
                                <?php $age = [0 => '全て', 1 =>'1 ～ 20歳', 20 => '20 ～ 30 歳', 40 =>'40 ～ 65 歳', 65 => '65歳 ～'] ?>
                                {{ $age[$orders['target_customer_age']] }}
                            </td>
                        </tr>
                        <tr>
                        <th class="sub-title-box title-box-colorize">依頼期限</th>
                            <td class="input-data-box"> {{$orders['limit_day']}} </td>
                            <th class="sub-title-box title-box-colorize">カテゴリ</th>
                            <td class="input-data-box">
                                   {{--
                                   @foreach ($orders['categories_named'] as $cat_name)
                                       {{ $cat_name }}
                                   @endforeach
                                   --}}
                            </td>
                        </tr>
                    </tbody></table>
                </div>
            </div>
            
            <div class="row main-tiltle-row">
                <div class="col-md-12 main-title-box title-box-colorize">
                     依頼詳細
                </div>
            </div>
            <div class="row contents-row">
                <div class="col-md-12 description-box">
                     {{$orders['description']}}
                </div>
            </div>
            
            <div class="row main-tiltle-row">
                <div class="col-md-12 main-title-box title-box-colorize">
                     依頼画像
                </div>
            </div>
            <div class="row contents-row">
                <div class="col-md-12">
                     <div class="row">
                         <div class="col-md-6">
                                 @if($orders['list_image_filename1'] != null)
                                 <div class="form-group">
                                      <img src="{{ asset('temporary')}}/{{$orders['list_image_filename1']}}" class="img-responsive center-block">
                                 </div>
                                 @endif
                         </div>
                         <div class="col-md-6">
                                 @if($orders['list_image_filename2'] != null)
                                 <div class="form-group">
                                      <img src="{{ asset('temporary')}}/{{$orders['list_image_filename2']}}" class="img-responsive center-block">
                                 </div>
                                 @endif
                         </div>
                     </div>
                     
                     <div class="row">
                         <div class="col-md-6">
                                 @if($orders['list_image_filename3'] != null)
                                 <div class="form-group">
                                      <img src="{{ asset('temporary')}}/{{$orders['list_image_filename3']}}" class="img-responsive center-block">
                                 </div>
                                 @endif
                         </div>
                         <div class="col-md-6">
                                 @if($orders['list_image_filename4'] != null)
                                 <div class="form-group">
                                      <img src="{{ asset('temporary')}}/{{$orders['list_image_filename4']}}" class="img-responsive center-block">
                                 </div>
                                 @endif
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-md-6">
                                 @if($orders['list_image_filename5'] != null)
                                 <div class="form-group">
                                      <img src="{{ asset('temporary')}}/{{$orders['list_image_filename5']}}" class="img-responsive center-block">
                                 </div>
                                 @endif
                         </div>
                         <div class="col-md-6">
                         </div>
                     </div>
                </div>
            </div>
    </div>
    
    
    <!-- 右枠 ------------------------------------------------------------ -->
    <div class="col-md-4 suppliments">
            <!-- ユーザー情報 -->
            <div class="row suppliment-box">
                <div class="col-md-12">
                        <!-- タイトル  -->
                        <div class="row">
                            <div class="col-md-12 suppliment-sub-title"> ユーザー情報 </div>
                        </div>
                        <!-- 内容 -->
                        <div class="row suppliment-content-row">
                            <div class="col-md-12"> ユーザー画像 {{-- TODO: 後で処理を追加 --}}</div>
                        </div>
                        <div class="row suppliment-content-row">
                            <div class="col-md-12"> ユーザー名 {{-- TODO: 後で処理を追加 --}} </div>
                        </div>
                        <div class="row suppliment-content-row">
                            <div class="col-md-12"> 募集回数 : 0 回 {{-- TODO: 後で処理を追加 --}} </div>
                        </div>
                        <div class="row suppliment-content-row">
                            <div class="col-md-12"> 評価 : ★ ☆ ☆ ☆ ☆  {{-- TODO: 後で処理を追加 --}}</div>
                        </div>
                </div>
            </div>
            
            <!-- 空き枠 -->
            <div class="row suppliment-box">
                <div class="col-md-12">
                        <!-- タイトル  -->
                        <div class="row">
                            <div class="col-md-12 suppliment-sub-title"> 公開日 </div>
                        </div>

                        <!-- 内容 -->
                        <div class="row suppliment-content-row">
                            <div class="col-md-12"> 2015/5/5 {{-- TODO: 後で処理を追加 --}} </div>
                        </div>
                </div>
            </div>
    </div>

</div>


