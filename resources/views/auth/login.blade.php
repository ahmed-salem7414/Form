<!DOCTYPE html>
<html lang="en">
<title>Sign in</title>
@include('includes.css')

<body>
<div class="container">
    <div class="form-box">
        <h1 id="title">Sign In</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="input-group">
                <div class="input-field">
                    <i class="fa-solid fa-envelope"></i>
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Your Email address" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="input-field">
                    <i class="fa-solid fa-key"></i>
                    <x-text-input id="password" class="block mt-1 w-full" placeholder="Set a password"
                                  type="password"
                                  name="password"
                                  required autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                @if (Route::has('password.request'))
                <p>Forget password?<a href="{{ route('password.request') }}" >Click here!</a></p>
                @endif
            </div>
            <div class="btn-field">
                <a href="{{ url('register') }}">
                    <button type="button">Sign Up</button>
                </a>
                <button type="submit" class="disable">Sign in</button>
            </div>
        </form>
    </div>
</div>
@include('includes.js')
</body>
</html>
