<?php $class = $thread->isUnread(Auth::id()) ? 'alert-info' : ''; ?>
<a href="{{ route('messages.show', $thread->id) }}" id="thread">
        <div class="media alert {{ $class }} pt-4 pb-3 border-bottom border-top border-grey">
            <div class="container-fluid row">
                <div class="col-md-2">
                    {{ $thread->userUnreadMessagesCount(Auth::id()) }} unread
                </div>
                <div class="col-md-2">
                    <h5 class="media-heading">{{ $thread->subject }}</h5>
                </div>
                <div class="col-md-3">
                    {{ $thread->latestMessage->body }}
                </div>
                <div class="col-md-2">
                    <small><strong>Creator:</strong> {{ $thread->creator()->first_name }}</small>
                </div>
                <div class="col-md-3">
                    <small><strong>Participants:</strong> {{ $thread->participantsString(Auth::id(),['first_name', 'last_name']) }}</small>
                </div>
            </div>

        </div>
    </a>
