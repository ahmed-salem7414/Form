<!DOCTYPE html>
<html lang="en">
<title>Sign Up</title>
@include('includes.css')

<body>
<div class="container">
    <div class="form-box">
        <h1 id="title">Sign Up</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="input-group">
                <div class="input-field" id="nameField">
                    <i class="fa-solid fa-user"></i>
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Your Full name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <div class="input-field">
                    <i class="fa-solid fa-envelope"></i>
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Your Email address"/>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="input-field">
                    <i class="fa-solid fa-key"></i>
                    <x-text-input id="password" class="block mt-1 w-full" placeholder="Set a password"
                                  type="password"
                                  name="password"
                                  required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="input-field">
                    <i class="fa-solid fa-key"></i>
                    <x-input-label for="password_confirmation" />

                    <x-text-input id="password_confirmation" class="block mt-1 w-full" placeholder="Set a password"
                                  type="password"
                                  name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
            </div>
            <div class="btn-field">
                <button type="submit">Register</button>
                <a href="{{ url('login') }}">
                    <button type="button">Sign in </button>
                </a>
            </div>
        </form>
    </div>
</div>
@include('includes.js')
</body>
</html>
