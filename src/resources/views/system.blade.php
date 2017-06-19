@extends($dashTheme."layouts.layout")
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
                            <table class="table">
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
                @component("dash::components.panels.info", ["title" => "Powered By" ])
                    <h4>{{ Html::dashIcons("") }} Laravel {{ App::VERSION() }}</h4>
                @endcomponent
            </div>

        </div>
    </div>

@endsection
