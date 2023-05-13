@extends('layouts.base')


@section('content')
    <div class="h-full absolute inset-0 bottom-10">

        <div class="">
            <h1 class="text-center font-light text-8xl mt-20 mb-4">
                {{ env('APP_NAME') }}
            </h1>
            <p class="text-lg text-slate-400 text-center max-w-3xl mx-auto">
                Basic chat system using <span class="text-red-500">Laravel</span>
            </p>
        </div>


        <div class="flex flex-col gap-4 my-14">
            @if(!Auth::user())

                <p class="text-xl text-slate-400 text-center max-w-3xl mx-auto">
                    Create an account or login to start chatting
                </p>

                <a href="{{ route('login') }}" class="mx-auto text-white w-25 p-2 px-4 bg-sky-500 rounded-lg text-lg transition hover:bg-sky-400 text-center ">
                    Login
                </a>
                  <p class="text-slate-400 text-center text-xl">Or</p>
                <a href="{{ route('register') }}" class="mx-auto text-white w-25 p-2 px-4 bg-sky-500 rounded-lg text-lg transition hover:bg-sky-400 text-center ">Create
                    account
                </a>
            @else
                <button class="mx-auto w-25 p-2 px-4 bg-sky-500 rounded-lg text-lg transition hover:bg-sky-400 ">Go
                    Chat
                </button>
            @endif

            <hr class="mx-auto border-slate-500 w-75">

            <button
                class="mx-auto w-25 p-2 px-4 bg-neutral-900 rounded-lg text-lg border-2 border-slate-600 transition hover:bg-neutral-800 ">
                <i class="bi bi-github mr-2"></i> Github
            </button>
        </div>

    </div>
@endsection

@section('menu')
@endsection
