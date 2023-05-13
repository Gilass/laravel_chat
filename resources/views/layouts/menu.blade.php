<div class="bg-slate-950 p-3 h-screen flex flex-col gap-4 border-r border-slate-700">

    <a href="/" class="w-16 h-16 ring-2 ring-sky-500 rounded-full flex justify-center items-center cursor-pointer
    transition hover:bg-slate-900 hover:ring-sky-400">
        <i class="bi bi bi-house-fill text-3xl text-white"></i>
    </a>

    <div class="w-16 h-16 ring-2 ring-sky-500 rounded-full flex justify-center items-center cursor-pointer
    transition hover:bg-slate-900 hover:ring-sky-400">
        <i class="bi bi-person-fill text-3xl text-white"></i>
    </div>

    <form action="{{route('logout')}}" method="post" class="mt-auto">
        @csrf
        <button class="w-16 h-16 ring-2 ring-red-500 rounded-full flex justify-center items-center cursor-pointer
    transition hover:bg-red-950 hover:ring-red-400">
            <i class="bi bi-person-x text-3xl text-white"></i>
        </button>
    </form>

</div>
