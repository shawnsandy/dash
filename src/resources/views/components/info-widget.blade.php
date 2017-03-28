<aside class="panel {{ str_slug($title) }} {{ $attributes['class'] or "" }}">
    <div class="panel-body">
        <p class="h4 text-uppercase"><i class="fa {{ $attributes['icon'] or 'fa-circle-o' }}"></i> {{ $title or "" }}</p>
        <hr>
        <!-- data -->
        @foreach($data as $key => $item)
            <p class="lead">{{ $key }}</p>
            <p class="">{{ $item }} </p>
        @endforeach
        <!-- end -->
    </div>
</aside>
