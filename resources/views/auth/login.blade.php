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
        <div class="animate form login_form">
          <section class="login_content">
            <form>
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Log in</a>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form method="post" action="{{-- route('') --}}" class="form-horizontal form-label-left" novalidate>
                {{ csrf_field() }}
              <h1>ثبت نام </h1>
              <div class="item form-group">
                <input type="text" class="form-control" placeholder="نام" required="required" name="first_name" />
                @if ($errors->has('first_name'))
                    <div class="alert">
                        <strong>{{ $errors->first('first_name') }}</strong>
                    </div>
                @endif
              </div>
              <div class="item form-group">
                <input type="text" class="form-control" placeholder="نام خانوادگی" required="required" />
              </div>
              <div class="item form-group">
                <input type="text" class="form-control" placeholder="شماره تلفن همراه" required="required" />
              </div>
              <div class="item form-group">
                <input type="email" class="form-control" placeholder="ایمیل" name="email" />
              </div>
              <div class="item form-group">
                <input type="password" class="form-control" placeholder="کلمه عبور" name="password" required="required" />
              </div>
              <div class="item form-group">
                <input type="password" class="form-control" placeholder="تایید کلمه عبور" name="password_confirmation" required="required" />
              </div>
              <div class="item form-group">
                <input type="password" class="form-control" placeholder="کد معرف" />
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-default submit">ثبت نام</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">قبلا ثبت نام کرده‌اید ؟
                  <a href="#signin" class="to_register"> وارد شوید </a>
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
    <script src="/vendors/validator/validator.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="/build/js/custom.min.js"></script>

  </body>
</html>
