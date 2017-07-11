@extends($dashTheme."layouts.layout")
@section('title', 'Content admin')
@section('content')
    <div class="container-fluid">

        <div class="row">
            <!-- Dashboard content -->
            <div class="col-md-9">

                <section class="widgets">

                    <div class="row">

                        <div class="col-md-12">

                            @component("dashelements::components.panel", ["heading" => 'h2'])
                                @slot("title")
                                    Manage Post <a href="/admin/content/create" class="btn btn-primary btn-sm">New Post</a>
                                @endslot

                                @include("dashelements::elements.data-table", ["data" => $content])

                            @endcomponent

                        </div>

                    </div>

                </section>

                <section>

                    <div class="row">
                        <div class="col-lg-12">

                            <aside class="panel">
                                <div class="panel-body">
                                    <h3>Simple Sidebar</h3>
                                    <hr>
                                    <p>This template has a responsive menu toggling system. The menu will appear
                                        collapsed on smaller screens, and will appear non-collapsed on larger screens.
                                        When toggled using the button below, the menu will appear/disappear.
                                        On small screens, the page content will be pushed off canvas.
                                    </p>
                                    <p>Make sure to keep all page content within the
                                        <code>#page-content-wrapper</code>.
                                    </p>
                                </div>
                            </aside>
                        </div>
                    </div>

                </section>

            </div>

            <!--  side bar -->

            <div class="col-md-3">
                <aside class="panel">
                    <div class="panel-heading">
                        <p class="lead">Sidebar...</p>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                </aside>

                <aside class="panel">
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, atque commodi
                            dignissimos dolorem ea eaque earum facilis in inventore ipsum maxime minima nisi, obcaecati
                            omnis quaerat, quod rem rerum tempore.</p>
                    </div>
                </aside>


            </div>

        </div>
    </div>
@endsection
