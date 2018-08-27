@extends('auth.template')

@section('content')

<div class="wrapper wrapper-login">
    <div class="container container-login animated fadeIn" style="display: block;">
      <h3 class="text-center">Signup</h3>
      <?= form_open('login/process') ?>
      <div class="login-form">
        <div class="form-group form-floating-label">
          <input id="username" name="nama" type="text" class="form-control input-border-bottom" required="">
          <label for="username" class="placeholder">Username</label>
            @if($errors->has('nama'))
              <small class="text-danger">{{ $errors->first('nama') }}</small>
            @endif
        </div>
        <div class="form-group form-floating-label">
          <input id="password" name="password" type="password" class="form-control input-border-bottom" required="">
          <label for="password" class="placeholder">Password</label>
            @if($errors->has('password'))
              <small class="text-danger">{{ $errors->first('password') }}</small>
            @endif
          <div class="show-password">
            <i class="icon ion-md-eye"></i>
          </div>
        </div>
        <div class="row form-sub m-0">
          <div class="col col-md-6">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="rememberme">
              <label class="custom-control-label" for="rememberme">Remember Me</label>
            </div>
          </div>
          <div class="col col-md-6 login-forget">
            <a href="#" class="link">Forget Password ?</a>
          </div>
        </div>
        <div class="form-action">
          <input type="submit" class="btn btn-primary btn-rounded btn-login" value="Sign In">
        </div>
        <div class="login-account">
          <span class="msg">Don't have an account yet ?</span>
          <a href="#" id="show-signup" class="link">Sign Up</a>
        </div>
      </div>
      <?= form_close() ?>
    </div>

    <div class="container container-signup animated fadeIn" style="display: none;">
      <h3 class="text-center">Sign Up</h3>
      <?= form_open('register') ?>
      <div class="login-form">
        <div class="form-group form-floating-label">
          <input id="nama" name="nama" type="text" class="form-control input-border-bottom" required="">
          <label for="nama" class="placeholder">Nama</label>
            @if($errors->has('nama'))
              <small class="text-danger">{{ $errors->first('nama') }}</small>
            @endif
          </div>
        <div class="form-group form-floating-label">
          <input id="email" name="email" type="email" class="form-control input-border-bottom" required="">
          <label for="email" class="placeholder">Email</label>
          @if($errors->has('password'))
              <small class="text-danger">{{ $errors->first('email') }}</small>
          @endif
        </div>
        <div class="form-group form-floating-label">
          <input id="passwordsignin" name="password" type="password" class="form-control input-border-bottom" required="">
            @if($errors->has('password'))
              <small class="text-danger">{{ $errors->first('password') }}</small>
            @endif
          <label for="passwordsignin" class="placeholder">Password</label>
          <div class="show-password">
            <i class="flaticon-interface"></i>
          </div>
        </div>
        <div class="form-group form-floating-label">
          <input id="confirmpassword" name="confirmpassword" type="password" class="form-control input-border-bottom" required="">
          <label for="confirmpassword" class="placeholder">Confirm Password</label>
          <div class="show-password">
            <i class="flaticon-interface"></i>
          </div>
        </div>
        <div class="row form-sub m-0">
          <div class="col">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="agree" id="agree">
              <label class="custom-control-label" for="agree">I Agree the terms and conditions.</label>
            </div>
          </div>
        </div>
        <div class="form-action">
          <a href="#" id="show-signin" class="btn btn-danger btn-rounded btn-login mr-3">Cancel</a>
          <input type="submit"class="btn btn-primary btn-rounded btn-login">
        </div>
      </div>
      <?= form_close() ?>
    </div>
  </div>

@endsection
