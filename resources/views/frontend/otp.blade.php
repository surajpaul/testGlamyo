<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Reset Password | Glamyo</title>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <meta name="msapplication-TileColor" content="#206bc4"/>
    <meta name="theme-color" content="#206bc4"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="mobile-web-app-capable" content="yes"/>
    <meta name="HandheldFriendly" content="True"/>
    <meta name="MobileOptimized" content="320"/>
    <meta name="robots" content="noindex,nofollow,noarchive"/>
    <link rel="icon" href="{{asset('assets/frontend/images/favicon.png')}}" type="image/x-icon"/>
    <link rel="shortcut icon" href="{{asset('assets/frontend/images/favicon.png')}}" type="image/x-icon"/>
    <!-- CSS files -->
    <link href="{{asset('assets/backend/css/tabler.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/backend/css/demo.min.css')}}" rel="stylesheet"/>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
  </head>
  <body class="antialiased border-top-wide border-primary d-flex flex-column">
    <div class="flex-fill d-flex flex-column justify-content-center">
      <div class="container-tight py-6">
        <div class="text-center mb-4">
          <img src="{{asset('assets/backend/img/static/logo.png')}}" height="46" alt="">
        </div>
        @if(session()->has('success'))
        <div class="container" style="flex: 0;">
          <div class="alert alert-success">
            {{ session()->get('success') }}
          </div>
        </div>
        @elseif(session()->has('failure'))
        <div class="container" style="flex: 0;">
          <div class="alert alert-danger">
            {{ session()->get('failure') }}
          </div>
        </div>
        @endif
        <form class="card card-md" method="POST" action="{{ route('reset.update', $userId ) }}">
          @csrf
          @method('PATCH')
          <div class="card-body">
            <h2 class="mb-2 text-center">Reset Password</h2>
            <div class="mb-3">
                <input id="phone" type="hidden" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{$contact}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Enter OTP</label>
                <input id="otp" type="number" class="form-control @error('otp') is-invalid @enderror" name="otp" value="{{ old('otp') }}" placeholder="Enter OTP here" required>
                @error('otp')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
              <label class="form-label">New Password</label>
              <div class="input-group input-group-flat">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="New Password" min="7" required>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <span class="input-group-text">
                  <a class="link-secondary toggle" id="btnToggle" title="Show password" data-toggle="tooltip" data-placement="right"><i class="fa fa-eye text-primary"></i>
                  </a>
                </span>                
              </div>
              <small class="form-hint">
                Your password must be 8-20 characters long, contain letters and numbers, and must not contain
                spaces, special characters, or emoji.
              </small>
            </div>
            <div class="form-footer mb-2">
              <button type="submit" class="btn btn-primary btn-block"  name="submit">Reset Password</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- Libs JS -->
    <script src="{{asset('assets/backend/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Tabler Core -->
    <script src="{{asset('assets/backend/js/tabler.min.js')}}"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
      let passwordInput = document.getElementById('password'),
      toggle = document.getElementById('btnToggle'),
      icon =  document.getElementById('eyeIcon');
      function togglePassword() {
        if (passwordInput.type === 'password') {
          passwordInput.type = 'text';
          icon.classList.add("fa-eye-slash");
        } else {
          passwordInput.type = 'password';
          icon.classList.remove("fa-eye-slash");
        }
      }
      toggle.addEventListener('click', togglePassword, false);
      passwordInput.addEventListener('keyup', checkInput, false);
    </script>
</body>
</html>