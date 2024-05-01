<!doctype html>
<html lang="en"  data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>AlA || Login</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <style>

      body{
        width: 100%;
        height: 100%;

        background: #000000;
        --gap: 5em;
        --line: 1px;
        --color: rgba(255, 255, 255, 0.2);

        background-image: linear-gradient(
            -90deg,
            transparent calc(var(--gap) - var(--line)),
            var(--color) calc(var(--gap) - var(--line) + 1px),
            var(--color) var(--gap)
          ),
          linear-gradient(
            0deg,transparent calc(var(--gap) - var(--line)),var(--color) calc(var(--gap) - var(--line) + 1px),var(--color) var(--gap));background-size: var(--gap) var(--gap);
      }
      
      .navbar-brand{
        font-weight: bold;
      }

      .login-box {
        position: absolute;
        margin: 23% 0% 0% 0%;
        top: 50%;
        left: 50%;
        width: 400px;
        padding: 40px;
        transform: translate(-50%, -50%);
        background: rgba(24, 20, 20, 0.987);
        box-sizing: border-box;
        box-shadow: 0 15px 25px rgba(0,0,0,.6);
        border-radius: 10px;
        }

        .login-box .user-box {
        position: relative;
        }

        .login-box .user-box input {
        width: 100%;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        margin-bottom: 30px;
        border: none;
        border-bottom: 1px solid #fff;
        outline: none;
        background: transparent;
        }

        .login-box .user-box label {
        position: absolute;
        top: 0;
        left: 0;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        pointer-events: none;
        transition: .5s;
        }

        .login-box .user-box input:focus ~ label,
        .login-box .user-box input:valid ~ label {
        top: -20px;
        left: 0;
        color: #04AA6D;
        font-size: 12px;
        }

        .login {
        position: relative;
        display: inline-block;
        padding: 10px 20px;
        color: #ffffff;
        font-size: 16px;
        text-decoration: none;
        text-transform: uppercase;
        overflow: hidden;
        transition: .5s;
        margin-top: 40px;
        letter-spacing: 4px
        }

        .login:hover {
        background: #04AA6D;
        color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 5px #04AA6D,
                    0 0 25px #04AA6D,
                    0 0 50px #04AA6D,
                    0 0 100px #04AA6D;
        }

        .login-box a span {
        position: absolute;
        display: block;
        }

        @keyframes btn-anim1 {
        0% {
            left: -100%;
        }

        50%,100% {
            left: 100%;
        }
        }

        .login-box a span:nth-child(1) {
        bottom: 2px;
        left: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, transparent, #04AA6D);
        animation: btn-anim1 2s linear infinite;
        }

      .ball {
        position: relative;
        bottom: 50px;
        left: calc(100% - 20px);
        width: 50px;
        height: 50px;
        background: #fff;
        border-radius: 50%;
        animation: ball-move8234 3s ease-in-out 1s infinite alternate;
      }

      .ball::after {
        position: absolute;
        content: '';
        top: 25px;
        right: 5px;
        width: 5px;
        height: 5px;
        background: #000;
        border-radius: 50%;
      }

      .bar {
        width: 200px;
        height: 12.5px;
        background: #FFDAAF;
        border-radius: 30px;
        transform: rotate(-15deg);
        margin: 17.5% 0% 0% 0%;
        animation: up-down6123 3s ease-in-out 1s infinite alternate;
      }

      @keyframes up-down6123 {
        from {
          transform: rotate(-15deg);
        }

        to {
          transform: rotate(15deg);
        }
      }

      @keyframes ball-move8234 {
        from {
          left: calc(100% - 40px);
          transform: rotate(360deg);
        }

        to {
          left: calc(0% - 20px);
          transform: rotate(0deg);
        }
      }

    </style>

  </head>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0">
  <div class="alert alert-info">
  @if($message = Session::get('success'))

<div class="alert alert-info">
{{ $message }}
</div>

@endif
    <!-- Example Code -->
    
    <!-- LogIn Form -->
    <div class="login-box">
    <form action="{{ route('sample.validate_login') }}" method="post">
					@csrf
                <h3>LogIn</h3><br>  
                <div class="user-box">
                    <input type="text" name="email" required="">
                    @if($errors->has('email'))
							<span class="text-danger">{{ $errors->first('email') }}</span>
						@endif
                    <label>Email</label>
                </div>
                <div class="user-box">
                    <input type="password" name="password" required="">
                    @if($errors->has('password'))
							<span class="text-danger">{{ $errors->first('password') }}</span>
						@endif
                    <label>Password</label>
                </div><center>
                <button class="login" type="submit">Log In<span></span></button>
                <p>Don't have account?&nbsp;<a href="registration">Register</a></p></center>
            </form>
    </div>
      
    <!-- End Example Code -->
  </body>
</html>