<aside class="panel {{ str_slug($title) }} {{ $attributes['class'] or "" }}">
    <div class="panel-body">
     <!-- data -->
     @foreach($data as $key => $item)
            <p class="">
                <span class="collection-key collection-key-{{ $key }}">{{ $key }}</span> {{ $item }}
            </p>
    @endforeach
    <!-- end -->
    </div>
</aside>
