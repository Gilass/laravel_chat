<!-- resources/views/chat.blade.php -->
@extends('layouts.app')
@section('content')
<div>
    <chat-container :user="{{Auth::user()}}"></chat-container>
</div>
@endsection
<script>
    import ChatContainer from "@/components/ChatContainer.vue";
    export default {
        components: {ChatContainer}
    }
</script>
