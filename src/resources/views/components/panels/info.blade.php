<aside class="panel info">
    <div class="panel-body">
        <p class="h5 text-uppercase">
        {{ Html::dashIcons((isset($icon)) ?  $icon : "circle-o") }} {{ $title or "..." }}</p>
        <hr>
         {{ $slot }}
    </div>
</aside>
