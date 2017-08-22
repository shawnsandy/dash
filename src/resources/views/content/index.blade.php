@extends($dashTheme."layouts.layout")
@section('title', 'Content admin')
@section('content')
    <div class="container-fluid">

        <div class="row">
            <!-- Dashboard content -->
            <div class="col-md-9">

                <section class="widgets">

                    <div class="row">

                        <div class="col-md-12">

                            @component("extras::components.panel", ["heading" => 'h2'])

                                @slot("title")
                                    Manage Post
                                @endslot
                                <hr>
                                <a href="/admin/content/create" class="btn btn-primary btn-sm">New Post</a>
                                <hr>

                                @include("extras::elements.data-table", ["data" => $content])

                            @endcomponent

                        </div>

                    </div>

                </section>

            </div>

            <!--  side bar -->

            <div class="col-md-3">
                <aside class="panel widget-forms">
                    @include("bluelines::components.post-categories")
                </aside>

                <aside class="panel widget-forms">
                    @include("bluelines::components.post-tags")
                </aside>


            </div>

        </div>
    </div>
@endsection
@push('styles')
<style>
    .hide-element {
        display: none;
    }

    .validate-error {
        border-color: red;
        color: red;
    }
    td {
        font-size: 14px;
    }
</style>

@endpush
@push("scripts")
<script src="/assets/bluelines/js/blue.js"></script>
@endpush
