@extends($dashTheme."layouts.layout")
@section('title', 'Edit Post')
@section('content')
    <div class="container-fluid">



        <div class="row">
            <!-- Dashboard content -->
            <div class="col-md-9">

                <section>
                    <div class="row">
                        <div class="col-lg-12">
                            @component("dashelements::components.panel", ["heading" => 'h2'])
                                @slot("title")
                                    Editing <small>({{ $content->title }})</small>
                                @endslot
                                {{ Form::model($content, ["url" => "/bluelines/posts/$content->id", "method" => "put", "files" => true]) }}

                                @include("bluelines::partials.forms.post")

                                {{ Form::close() }}

                                {{ Html::ckeditor() }}
                            @endcomponent

                        </div>
                    </div>

                </section>

            </div>

            <!--  side bar -->

            <div class="col-md-3">

                @component("dashelements::components.panel", ["title" => "Preview", "heading" => "h4"])

                    <p><img src="<?= $content->post_thumbnail ?>?w=400" class="img-responsive"></p>
                    <p>
                        <?= $content->excerpt ?>
                    </p>

                @endcomponent

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
