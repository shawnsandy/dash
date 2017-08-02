@extends($dashTheme."layouts.layout")
@section('title', 'Dash User Admin')
@section('content')

    <div class="container-fluid">

        <div class="col-md-9">
            <div class="panel">
                <div class="panel-body">
                    {{ Html::dashCollectionPage($user, 'name', ["delete_url" => "/admin/users"]) }}
                </div>
            </div>
        </div>

        <div class="col-md-3">

            <div class="panel">
                <div class="panel-body">
                    <h4>{{ Html::dashIcons() }} Manage User Roles</h4>

                    @include("dashauth::partials.roles")
                    <hr>
                    <h4>{{ Html::dashIcons() }} Manage Permissions</h4>

                </div>
            </div>

        </div>

    </div>

@endsection

