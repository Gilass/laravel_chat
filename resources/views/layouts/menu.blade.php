<div class="bg-slate-950 p-3 h-screen flex flex-col gap-4 border-r border-slate-700">

    <a href="/" class="w-16 h-16 border-2 border-sky-500 rounded-full flex justify-center items-center cursor-pointer
    transition hover:bg-slate-900 hover:border-sky-400">
        <i class="bi bi bi-house-fill text-3xl text-white"></i>
    </a>

    <a href="{{ route('account')}}" class="w-16 h-16 border-2 border-sky-500 rounded-full flex justify-center items-center cursor-pointer
    transition hover:bg-slate-900 hover:border-sky-400">
        <i class="bi bi-person-fill text-3xl text-white"></i>
    </a>

    <hr>
    <a href="{{ route('chat')}}" class="w-16 h-16 border-2 border-emerald-500 rounded-full flex justify-center items-center
    cursor-pointer transition hover:bg-emerald-950
      hover:bg-slate-900 hover:border-emerald-400 hover:border-solid">
        <i class="bi bi-chat-fill text-3xl text-white"></i>
    </a>

    <a href="#" class="w-16 h-16 border-2 border-emerald-500 rounded-full flex justify-center items-center border-dashed
    cursor-pointer group transition hover:bg-emerald-950
      hover:bg-slate-900 hover:border-emerald-400 hover:border-solid">
        <i class="bi bi-plus-lg text-3xl transition text-slate-600 group-hover:text-white"></i>
    </a>

    <form action="{{route('logout')}}" method="post" class="mt-auto">
        @csrf
        <button class="w-16 h-16 ring-2 ring-red-500 rounded-full flex justify-center items-center cursor-pointer
    transition hover:bg-red-950 hover:ring-red-400">
            <i class="bi bi-person-x text-3xl text-white"></i>
        </button>
    </form>

</div>
