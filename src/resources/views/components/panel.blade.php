<aside class="panel {{ str_slug($title) }} {{ $attributes['class'] or "" }}">
    <div class="panel-body">
        <p class="{{ $heading or "h2"}} text-uppercase"><i class="fa {{ $attributes['icon'] or 'fa-circle-o' }}"></i> {{ $title or "" }}
        </p>
        <hr>
        <ul>
            <!-- data -->
            @foreach($data as $key => $item)
                <li class="list-group-item {{ $key }}">{{ $item }}</li>
            @endforeach
            <!-- end -->
        </ul>

    </div>
</aside>
