@extends('layouts.default')

@section('content')

<div class="container">

  <h2>登録確認</h2>

  {{ Form::open(array('action' => 'UserController@registerSNS', 'class'=>'form-horizontal' )) }}

  <div class="form-group">
    <div class="col-lg-2">
      {{ Form::label('acc_neme', 'アカウント名:') }}
    </div>
    <div class="col-lg-10">
      @if(isset($acc_name))
        {{ Form::text('acc_name', $acc_name, array('class' => 'form-control')) }}
      @else
        {{ Form::text('acc_name', '', array('class' => 'form-control')) }}
      @endif
      @if($errors->has('acc_name'))
        <div class="alert alert-warning">{{ $errors->first('acc_name',':message') }}</div>
      @endif
      {{-- $errors->has('acc_name') ? $errors->first('email',':message') : '' --}}
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-2">
      {{ Form::label('email', 'メールアドレス:') }}
    </div>
    <div class="col-lg-10">
      @if(isset($email))
        {{ Form::text('email', $email, array('class' => 'form-control')) }}
      @else
        {{ Form::text('email', '', array('class' => 'form-control')) }}
      @endif
      @if($errors->has('email'))
        <div class="alert alert-warning">{{ $errors->first('email',':message') }}</div>
      @endif
      {{-- $errors->has('email') ? $errors->first('email',':message') : '' --}}
    </div>
  </div>

  {{Form::hidden('provider', $provider)}}
  {{Form::hidden('uid', $uid)}}
  {{Form::hidden('nicname', $nicname)}}

  <div class="form-group">
    <div class="col-lg-12">
      {{ Form::submit('OK', array('class' => 'btn btn-lg btn-info btn-block')) }}
    </div>
  </div>

  {{ Form::close() }}

</div>

@stop
