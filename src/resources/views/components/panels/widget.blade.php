<aside class="panel {{ $class or "panel-component" }}">

    <div class="panel-heading">
        <h4>{{ Html::dashIcons((isset($icon)) ?  $icon : "circle-o") }} {{ $title }}</h4>
    </div>

    <div class="panel-body">

        {{ $slot }}

    </div>

</aside>
