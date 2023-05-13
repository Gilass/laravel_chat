@extends('layouts.base')
@section('content')
   <div>
       <h1 class="text-center text-5xl mb-5">My Account</h1>


           <div class="w-full p-4 bg-slate-800 border-2 border-slate-700 rounded-xl">
               <div class="flex flex-col gap-4">

                   <div>
                       <p class="text-lg text-slate-300">Username :</p>
                       <input class="input-primary px-4 w-full text-white bg-slate-600 text-lg" value="{{$user->name}}" disabled>
                   </div>

                   <div>
                       <p class="text-lg text-slate-300">Email :</p>
                       <input class="input-primary px-4 w-full text-white bg-slate-600 text-lg" value="{{$user->email}}" disabled>
                   </div>

               </div>
           </div>






   </div>
@endsection

@section('menu')
    @include('layouts.menu')
@endsection
