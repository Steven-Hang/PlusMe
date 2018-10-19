<p>Add a reply</p>
<form action="{{ route('messages.update', $thread->id) }}" method="post">
    {{ method_field('put') }}
    {{ csrf_field() }}

    <!-- Message Form Input -->
    <div class="wrap-message">
        <textarea name="message" class="message py-2">{{ old('message') }}</textarea>
    </div>

    <!-- Submit Form Input -->
    <div class="container-createmsg-form-btn">
        <button class="createmsg-form-btn mt-3">
            Send
        </button>
    </div>

</form>
