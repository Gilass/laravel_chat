@extends('layouts.base')
@section('content')
    <div>
        <h1 class="text-center text-5xl mb-5">My Account</h1>


        <div class="w-full p-4 bg-slate-800 border-2 border-slate-700 rounded-xl">
            <form action="{{route('account.patch')}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="flex flex-col gap-4">
                    <div class="flex gap-5 items-center">
                        <img id="previewAvatar" src="{{ asset('storage/' . $user->avatar) }}" alt="Avatar"
                             class="h-24 w-24 rounded-full border-2 border-slate-700 object-fill">
                        <label for="user_avatar" class="w-44 p-2 px-4 bg-sky-500 rounded-lg text-lg cursor-pointer text-center
                        transition hover:bg-sky-400 ">
                            Select Image
                        </label>
                        <input id="user_avatar" type="file" name="avatar" class="hidden">
                    </div>

                    <div>
                        <p class="text-lg text-slate-300">Username :</p>
                        <input class="input-primary px-4 w-full text-white bg-slate-600 text-lg" value="{{$user->name}}"
                               disabled>
                    </div>

                    <div>
                        <p class="text-lg text-slate-300">Email :</p>
                        <input class="input-primary px-4 w-full text-white bg-slate-600 text-lg"
                               value="{{$user->email}}" disabled>
                    </div>


                    <button type="submit"
                            class="mx-auto w-44 p-2 px-4 bg-sky-500 rounded-lg text-lg transition hover:bg-sky-400">
                        Save
                    </button>
                </div>
            </form>
        </div>


    </div>
@endsection

@section('menu')
    @include('layouts.menu')
@endsection
