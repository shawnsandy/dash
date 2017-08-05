<aside class="panel info">
    <div class="panel-body">
        <p class="h5">
        {{ Html::dashIcons((isset($icon)) ?  $icon : "circle-o") }} <span class="small">{{ $title or "..." }}</span></p>
        <hr>
         {{ $slot }}
    </div>
</aside>
