@extends($dashTheme."layouts.layout")
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
                            @component("dashelements::components.panel", ["title" => "Manage Roles and Privileges", "heading_class" => "h4"])

                              @include("dashauth::partials.privileges", [
                              'abilities' => config("dashauth.abilities"),
                              'roles' => config("dashauth.roles")
                              ])

                            @endcomponent
                        </div>
                    </div>
                </section>
            </div>

            <!--  side bar -->

            <div class="col-md-3">

                @component("dash::components.panels.info", ["title" => "Users"])
                    {!! Html::entypoFont("compass") !!}
                   <h3>{{ count($users) }} Registered Users</h3>
                @endcomponent

                @component("dash::components.panels.widget", ["title" => "Add New User(s)"])
                        {{ Form::createForm('App\User', "admin/users") }}
                @endcomponent

            </div>
        </div>
    </div>
@endsection


