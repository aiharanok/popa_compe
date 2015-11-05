@extends('layouts.default')
 
@section('content')
<div class="container">

<h3>今のあなたのポイント --- {{Session::get('user_point');}}pt</h3><br/>

@if(! $prized_posts->isEmpty())
<table class="table">
  <thead>
    <tr>
      <th>あなたのPOP</th>
      <th>順位</th>
      <th>ポイント</th>
      <th>依頼タイトル</th>
      <th>獲得日時</th>
    </tr>
  </thead>

  <tbody>
    @foreach($prized_posts as $post)
      <tr>
        @if(empty($post->upload_filename))
          <td>{{ HTML::image('post_images/'.$post->pop_filename, '', array('class' => 'img-responsive')) }}</td>
        @else
          <td>{{ HTML::image('post_images/'.$post->upload_filename, '', array('class' => 'img-responsive')) }}</td>
        @endif
        <td>{{ $post->got_prize }}</td>
        <td>{{ $post->got_point }}</td>
        <td><a href="/post/{{ $post->order->id }}">{{ $post->order->title }}</a></td>
        <td>{{ $post->order->state4_at }}</td>
      </tr>
    @endforeach
  </tbody>
</table>
@else
  <h3>
    あなたのPOPはまだ選ばれていません<br>
    POPを投稿してポイントをゲットしましょう！
  </h3>

@endif

<h4><a href="{{ URL::to('user/point') }}">Your Popa Point</a></h4><br/>
<h4><a href="{{ URL::to('user/logout') }}">Logout</a></h4>


</div>
@stop
