@extends('layouts.base')

@section('content')
<div class="container">
    <div class="flex justify-center">
            <div class="bg-slate-800 px-10 py-4 rounded-lg border-2 border-slate-700 w-1/2">
                <h1 class="text-4xl text-center mb-6">{{ __('Register') }}</h1>


                    <form method="POST" action="{{ route('register') }}" class="flex flex-col gap-3">
                        @csrf

                        <div class="flex flex-col gap-1">
                            <p>Username :</p>
                            <input id="name" type="text"
                                   class="p-2 text-slate-950 rounded-lg border-2 border-slate-700 focus:outline-none
                                 @error('name') text-red font-bold @enderror"
                                   name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="flex flex-col gap-1">
                            <p>Email :</p>
                                <input id="email" type="email"
                                       class="p-2 text-slate-950 rounded-lg border-2 border-slate-700 focus:outline-none
                                @error('email') text-red font-bold @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="flex flex-col gap-1">
                            <p>Password :</p>
                                <input id="password" type="password"
                                       class="p-2 text-slate-950 rounded-lg border-2 border-slate-700 focus:outline-none
                                       @error('password') text-red font-bold @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="flex flex-col gap-1">
                            <p>Confirm password :</p>
                            <input id="password-confirm" type="password" class="p-2 text-slate-950 rounded-lg border-2 border-slate-700 focus:outline-none"
                                   name="password_confirmation" required autocomplete="new-password">

                        </div>

                        <div class="flex justify-content-center">

                                <button type="submit" class="mx-auto w-38 p-2 px-4 bg-sky-500 rounded-lg text-lg transition hover:bg-sky-400">
                                    Create account
                                </button>
                        </div>
                    </form>

            </div>
    </div>
</div>
@endsection
