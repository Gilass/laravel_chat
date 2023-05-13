@extends('layouts.base')

@section('content')
<div class="container">
    <div class="flex flex-col gap-2 justify-center">

        <p class="text-xl text-center "> Already have an account ?</p>
        <a href="{{ route('login') }}" class="mx-auto text-white w-25 p-2 px-4 bg-sky-500 rounded-lg text-lg transition hover:bg-sky-400 text-center mb-5">
            Login
        </a>

        @include('auth.form.register')


    </div>
</div>
@endsection
