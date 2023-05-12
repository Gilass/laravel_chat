<!-- resources/views/chat.blade.php -->
@extends('layouts.app')
@section('content')
<div>
    <chat-container :user="{{Auth::user()}}"></chat-container>
</div>
@endsection
