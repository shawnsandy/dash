@extends("dash::layouts.layout")
@section('title', ':package_name')
@section('content')
    <div class="container-fluid">

        <div class="row">
            <!-- Dashboard content -->
            <div class="col-md-9">
                <section>
                    <div class="panel">
                        <div class="panel-body">
                            <h2>{{ Html::dashIcons() }} .ENV Variables <span class="badge"> {{ count(Dash::getEnv()) }} </span></h2>
                            <table class="table table-striped">
                                @foreach(collect(Dash::getEnv()) as $env => $setting)
                                    <tr class="">
                                        <td class="col-md-3">
                                            <strong class="">
                                                {{ Html::dashIcons("angle-right") }} {{ str_replace("_", " ", $env )}}
                                            </strong>
                                        </td>
                                        <td class="col-md-9">
                                            {{ $setting }}
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </section>
            </div>

            <!--  side bar -->

            <div class="col-md-3">
                <aside class="panel">
                    <div class="panel-heading">
                        <p class="lead">Sidebar...</p>
                        {{ App::VERSION() }}
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                </aside>

            </div>

        </div>
    </div>

@endsection
