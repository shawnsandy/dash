@extends("dash::layouts.layout")
@section('title', ':package_name')
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
                    <h4>{{ Html::dashIcons() }}Sidebar Title</h4>
                    <hr>
                </div>
            </div>
        </div>
    </div>

@endsection

