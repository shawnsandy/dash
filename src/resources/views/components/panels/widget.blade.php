<aside class="panel {{ $class or "panel-component" }} widget">

    <div class="panel-body">
        <h4>{{ Html::dashIcons((isset($icon)) ?  $icon : "circle-o") }} {{ $title }}</h4>
        <hr>
        {{ $slot }}
    </div>

</aside>
