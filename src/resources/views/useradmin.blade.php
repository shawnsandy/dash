@extends("dash::layouts.layout")
@section('title', ':package_name')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Dashboard content -->
            <div class="col-md-9">
                <section class="widgets">
                    <div class="col-md-12">
                        <div class="row">
                            @component("dash::components.panels.dashboard", ['title' => "User Admin"])
                                {{ Html::dataTable($users, ["id", "name", "email", "created_at"],  ['page_length' => 15, 'order' => "desc", "edit_url" => '/admin/users/'], ['class' => 'data-table'] ) }}
                            @endcomponent
                        </div>
                    </div>
                </section>

                <section>

                    <div class="row">
                        <div class="col-lg-12">
                            <aside>
                                @component("dash::components.panels.dashboard")
                                    <p>This template has a responsive menu toggling system. The menu will appear
                                        collapsed on smaller screens, and will appear non-collapsed on larger screens.
                                        When toggled using the button below, the menu will appear/disappear.
                                        On small screens, the page content will be pushed off canvas.
                                    </p>
                                    <p>Make sure to keep all page content within the
                                        <code>#page-content-wrapper</code>.
                                    </p>
                                @endcomponent
                            </aside>
                        </div>
                    </div>
                </section>
            </div>

            <!--  side bar -->

            <div class="col-md-3">

                @component("dash::components.panels.info", ["title" => "Users"])
                   <h3>{{ count($users) }} Registered Users</h3>
                @endcomponent

                @component("dash::components.panels.widget", ["title" => "Add New User(s)"])

                        {{ config(["dash.forms.users.field_types.password" => "text"]) }}
                        {{ Form::createForm('App\User', "admin/users") }}

                @endcomponent

            </div>
        </div>
    </div>
@endsection
