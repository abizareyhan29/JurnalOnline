@extends('layouts.master')

@section('content')

@include('layouts.partials.sidebar')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    @include('layouts.partials.alerts')
    <h1 class="page-header">
        Edit Akun
    </h1>

    <div class="container">
      <div class="row">
          <div class="col-lg-6">
              <form class="form-vertical" role="form" method="post" enctype="multipart/form-data">
                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                      <label for="email" class="control-label">Email address</label>
                      <input type="text" name="email" class="form-control" id="email" value="{{ Auth::user()->email ?: '' }}">
                      @if ($errors->has('email'))
                          <span class="help-block">{{ $errors->first('email') }}</span>
                      @endif
                  </div>
                  <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                      <label for="username" class="control-label">Username</label>
                      <input type="text" name="username" class="form-control" id="username" value="{{ Auth::user()->username ?: '' }}">
                      @if ($errors->has('username'))
                          <span class="help-block">{{ $errors->first('username') }}</span>
                      @endif
                  </div>
                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                      <label for="password" class="control-label">Password</label>
                      <input type="password" name="password" class="form-control" id="password">
                      @if ($errors->has('password'))
                          <span class="help-block">{{ $errors->first('password') }}</span>
                      @endif
                  </div>
                  <div class="form-group">
                      <label for="photo" class="control-label">Photo</label>
                      <input type="file" name="photo" id="photo">
                  </div>
                  <div class="form-group">
                      <button type="submit" class="btn btn-default">Ubah</button>
                  </div>
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
              </form>
          </div>
      </div>
    </div>
</div>
@stop
