<aside class="panel {{ str_slug($title) }} {{ $attributes['class'] or "" }}">
    <div class="panel-body">
        <p class="h5 text-uppercase">{{ Html::dashIcons() }}  {{ $title }}</p>
        <!-- data -->
            @foreach($data as $key => $item)
            <p class="h3"> <span class="collection-key collection-key-{{ $key }}">{{ $key }}</span>  {{ $item }} </p>
            @endforeach
        <!-- end -->
    </div>
</aside>
