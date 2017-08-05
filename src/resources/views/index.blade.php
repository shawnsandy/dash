@extends("dash::layouts.layout")
@section('title', '')
@section('content')
    <div class="container-fluid">

        <div class="row">
            <!-- Dashboard content -->
            <div class="col-md-9">

                <section class="widgets">
                    <div class="row">

                        <div class="col-md-4">
                            @component("dash::components.panels.info", ["title" => "Env Settings"])
                                <h3>0 Articles</h3>
                            @endcomponent
                        </div>

                        <div class="col-md-4">
                            @component("dash::components.panels.info", ["title" => "Env Settings"])
                                <h3>{{ count(Dash::getEnv()) }} ENV Variables</h3>
                            @endcomponent
                        </div>

                        <div class="col-md-4">
                            @component("dash::components.panels.info", ["title" => "System Logs"])
                                <h3>{{ count(Dash::getLogs()) }} Errors Logged</h3>
                            @endcomponent
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <aside class="panel">
                                <h3>{{ Html::dashIcons( "file-text") }} <span class="small">Recent Posts</span></h3>

                                @include("bluelines::components.recent-content", ["post_url" => "/admin/content/"])
                            </aside>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-12">

                            @php
                                $data = \App\User::all()
                            @endphp

                            <div class="main-panel">
                                @component("extras::components.panel")
                                    @slot("icon")
                                        users
                                    @endslot

                                @slot("title")
                                    Users
                                @endslot

                                    @include("dashelements::elements.data-table", ['data' => $data, "action_url" => "admin/users/" ])
                                @endcomponent
                            </div>

                        </div>

                    </div>

                </section>

            </div>

            <!--  side bar -->

            <div class="col-md-3">
                @component("extras::components.panel")
                    <hr>
                    <p>
                        hic illo illum ipsa laborum libero magni minima minus nam, nisi numquam, ratione rerum suscipit
                        ullam ut vel! Animi aperiam aspernatur atque commodi, doloremque est ex excepturi hic, nostrum
                        odio pariatur qui similique tempore unde vero.
                    </p>
                @endcomponent
            </div>

        </div>
    </div>
@endsection
