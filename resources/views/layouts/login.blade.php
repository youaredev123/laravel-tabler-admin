<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Sign in - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <meta name="msapplication-TileColor" content="#206bc4"/>
    <meta name="theme-color" content="#206bc4"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="mobile-web-app-capable" content="yes"/>
    <meta name="HandheldFriendly" content="True"/>
    <meta name="MobileOptimized" content="320"/>
    <meta name="robots" content="noindex,nofollow,noarchive"/>
    <link rel="icon" href="/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
    <!-- CSS files -->
    <link href="{{ asset("css/tabler.min.css") }}" rel="stylesheet"/>
    <link href="{{ asset("css/demo.min.css") }}" rel="stylesheet"/>
    <style>
      body {
      	display: none;
      }
    </style>
  </head>
  <body class="antialiased border-top-wide border-primary d-flex flex-column">
    <div class="flex-fill d-flex flex-column justify-content-center">
      <div class="container-tight py-6">
        <div class="text-center mb-4">
            @section("logo")
                <img src="{{ asset("static/logo.svg") }}" height="36" alt="">
            @show
        </div>
      <form class="card card-md" action="{{route('auth.login')}}" method="post">
        @csrf
          <div class="card-body">
            <h2 class="mb-5 text-center">Login to your account</h2>
            <div class="mb-3">
             
              <label class="form-label">Email address</label>
              <input required type="email" name="email" class="form-control" placeholder="Enter email" autocomplete="off">

              @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror

            </div>
            <div class="mb-2">
              
              <label class="form-label">
                Password
                <span class="form-label-description">
                  <a href="./forgot-password.html">I forgot password</a>
                </span>
              </label>
              <div class="input-group input-group-flat">
                <input required name="password" type="password" class="form-control"  placeholder="Password" >
                <span class="input-group-text">
                  <a href="#" class="link-secondary
                  " title="Show password" data-toggle="tooltip"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><circle cx="12" cy="12" r="2" /><path d="M2 12l1.5 2a11 11 0 0 0 17 0l1.5 -2" /><path d="M2 12l1.5 -2a11 11 0 0 1 17 0l1.5 2" /></svg>
                  </a>
                </span>
                @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="mb-2">
              <label class="form-check">
                <input name="remember" type="checkbox" class="form-check-input"/>
                <span class="form-check-label">Remember me on this device</span>
              </label>
            </div>
            <div class="form-footer">
              <button type="submit" class="btn btn-primary btn-block">Sign in</button>
            </div>
          </div>
          @section("social")
          <div class="hr-text">or</div>
          
          <div class="card-body">
            <div class="btn-list">
              <a href="#" class="btn btn-white btn-block">
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="icon text-github" fill="currentColor"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                Login with Github
              </a>
              <a href="#" class="btn btn-white btn-block">
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="icon text-twitter" fill="currentColor"><path d="M23.954 4.569a10 10 0 0 1-2.825.775 4.958 4.958 0 0 0 2.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 0 0-8.384 4.482C7.691 8.094 4.066 6.13 1.64 3.161a4.822 4.822 0 0 0-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 0 1-2.228-.616v.061a4.923 4.923 0 0 0 3.946 4.827 4.996 4.996 0 0 1-2.212.085 4.937 4.937 0 0 0 4.604 3.417 9.868 9.868 0 0 1-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 0 0 7.557 2.209c9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63a9.936 9.936 0 0 0 2.46-2.548l-.047-.02z"/></svg>
                Login with Twitter
              </a>
            </div>
          </div>
          @show
        </form>
        @section("signup")
        <div class="text-center text-muted">
          Don't have account yet? <a href="./sign-up.html" tabindex="-1">Sign up</a>
        </div>
      </div>
      @show
    </div>
    <!-- Libs JS -->
    <script src="{{ asset("libs/bootstrap/dist/js/bootstrap.bundle.min.js")}}"></script>
    <!-- Tabler Core -->
    <script src="{{ asset("js/tabler.min.js")}}"></script>
    <script>
      document.body.style.display = "block"
    </script>
  </body>
</html>