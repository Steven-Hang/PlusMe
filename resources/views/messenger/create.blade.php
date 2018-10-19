@include('layouts.partials.head')

<body id="page-top">
    @include('layouts.partials.nav')
    <div id="wrapper">
        @include('layouts.partials.adminsidebar')
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom border-dark">
                <h1 class="h1">Create a new notification</h1>
            </div>
            <div class="wrap-createmsg mx-auto">
                <form action="{{ route('messages.store') }}" method="post" class="createmsg-form validate-form flex-sb flex-w mt-4 text-center">

                    {{ csrf_field() }}

                    <!-- Subject Form Input -->
                    <div class="message-label pb-3 ">
                            Subject
                    </div>
                    <div class="wrap-message">
                        <input class="message" type="text" name="subject" placeholder="Subject" value="{{ old('subject') }}" >
                        <span class="focus-message"></span>
                    </div>
                    <br>
                    <!-- Message Form Input -->
                    <div class="message-label pb-3 ">
                        Message
                    </div>
                    <div class="wrap-message">
                        <textarea name="message"  class="message" height="400px">{{ old('message') }}</textarea>
                        <span class="focus-message"></span>
                    </div>

                    <!-- Submit Form Input -->
                    <div class="container-createmsg-form-btn">
                        <button class="createmsg-form-btn mt-3">
                            Send
                        </button>
                    </div>

                </form>
            </div>

    </main>

</div>
<!-- /#wrapper -->

</body>

</html>
