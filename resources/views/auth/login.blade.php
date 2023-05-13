@extends('layouts.base')

@section('content')
    <div class="flex flex-col justify-center  gap-2">

        <p class="text-xl text-center "> Dont have an account ?</p>
        <a href="{{ route('register') }}" class="mx-auto text-white w-25 p-2 px-4 bg-sky-500 rounded-lg text-lg transition hover:bg-sky-400 text-center mb-5">
            Register
        </a>


            @include('auth.form.login')



    </div>
@endsection
