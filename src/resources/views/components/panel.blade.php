<aside class="panel {{ str_slug($title) }} {{ $attributes['class'] or "" }}">
    <div class="panel-body">
        <p class="{{ $heading_class or "h2"}} text-uppercase">
            <i class="fa {{ $attributes['icon'] or 'fa-circle-o' }}"></i> {{ $title or "Panel" }}
        </p>
        <hr>
        <ul>

            @foreach($data as $key => $item)
                <li class="list-group-item {{ $key }}">{{ $item }}</li>
            @endforeach

        </ul>
    </div>
</aside>
