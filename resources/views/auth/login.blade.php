<!-------------------------------------------------------------------------
   _       _    _   _____     _    _____   _       ______   __  __
  | |     | |  | | |  __ \   (_)  |  ___| | |     |  ____|  \ \/ /
  | |     | |  | | | |  \ \   _   | |__   | |     | |__      \  /
  | |     | |  | | | |   | | | |  |  __|  | |     |  __|     /  \
  | |____ | |__| | | |__/ /  | |  | |     | |____ | |____   / /\ \
  |______||______| |_____/   |_|  |_|     |______||______| /_/  \_\
 
 ----------------------------------------------------------------------->

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/Authentication/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Ludiflex | Login</title>

</head>
<body>
   <div class="box">
    <div class="container">
        <form method="POST" action="{{ route('login') }}">
            @csrf

        <div class="top">
            <span>Have an account?</span>
            <header>Login</header>
        </div>

        <div class="input-field">
            <input name="email" type="text" class="input @error('email') is-invalid @enderror" required autocomplete="email"
             autofocus value="{{ old('email') }}"  placeholder="Email" id="">

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

            <i class='bx bx-user' ></i>
        </div>

        <div class="input-field">
            <input name="password" type="Password" class="input @error('password') is-invalid @enderror" data type="password" required autocomplete="current-password" placeholder="Password" id="">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

            <i class='bx bx-lock-alt'></i>
        </div>

        <div class="input-field">
            <input type="submit" class="submit" value="Login" id="">
        </div>

        <div class="two-col">
            <div class="one">
               <input type="checkbox" name="Remember" id="check" {{ old('remember') ? 'checked' : '' }}>
               <label for="check"> Remember Me</label>
            </div>

            @if (Route::has('password.request'))

            <div class="two">
                <label><a href="{{ route('password.request') }}">Forgot password?</a></label>
            </div>
           @endif
        </div>
    </form>
    </div>
</div>  
</body>
</html>