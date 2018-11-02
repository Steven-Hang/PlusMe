@include('layouts.partials.head')

<body id="page-top">
    @include('layouts.partials.nav')
    <div id="wrapper">
        @include('layouts.partials.sidebar')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom border-dark">
                <h1 class="h1">Messages</h1>
            </div>
            @include('messenger.partials.flash')

            @each('messenger.partials.thread', $threads, 'thread', 'messenger.partials.no-threads')

        </main>

    </div>
    <!-- /#wrapper -->

    </body>

</html>
