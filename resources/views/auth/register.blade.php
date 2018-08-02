<!DOCTYPE html>
<html lang="fa">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/vendors/bootstrap/dist/css/bootstrap-rtl.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form method="post" action="{{ route('register') }}" class="form-horizontal form-label-left">
              {{ csrf_field() }}
              <h1>ثبت نام </h1>
              <div class="item form-group">
                <input type="text" class="form-control form-group{{ $errors->has('first_name') ? ' parsley-error' : '' }}" placeholder="نام*" name="first_name" value="{{ old('first_name') }}" />
                @if ($errors->has('first_name'))
                    <ul class="parsley-errors-list filled" id="parsley-id-5">
                        <li class="parsley-required">
                            {{ $errors->first('first_name') }}
                        </li>
                    </ul>
                @endif
              </div>
              <div class="item form-group">
                <input type="text" class="form-control form-group{{ $errors->has('last_name') ? ' parsley-error' : '' }}" placeholder="نام خانوادگی*" name="last_name" value="{{ old('last_name') }}" />
                @if ($errors->has('last_name'))
                    <ul class="parsley-errors-list filled" id="parsley-id-5">
                        <li class="parsley-required">
                            {{ $errors->first('last_name') }}
                        </li>
                    </ul>
                @endif
              </div>
              <div class="item form-group">
                <input type="text" class="form-control form-group{{ $errors->has('mobile_number') ? ' parsley-error' : '' }}" placeholder="شماره تلفن همراه*" name="mobile_number" value="{{ old('mobile_number') }}" />
                @if ($errors->has('mobile_number'))
                    <ul class="parsley-errors-list filled" id="parsley-id-5">
                        <li class="parsley-required">
                            {{ $errors->first('mobile_number') }}
                        </li>
                    </ul>
                @endif
              </div>
              <div class="item form-group">
                <input type="text" class="form-control form-group{{ $errors->has('email') ? ' parsley-error' : '' }}" placeholder="ایمیل" name="email" value="{{ old('email') }}" />
                @if ($errors->has('email'))
                    <ul class="parsley-errors-list filled" id="parsley-id-5">
                        <li class="parsley-required">
                            {{ $errors->first('email') }}
                        </li>
                    </ul>
                @endif
              </div>
              <div class="item form-group">
                <input type="password" class="form-control form-group{{ $errors->has('password') ? ' parsley-error' : '' }}" placeholder="کلمه عبور*" name="password" />
                @if ($errors->has('password'))
                    <ul class="parsley-errors-list filled" id="parsley-id-5">
                        <li class="parsley-required">
                            {{ $errors->first('password') }}
                        </li>
                    </ul>
                @endif
              </div>
              <div class="item form-group">
                <input type="password" class="form-control" placeholder="تایید کلمه عبور*" name="password_confirmation"  />
              </div>
              <div class="item form-group">
                <input class="form-control form-group{{ $errors->has('reference_code') ? ' parsley-error' : '' }}" placeholder="کد معرف" name="reference_code" value="{{ old('reference_code') }}" />
                @if ($errors->has('reference_code'))
                    <ul class="parsley-errors-list filled" id="parsley-id-5">
                        <li class="parsley-required">
                            {{ $errors->first('reference_code') }}
                        </li>
                    </ul>
                @endif
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-default submit">ثبت نام</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">قبلا ثبت نام کرده‌اید ؟
                  <a href="{{ route('login') }}" class="to_register"> وارد شوید </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
				  <a href="{{ route('home') }}"><img src="/images/sarooLogo.png" alt="company logo" style="width: 150px; height: 50px; padding-bottom:8px;"/></a>
                  <p>©<?= date('Y'); ?> All Rights Reserved. Gentelella Alela. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>

    <!-- jQuery -->
    <script src="/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="/vendors/fastclick/lib/fastclick.js"></script>
    <!-- validator -->
    <!--<script src="/vendors/validator/validator.js"></script>-->

    <!-- Custom Theme Scripts -->
    <script src="/build/js/custom.min.js"></script>

  </body>
</html>
