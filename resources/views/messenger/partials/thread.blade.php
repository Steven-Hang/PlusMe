<?php $class = $thread->isUnread(Auth::id()) ? 'alert-info' : ''; ?>

<div class="media alert {{ $class }}">
    <h4 class="media-heading">
        <a href="{{ route('messages.show', $thread->id) }}">{{ $thread->subject }}</a>
        ({{ $thread->userUnreadMessagesCount(Auth::id()) }} unread)</h4>
    <p>
        {{ $thread->latestMessage->body }}
    </p>
    <p>
        <small><strong>Creator:</strong> {{ $thread->creator()->first_name }}</small>
    </p>
    <p>
        <small><strong>Participants:</strong> {{ $thread->participantsString(Auth::id(),['first_name', 'last_name']) }}</small>
    </p>
</div>