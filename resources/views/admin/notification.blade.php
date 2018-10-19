@include('layouts.partials.head')

<body id="page-top">
    @include('layouts.partials.nav')
    <div id="wrapper">
        @include('layouts.partials.adminsidebar')
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom border-dark">
                <h1 class="h1">Notifications</h1>
                <a href="{{ route('messages.create') }}"><button class="btn btn-warning" style="padding-left:15px;padding-right:15px;">Compose</button></a>
            </div>
            <div class="my-3 p-3 bg-white rounded box-shadow" style="opacity:0.98;text-align: justify;">
                <h6 class="border-bottom border-gray pb-2 mb-0">All notifications</h6>
                <div class="media text-muted pt-3">
                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">@Admin01 To All</strong>
                    Welcome, jlhsdakjdas hlljas hldas hjasdhkjlfd.
                    </p>
                </div>
                <div class="media text-muted pt-3">
                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">@Admin01 To All</strong>
                    Welcome hljahsd ljha Hkjlasd.
                    </p>
                </div>
                <div class="media text-muted pt-3">
                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">@Admin01 To All</strong>
                        Plus Me car share is jalksjd Jklasd jklsds
                    </p>
                </div>
                <div class="media text-muted pt-3">
                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">@Admin01 To All</strong>
                        Plus Me car share is jalksjd Jklasd jklsds
                    </p>
                </div>
                <div class="media text-muted pt-3">
                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">@Admin01 To All</strong>
                        Plus Me car share is jalksjd Jklasd jklsds
                    </p>
                </div>
                <div class="media text-muted pt-3">
                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">@Admin01 To All</strong>
                        Plus Me car share is jalksjd Jklasd jklsds
                    </p>
                </div>
                <div class="media text-muted pt-3">
                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">@Admin01 To All</strong>
                        Plus Me car share is jalksjd Jklasd jklsds
                    </p>
                </div>
            </div>
        </main>

    </div>
    <!-- /#wrapper -->

    </body>

    </html>
