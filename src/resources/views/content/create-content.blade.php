@extends($dashTheme."layouts.layout")
@section('title', ':package_name')
@section('content')
    <div class="container-fluid">

        <div class="row">
            <!-- Dashboard content -->
            <div class="col-md-9">

                <section>
                    <div class="row">
                        <div class="col-lg-12">
                            @component("dashelements::components.panel", ["heading" => 'h2', "title" => "New Posts"])
                                {{ Form::open( ["url" => "/bluelines/posts", "files" => true]) }}

                                @include("bluelines::partials.forms.post")

                                {{ Form::close() }}

                                {{ Html::tinymce() }}
                            @endcomponent
                        </div>
                    </div>

                </section>

            </div>

            <!--  side bar -->

            <div class="col-md-3">

                <aside class="panel">
                    @include("bluelines::components.recent-content", ["post_url" => "/admin/content/"])
                </aside>

                <aside class="panel">
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, atque commodi
                            dignissimos dolorem ea eaque earum facilis in inventore ipsum maxime minima nisi, obcaecati
                            omnis quaerat, quod rem rerum tempore.</p>
                    </div>
                </aside>


            </div>

        </div>
    </div>
@endsection
