@extends('layouts.app')

@section('content')
    <div class="showMessage">
        <div id="msgContent" class="pb-5 mb-2 mx-auto border-bottom border-light">
            <h2 class="pb-3 border-bottom border-light">Subject : {{ $thread->subject }}</h2>
            @each('messenger.partials.messages', $thread->messages, 'message')
        </div>
        <div id="replyMsg" class="mx-auto">
            @include('messenger.partials.form-message')
        </div>
    </div>
@stop
