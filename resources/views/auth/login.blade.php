
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('stisla') }}/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('stisla') }}/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('stisla') }}/modules/bootstrap-social/bootstrap-social.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('stisla') }}/css/style.css">
  <link rel="stylesheet" href="{{ asset('stisla') }}/css/components.css">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="{{ asset('stisla') }}/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Login</h4></div>

              <div class="card-body">
                <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                        {{ csrf_field() }}
                  
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control" name="email" tabindex="1" >
                        @if ($errors->has('email'))
                            <span class="help-block">
                                {{ $errors->first('email') }}
                            </span>
                        @endif                    
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="d-block">
                            <label for="password" class="control-label">Password</label>
                            <div class="float-right">
                                <a href="{{ route('password.request') }}" class="text-small">
                                Forgot Password?
                                </a>
                            </div>
                        </div>
                        <input id="password" type="password" class="form-control" name="password" tabindex="2" >
                        @if ($errors->has('password'))
                            <span class="help-block">
                                {{ $errors->first('password') }}
                            </span>
                        @endif
                    </div>

                  {{-- <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div> --}}

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
               
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; Stisla 2018
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="{{ asset('stisla') }}/modules/jquery.min.js"></script>
  <script src="{{ asset('stisla') }}/modules/popper.js"></script>
  <script src="{{ asset('stisla') }}/modules/tooltip.js"></script>
  <script src="{{ asset('stisla') }}/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="{{ asset('stisla') }}/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="{{ asset('stisla') }}/modules/moment.min.js"></script>
  <script src="{{ asset('stisla') }}/js/stisla.js"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="{{ asset('stisla') }}/js/scripts.js"></script>
  <script src="{{ asset('stisla') }}/js/custom.js"></script>
</body>
</html>