@extends('layouts.logout')

@section('content')

{!! Form::open() !!}

<div class="login-box">
  <p class="login-form-header">DAWNSNSへようこそ</p>

  <div class="form-name">{{ Form::label('e-mail') }}</div>
  <div class="form-content">{{ Form::text('mail',null,['class' => 'input']) }}</div>
  <div class="form-name">{{ Form::label('password') }}</div>
  <div class="form-content">{{ Form::password('password',['class' => 'input']) }}</div>

  <div class="form-button">{{ Form::submit('ログイン') }}</div>

  <p><a href="/register">新規ユーザーの方はこちら</a></p>
</div>

{!! Form::close() !!}

@endsection
