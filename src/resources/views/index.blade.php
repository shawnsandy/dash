@extends($theme."layouts.layout")
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


                        </div>

                    </div>

                </section>

                <section>

                    <div class="row">
                        <div class="col-lg-12">

                            @component("dash::components.panels.dashboard", ["title" => "Simple Sidebar"])

                                <p>This template has a responsive menu toggling system. The menu will appear
                                    collapsed on smaller screens, and will appear non-collapsed on larger screens.
                                    When toggled using the button below, the menu will appear/disappear.
                                    On small screens, the page content will be pushed off canvas.
                                </p>
                                <p>Make sure to keep all page content within the
                                    <code>#page-content-wrapper</code>.
                                </p>
                                <hr>
                            <h3>Custom Froms</h3>
                                <?php
                                $custom_form = [
                                    "name" => ["label" => "Your Name"],
                                    "address" => ['label' => "Your Address", "type" => "textarea"],
                                    "password" => ['label' => "Password", "type" => "password"]
                                ]
                                ?>

                                {{ Form::dashCustomFields($custom_form) }}

                            @endcomponent
                        </div>
                    </div>

                </section>

            </div>

            <!--  side bar -->

            <div class="col-md-3">
                @component("dash::components.panels.widget", ["title" => "Sidebar Widget"])
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis distinctio doloremque ducimus
                        maiores recusandae! Aliquam aperiam asperiores culpa debitis distinctio dolor error eum fugiat
                        hic illo illum ipsa laborum libero magni minima minus nam, nisi numquam, ratione rerum suscipit
                        ullam ut vel! Animi aperiam aspernatur atque commodi, doloremque est ex excepturi hic, nostrum
                        odio pariatur qui similique tempore unde vero.
                    </p>
                @endcomponent
            </div>

        </div>
    </div>
@endsection
