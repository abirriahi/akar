@extends('layouts.app')

@section('title')
{{trans('home.Inscription')}}
@endsection


@section('content')
<div class="container">
  <div class="contact_bottom">
<hr>
  <h3>
  {{trans('home.Inscription')}}
  </h3>
  <hr>
  <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
      {!! csrf_field() !!}

      <div class="text2{ $errors->has('name') ? ' has-error' : '' }}">


          <div class="col-md-12">
              <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="name">

              @if ($errors->has('name'))
                  <span class="help-block">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
          </div>
      </div>
          <div class="clearfix"></div>
<br>
      <div class="text2{{ $errors->has('email') ? ' has-error' : '' }}">


          <div class="col-md-12">
              <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="email">

              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
          </div>
      </div>
          <div class="clearfix"></div>
<br>
      <div class="text2{{ $errors->has('password') ? ' has-error' : '' }}">


          <div class="col-md-6">
              <input type="password" class="form-control" name="password" placeholder="mot de passe" >

              @if ($errors->has('password'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
          </div>
      </div>

      <div class="text2{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">


          <div class="col-md-6">
              <input type="password" class="form-control" name="password_confirmation" placeholder="confirmer mot de passe" >

              @if ($errors->has('password_confirmation'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password_confirmation') }}</strong>
                  </span>
              @endif
          </div>
      </div>
      <div class="clearfix"></div>
      <br>

      <div class="text2">
          <div class="col-md-12">
              <button type="submit" class="btn btn-warning">
                  <i class="fa fa-btn fa-user" style="color:#ffffff"></i>
                  {{trans('home.Inscription')}}
              </button>
          </div>
      </div>
          <div class="clearfix"></div>
      <br>
  </form>

</div>
</div>

@endsection
