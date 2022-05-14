<<<<<<< HEAD
@extends('layouts.main', ['class' => 'off-canvas-sidebar', 'activePage' => 'login', 'title' => __('CAR RENTING')])
=======
@extends('layouts.main', ['class' => 'off-canvas-sidebar', 'activePage' => 'login', 'title' => __()])
>>>>>>> 94e3dc6544f1060b3b769bcc272f8a598fdde172

@section('content')
<div class="container" style="height: auto;">
  <div class="row align-items-center">
    <div class="col-md-9 ml-auto mr-auto mb-3 text-center">
<<<<<<< HEAD
      <h3>{{ __('Inicio de Sesión') }} </h3>
=======
        <h3>{{ __('Subscríbete con nosotros y disfruta de todas las novedades que te esperan.') }} </h3>
>>>>>>> 94e3dc6544f1060b3b769bcc272f8a598fdde172
    </div>
    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
      <form class="form" method="POST" action="{{ route('login') }}">
        @csrf

        <div class="card card-login card-hidden mb-3">
          <div class="card-header card-header-primary text-center">
            <h4 class="card-title"></h4>
            <div class="social-line">
<<<<<<< HEAD
              <a href="#facebook" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-facebook-square"></i>
              </a>
              <a href="#twitter" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-twitter"></i>
              </a>
              <a href="#google" class="btn btn-just-icon btn-link btn-white">
=======
              <a href="#" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-facebook-square"></i>
              </a>
              <a href="#" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-twitter"></i>
              </a>
              <a href="#" class="btn btn-just-icon btn-link btn-white">
>>>>>>> 94e3dc6544f1060b3b769bcc272f8a598fdde172
                <i class="fa fa-google-plus"></i>
              </a>
            </div>
          </div>
          <div class="card-body">
<<<<<<< HEAD
            <p class="card-description text-center">{{ __('Introduce tus credenciales para iniciar sesión. ') }} </p>
=======
            <p class="card-description text-center">{{ __('O inicia sesión con') }} <strong>tu correo</strong> {{ __(' y tu contraseña ') }}<strong></strong> </p>
>>>>>>> 94e3dc6544f1060b3b769bcc272f8a598fdde172
            <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">email</i>
                  </span>
                </div>
<<<<<<< HEAD
                <input type="email" name="email" class="form-control" placeholder="{{ __('Example@correo.com') }}" required>
=======
                <input type="email" name="email" class="form-control" placeholder="{{ __('') }}" value="{{ old('email', ) }}" required>
>>>>>>> 94e3dc6544f1060b3b769bcc272f8a598fdde172
              </div>
              @if ($errors->has('email'))
                <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                  <strong>{{ $errors->first('email') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
<<<<<<< HEAD
                <input type="password" name="password" id="password" class="form-control" placeholder="{{ __('Password') }}" required>
=======
                <input type="password" name="password" id="password" class="form-control" placeholder="{{ __('') }}" value="{{ !$errors->has('password') ? "secret" : "" }}" required>
>>>>>>> 94e3dc6544f1060b3b769bcc272f8a598fdde172
              </div>
              @if ($errors->has('password'))
                <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                  <strong>{{ $errors->first('password') }}</strong>
                </div>
              @endif
            </div>
            <div class="form-check mr-auto ml-3 mt-3">
              <label class="form-check-label">
<<<<<<< HEAD
                <input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Recuérdame') }}
=======
                <input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Recordar credenciales') }}
>>>>>>> 94e3dc6544f1060b3b769bcc272f8a598fdde172
                <span class="form-check-sign">
                  <span class="check"></span>
                </span>
              </label>
            </div>

          </div>
          <div class="card-footer justify-content-center">
<<<<<<< HEAD
            <button type="submit" class="btn btn-primary btn-link btn-lg">{{ __('Entrar') }}</button>
=======
            <button type="submit" class="btn btn-primary btn-link btn-lg">{{ __('Comenzar') }}</button>
>>>>>>> 94e3dc6544f1060b3b769bcc272f8a598fdde172
          </div>
        </div>
      </form>
      <div class="row">
        <div class="col-6">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-light">
                    <small>{{ __('Olvidaste la contraseña?') }}</small>
                </a>
            @endif
        </div>
        <div class="col-6 text-right">
            <a href="{{ route('register') }}" class="text-light">
                <small>{{ __('Crear nueva cuenta') }}</small>
            </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
