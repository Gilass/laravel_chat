@extends('layouts.base')

@section('content')
<div class="container">
    <div class="flex flex-wrap gap-5 justify-center">

        @include('auth.form.register')

    </div>
</div>
@endsection
