<?php $class = $thread->isUnread(Auth::id()) ? 'alert-info' : ''; ?>
<div class="media alert {{ $class }} pt-4 pb-3">
    <div class="card text-justify">
        <div class="card-header">
            <strong>Subject: </strong> {{ $thread->subject }} -- {{ $thread->userUnreadMessagesCount(Auth::id()) }} unread
        </div>
        <div class="card-body">
            <p class="card-text"><strong>Creator:</strong> {{ $thread->creator()->first_name }}</p>
            <p class="card-text"><strong>Participants:</strong> {{ $thread->participantsString(Auth::id(),['first_name', 'last_name']) }}</p>
            <p class="card-text"><strong>Message:</strong> {{ $thread->latestMessage->body }}</</p>
            <a href="{{ route('messages.show', $thread->id) }}" class="login-form-btn mt-2" style="color: white;">Add a reply</a>
        </div>
    </div>
</div>
