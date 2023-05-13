
<div class="bg-slate-800 px-10 py-4 rounded-lg border-2 border-slate-700 w-1/2 mx-auto">
    <h1 class="text-4xl text-center mb-6">{{ __('Login') }}</h1>

<form method="POST" action="{{ route('login') }}"  class="flex flex-col gap-3">
    @csrf

    <div class="flex flex-col gap-1" >

        <p>Email :</p>
        <input id="email" type="email"
               class="input-primary
                   @error('email') is-invalid @enderror" name="email"
               value="{{ old('email') }}" required autocomplete="email" autofocus>

        @error('email')
        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
        @enderror
    </div>

    <div class="flex flex-col gap-1">

        <p>Password :</p>
        <input id="password" type="password"
               class="input-primary
             @error('password') is-invalid @enderror"
               name="password" required autocomplete="current-password">

        @error('password')
        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
        @enderror

    </div>

    <div class="flex gap-1 items-center">
        <input type="checkbox" name="remember"
               id="remember" {{ old('remember') ? 'checked' : '' }}>

        <label class="ml-2" for="remember">
            {{ __('Remember Me') }}
        </label>
    </div>


    <div class="row mb-0">
        <div class="col-md-8 offset-md-4">
            <button type="submit" class="mx-auto w-44 p-2 px-4 bg-sky-500 rounded-lg text-lg transition hover:bg-sky-400">
                {{ __('Login') }}
            </button>

{{--            @if (Route::has('password.request'))--}}
{{--                <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                    {{ __('Forgot Your Password?') }}--}}
{{--                </a>--}}
{{--            @endif--}}
        </div>
    </div>
</form>
</div>
