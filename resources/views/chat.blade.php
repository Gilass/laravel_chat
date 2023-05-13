<!-- resources/views/chat.blade.php -->
@extends('layouts.base')
@section('content')
<div id="app" class="h-full">
    <chat-container :user="{{Auth::user()}}"></chat-container>
</div>
@endsection
