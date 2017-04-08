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
                            <div class="panel">
                                <div class="panel-body">
                                    <h3>{{ Html::dashIcons() }} User Admin</h3>
                                    <hr>
                                    {{ Html::dataTable($users, // users data
                                    ["id", "name", "email", "created_at"], // columns (title)
                                    ['page_length' => 15, 'order' => "desc", "edit_url" => '/admin/users/'], // options
                                    ['class' => 'data-table'] // element attributes
                                    )
                                    }}
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section>

                    <div class="row">
                        <div class="col-lg-12">

                            <aside class="panel">
                                <div class="panel-body">
                                    <h3>{{ Html::dashIcons() }} Simple Sidebar</h3>
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

                <div class="">
                    {{ Html::dashWidget( [count($users) => "Registered Users"], 'Users') }}
                </div>

                <aside class="panel">

                    <div class="panel-heading">
                        <h4>{{ Html::dashIcons() }} Add New User</h4>
                        <hr>
                    </div>

                    <div class="panel-body">

                        {{ config(["dash.forms.users.field_types.password" => "text"]) }}

                        {{ Form::createForm('App\User', "admin/users") }}

                    </div>

                </aside>

            </div>
        </div>
    </div>
@endsection
