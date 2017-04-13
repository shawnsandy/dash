@extends("dash::layouts.layout")
@section('title', ':package_name')
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
                                <h3>{{ count(Dash::getLogs()) }} Items Logged</h3>
                            @endcomponent
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-12">


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

                {{ Html::dashInfoWidget( ["Information" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, tempore."], 'System Errors') }}


            </div>

        </div>
    </div>
@endsection
